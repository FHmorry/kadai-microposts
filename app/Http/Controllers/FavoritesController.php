<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Micrppost;

class FavoritesController extends Controller
{
    public function store($id)
    {
         \Auth::user()->favorites($id);
    
        return back();
    }
    
    public function destroy($id)
    {
        \Auth::user()->unfavorites($id);
        
        return back();
    }
    
}
