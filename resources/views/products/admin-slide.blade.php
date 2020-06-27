@extends('dashboardlayout')
@section('content')
 <div class="container">
  <div class="row">	
  		@foreach($product as $products)
  		<h4>{{$products->name}}</h4>
  		<div class="row">
        <div class="row">
  		@foreach($productslide as $productslides) 			
            <div class="col-md-3">
                <img src="{{asset($productslides->slide)}}" width="100%">
                <form method="POST" action="{{route('product.slide.delete',$productslides->id)}}">
                    @csrf
                  <button type="submit" class="btn btn-danger" onclick="return delFunction()">Delete</button>
                </form>
            </div>        
  		@endforeach
       </div>
  		</div>
	    @endforeach
  </div>
</div>
@endsection