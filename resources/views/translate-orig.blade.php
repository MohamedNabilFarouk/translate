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

<style>

   /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
} 
</style>


<!-- content -->






<!--=================================
    Banner -->
    <!-- <section class="slider-01">
        <div class="container-fluid px-0">
          <div id="main-slider" class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($sliders as $index=>$s)
                
                <div class="swiper-slide slide-0{{$index}} align-items-center d-flex bg-overlay-black-50 header-position"  style="background-image: url({{asset('images/'.$s->image)}}); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="banner-content">
                            <div class="content text-center">
                              <h1 class="animated text-white mb-3" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="1.0s">{!! $s->title !!}</h1>
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach


            </div>
            
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="fas fa-chevron-right"></i></div>
          </div>
        </div>
      </section> -->
      <!--=================================
      Banner -->




  
      <section class="space-ptb bg-holder bg-overlay-black-90" style="background-image: url('images/bg/03.jpg');">
      <div class="container">
        <div class="find-Course">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="text-white mb-4">Search For Translated Files</h3>
            </div>
          </div>
          <div class="row" style="margin-left: 340px;">
          
            <form class="col-md-10 offset-md-1" action='{{route("translatedFiles.search")}}' method='get'>
              <div class="form-row align-items-center">
                
              <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                  <input type="text" name='name' class="form-control rounded-sm" placeholder="Search By Name">
                </div>
              <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                  <input type="text" name='code' class="form-control rounded-sm" placeholder="Search By Code">
                </div>
              
                
                <div class="col-12 col-lg-3 text-left mt-3 mt-lg-0">
                  <button class="btn btn-primary d-lg-block rounded-sm" >Search </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </section>




  @if(Session::has('msg'))
                    <div class="alert alert-danger">
                        
                   <p class='text-center'> {!! \Session::get('msg') !!}</p>
                        
                    </div>
            @endif

            <!-- <section class="space-ptb" id='doc'>

            <div class="tab">
  <button class="doc" >Documentary</button>
  <button class="trans" >Translate</button>
 
</div>

</section> -->

<section class="space-ptb ">
<ul class="nav nav-pills mb-6  justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#documentary" role="tab" aria-controls="documentary" aria-selected="true">Documentary</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#translate" role="tab" aria-controls="translate" aria-selected="false">Translate</a>
  </li>
 
</ul>
<!-- <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="documentary" role="tabpanel" aria-labelledby="documentary-tab">...</div>
  <div class="tab-pane fade" id="translate" role="tabpanel" aria-labelledby="translate-tab">...</div>
