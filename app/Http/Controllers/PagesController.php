<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
      //配列
      /*
      $data = [];
      $data["first_name"] = "Lake";
      $data["last_name"] = "Biwa";
      return view('pages.about',  $data);
      */
        //これは、上と一緒の処理。compactを使う場合
      $first_name = "Lake";
      $last_name = "Biwa";
      return view('pages.about',  compact('first_name','last_name'));
    }

    public function contact()
    {
      return view('pages.contact');
    }


}
