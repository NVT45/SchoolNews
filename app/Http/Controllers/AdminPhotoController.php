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
            'photo_file[]' => 'image|max:1999'
        ]);
            $input = $request->all();
            $photo_file = array();
        if( $files = $request->file('photo_file')){
            foreach($files as $file){
                $name = time().'_'.$file->getClientOriginalName();
                $file->storeAs('Photos', $name);
                Photo::insert( [
                    'photo_file'=>  $name,
                    'title' => $input['title'],
                    'photo_album' => $input['album_id'],

                    //you can put other insertion here
                ]);
            }
        }
        return redirect('admin/photos')->with('success','Photos Created');

//            foreach ($request->photo_file as $file){
//                $filename = time().'_'.$file->getClientOriginalName();
//                $file->storeAs('Photos', $filename);
//                dd($file);
//            }

//

//                $photos->save();
//                return redirect('admin/photos')->with('success','Photos Created');

//            $photos = new Photo;
//            $photos->title = $request->title;
//            $photos->photo_album = $request->album_id;
//            $photos->photo_file = $filename;
//            dd($photos);


//        $filename = time().'_'.$request->file('photo_file')->getClientOriginalName();

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