</div> -->
</section>



  <!--===== INNERPAGE-WRAPPER ====-->
     <!--=================================
    Contact Us -->

    <!-- Appointment Booking -->




    <section class="space-ptb tab-pane fade show active" id="documentary" role="tabpanel" aria-labelledby="documentary-tab">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <div class="section-title">
                <h2>{{ __('Appointment Booking') }}</h2>
               
                <!-- <p>description ........ </p> -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
                <form class="row fill-form mb-4 mb-md-0 form-flat-style"  name="frm_doc" method="post" action="{{route('doc.store')}}" enctype="multipart/form-data">
                    @csrf
                <div class="form-group col-sm-6">
                  <label>Full Name</label> 
                  <input type="text" class="form-control" value="{{old('name')}}" name="name" id="txt_name">
                </div>

              


                <div class="form-group col-sm-6">
                  <label>Email</label>
                  <input type="email" class="form-control" value="{{old('email')}}" name="email" id="txt_email">
                </div>
                

                <div class="form-group col-sm-6">
                  <label>Phone</label>
                  <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="txt_phone">
                </div>
               
                <div class="form-group col-sm-6">
                  <label>Office</label>
                    <select class="form-select form-control" id='sel_office' name='office' >
                  <option>Select Office Palace</option>
                       @foreach($doc_office as $o)
                <option value="{{$o->id}}">{{$o->office}}</option>
                       @endforeach
                    </select>
                </div>


                
                <div class="form-group col-sm-6">
                  <label>Aavailable Appointment</label>
                    <select class="form-select form-control" id='sel_appointment' name='appointment' >
                  <!-- <option>Select appointment</option> -->
                     
                    </select>
                </div>
              

                 <div class="form-group col-sm-6">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>


              </form>
            </div>
           
          </div>
        </div>
      </section>




    <!-- /Appointment Booking -->




    <section class="space-ptb tab-pane fade" id="translate" role="tabpanel" aria-labelledby="translate-tab">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <div class="section-title">
                <h2>{{ __('Translate Your File') }}</h2>
               
                <!-- <p>description ........ </p> -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
                <form class="row fill-form mb-4 mb-md-0 form-flat-style"  name="frm_contact" method="post" action="{{route('payment')}}" enctype="multipart/form-data">
                    @csrf
                <div class="form-group col-sm-6">
                  <label>Full Name</label> 
                  <input type="text" class="form-control" value="{{old('name')}}" name="name" id="txt_name">
                </div>

                <div class="form-group col-sm-6">
                  <label>Beneficiary Name</label> 
                  <input type="text" class="form-control" value="{{old('beneficiary_name')}}" name="beneficiary_name" >
                </div>


                <div class="form-group col-sm-6">
                  <label>Email</label>
                  <input type="email" class="form-control" value="{{old('email')}}" name="email" id="txt_email">
                </div>
                <input type='hidden' value='1' name='payment_type'>
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

                <div class="form-group col-sm-6">
                  <label>Phone</label>
                  <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="txt_phone">
                </div>
               
                <div class="form-group col-sm-6">
                  <label>From - To</label>
                    <select class="form-select form-control" id='sel_lang' name='language' >
                  <option>Select Translation From .. To</option>
                       @foreach($lang as $l)
                <option value="{{$l->id}}">{{$l->from_to}}</option>
                       @endforeach
                    </select>
                <label class="text-center"style="color:red; font-size:12px" id="lang_err"></label>
                </div>


                <div class="form-group col-sm-6">
                  <label>Number Of Pages</label>
                  <input type="text" class="form-control" value='0' id='page_no' name="page_no" >
                  <label class="text-center"style="color:red; font-size:12px" id="page_err"></label>
                </div>

                <div class="form-group col-sm-6">
                  <label>Number Of Copies</label>
                  <input type="number" class="form-control" value='0'  id='copy_no' name="copy_no" >
                  <label class="text-center"style="color:red; font-size:12px" id="copy_err"></label>
                </div>

                <!-- <div class="form-group col-sm-6">
                <label>Deliver</label>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" name='delivery' id='deliver' value='1'  >
                        <label class="form-check-label" for="deliver">
                            Need To Deliver Hard Copy 
                        </label>
                </div>

                
                </div> -->



                <div class="form-group col-sm-6">
                  <label>Your file</label>
                  <input type="file" class="form-control"  name="file" id="file">
                </div>

                <div class="form-group col-sm-6">
                  <label>Type</label>
                  <select class="form-select form-control"  name='type' aria-label="Default select example" id='type'>
                        <option value="online">Online</option>
                        <option value="deliver">Deliver To Address</option>
                        <option value="pick-up">Pick-up Form Office</option>
                        <option value="attach">Attach To order</option>
                        
                    </select>
                </div>

                <div id='extra' class='col-md-6'>
                  <!-- address -->
                  <div class="form-group col-sm-6" id='deliver_address'>
                    <label>Shipping Address</label>
                    <input type="text" class="form-control"    name="deliver_address" >
                  </div>
                   <!-- phone -->
                    <div class="form-group col-sm-6" id='deliver_phone'>
                      <label>Shipping Phone</label>
                      <input type="text" class="form-control"    name="deliver_phone" >
                    </div>

                       <!-- pickup_office -->
                   <div class="form-group col-sm-6" id='pickup_office'>
                      <label>Pick-Up Office</label>
                      <select class="form-select form-control" id='sel_pickup_office' name='pickup_office' aria-label="Default select example" >
                      <option value=''>Select Office Palace</option>
                       @foreach($translate_office as $o)
                        <option value="{{$o->id}}">{{$o->office}}</option>
                       @endforeach
                      </select>
                    </div>
              <!-- Attach Code -->
                <div class="form-group col-sm-6" id='attach_code'>
                  <label>Order Code</label>
                  <input type="text" class="form-control"    name="attach_code" >
                </div>



          </div>
              
                <div class="form-group col-sm-6">
                  <label>Note</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="" name="note" id="txt_message">{{Request::old('note')}}</textarea>
                </div>
                <div class="form-group col-sm-6">
                <a class='btn btn-success' style="border:1px solid black; background-color: transparent;" id='price'>Calculate Total Price</a>
                <!-- <span id='total'></span> -->
                <input type="hidden" class="form-control"   id='total_ip' name="total" >
                </div>
                <!-- <div class="form-group col-sm-6">
                  <button type="submit" id="submit" class="btn btn-primary">Send</button>
                </div> -->

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




              </form>
            </div>
           
          </div>
        </div>
      </section>
      <!--=================================
      Contact Us -->


