<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddNewsRequest;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\News;
class AdminNewsController extends Controller
{
    //
    public function getAddNews(){
        $data['types'] = Type::all();
        return view('admin.news.create',$data);
    }
    public function postAddNews(AddNewsRequest $request){
        $filename = $request->image->getClientOriginalName();
        $news = new News;
        $news->news_title = $request->title;
        $news->news_slug = str_slug($request->title);
        $news->news_image = $filename;
        $news->news_featured = $request->featured;
        $news->news_type = $request->type;
        $news->news_short_des = $request->short_des;
        $news->news_description = $request->description;
        $news->save();
        $request->image->storeAs('images',$filename);
        return back();

    }
    public function getNews(){
        $news = News::orderBy('news_id','DESC')->get();
        return view('admin.news.index',compact('news'));
    }
    public function getEditNews($id){
        $data['news'] = News::find($id);
        $data['types'] = Type::all();
        return view('admin.news.edit',$data);
    }
    public function postEditNews(Request $request,$id){
        $news = new News;
        $array['news_title'] = $request->title;
        $array['news_slug'] = str_slug($request->title);
        $array['news_short_des'] = $request->short_des;
        $array['news_description'] = $request->description;
        $array['news_featured'] = $request->featured;
        $array['news_type'] = $request->type;
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $array['news_image'] = $filename;
            $request->image->storeAs('images',$filename);
        }
        $news::where('news_id',$id)->update($array);
        return redirect('admin/news');

    }
    public function getDeleteNews($id){
        News::destroy($id);
        return back();
    }

}
