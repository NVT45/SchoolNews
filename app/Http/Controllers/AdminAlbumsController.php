<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Aws\S3\Enum\Storage;
use Illuminate\Http\Request;

class AdminAlbumsController extends Controller
{
    //
    public function getAlbums(){
        $albums = Album::all();
        return view('admin.albums.index',compact('albums'));
    }
    public function getAddAlbums(){
        return view('admin.albums.create');
    }
    public function postAddAlbums(Request $request){
        $this->validate($request, [
            'name' => 'bail|required|unique:sn_albums,album_name',
            'description' => 'required',
            'cover_image' => 'image|max:1999'
        ]);
        $filename = time().'_'.$request->file('cover_image')->getClientOriginalName();
        $album = new Album;
        $album->album_name = $request->name;
        $album->album_description = $request->description;
        $album->album_cover_image = $filename;
        $album->save();
        $request->cover_image->storeAs('AlbumsCoverImage', $filename);
        return redirect('admin/albums')->with('success','Album Created');

    }
    public function getEditAlbums($id){
        $album = Album::findOrFail($id);
        return view('admin.albums.edit',compact('album'));
    }
    public function postEditAlbums(Request $request,$id){
        $album = new Album;
        $array['album_name'] = $request->name;
        $array['album_description'] = $request->description;
        if($request->hasFile('cover_image')){
            $filename = time().'_'.$request->cover_image->getClientOriginalName();
            $array['album_cover_image'] = $filename;
            $request->cover_image->storeAs('AlbumsCoverImage', $filename);
        }
        $album::where('album_id',$id)->update($array);
        return redirect('admin/albums');

    }
    public function getDeleteAlbums($id){
        $album = Album::findOrFail($id);
        unlink(storage_path('app/AlbumsCoverImage/'.$album->album_cover_image));
        $album -> delete();
        return redirect('admin/albums')->with('success','Album Deleted');
    }
}
