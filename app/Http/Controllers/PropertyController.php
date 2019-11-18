<?php

namespace App\Http\Controllers;
use App\Property;
use Image;
use App\User;
use Illuminate\Http\Request;
use Validator;
class PropertyController extends Controller
{
  public function create(){
    return view('ls.property_upload');
  }
  public function show(){
    $properties=Property::paginate(8);
    return view('ls.properties')->with('properties',$properties);
  }
  public function index(){
    return view('ls.property_upload');
  }

  public function my_property(){
    $user_id=auth()->user()->id;
    $user=User::find($user_id);
    return view('ls.user_properties')->with('property',$user->property);

    // $user_id=auth()->user()->id;
    // $user=Property::find($user_id);
    // return view('ls.user_properties')->with('property',$user->property);
  }
  public function upload_property(Request $request){
    $validator=Validator::make($request->all(),[
      'property_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'

    ]);

    if ($validator->fails()) {
    return back()->with('error',$validator->errors());
    }
    $property=new Property();
    $user_id=auth()->user()->id;
    $property->user_id=$user_id;
    $property->property_name=request('property_name');
    $property->location=request('location');
    $property->price=request('price');
    $property->property_type=request('property_type');
    $property->description=request('description');
    if($request->hasFile('property_image')) {
    $avatar=$request->file('property_image');
    $filename=time().'.'.$avatar->getClientOriginalExtension();
    $avatar->move('property/images',$filename);
    // Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/' .$filename));
    $property->property_image=$filename;
    }
    // $user->profile_img=$filename;
      $property->save();
      return back()->with('success','Your property has been uploaded successfully!!Upload another one..');

    }
}
