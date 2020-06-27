<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Our Products</title>
<link rel="icon" href="{{asset('images/favicon.png')}}" type="image/gif">
<link rel="stylesheet" href="{{asset('cdn/bootstrap.min.css')}}">
<link href="{{asset('cdn/quicksand.css')}}" rel="stylesheet">
<link href="{{asset('cdn/raleway.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/product.css')}}">
<link rel="stylesheet" href="{{asset('owlcarousel/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('owlcarousel/owl.theme.default.min.css')}}">
<script src="{{asset('owlcarousel/jquery.min.js')}}"></script>
<script src="{{asset('owlcarousel/owl.carousel.min.js')}}"></script>
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
          <a class="navbar-brand" href="{{asset(route('index'))}}" style="margin-left: -100px;"><img src="{{asset('images/logo2.png')}}" width="140px"></a>
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
                   @foreach($navproduct as $navproducts)
                  <a class="dropdown-item" href="{{route('single.product.view',$navproducts->name)}}">{{$navproducts->name}}</a>
                  @endforeach
                </div>
              </li>
            </ul>
          </div>
        </nav>
    </div>
</div>

@foreach($product as $products)
<div class="product-top">
  <h5> <span>{{$products->name}}</span> <br>
  </h5>
</div>
 <section id="projects" class="projects-section">
    <div class="container">

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="{{asset($products->aboutimg)}}" alt="{{$products->aboutimg}}">
        </div>
        <div class="col-lg-6">
          <div class="text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-raleway">About</h4>
                <p class="mb-0 text-quicksand">{{$products->about}} </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="{{asset($products->utilityimg)}}" alt="{{$products->utilityimg}}">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-raleway">Utilities</h4>
                <p class="mb-0 text-quicksand">{{$products->utility}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="container" style="padding-left: 40px!important;">
    <div class="container">
     <div class="row owl-products owl-carousel owl-theme">
      @foreach($productslide as $productslides)
           <div class="item">
             <img src="{{asset($productslides->slide)}}" alt="{{$productslides->slide}}">
           </div>
      @endforeach
     </div>
    </div>
  </div>
@endforeach


<section id="footer">
    <div class="container footer-top-margin">
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
            <div class="col-lg-4">
                <img src="{{asset('images/keshari.png')}}" width="100px">
            </div>
            <div class="col-lg-4 text-quicksand policies padding-top-ten">
                <a href="{{asset(route('policies.privacy'))}}">Privacy Policy</a> <br>
                <a href="{{asset(route('policies.termsconditions'))}}">Terms and Conditions</a> <br>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center text-center">
            <div class="col-lg-4 text-quicksand">
                Copyright Marco. all rights reserved
            </div>
            <div class="col-lg-4 footer-cp-link">
                <span class="text-quicksand" style="color: #99CC33;">Developed by:</span> <a href="https://coloursandpatterns.in" class="text-quicksand">Colours and Patterns</a>
            </div>
        </div>
    </div>
</section>


</body>

<script type="text/javascript">
  var owl = $('.owl-products');
  owl.owlCarousel({
    singleItem: true,
    loop:true,
    margin:5,
    autoplay:true,
    autoplayTimeout:1500,
    autoplayHoverPause:true,
    dots: false,
    nav: false,
    responsiveClass: true,
    responsive : {
        0 : {
            items: 2
        },
        768 : {
            items: 4
        }
     }
});
</script>
<script src="{{asset('cdn/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('cdn/popper.min.js')}}"></script>
<script src="{{asset('cdn/bootstrap.min.js')}}"></script>
</html>