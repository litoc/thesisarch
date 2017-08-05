<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Thesis;
use App\Models\Announcement;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'featuredItems' => $this->getFeaturedItems(),
            'announcements' => $this->getAnnouncements(),
        ];

        return view('welcome', $data);
    }

    public function getFeaturedItems()
    {
        $categories = array_values(config('categories'));
        $data = [];
        foreach ($categories as $k => $category) {

            switch ($category) {
                case 'Web Application':
                    $image = asset('img/web-app-default.png');
                    break;
                case 'Mobile Application':
                    $image = asset('img/mob-app-default.png');
                    break;
                case 'Robotics':
                    $image = asset('img/robotics-default.png');
                    break;
                default:
                    $image = asset('img/no-image-available.jpg');
                    break;
            }

            $data[] = [
                'id' => $k+1,
                'name' => $category,
                'image' => $image,
            ];
        }

        return $data;
    }

    public function getAnnouncements()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->where('active',true)->take(5)->get();

        return $announcements;
    }

    public function showPrivacy()
    {
        return view('privacy');
    }

    public function showTerms()
    {
        return view('terms');
    }
}
