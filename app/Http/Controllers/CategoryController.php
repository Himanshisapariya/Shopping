<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;



class CategoryController extends Controller
{

    public function index(Request $request){
        $category = Category::all();


        $keyword = $request->get('keyword');
        if($request->get('keyword') != ''){
            $keyword = $request->get('keyword');
 $category = Category::where('name','LIKE',"%".$keyword."%")->get();
        }

 if($category != ''){
    return view('admin.category.list',compact('category','keyword'));
 }else{
    return "No Records Found...";
 }
 return view('admin.category.list',compact('category'));
        
      
       
       
        return view('admin.category.list',compact('category'));
    }

    public function create(){
       
        return view('admin.category.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);


        $category = new category;
        $category->name = $request->name;
        $category->status = $request->status;
        
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $category->image = $imagename;

        $category->save();

        return redirect('admin/category/list')->with('success','Category Addded Successfully.....');

    }

    public function change(Request $request,$id){
        $category = category::find($id);

        if($category->status == 1){
            $category->status = 0;
            $category->save();
            return redirect()->back();
        }else{
            $category->status = 1;
            $category->save();
            return redirect()->back();
        }

    }

    public function destroy(Request $request,$id){
        $categories = category::find($id);
        $categories->delete();
        return redirect()->back()->with('info','category Deleted Successfully');
        
    }

    public function edit($id){
        $category = category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id){
        $category = category::find($id);    

        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $category->name = $request->name;
        $category->status = $request->status;
        
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $category->image = $imagename;

        $category->save();

        return redirect('admin/category/list')->with('success','category Updated Successfully.....');

    }

}
