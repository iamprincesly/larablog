<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $tittle = 'Welcome to Sly Laravel!';
        //return view('pages.index', compact('tittle'));
        return view('pages.index')->with('tittle', $tittle);
    }

    public function about(){
        $tittle = 'This is About Us Page!';
        return view('pages.about')->with('tittle', $tittle);
    }

    public function services(){
        $data = array(
            'tittle' => 'This is our services Page',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
