<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $featuredItems = Thesis::groupBy('type')->orderBy('created_at', 'desc')->get();

        $items = [];
        foreach($featuredItems as $featuredItem) {
            $items[] = [
                'category' => config('categories')[$featuredItem->type],
            ];
        }

        return $items;
    }

    public function getAnnouncements()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->take(5)->get();

        return $announcements;
    }
}
