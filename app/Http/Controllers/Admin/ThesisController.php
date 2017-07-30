<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PictureUploadRequest;
use App\Models\Thesis;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;


class ThesisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        /*
            $lists = Thesis::all();
            $lists2 = Thesis::with('images')->get();
            $lists3 = Thesis::whereHas('images', function ($query) {
                            $query->where('default_img', true);
                        })->get();
            $lists4 = Thesis::find(10)->images;

            //$lists3 = Thesis::with('images')->where('images.default_img', true)->get();
            $lists3 = Thesis::find(10)->images()->where('default_img', true);
            $lists3 = Thesis::all()->images()->where('default_img', true);

            $image = Thesis::find(5);

            //$lists = Thesis::with('pictures')->where('default_pic',true)->get();
            //$lists = Thesis::with('pictures')->where('pictures.default_pic',true)->get();
             //$lists = Thesis::with('image')->get();
            $pics = [];
            foreach ($lists as $list) {
                $pics[] = $list->image;
            }

            //$pics = $lists->image();

            var_dump($lists-relations);
            exit;

 //           ->where('images.default_img', true)
*/

        $lists = DB::table('thesis')->get();

        /*
        $lists = Thesis::select('thesis.id', 'title', 'description', 'category', 'tags', 'published_at', 'filename')
            ->leftJoin('images', 'thesis.id', '=', 'images.thesis_id')
            ->get();
        */

        $data = [
            'lists' => $lists
        ];

        return view('admin.thesis.list', $data);
    }

    public function create()
    {
        $data = [
            'categories' => config('categories'),
        ];

        return view('admin.thesis.create', $data);
    }

    public function save(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:thesis|max:255',
            'description' => 'required',
            'published_at' => 'required',
            'category' => 'required',
            'tags' => 'required|max:255',
            'image' => 'image|mimes:jpeg,jpg,bmp,png|max:2000'
        ]);

        if ($validator->fails()) {
            return Redirect::back()
            ->withErrors($validator)
            ->withInput();
        }

        $image = $request->file('upload_pic');

        $input = $request->except('_token');
        $id = Thesis::create($input)->id;

        if (Input::hasFile('upload_img')) {
            $filename = $image->store('pictures');

            Image::create([
                'thesis_id' => $id,
                'filename' => $filename
            ]);
        }

        return redirect('admin/thesis/create');
    }

    public function update()
    {
        $data = [
            'categories' => config('categories'),
        ];

        return 'update thesis';
    }

    public function downloadSampleFile($type)
    {
        // headers
        $contents = [
            'title', 'description', 'year published', 'category', 'tags', 'author', 'course', 'image'
        ];

        return Excel::create('Sample Thesis Excel', function($excel) use ($contents) {
            $excel->sheet('mySheet', function($sheet) use ($contents)
            {
                $sheet->fromArray($contents);
            });
        })->download($type);
    }


    public function bulkUpload()
    {
        if (Input::hasFile('import_file')) {
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {})->get();

            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    $insert[] = [
                        'title' => $value->title,
                        'description' => $value->description,
                        'category' => $value->category,
                        'tags' => $value->tags,
                        'published_at' => $value->year_published,
                        'image' => '',
                    ];
                }
                if (!empty($insert)) {
                    Thesis::insert($insert);
                    return Redirect::back()->with(['msg', 'The Message']);
                }
            }
        }

        return back();
    }

    public function imageUpload(Request $request)
    {
/*
        $inputs = $request->all();

        $filenames = [];
        $ctr = 1;
        foreach ($request->upload_pics as $pic) {
            $origname = $pic->getClientOriginalName();
            $filenames["filename$ctr"] = $origname;
            $ctr++;
        }

        $inputs = array_merge($inputs, $filenames);

        $allRules = $filenames;
        array_walk($allRules, function (&$val, $ndx) { $val = ['regex:/^\d+-\w+/']; });
        $allRules['upload_pics.*'] = ['mimes:jpeg,jpg,bmp,png|max:2000'];

        $validator = Validator::make($inputs, $allRules);

        if ($validator->fails()) {
            return redirect('admin/thesis')
            ->withErrors($validator);
        }
*/
        if (Input::hasFile('upload_imgs')) {
            foreach ($request->upload_imgs as $image) {
                $filename = $image->store('pictures');
                //$filename = $image->store('pictures', 'uploads');
                $origname = $image->getClientOriginalName();

                // (thesis id)-(thesis description)
                preg_match('/(\d+)-(\w+)/',$origname,$matches);

                if ($matches) {
                    $thesis = Thesis::find($matches[1]);

                    if ($thesis) {
                        $thesis->image = $filename;
                        $thesis->save();
                    }
                }
            }
        }

        return back();
    }
}
