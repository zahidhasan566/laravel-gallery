<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class Crop extends Controller
{
    public function index($photo_album_id,$photo_id){
       // echo($photo_id);
        //echo($photo_album_id);
       return view('crop.index3')->with('album_id', $photo_album_id)->with('photo_id', $photo_id);
    }


    public function imageCropPost(Request $request)
    {
        $data = $request->image;



        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);


        $data = base64_decode($data);
        $image_name= time().'.png';
        $path = public_path() . "/upload/" . $image_name;


        file_put_contents($path, $data);


        return response()->json(['success'=>'done']);



    }




























}
