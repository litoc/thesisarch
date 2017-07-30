<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Announcement;
use Illuminate\Pagination\LengthAwarePaginator;

class AnnouncementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->paginate(15);

        $data = [
            'announcements' => $announcements,
        ];

        return view('admin.announcement.list', $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.announcement.create');
    }

    public function save()
    {
        $data = [
            'subject' => Input::get('subject'),
            'description' => Input::get('description'),
        ];

        $validator = Validator::make($data, [
            'subject' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();
            foreach ($messages->all() as $message) {
                Log::error($message);
            }

            return back()->withErrors($validator);
        }

        $created = Announcement::create($data);
        if ($created) {
            return back()->with('success', 'successfully created.');
        }

    }

    public function update(Request $request)
    {
        $data['announcement'] = Announcement::find($request->id);

        return view('admin.announcement.modify', $data);
    }

    public function saveUpdate(Request $request)
    {
        $data = [
            'subject' => $request->subject,
            'description' => $request->description,
        ];

        $validator = Validator::make($data, [
            'subject' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();
            foreach ($messages->all() as $message) {
                Log::error($message);
            }

            return back()->withErrors($validator);
        }

        $updated = Announcement::where(['id' => $request->id])->update($data);
        if ($updated) {
            return back()->with('success', 'successfully updated.');
        }
    }

    public function delete(Request $request)
    {
        $announcement = Announcement::find($request->id);

        $deleted = $announcement->delete();

        if ($deleted) {
            return back()->with('success', 'successfully deleted.');
        }
    }
}
