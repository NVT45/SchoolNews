<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\AddTypeRequest;
class AdminTypeController extends Controller
{
    //
    public function getType(){
        $types = Type::paginate(5);
        $categories = Category::pluck('cate_name','cate_id')->all();
        return view('admin.type.index',compact('categories','types'));
    }
    public function postType(AddTypeRequest $request){
        $type = new Type;
        $type->type_name = $request->name;
        $type->type_cate = $request->category_id;
        $type->type_slug = str_slug($request->name);
        $type->save();
        return back();
    }
    public function getEditType($id){
        $type = Type::findOrFail($id);
        $categories = Category::pluck('cate_name','cate_id')->all();
        return view('admin.type.edit',compact('type','categories'));
    }
    public function postEditType(Request $request,$id){
        $type = new Type;
        $array['type_name'] = $request->name;
        $array['type_slug'] = str_slug($request->name);
        $array['type_cate'] = $request->category_id;
        $type::where('type_id',$id)->update($array);
        return redirect()->intended('admin/type/');

    }
    public function getDeleteType($id){
        Type::destroy($id);
        return redirect('admin/type');
    }
}