<!-- team section -->

 <!--=================================
      Testimonial and Brands -->
      <section class="space-ptb">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-xl-6 text-center">
              <div class="owl-carousel testimonial" data-nav-arrow="true" data-nav-dots="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0" data-autoheight="true">
              @foreach($sliders as $s) 
              <div class="item" >
                  <div class="video-image" >
                    <img class="img-fluid w-100" src="images/categories/09.jpg" alt="">
                    <a class="popup-icon" href="{{asset('images/'.$s->image)}}" target='_blank'>
                      <i class="fa fa-eye"></i>
                      <div class="svg-item">
                       <img src="{{asset('images/'.$s->image)}}" alt='No Image' >
                        </div>
                      </a>
                    </div>
                    <div class="testimonial-item">
                      <div class="testimonial-content">
                        <h4 class="text-dark">{!!$s->title!!}</h4>
                      </div>
                      
                    </div>
                </div>
                 @endforeach
                    
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-5 align-self-center pl-0 pl-lg-5 mt-5 mt-lg-0">
                  <div class="owl-carousel testimonial" data-nav-arrow="true" data-nav-dots="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0" data-autoheight="true">
              @foreach($teams as $t) 
              <div class="item" >
                  <div class="video-image" >
                    <img class="img-fluid w-100" src="images/categories/09.jpg" alt="">
                    
                      <div class="svg-item"> 
                       <img src="{{asset('images/'.$t->image)}}" alt='No Image' style='border-radius: 50%;margin-left: 120px;'>
                        </div>
                     
                    </div>
                    <div class="testimonial-item">
                      <div class="testimonial-content">
                        <h6 class="text-center">{!!$t->bio!!}</h6>
                      </div>
                      <div class="testimonial-author">
                        <div class="testimonial-name">
                          <p class="mb-0 text-primary font-weight-bold">{{$t->name}}</p>
                          <small class="font-weight-bold">{{$t->role}}</small>
                        </div>
                      </div>
                    </div>
                </div>
                 @endforeach
                    
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!--=================================
            Testimonial and Brands -->



<!-- end content -->


<!-- footer -->

  <!--=================================
          footer-->
          <footer class="footer">
            <div class="space-ptb bg-overlay-white-97" style="background-image: url('images/bg/05.jpg');">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="footer-contact-info">
                      <div class="footer-logo mb-2">
                        <a href="index.html"><img class="img-fluid" src="images/logo-dark.svg" alt=""></a>
                      </div>
                      <div class="contact-address">
                        <div class="contact-item mb-3 mb-md-4">
                          <p>17504 Carlton Cuevas Rd, <br>Gulfport, MS, 39503</p>
                        </div>
                        <div class="contact-item mb-3 mb-md-4">
                          <h4 class="mb-0 font-weight-normal"><a href="#">+(704) 279-1249</a></h4>
                        </div>
                        <div class="contact-item">
                          <a href="#">letstalk@guruma.com</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-4 mb-4 mb-lg-0">
                    <h5 class="footer-title">Explore</h5>
                    <div class="footer-link">
                      <ul class="list-unstyled mb-0">
                        <li><a href="#">Overview</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Success story</a></li>
                        <li><a href="#">Teachers</a></li>
                        <li><a href="#">Contact us</a></li>
                      </ul>
                      <ul class="list-unstyled mb-0">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Our news</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-2 mb-4 mb-sm-0">
                    <h5 class="footer-title">Resources</h5>
                    <div class="footer-link">
                      <ul class="list-unstyled mb-0">
                        <li><a href="#">Donors</a></li>
                        <li><a href="#">Educators</a></li>
                        <li><a href="#">Professionals</a></li>
                        <li><a href="#">Become A Teacher</a></li>
                        <li><a href="#">Student Profile</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <h5 class="footer-title">Subscribe us</h5>
                    <p>Sign up to our newsletter to get the latest news and offers.</p>
                    <form>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email*">
                      </div>
                      <button type="submit" class="btn btn-sm btn-primary">Subscribe</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-bottom bg-light">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="social-icon text-md-left text-center mb-3 mb-md-0">
                      <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="copyright text-md-right text-center">
                      <p class="mb-0 small">© Copyright 2020 <a href="#">Guruma</a> All Rights Reserved.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <!--=================================
          footer-->


