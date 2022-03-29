<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        $name = array(
            'fname' => "Gloc",
            'mname' => "N/A",
            'lname' => "Nine",
            'fname2' => "Juan",
            'mname2' => "Dela",
            'lname2' => "Cruz",
            'fname3' => "justine",
            'mname3' => "Bi",
            'lname3' => "Ber",
        );

return view('Home')->with('name', $name);
    }

  
}
