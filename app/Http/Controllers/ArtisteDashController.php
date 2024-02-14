<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ArtisteDashController extends Controller
{
    public function index()
    {
        $users=User::all();
        // $projects=Project::all();
        // $partners=Partner::all();

        return view('artiste.artisteDash', compact('users'));
    }
}
