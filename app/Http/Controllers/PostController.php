<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Post()
    {
        $info = array(
            'gender' => "Male",
            'gender1' => "Male",
            'gender2' => "Male",
            'age' => "19",
            'age1' => "20",
            'age2' => "21",
            'sports' => "Basketball",
            'sports1' => "Basketball",
            'sports2' => "Basketball",

        );
        return view('post')->with('info', $info);
    }

}