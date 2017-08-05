<?php

namespace App\Http\Controllers;

use Validator;
use Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Input;
use App\Models\Thesis;
use App\User;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function getThesisByCategory(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('home');
        }

        $thesis = Thesis::where([
            'category' => config('categories')[$request->id]
        ])
        ->latest()
        ->get();

        $lists = [];
        foreach ($thesis as $list) {
            $lists[] = [
                'title' => title_case($list->title),
                'description' => ucfirst($list->description),
                'image' => $list->image,
                'tags' => $list->tags,
                'published_at' => $list->published_at,
            ];
        }

        $data = [
            'allThesis' => $lists,
            'category' => str_plural(config('categories')[$request->id]),
        ];

        return view('thesis', $data);
    }

    public function login()
    {
        $data = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];

        $validator = Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();
            foreach ($messages->all() as $message) {
                Log::error($message);
            }

            return response()->json([
                'success' => false,
                'messages' => $messages,
            ]);
        }

        if (Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password'],
                'is_student' => 1,
            ])
        ) {
            $student = User::where(['email' => $data['email']])->first();

            Auth::loginUsingId($student->id, true);

            return response()->json([
                'success' => true
            ]);
        }



       // Auth::attempt();
    }

    public function register()
    {
        $data = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'student_id' => Input::get('id'),
            'password' => Input::get('password'),
            'confirm_password' => Input::get('confirm_password'),
        ];

        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'student_id' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();
            foreach ($messages->all() as $message) {
                Log::error($message);
            }

            return response()->json([
                'success' => false,
                'messages' => $messages,
            ]);
        }

        $data['is_student'] = 1;
        $data['password'] = bcrypt($data['password']);

        $created = User::create($data);
        if ($created) {

            Auth::loginUsingId($created->id, true);

            return response()->json([
                'success' => true
            ]);
        }
    }
}
