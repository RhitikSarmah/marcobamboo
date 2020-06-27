<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>About Marco Bamboo Essentials</title>
  <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/gif">

  <link rel="stylesheet" type="text/css" href="{{asset('css/aboutus.css')}}">

  <!-- Custom styles for this template -->
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


<div class="about-top">
  <h5>About Marco Bamboo Essentials</h5>
</div>

  <!-- Page Content -->
<div class="container">

  <div class="row justify-content-center">

    <!-- Blog Entries Column -->
    <div class="col-md-8">
          
    <section id="why_us">
      <div class="container">
        <div class="row section-top-margin">
          <div class="col">
              <div class="row justify-content-center text-center">
                  <div class="col">
                      <p class="section-text-top">PROFILE</p>
                  </div>
              </div>
              <div class="row margin-top-ten">
                                <div class="col-md-1">
                                    <img src="{{asset('images/believe.png')}}" width="30px">
                                </div>
                                <div class="col-md-11">
                                    <h6 class="text-raleway">We Believe</h6>
                                    <p class="text-quicksand">Making products that stands out from the market products, while maintaining international quality benchmarks. <br><br>
                                    Make in India to bring the exorbitant smile back on the face of Indian domestic good makers. (Aatma Nirbhar, Vocal for Local) <br> <br>
                                    Sustainable development <br> <br>
                                    Single use plastic nation
                                    </p>
                                </div>
                            </div>
                            <div class="row margin-top-thirty">
                                <div class="col-md-1">
                                    <img src="{{asset('images/mission.png')}}" width="30px">
                                </div>
                                <div class="col-md-11">
                                    <h6 class="text-raleway">Our Mission Is</h6>
                                    <p class="text-quicksand">Make in India and Atmanirbhar Bharat- we support and appreciate Mr Prime Minister’s Atmanirbhar Bharat and Make in India initiatives. Products are manufactured by human labours moreover than machines, thus boosting the employment sector. <br> <br>
                                    Employment generation in home country- Our mission is to empower our youth by employing them. We want our rural sector to develop on its peak. <br> <br>
                                    Independent India- we believe in the metamorphosis of china bounded India into maverick India. We are the brawny pillar of the independent India. It looks bijou but it is more like a swaraj cold war. <br> <br>
                                    Preserve our heritage and blue planet- our mission is to preserve the auspicious beauty of our planet and to safeguard our heritage. Bamboo falls under the category of grass, so, we are working in against of deforestation. India is having adverse economic conditions, so by products like ours, we will attain sustainable development. Also, we want India to be free from single use plastics.
                                    <br>
                                   </p>
                                </div>
                            </div>
              <div class="row justify-content-center text-center margin-top-ten">
                  <div>
                      <h5 class="text-raleway margin-bottom-five">Our <span style="color: #99CC33;">company profile</span></h5>
                      <p class="text-quicksand margin-top-ten">Keshari Udyog was founded back in 2016, by the C.E.O of the company MR. Pawan Kumar Soni. He had a notion based upon make in India and thus he started Keshari Udyog which comes under Keshari group. Company’s name is set up upon respected Keshari Ji (mother of Mr. Pawan Soni). Innovation and simplicity is what make us happy: the company’s goal is to remove any technical or financial barriers that can prevent India to grow.
                      Illusion which many folks were having was that only china can create bamboo sticks. But Marco bamboo products have cleared this foggy stereotype and gathered a research and development team and found that Assam produces 5-6 types of bamboos. The company tested almost every breed of bamboo by making some incense sticks and came up with an outcome that Jati Bamboo is the strongest bamboo to make essentials. Shockingly this species contains more fibre than the Chinese Bamboo. The company  got the auspicious recognition by securing  place at Khadi Village and Industries Commission(KVIC), Additionally, on17th august,2019,the team members did an employment generation awareness campaign with KVIC in Amingaon, Guwahati under the guidelines of Prime Minister’s Employment Generation Programme(PMEGP) . 
                      Bamboo is an eminent substance for us and considerably so are the Marco bamboo products. Marco bamboo products are made up from high grade bamboo and bamboo is considered to be one of the safest material . The company deals in products like round sticks, straws , skewers , chopsticks etc. Marco is a segment leading brand as it maintains high standards for quality and also looks after proper hygiene throughout the way of making a product. Mr Pawan Kumar Soni has always looked after powering up the home country. His main motive is to make northeast reknown in the world for its crafts  along with the development of rural sector. Company is working in order to hold up and powering up the rural sector. And for this, the whole team is working hard to give the best output. He wants that the products stand out in the Indian market and the quality surpasses other international level products. He is working on 100% India made products to boycott china and its pseudo products and this will bring back the exorbitant smile back on the face of Indian good makers.

                      </p>
                  </div>
              </div>
              <div class="margin-top-thirty">
                <img src="{{asset('images/about.jpg')}}" width="100%">
              </div>
          </div>
        </div>
      </div>
    </section>
     
     <section id="why_us">
      <div class="container">
        <div class="row section-top-margin">
          <div class="col">
              <div class="row justify-content-center text-center">
                  <div class="col">
                      <p class="section-text-top">ABOUT MARCO BAMBOO</p>
                  </div>
              </div>
              <div class="row justify-content-center text-center">
                  <div>
                      <h5 class="text-raleway margin-bottom-five">Who are <span style="color: #99CC33;">we?</span></h5>
                      <p class="text-quicksand margin-top-ten">Keshari Udyog was founded back in 2016, by the C.E.O of our company Mr. Pawan Soni. He had a notion based upon Make in India and thus he started Keshari Udyog which comes under Keshari Group. Company’s name is set up upon respected Keshari Ji(mother of Mr. Pawan Soni). Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent our country to grow. We are excited to help you on the journey.
                      Illusion which many folks were having was that only china can create bamboo sticks. But we have cleared this foggy stereotype and gathered a research and development team and found that Assam produces 5-6 types of bamboos.  We have tested almost every breed of bamboo by making some incense sticks and came up with an outcome that jati bamboo is the strongest bamboo to make essentials. Shockingly this species contains more fibre than Chinese bamboo. We got the auspicious recognition by securing our place at khadi village and industries commission(KVIC), additionally, on17th august,2019, we did an employment generation awareness campaign with KVIC in Amingaon, Guwahati under the guidelines of prime minister’s employment generation programme(PMEGP) . And since then, we never looked back.
                      </p>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>
     
  <div class="container text-center bottom-text">
       <h2>THE BAMBOO THAT BENDS IS STRONGER THAN THE OAK THAT RESISTS</h2>
  </div>
          
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
                <a href="{{asset(route('policies.termsconditions'))}}">Terms and Conditions</a>
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
