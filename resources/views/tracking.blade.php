
<meta charset="utf-8">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Guruma - Online Course & Education HTML Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>worldadmission</title>

<!-- Favicon -->
<link rel="shortcut icon" href="" />

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

<!-- CSS Global Compulsory (Do not remove)-->
<link rel="stylesheet" href="{{asset('css/font-awesome/all.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/flaticon/flaticon.css')}}" />
<link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}" />

<!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature) -->
<link rel="stylesheet" href="{{asset('css/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/animate/animate.min.css')}}"/>
<link rel="stylesheet" href="{{asset('css/swiper/swiper.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/magnific-popup/magnific-popup.css')}}" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>

<!-- Template Style -->
@if(App::getLocale()=='ar')
<link rel="stylesheet" href="{{asset('css/style_ar.css')}}" />
@else
<link rel="stylesheet" href="{{asset('css/style.css')}}" />
@endif


 <!--=================================
    Inner Header -->
    <section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/03.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
            <h1 class="breadcrumb-title mb-0 text-white">Track Your Translation</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ml-auto">
              <li class="breadcrumb-item"><a href="/"><i class="fas fa-home mr-1"></i>Home</a></li>
              <li class="breadcrumb-item active"><span>Tracking</span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  <!--=================================
  Inner Header -->
  

  <section class="" style='height: 555px;'>
        <div class="container-fluid px-0" style='width: 50%; padding:50px'>
       
@if($translate->status == 'Waiting')
  <div class="w3-light-grey w3-round">
    <div class="w3-container w3-blue w3-round" style="width:25%">25%</div>
  </div><br>
  <h6 class='text-center'> Waiting </h6><small>Your File in Review</small>

  @elseif($translate->status == 'Translating')

  <div class="w3-light-grey w3-round">
    <div class="w3-container w3-blue w3-round" style="width:50%">50%</div>
  </div><br>
  <h6 class='text-center'> In Translation </h6> <small>Your File in Translation stage</small>
  @elseif($translate->status == 'Translated')

  <div class="w3-light-grey w3-round">
    <div class="w3-container w3-blue w3-round" style="width:75%">75%</div>
  </div><br>
  <h6 class='text-center'>  Translated </h6><small>Your File Translated and <a href='#' id='click1' >Click Here</a> To Get Your File New Code</small>
  <h3 id='code'>{{$translate->translated_files->code ?? 'Error in Code'}}</h3>
  @elseif ($translate->status == 'Paid')
  <div class="w3-light-grey w3-round">
    <div class="w3-container w3-blue w3-round" style="width:85%">85%</div>
  </div><br>
  <h6 class='text-center'>   Paid Successfully </h6><small><a href='#' id='click2' >Click Here</a> To Get Your File New Code</small>
  <h3 id='code'>{{$translate->translated_files->code ?? 'Error in Code'}}</h3>
  @elseif ($translate->status == 'Delivered')
  <div class="w3-light-grey w3-round">
    <div class="w3-container w3-green w3-round" style="width:100%">100%</div>
  </div><br>
  <h6 class='text-center'> Delivered Successfully  </h6><small><a href='#' id='click3' >Click Here</a> To Get Your File New Code</small>
  <h3 id='code'>{{$translate->translated_files->code ?? 'Error in Code'}}</h3>
  @else
  <div class="w3-light-grey w3-round">
    <div class="w3-container w3-blue w3-round" style="width:25%">25%</div>
  </div><br>
  <h6 class='text-center'> Waiting </h6>
  @endif
</div>
</div>

   <!-- JS Global Compulsory (Do not remove)-->

 <script src="{{asset('js/popper/popper.min.js')}}"></script>
 <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

 <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
 <script src="{{asset('js/select2/select2.full.js')}}"></script>
 <script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
 <script src="{{asset('js/swiper/swiper.min.js')}}"></script>
 <script src="{{asset('js/swiperanimation/SwiperAnimation.min.js')}}"></script>
 <script src="{{asset('js/shuffle/shuffle.min.js')}}"></script>
 <script src="{{asset('js/jarallax/jarallax.min.js')}}"></script>
 <script src="{{asset('js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

 <!-- Template Scripts (Do not remove)-->

 @if(App::getLocale()=='ar')
 <script src="{{asset('js/custom_ar.js')}}"></script>
 @else
 <script src="{{asset('js/custom.js')}}"></script>
 @endif

 <script>
 $('#code').hide();
 $('#click1').click(function(){
    $('#code').show();
               }); 

               $('#click2').click(function(){
    $('#code').show();
               }); 
               $('#click3').click(function(){
    $('#code').show();
               }); 
         

 </script>

