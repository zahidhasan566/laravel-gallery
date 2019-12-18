<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class PhotosController extends Controller
{
    public function create($album_id){
      return view('photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request){
      $this->validate($request, [
        'title' => 'required',
        'photo' => 'image|max:1999'
      ]);

      // Get filename with extension
       // $file = $request->file('photo');
        //$filenameWithExt = $file->move('photo', $file->getClientOriginalName());

      $filenameWithExt = $request->file('photo')->getClientOriginalName();

      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Get extension
      $extension = $request->file('photo')->getClientOriginalExtension();

      // Create new filename
      //$filenameToStore = $filename.'_'.time().'.'.$extension;
      $filenameToStore = $filename.'.'.$extension;

      // Uplaod image



      //$path= $request->file('photo')->move('public/photos/'.$request->input('album_id'), $filenameToStore);


        //$new2=$request->input('album_id').$filenameToStore;
       // $path= $request->file('photo')->move('public/photos'.$new2);
       // $file->move('photos', $file->getClientOriginalName())
        $aid=$request->input('album_id');
        echo($aid);

        $file= $request->file('photo');
        //File::MakeDirectory('storage/photos' . $aid);
       // $file->move('storage/photos', $aid);
        $file->move('storage/photos/'.$aid, $filenameToStore);
       //$file->store("storage/photos/".$aid, $filenameToStore);






      // Upload Photo
      $photo = new Photo;
      $photo->album_id = $request->input('album_id');
      $photo->title = $request->input('title');
      $photo->description = $request->input('description');
      $photo->size = $request->file('photo')->getClientSize();
      $photo->photo = $filenameToStore;

      $photo->save();

      return redirect('/albums/'.$request->input('album_id'))->with('success', 'Photo Uploaded');
    }

    public function show($id){
      $photo = Photo::find($id);
      //echo($photo->photo);
      return view('photos.show')->with('photo', $photo);
    }

    public function destroy($id){
      $photo = Photo::find($id);

      //if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo)){
        $photo->delete();

        return redirect('/')->with('success', 'Photo Deleted');
      //}
    }
}
