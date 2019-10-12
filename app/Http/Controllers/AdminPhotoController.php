<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Http\Request;

class AdminPhotoController extends Controller
{
    //
    public function getPhotos(){
        $photos = Photo::all();
        return view('admin.photos.index',compact('photos'));
    }
    public function getAddPhotos(){
        $albums = Album::pluck('album_name','album_id')->all();
        return view('admin.photos.create',compact('albums'));
    }
    public function postAddPhotos(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'album_id' => 'required',
            'photo_file' => 'image|max:1999'
        ]);
        $filename = time().'_'.$request->file('photo_file')->getClientOriginalName();
        $photos = new Photo;
        $photos->title = $request->title;
        $photos->photo_album = $request->album_id;
        $photos->photo_file = $filename;
        $photos->save();
        $request->photo_file->storeAs('Photos', $filename);
        return redirect('admin/photos')->with('success','Photos Created');
    }
    public function getEditPhoto($id){
        $photo = Photo::findOrFail($id);
        $albums = Album::pluck('album_name','album_id')->all();
        return view('admin.photos.edit',compact('photo','albums'));

    }
    public function postEditPhoto(Request $request,$id){
        $photo = new Photo();
        $array['title'] = $request->title;
        $array['photo_album'] = $request->album_id;
        if($request->hasFile('photo_file')){
            $filename = time().'_'.$request->photo_file->getClientOriginalName();
            $array['photo_file'] = $filename;
            $request->photo_file->storeAs('Photos', $filename);
        }
        $photo::where('photo_id',$id)->update($array);
        return redirect('admin/photos');
    }
    public function getDeletePhoto($id){
        $photo = Photo::findOrFail($id);
        unlink(storage_path('app/Photos/'.$photo->photo_file));
        $photo -> delete();
        return redirect('admin/photos')->with('success','Photos Deleted');
    }

}
