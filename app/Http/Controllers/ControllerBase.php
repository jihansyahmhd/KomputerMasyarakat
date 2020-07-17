<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\House;
class ControllerBase extends Controller
{
    public function index(){
      $images = [];
          foreach (file::glob(public_path() . '/storage/SlideImage/*.*') as $filename) {
            $images[] = '/storage/SlideImage/' . basename($filename);  // code...
          }
      $rumahs=House::all();
      return view('welcome')->with(['images'=>$images,'rumahs'=>$rumahs]);
      }
}
