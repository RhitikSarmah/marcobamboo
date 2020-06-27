@extends('dashboardlayout')
@section('content')
  <!-- Page Content -->
<div class="container">

  <div class="row justify-content-center">

    <!-- Blog Entries Column -->
    <div class="col-md-8">
        <h4>Admin Panel - Blog</h4>
      <!-- Blog Post -->
         @foreach($post as $posts)
               <div class="card mb-4">
                  <img class="card-img-top" src="{{asset($posts->image)}}" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="card-title font-raleway">{{$posts->heading}}</h2>
                    <p class="card-text font-quicksand">{{$posts->description}}</p>
                    <form method="POST" action="{{route('blog.delete',$posts->id)}}">
                    @csrf
                        <button type="submit" class="btn btn-danger" onclick="return delFunction()">Delete</button>
                    </form>
                  </div>
                  <div class="card-footer">
                    Posted on {{$posts->created_at}}
                  </div>
                </div>
         @endforeach

      

      {{ $post->links() }}
          
    </div>

  </div>

</div>


@endsection