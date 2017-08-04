<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Thesis;
use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public $currentUserId;

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
        $this->currentUserId = Auth::id();
        $lastLoggedIn = User::find($this->currentUserId)->last_logged_in_at;

        $data = [
            'countWebApp' => Thesis::where(['type' => 'Web App'])->count(),
            'countMobileApp' => Thesis::where(['type' => 'Mobile App'])->count(),
            'countRobotics' => Thesis::where(['type' => 'Robotics'])->count(),
            'totalCount' => Thesis::get()->count(),
            'lastLoggedIn' => date('Y-m-d H:i:s', strtotime($lastLoggedIn)),
            'recentlyAdded' => Thesis::orderBy('created_at', 'DESC')->get()->take(10)
        ];

        return view('admin.dashboard', $data);
    }
}
