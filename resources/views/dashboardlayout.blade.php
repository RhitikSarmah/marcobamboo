
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

<link rel="stylesheet" href="{{asset('cdn/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}"></head>

<body>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Dashboard: Marco bamboo</title>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Marco Bamboo</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a style="color: white;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                                          </form>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{asset(route('dashboard'))}}">
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('form.data'))}}">
              Form Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('create.product'))}}">
              Create Product Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('slide.create'))}}">
              Add Product Slide
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('product.admin.view'))}}">
              View Product
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('create.blog'))}}">
              <span data-feather="layers"></span>
              Create Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('blog.view'))}}">
              <span data-feather="layers"></span>
              View Blog
            </a>
          </li>
        </ul>


    
  </div>
</div>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
       @yield('content')

      </div>

</main>

</body>
</html>



<script type="text/javascript">
  function delFunction(){
    if(!confirm("Are You Sure?"))
      event.preventDefault();
  }
</script>
<script src="{{asset('cdn/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('cdn/popper.min.js')}}"></script>
<script src="{{asset('cdn/bootstrap.min.js')}}"></script>

</body>
</html>
