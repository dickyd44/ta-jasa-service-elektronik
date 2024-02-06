<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LandingPagesController extends Controller
{
    public function index()
    {
        $items = User::all();
        $roles = ['ADMIN', 'TEKNISI'];

        return view('pages.landing-pages.index', [
            'items' => $items,
            'roles' => $roles
        ]);
    }
}
