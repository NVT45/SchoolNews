<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Category;
use App\Models\News;
use App\Models\Photo;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\Type;
use DB;
use Mail;
class FrontEndController extends Controller
{
    //

    public function getCategory($id){
        $catename= Category::find($id);
        $types= Type::where('type_cate',$id)->orderBy('type_id','ASC')->get();
        $newslist = DB::table('sn_news')
            ->join('sn_typenew','sn_news.news_type','=','sn_typenew.type_id')
            ->where('type_cate',$id)
            ->orderBy('news_id','desc')->get();
        $featured = $newslist->shift();
        return view('frontend.index',compact('catename','types','newslist','featured'));
    }
    public function getTypes($id,$cateid){
        $cate = Category::find($cateid);
        $gettypes = Type::where('type_cate',$cateid)->orderBy('type_id','ASC')->get();
        $type = Type::find($id);
        $listnews = News::where('news_type',$id)->orderBy('news_id','ASC')->get();
        $featured = $listnews->shift();
        return view('frontend.listtype',compact('type','listnews','featured','gettypes','cate'));
    }
    public function getNews($id,$cateid){
        $catename= Category::find($cateid);
        $gettypes = Type::where('type_cate',$cateid)->orderBy('type_id','ASC')->get();
        $news = News::find($id);
        return view('frontend.newsdetail',compact('news','catename','gettypes'));
    }
    public function getHome(){
        $news = DB::table('sn_news')->where('news_featured', '=', 1)->orderBy('news_id','DESC')->take(3)->get();
        return view('frontend.home',compact('news'));
    }
    public function getContact(){
        return view('frontend.contact');
    }
    public function postContact(Request $request){
        $data['infor'] = $request->all();
        $email = $request->email;
        Mail::send('frontend.email',$data,function($message) use($email){

            $message->from('tranhatranha4@gmail.com','Trần Hà');
            $message->to($email, $email);
            $message->subject('Hòm thư góp ý');
        });
        return back();
    }
    public function getTimeTable(){
        return view('frontend.timetable');
    }
    public function getSchedules(){
        $schedules = Schedule::paginate(5)->OnEachSide(2);
        return view('frontend.schedules',compact('schedules'));
    }
    public function getGalleryDetail($id){
        $album = Album::find($id);
        $photos = Photo::where('photo_album',$id)->get();
        return view('frontend.gallerydetail',compact('album','photos'));
    }
    public function getGallery(){
        $albums = Album::all();
        return view('frontend.gallery',compact('albums'));
    }
    public function getIndex(){
        $categories = Category::all();
        $news = News::all();
        $albums = Album::all();
        $photos = Photo::all();
        return view('admin.index',compact('categories','news','albums','photos'));
    }

}
