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
        return array_values(config('categories'));

        //$featuredItems = Thesis::groupBy('thesis.category')->orderBy('created_at', 'desc')->get();
        $featuredItems = Thesis::select('id', 'category')->groupBy('thesis.category')->orderBy('created_at', 'desc')->get();
        /*
        $featuredItems = DB::table('thesis')
            ->groupBy('thesis.category')
            ->orderBy('created_at', 'desc')->get();
        */
        $items = [];
        foreach($featuredItems as $featuredItem) {
            $items[] = [
                'category' => config('categories')[$featuredItem->category],
            ];
        }

        return $items;
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
