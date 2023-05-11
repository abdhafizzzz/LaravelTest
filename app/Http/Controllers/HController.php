<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HController extends Controller
{
   /* public function index()
    {
        return view('index');
    } one of the method...*/

    public function __invoke()
    {
        return view('index');//it reads index.blade.php in folder path resources>views.
    }

}
