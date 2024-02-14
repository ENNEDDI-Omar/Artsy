<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashController extends Controller
{
    public function index()
    {
        $users=User::all();
        $projects=Project::all();
        $partners=Partner::all();

        return view('admin.adminDash', compact('users', 'projects', 'partners'));
    }
}
