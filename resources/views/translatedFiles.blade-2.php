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
            <h1 class="breadcrumb-title mb-0 text-white">{{$translated->title ?? ""}}</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ml-auto">
              <li class="breadcrumb-item"><a href="/"><i class="fas fa-home mr-1"></i>Home</a></li>
              <li class="breadcrumb-item active"><span>{{$translated->title ?? ""}}</span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  <!--=================================
  Inner Header -->
  
  <!--=================================
    Course Details -->
    <section class="space-ptb course-details">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-xl-8">
          

            

            
   


      

           
        <h4 class="news-title mb-2">{{$translated->title ??'' }}</h4>
          
            <div><b class="mr-2">Created by </b><a href="#">{{$translated->translates->beneficiary_name ?? ''}}</a></div>
           
         
           
           
            <div class="border">
              <h6 class="text-dark px-4 py-2 bg-light mb-0">Order Now</h6>
              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
              <div class="p-4 border-top"id='order'>
                <form class="form-flat-style" action='{{route("order.translate")}}' method='post'>
                  @csrf
                  <div class="form-row">
                   <input type='hidden' name='file_id' value='{{$translated->id}}'>
                  @if($translated->mode == 0)
                  <input type='hidden' name='id' value='{{$translated->beneficiary_id}}'>
                  @endif
                    <div class="form-group col-lg-4">
                      <label>Your name</label>
                      <input type="text" name='name' value='{{old("name")}}' class="form-control" placeholder="Your name">
                    </div>
                    <div class="form-group col-lg-4">
                      <label>Your email</label>
                      <input type="email" name='email' value='{{old("email")}}'  class="form-control" placeholder="Your email">
                    </div>
                    <div class="form-group col-lg-4">
                      <label>phone</label>
                      <input type="text" name='phone' value='{{old("phone")}}'  class="form-control" id="phone" placeholder="phone">
                    </div>

                    <div class="form-group col-sm-6">
                  <label>Your city</label>
                  <select class="form-control"  name='city' id='sel_city'>
                  <option>Select City</option>
                      @foreach($cities as $c)
                      <option value='{{$c->id}}' >{{$c->name}}</option>
                      @endforeach
                  </select>
                <label class="text-center"style="color:red; font-size:12px" id="city_err"></label>
                </div>

               <input type='hidden' id='lang_price' value='{{$translated->translates->lang->extra_copy_price ?? $translated->lang->extra_copy_price }}'>
               <input type="hidden" class="form-control"   id='total_ip' name="total" >
                <div class="form-group col-sm-2">
                  <label>From page</label>
                  <input type="text" class="form-control" value='0' id='from' name="from_page" >
                  <label class="text-center"style="color:red; font-size:12px" id="from_page_err"></label>
                
                </div>
                <div class="form-group col-sm-2">
                  <label>To page</label>
                  <input type="text" class="form-control" value='0' id='to' name="to_page" >
                  <label class="text-center"style="color:red; font-size:12px" id="to_page_err"></label>
                
                </div>
                <div class="form-group col-sm-2">
                  <label> Copies No.</label>
                  <input type="number" class="form-control" value='0'  id='copy_no' name="copy_no" >
                <label class="text-center"style="color:red; font-size:12px" id="copy_err"></label>

                </div>
                <div class="form-group col-sm-6">
                <label>Deliver</label>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" name='delivery' id='deliver' value='1'  >
                        <label class="form-check-label" for="deliver">
                            Need To Deliver Hard Copy 
                        </label>
                </div>
                </div>

                    <div class="form-group col-lg-4">
                      <label> Beneficiary phone</label>
                      <input type="text" name='beneficiary_phone'   class="form-control" id="beneficiary_phone" placeholder="Beneficiary phone">
                    </div>

                    <div class="form-group col-lg-12">
                      <label>Address</label>
                      <input type="text" name='address' value='{{old("address")}}'  class="form-control" id="address" placeholder="address">

                    </div>
                    <div class="col-md-12">
                    <a class='btn btn-success' style="border:1px solid black; background-color: transparent;" id='price'>Calculate Total Price</a>
                    </div>
                  </div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
            <h4 class="modal-title text-center" id="myModalLabel">Are You Sure to Send File ? </h4>
            <hr>
               <h5> Total Price is :</h5> <span id='total'></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

                </form>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-xl-4 mt-5 mt-md-0">
            <div class="widgets">
              <div class="widget widget-price">
                <h6 class="widget-title">Info</h6>
                <div class="widget-content">
                <div class="p-4 border-top">
                      <span class="lead text-dark fw-6">File Name</span>
                      <p class="mt-2">{{$translated->title}} </p>

                      <span class="lead text-dark fw-6">Beneficiary Name</span>
                      <p class="mt-2">{{$translated->beneficiary_name}} </p>
                      <span class="lead text-dark fw-6">Code</span>
                      <p class="mt-2">{{$translated->code}} </p>

                      <span class="lead text-dark fw-6">Translator</span>
                      <p class="mt-2">{{$translated->teams->name}} </p>
                    </div>
                </div>
              </div>
              <!-- <div class="widget">
                <h6 class="widget-title">Search Classes</h6>
                <div class="widget-content">
                  <form class="form-flat-style">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search popular class">
                    </div>
                    <div class="form-check pl-0">
                      <div class="form-group select-border">
                        <select class="form-control basic-select">
                          <option value="1" selected="selected">Development</option>
                          <option value="3">Design</option>
                          <option value="4">Marketing</option>
                          <option value="2">IT & software</option>
                          <option value="2">Photography</option>
                          <option value="2">Music</option>
                          <option value="2">Personal Development</option>
                          <option value="2">Business</option>
                        </select>
                      </div>
                    </div>
                    <button type="button" class="btn btn-dark">Search</button>
                  </form>
                </div>
              </div> -->
              <!-- <div class="widget widget-course-instructor">
                <h6 class="widget-title">Course Instructor</h6>
                <div class="widget-content">
                  <div class="row">
                    <div class="col-sm-4">
                      <img class="rounded-circle img-fluid mb-2" src="images/avatar/04.jpg" alt="">
                    </div>
                  </div>
                  <span class="lead fw-6 text-dark">Felica Queen</span>
                  <p class="mb-0">Member Since May 2009</p>
                  <ul class="d-flex mb-0 list-unstyled mt-2">
                    <li><a class="btn btn-outline-dark-hover btn-sm py-1 px-2 mx-1" href="#">497 Views</a></li>
                    <li><a class="btn btn-outline-primary-hover btn-sm py-1 px-2 mx-1" href="#">795 Courses</a></li>
                    <li><a class="btn btn-outline-dark-hover btn-sm py-1 px-2 mx-1" href="#">See all course</a></li>
                  </ul>
                </div>
              </div> -->
              <!-- <div class="widget widget-course-info">
                <h6 class="widget-title">Course info</h6>
                <div class="widget-content">
                  <ul class="list">
                    <li>
                      <b>Course Date :</b>
                      <span>17 Feb 2020 - 20 May 2020</span>
                    </li>
                    <li>
                      <b>Time :</b>
                      <span>09:00 - 01:00</span>
                    </li>
                    <li>
                      <b>Duration :</b>
                      <span>90 Hours</span>
                    </li>
                    <li>
                      <b>Lectures :</b>
                      <span>23</span>
                    </li>
                    <li>
                      <b>Levels :</b>
                      <span>Beginner</span>
                    </li>
                    <li>
                      <b>Enrolled :</b>
                      <span>1874 Students</span>
                    </li>
                    <li>
                      <b>Video :</b>
                      <span>12 Hours</span>
                    </li>
                  </ul>
                </div>
              </div> -->
              <!-- <div class="widget">
                <h6 class="widget-title">Social share</h6>
                <div class="widget-content">
                  <div class="social-icon-round">
                    <ul>
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div> -->
              <!-- <div class="widget widget-tag">
                <h6 class="widget-title">Popular Classes</h6>
                <div class="widget-content">
                  <ul class="list">
                    <li><a href="#">MBA</a></li>
                    <li><a href="#">Bachelor</a></li>
                    <li><a href="#">BSc</a></li>
                    <li><a href="#">BA</a></li>
                    <li><a href="#">BBA</a></li>
                    <li><a href="#">Diploma</a></li>
                    <li><a href="#">Library</a></li>
                  </ul>
                </div>
              </div> -->
              <!-- <div class="widget">
                <h6 class="widget-title">Map location</h6>
                <div class="widget-content">
                  <iframe class="w-100 border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8402891185456!2d144.95373631584474!3d-37.81720974201458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1598418458630!5m2!1sen!2sin" style="border:0; width: 100%; height: 250px;" allowfullscreen=""></iframe>
                </div>
              </div> -->


              <div class="border mb-4">
                    <h6 class="text-dark px-4 py-2 bg-light mb-0">Description</h6>

                    <div class="p-4 border-top">
                      <span class="lead text-dark fw-6">File Description</span>
                      <p class="mt-2">{{$translated->des}} </p>
                      
                      
                    </div>
              </div>
                


            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Course Details -->
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
    
    
    $('#copy_no').val(0)
            // $('#page_no').val(0);
        //  alert('hi');  
            var copy_no;
            var from ;
            var to ;
              var lang_price = $('#lang_price').val();
              var city_price;

            $('#copy_no').keyup(function(){
                 copy_no = $('#copy_no').val();
            });
            $('#page_no').keyup(function(){
                 page_no = $('#page_no').val();
            });

            $('#from').keyup(function(){
                 from = $('#from').val();
            });

            $('#to').keyup(function(){
                 to = $('#to').val();
            });

            // if ($('#deliver').is(":checked"))
            //     {
                    // alert('hi');
                    $('#sel_city').change(function(){
                       
                    var id = $( "#sel_city" ).val();
                    $.ajax({
                    url: 'cityPrice/'+id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        var len = 0;
                        if(response['data'] != null){
                            // alert(response['data'].price)
                            city_price =  response['data'].price;
                            //  alert(city_price);
                        }
                   
                    }
                }); //end ajax
            }); 



            $('#price').click(function(){
                  // alert(lang_price);
                if((copy_no == null)){ 
                //    price = '<span class="danger"><p>* Number of copies and Number of Pages must be more than 0 </p></span>';  
                   event.preventDefault();
                $('#copy_err').html('* Number of copies must be more than 0');
                return false;
               }else if((from == null)||(to == null)){
                event.preventDefault();
                $('#to_page_err').html('* Number of pages must be more than 0');
                $('#from_page_err').html('* Number of pages must be more than 0');

                return false;

               }else if(city_price == null){
                event.preventDefault();
                $('#city_err').html('* You Have To  Choose City');
                return false;

               }else if(lang_price == null){
                event.preventDefault();
                $('#lang_err').html('* You Have To  Choose Translation Language');
                return false;

               } 

                $('#myModal').modal('show');

               if($('#deliver').is(":checked") && (lang_price != 0) && (copy_no != 0) && (from != 0)&& (to != 0)){
                var price =  parseInt(city_price)+(lang_price*copy_no*(to - from + 1));
                $('#total_ip').val(price);
                $('#total').html('<h5>'+price+' LE</h5>');
             
               }
               else if((lang_price != 0) && (copy_no != 0) && (from != 0)&& (to != 0) ){
                   
                        var price =  lang_price*copy_no*(to - from + 1);
                        $('#total_ip').val(price);
                $('#total').html('<h5>'+price+' LE</h5>');
               }

//                if( ! document.getElementById('copy_no').checked){

// document.getElementById('err').innerHTML= '*you must Agree to terms of use';

// event.preventDefault();

// return false;

// }
   
               
               
    }); 



// alert('hi');


    </script>

   