<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Marco Bamboo Essentials - Blog</title>
  <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/gif">

  <link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">

  <link rel="stylesheet" href="{{asset('cdn/bootstrap.min.css')}}">

</head>

<body>

<div class="top-bar">
    <div class="container">
        <div class="top-bar-left" style="display: flex; float: left;">
           <img src="{{asset('images/phone.png')}}" width="18px;" height="20px;">
            <p style="margin-left: 10px;">60021-13268</p>
        </div>
        <div class="top-bar-right" style="display: flex; float: right;">
            <a href="https://www.facebook.com/marcobamboo1/"><img src="{{asset('images/fb.png')}}" height="20px"></a>
            <a href=""><img src="{{asset('images/linkedin.png')}}" height="20px"></a>
            <a href="https://www.instagram.com/marco_bambooessentials/"><img src="{{asset('images/insta.png')}}" height="20px"></a> 
            <a href="https://api.whatsapp.com/send?phone=916002113268&text=Hi,%20I%20have%20an%20inquiry%20about%20a%20bamboo%20product."><img src="{{asset('images/whatsapp.png')}}" height="20px"></a>
        </div>
    </div>
</div>

<div class="bg-black">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="{{asset(route('index'))}}"><img src="{{asset('images/logo2.png')}}" width="140px" style="margin-left: -100px;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img class="nav-toggler" src="{{asset('images/nav.png')}}" width="40px"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{asset(route('index'))}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset(route('about.us'))}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset(route('blog.main.view'))}}">Blog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Products
                </a>
                 <div class="dropdown-menu product-dropdown">
                   @foreach($product as $products)
                  <a class="dropdown-item" href="{{route('single.product.view',$products->name)}}">{{$products->name}}</a>
                  @endforeach
                </div>
              </li>
            </ul>
          </div>
        </nav>
    </div>
</div>


<div class="blog-top">
  <h5> Blog <br>
  </h5>
</div>

  <!-- Page Content -->
<div class="container">

  <div class="row justify-content-center">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <!-- Blog Post -->
         @foreach($post as $posts)
               <div class="card mb-4">
                  <img class="card-img-top" src="{{asset($posts->image)}}" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="card-title font-raleway">{{$posts->heading}}</h2>
                    <p class="card-text font-quicksand">{{$posts->description}}</p>
                    <a href="{{route('blog.post.view',$posts->path)}}"><button class="btn btn-read-more" style="background-color: #99cc33; color: white;">Read More &rarr;</button></a>
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

<section id="footer">
    <div class="container section-top-margin">
        <div class="footer justify-content-center text-center padding-top-twenty">
            <img src="{{asset('images/logo2.png')}}" width="70px"> <br>
            <h3 class="text-raleway padding-top-ten">Bamboo Essentials</h3>
        </div>
        <div class="row justify-content-center padding-top-ten">
            <div class="footer-social-media">
                <a href="https://www.facebook.com/marcobamboo1/"><img src="{{asset('images/fb.png')}}" height="20px"></a>
                <a href=""><img src="{{asset('images/linkedin.png')}}" height="20px"></a>
                <a href="https://www.instagram.com/marco_bambooessentials/"><img src="{{asset('images/insta.png')}}" height="20px"></a> 
                <a href="https://api.whatsapp.com/send?phone=916002113268&text=Hi,%20I%20have%20an%20inquiry%20about%20a%20bamboo%20product."><img src="{{asset('images/whatsapp.png')}}" height="20px"></a>
            </div>
        </div>
        <div class="row justify-content-center text-center padding-top-twenty">
            <div class="col-md-4">
                <img src="{{asset('images/keshari.png')}}" width="100px">
            </div>
            <div class="col-md-4 text-quicksand policies padding-top-ten">
                <a href="{{asset(route('policies.privacy'))}}">Privacy Policy</a> <br>
                <a href="{{asset(route('policies.termsconditions'))}}">Terms and Conditions</a> <br>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center text-center">
            <div class="col-md-4 text-quicksand">
                Copyright Marco. all rights reserved
            </div>
            <div class="col-md-4 footer-cp-link">
                <span class="text-quicksand" style="color: #99CC33;">Developed by:</span> <a href="https://coloursandpatterns.in" class="text-quicksand">Colours and Patterns</a>
            </div>
        </div>
    </div>
</section>

</body>
<script src="{{asset('cdn/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('cdn/popper.min.js')}}"></script>
<script src="{{asset('cdn/bootstrap.min.js')}}"></script>
</html>
