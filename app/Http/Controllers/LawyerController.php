<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function show(){
      return view('ls.lawyer_area');
    }

    public function display_lawyers(){
        $lawyers=User::all();
        return response()->json([
          'success'=>true,
          'lawyers'=>$lawyers
        ]);
    }
}
