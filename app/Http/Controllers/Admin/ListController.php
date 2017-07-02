<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
use Excel;
use Redirect;
use App\Models\Thesis;
use Illuminate\Support\Facades\Input;


class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'lists' => Thesis::get()
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
            'title', 'description', 'year published', 'category', 'tags', 'author', 'course'
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
                        'published_at' => $value->year_published,
                        'type' => $value->category,
                        'tags' => $value->tags,
                    ];
                }
                if (!empty($insert)) {
                    \DB::table('thesis')->insert($insert);
                    return Redirect::back()->with(['msg', 'The Message']);
                }
            }
        }

        return back();
    }
}
