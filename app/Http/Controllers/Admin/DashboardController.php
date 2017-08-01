<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Thesis;

class DashboardController extends Controller
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
        $data = [
            'countWebApp' => Thesis::where(['type' => 'Web App'])->count(),
            'countMobileApp' => Thesis::where(['type' => 'Mobile App'])->count(),
            'countRobotics' => Thesis::where(['type' => 'Robotics'])->count(),
            'totalCount' => Thesis::get()->count(),

            'recentlyAdded' => Thesis::orderBy('created_at', 'DESC')->get()->take(10)
        ];

        return view('admin.dashboard', $data);
    }
}
