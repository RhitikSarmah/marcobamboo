<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Productslide;
use Session;

class ProductController extends Controller
{
  public function create(Request $request){
    	$request->validate([
           'image' => 'required|mimes: jpg,png,jpeg|max:200kb',
	       'name' => 'required|max:15',
	       'aboutimg' => 'required|mimes: jpg,png,jpeg|max:200kb',
	       'about' => 'required|max:1000',
	       'utilityimg' => 'required|mimes: jpg,png,jpeg|max:200kb',
	       'utility' => 'required|max:1000',
	    ]);
        $create = Product::create([
            'name' => $request->name,
        	'about' => $request->about,
        	'utility' => $request->utility,        	                     
            $photo1 = $request->image,
	    	$name1 = $photo1->getClientOriginalName(),
	    	$newname1 = $request->id.$name1,
	    	$photo1->move('products/main',$newname1),
	    	$url1 = 'products/main/'.$newname1,
	    	'image' => $url1,
	    	$photo3 = $request->aboutimg,
	    	$name3 = $photo3->getClientOriginalName(),
	    	$newname3 = $request->id.$name3,
	    	$photo3->move('products/about',$newname3),
	    	$url3 = 'products/about/'.$newname3,
	    	'aboutimg' => $url3,
	    	$photo4 = $request->utilityimg,
	    	$name4 = $photo4->getClientOriginalName(),
	    	$newname4 = $request->id.$name4,
	    	$photo4->move('products/utility',$newname4),
	    	$url4 = 'products/utility/'.$newname4,
	    	'utilityimg' => $url4,
        ]);
        if($create){
    		Session::flash('success','upload successful');
    	}else{
    		Session::flash('error','Error Found');
    	}
        return redirect()->back();
    }
    public function view(){
    	$product = Product::orderBy('id','asc')->get();
    	return view('welcome')->with('product',$product);
    }
    public function viewAdminProducts(){
    	$product = Product::orderBy('id','desc')->get();
    	return view('products.admin-product-view')->with('product',$product);
    }
    public function delAdminProduct($name){
    	$product = Product::where('name',$name)->delete();
    	$productslide = Productslide::where('product_name',$name)->delete();
        return redirect()->back();
    }
    public function productsView($name){
    	$product = Product::where('name',$name)->get();
    	$productslide = Productslide::where('product_name',$name)->with('productslides')->get();
        $navproduct = Product::orderBy('id','asc')->get();
    	return view('products.layout')->with('product',$product)->with('productslide',$productslide)->with('navproduct',$navproduct);
    }
    public function createSlides(){
    	$product = Product::get();
    	return view('products.create-slide')->with('product',$product);
    }
    public function createdSlides(Request $request){
    	$request->validate([
         'slide' => 'required|mimes:jpg,jpeg,png|max:200kb'
    	]);
    	$create = Productslide::create([
            $photo5 = $request->slide,
	    	$name5 = $photo5->getClientOriginalName(),
	    	$newname5 = $request->id.$name5,
	    	$photo5->move('products/slide',$newname5),
	    	$url5 = 'products/slide/'.$newname5,
	    	'slide' => $url5,
	    	'product_name' => $request->product_name,
    	]);
    	if($create){
    		Session::flash('success','upload successful');
    	}else{
    		Session::flash('error','Error Found');
    	}
        return redirect()->back();
    }
    public function viewAdminSlides($name){
    	$product = Product::where('name',$name)->get();
    	$productslide = Productslide::where('product_name',$name)->with('productslides')->get();
    	return view('products.admin-slide')->with('product',$product)->with('productslide',$productslide);
    }
    public function delAdminProductSlide($id){
        $productslide = Productslide::find($id);
        $productslide->delete();
        return redirect()->back();
    }
}
