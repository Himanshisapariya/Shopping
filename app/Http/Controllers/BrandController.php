<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;


class BrandController extends Controller
{

    public function index(Request $request){
        $brand = brand::all();

       

        $keyword = $request->get('keyword');
        $brand = Brand::all();
        if($request->get('keyword') != ''){
            $keyword = $request->get('keyword');
        $brand = Brand::where('name','LIKE',"%".$request->get('keyword')."%")->get();

            if($brand != ''){
                return view('admin.brand.list',compact('brand','keyword'));
            }else{
                return "No Records Found...";
            }

        }
        return view('admin.brand.list',compact('brand'));
    }

    public function create(){
        return view('admin.brand.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);


        $brand = new brand;
        $brand->name = $request->name;
        $brand->status = $request->status;
        
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $brand->image = $imagename;

        $brand->save();

        return redirect('admin/brand/list')->with('success','Brand Addded Successfully.....');

    }

    public function change(Request $request,$id){
        $brand = brand::find($id);

        if($brand->status == 1){
            $brand->status = 0;
            $brand->save();
            return redirect()->back();
        }else{
            $brand->status = 1;
            $brand->save();
            return redirect()->back();
        }
    }


        public function destroy(Request $request,$id){
            $brand = brand::find($id);
            $brand->delete();
            return redirect()->back()->with('info','brand Deleted Successfully');
            
        }
    
        public function edit($id){
            $brand = brand::find($id);
            return view('admin.brand.edit',compact('brand'));
        }
    
        public function update(Request $request, $id){
            $brand = brand::find($id);
    
            $request->validate([
                'name' => 'required',
                'image' => 'required',
            ]);
    
            $brand->name = $request->name;
            $brand->status = $request->status;
            
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images',$imagename);
            $brand->image = $imagename;
    
            $brand->save();
    
            return redirect('admin/brand/list')->with('success','brand Updated Successfully.....');
    
        }

}