<!-- end footer -->
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
     $(document).ready(function(){

      $('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})

        // $('#documentary').hide();
      //  $('#translate').hide();


// doc


$('#sel_office').change(function(){
  $("#sel_appointment").empty();
                       var id = $( "#sel_office" ).val();
                       $.ajax({
                       url: 'appointment/office/'+id,
                       type: 'get',
                       dataType: 'json',
                       success: function(response){
                           var len = 0;
                           if(response['data'] != null){
                            len = response['data'].length;
                           }

                           if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){
                            // var id = response['data'][i].id;
                            var id = response['data'][i].id; //  id
                            var appointment = (response['data'][i].appointment) ; // appointment
                            var option = "<option value='"+id+"'>"+appointment+"</option>";
                            $("#sel_appointment").append(option);
                            //  $('#sub').append(sub);
                        }
                    }
                      
                       }
                   }); //end ajax
               });  


// end doc







            //  alert('hi');
            $('#deliver_address, #deliver_phone, #attach_code, #pickup_office').hide();
            $('#copy_no').val(0)
            $('#page_no').val(0);
         
            var copy_no;
            var page_no;
              var lang_price;
              var city_price;
              var office_price;
              var type;
              $('#type').change(function(){
                 type = $('#type').val();
              
               if(type == 'deliver'){
                $('#attach_code, #pickup_office').hide();
                    $('#deliver_address,#deliver_phone').show();
                 
                      }else if(type == 'pick-up'){
                        $('#deliver_address, #deliver_phone, #attach_code').hide();
                    $('#pickup_office').show();
                 
                      }if(type == 'attach'){
                        $('#deliver_address, #deliver_phone, #pickup_office').hide();
                    $('#attach_code').show();
                 
                      }  
                
            });
             
            

            $('#copy_no').keyup(function(){
                 copy_no = $('#copy_no').val();
               
            });
            $('#page_no').keyup(function(){
                 page_no = $('#page_no').val();
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
                            // alert(city_price);
                        }
                   
                    }
                }); //end ajax
            });  

                        
                // }
            
            $('#sel_lang').change(function(){
                // alert('hi');

            //    //    $('#sel_lesson').empty();
   
                  var id = $( "#sel_lang" ).val();
                //   alert(id);
                  console.log(id);
                  $.ajax({
                    url: 'langPrice/'+id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        var len = 0;
                        if(response['data'] != null){
                            // alert(response['data'].price)
                             lang_price =  response['data'].price;
                             extra_copy_price = response['data'].extra_copy_price
                        }
                   
                    }
                }); //end ajax




            });


            $('#sel_pickup_office').change(function(){
                       
                       var id = $("#sel_pickup_office").val();
                       $.ajax({
                       url: 'officePrice/'+id,
                       type: 'get',
                       dataType: 'json',
                       success: function(response){
                           var len = 0;
                           if(response['data'] != null){
                               // alert(response['data'].price)
                               office_price =  response['data'].price;
                               // alert(city_price);
                           }
                      
                       }
                   }); //end ajax
               });
            


            $('#price').click(function(){
                // alert(type);
                if((copy_no == null)){
                //    price = '<span class="danger"><p>* Number of copies and Number of Pages must be more than 0 </p></span>';  
                   event.preventDefault();
                $('#copy_err').html('* Number of copies must be more than 0');
                return false;
               }else if((page_no == null)){
                event.preventDefault();
                $('#page_err').html('* Number of pages must be more than 0');
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

               if(( type == 'deliver') && (lang_price != 0) && (copy_no != 0) && (page_no != 0)){
                var price =  parseInt(city_price)+(lang_price*copy_no*page_no);
                $('#total_ip').val(price);
                $('#total').html('<h5>'+price+' LE</h5>');
             
               }else if(( type == 'pick-up') && (lang_price != 0) && (copy_no != 0) && (page_no != 0)){
                if(copy_no == 1){
                var price =  parseInt(office_price)+(lang_price*copy_no*page_no);
                }else{
                  var price = parseInt(office_price)+ (lang_price*page_no)+((copy_no - 1)*page_no*extra_copy_price);
                }
                $('#total_ip').val(price);
                $('#total').html('<h5>'+price+' LE</h5>');
               }
               else if((lang_price != 0) && (copy_no != 0) && (page_no != 0) ){
                    if(copy_no == 1){
                        var price =  lang_price*copy_no*page_no;

                    }else{
                      var price =  (lang_price*page_no)+((copy_no - 1)*page_no*extra_copy_price);

                    }
           $('#total_ip').val(price);
        //    alert(price);
                $('#total').html('<h5>'+price+' LE</h5>');
               }

//                if( ! document.getElementById('copy_no').checked){

// document.getElementById('err').innerHTML= '*you must Agree to terms of use';

// event.preventDefault();

// return false;

// }
   
               
               
    });

  


    //  });
    }); 
 </script>