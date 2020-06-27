@extends('dashboardlayout')
@section('content')
    <div class="container">
    	<h4>Create New Product</h4>
        	@if(Session::has('success'))
			<div class="alert alert-success" role="alert">
			    {{Session::get('success')}}
			</div>
	     @endif
	     <form action="{{asset(route('slide.created'))}}" method="POST" enctype="multipart/form-data">
     		@csrf    		
         <div class="form-group">
		    <label for="exampleFormControlSelect2">Select Product Name</label>
		    <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="product_name">
		    @foreach($product as $products)
		      <option value="{{$products->name}}">{{$products->name}}</option>
		     @endforeach
		    </select>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">Slide</label>
			    <input type="file" class="form-control form-control-sm" id="exampleInputEmail1" name="slide" >
			    <small>{{$errors->first('name')}}</small>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
    </div>
@endsection