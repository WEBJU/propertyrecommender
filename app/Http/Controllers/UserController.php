<?php

namespace App\Http\Controllers;
use App\User;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;

class UserController extends Controller
{
  use UploadTrait;
  public function index(){
      $lawyers=User::all();
      return view('ls.properties')->with('lawyers',$lawyers);
  }
    //login function
    public function create(){
      return view('ls.login');
    }
    public function register(){
      return view('ls.register');
    }
    public function store(Request $request){
        $validate=$request->validate([
          'name'=>'required',
          'email'=>'required',
          'phone'=>'required',
          'location'=>'required',
          'password'=>'required',
          'confirm'=>'required|same:password'
        ]);
        $input=$request->all();
        $user=User::create($input);
        // auth()->login($user);
        return redirect('/register')->with(['success'=>'Your account has been created!!Proceed to login']);
    }

    public function login(){
      if (auth()->attempt(request(['email','password']))==false) {
      return back()->withErrors([
        'message'=>'Email or password incorrect'
      ]);
      }
      else {
        return redirect('/')->with('success',['Login successfull']);
      }
    }

    public function profile(){
        $profile=Auth::user();
        return view('ls.profile')->with('profile',$profile);
      }
    public function update_profile(Request $request){
      $request->validate([
        'profile_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      $user=Auth::user();

      $profileName=$user->id.'_profile'.time().'.'.request()->profile_img->getClientOriginalExtension();
      $request->profile_img->storeAs('profiles',$profileName);
      $user->profile_img=$profileName;
      // //  $profile=$request->file('profile_img');
      // //  $extension=$profile->getClientOriginalExtension();
      // // Storage::disk('public')->put($profile->getFileName().'.'.$extension,File::get($profile));
      // $user->save();

          $user->save();
        return back()->with('success','Profile updated successfully');


    }
    public function logout(){
      auth()->logout();
      return redirect('/');
    }
}
