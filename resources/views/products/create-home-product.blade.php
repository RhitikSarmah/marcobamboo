@extends('dashboardlayout')
@section('content')
    <div class="container">
    	<h4>Create New Product</h4>
        	@if(Session::has('success'))
			<div class="alert alert-success" role="alert">
			    {{Session::get('success')}}
			</div>
	     @endif
	     <form action="{{asset(route('product.create'))}}" method="POST" enctype="multipart/form-data">
     		@csrf
         <div class="form-group">
			    <label for="exampleInputEmail1">Product Image</label>
			    <input type="file" class="form-control form-control-sm" id="exampleInputEmail1" name="image">
			    <small>{{$errors->first('image')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">Product Name</label>
			    <input class="form-control form-control-sm" id="exampleInputEmail1" name="name" placeholder="All product name must be unique. max:15 characters">
			    <small>{{$errors->first('name')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">About Photo</label>
			    <input type="file" class="form-control form-control-sm" id="exampleInputEmail1" name="aboutimg">
			    <small>{{$errors->first('aboutimg')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">About</label>
			    <input class="form-control form-control-sm" id="exampleInputEmail1" name="about" >
			    <small>{{$errors->first('about')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">Utility Photo</label>
			    <input type="file" class="form-control form-control-sm" id="exampleInputEmail1" name="utilityimg" >
			    <small>{{$errors->first('utilityimg')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">Utility</label>
			    <input class="form-control form-control-sm" id="exampleInputEmail1" name="utility" >
			    <small>{{$errors->first('utility')}}</small>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
    </div>
@endsection