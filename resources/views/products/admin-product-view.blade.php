@extends('dashboardlayout')
@section('content')
 <div class="container">
  <div class="row">	
  		@foreach($product as $products)
  		<div class="col-md-4">
		   <div class="card" style="width: 18rem;">
			  <img src="{{asset($products->image)}}" width="100%">
			  <div class="card-body">
			    <h5 class="card-title">{{$products->name}}</h5>
			  </div>
			  <form method="POST" action="{{route('product.delete',$products->name)}}">
                    @csrf
			  <button type="submit" class="btn btn-danger" onclick="return delFunction()">Delete</button>
			</form>
			<a href="{{route('slide.admin.view',$products->name)}}"><button type="submit" class="btn btn-success">Slides</button></a>
		 	</div>
		 </div>
	    @endforeach
  </div>
</div>
@endsection