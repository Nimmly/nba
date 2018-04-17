<?php

namespace App\Http\Controllers;

use App\Team;
use App\Player;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('index', compact('teams'));
    }
    public function show($id)
    {
        $team = Team::with('players')->find($id);
        return view('show', compact('team'));
    }
    
}