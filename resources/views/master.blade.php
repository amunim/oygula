<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Oygola</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
        <link rel="stylesheet" href="{{asset("css/owl.carousel2.min.css")}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/add.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset("css/animation.css")}}">
        <link rel="icon" type="image/x-icon" href="{{asset("imgs/m-logo.png")}}">
 {!! htmlScriptTagJsApi() !!}
        <script src="https://use.fontawesome.com/2698787284.js"></script>

    </head>
    <body class="antialiased">
           @include("inc.navbar")
           <div class="loading">
            <div class="img ">
                <img src="{{asset("imgs/main3.gif")}}" alt="" style="width:100%;border-radius:50%" >
            </div>
           </div>
        <div> 
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" dir="rtl">
            <strong>{{ $message }}</strong>
        </div>
        @endif

        
        @foreach($errors->all() as $error)
            <li class="alert alert-danger">{{$error}}</li>
        @endforeach

            @yield('content')
        </div>
        <footer style="background: #4C4D6C;text-align:right" class="p-4" >
            <div class="row text-light">

                <div class="col-md-3 mb-md-4 mt-4 order-md-1 order-4 pc-view">
                    <div class="title" style="border-right: 3px solid #FD8C3B">
                        <h4 class="px-2 text-light fw-bold ">تواصل معنا  </h4>
                    </div>
                   <div class="socials pt-3">
                    <i onclick="window.location.href='https://twitter.com/Oygula_com '" class="fa fa-twitter fa-2x mx-3 "></i>
                    <i onclick="window.location.href='https://www.instagram.com/oygula_com/ '" class="fa fa-instagram fa-2x mx-3 "></i>

                    <i onclick="window.location.href='https://www.linkedin.com/company/oygula'" class="fa fa-linkedin fa-2x mx-3 "></i>
                    
<i onclick="window.location.href='https://wa.me/966559136504'" class="fa fa-whatsapp fa-2x mx-3 "></i>
                   </div>
                  <div class="contacting mt-md-4">
                    <div class="email">
                       +966559136504  <i class="fa fa-phone fa-lg mx-4 my-3 "></i> 
                        <br>
                      Contact@oygula.com <i class="fa fa-envelope fa-lg mx-4 my-3 "></i> 
                      <br>
                    </div>
                  </div>
                </div>

                <div class="col-md-2 col-6 mb-md-4 mt-4 order-md-2 order-3">
                    <div class="title" style="border-right: 3px solid #FD8C3B">
                        <h4 class="px-2 text-light fw-bold"> نظرة عامة </h4>
                    </div>
                    <ul class="list-unstyled">
                        <li><a href="{{route('conditions')}}"> الشروط والاحكام</a> <i class="fa fa-chevron-left px-2"></i></li>
                        <li><a href="{{route('policy')}}">سياسة الخصوصية</a> <i class="fa fa-chevron-left px-2"></i></li>
                        <li><a href="{{route('posts')}}">الاخبار</a> <i class="fa fa-chevron-left px-2"></i></li>
                         <li class="pc-view">    <div class="mt-2 text-center tax-image"> 
                            <img src="https://glam.nit.sa/front_page/images/vat-certificate.svg" alt="" style="width:25%">
                            <p>
                                <div class=" text-light">    الرقم الضريبي : 305000374600003</div>
                                <div class=" text-light"> السجل التجاري : 1128124067   </div>
        
                            </p>
                          </div></li>
                     
                    </ul>
                    
                    
                    
                    
                <div class="col-md-3 mb-md-4 mt-4 order-md-1 order-4 mob-view" style="font-size:11px">
                    <div class="title" style="border-right: 3px solid #FD8C3B">
                        <h4 class="px-2 text-light fw-bold ">تواصل معنا  </h4>
                    </div>
                   <div class="socials pt-3">
                    <i onclick="window.location.href='/'" class="fa fa-twitter fa-2x mx-2 "></i>
                    <i onclick="window.location.href='/'" class="fa fa-instagram fa-2x mx-2 "></i>
                    <i onclick="window.location.href='/'" class="fa fa-linkedin fa-2x mx-2 "></i>
                    <i onclick="window.location.href='/'" class="fa fa-whatsapp fa-2x mx-2 "></i>

                   </div>
                  <div class="contacting mt-md-4">
                    <div class="email" style="font-size:13px">
                       +966559136504  <i class="fa fa-phone fa-lg mx-3 my-3 "></i> 
                        <br>
                      Contact@oygula.com <i class="fa fa-envelope fa-lg mx-3 my-3 "></i> 
                      <br>
                    
                    </div>
                  </div>
                </div>
                    
                    
                    
                    
                    
                    
                </div>

                <div class="col-md-2 col-6 mb-md-4 mt-4 order-md-3 order-2">
                    <div class="title" style="border-right: 3px solid #FD8C3B">
                        <h4 class="px-2 text-light fw-bold"> صفحات الموقع</h4>
                    </div>
                    <ul class="list-unstyled">
                        <li><a href="/#main"> الصفحة الرئيسية</a> <i class="fa fa-chevron-left px-2"></i></li>
                        <li><a href="/#about">من نحن</a> <i class="fa fa-chevron-left px-2"></i></li>
                        <li><a href="/#our-serve">خدماتنا</a> <i class="fa fa-chevron-left px-2"></i></li>
                        <li><a href="/#our-work">اعمالنا</a> <i class="fa fa-chevron-left px-2"></i></li>
                        <li><a href="/#contact">تواصل معنا</a> <i class="fa fa-chevron-left px-2"></i></li>
                    </ul>
                    <div class="mt-2 text-center tax-image mob-view"> 
                    <img src="https://glam.nit.sa/front_page/images/vat-certificate.svg" alt="" style="width:18%!important">
                    <p>
                        <div class=" text-light">    الرقم الضريبي : 305000374600003</div>
                        <div class=" text-light"> السجل التجاري : 1128124067   </div>

                    </p>
                  </div>
                </div>

                <div class="col-md-4 order-md-4 order-1">
               <div class="row">
                <div class="col-md-6 m-auto">
                    <h1 class="m-color pc-view" style="font-size: 65px">أيجولا</h1>
                    <h1 class="m-color mob-view" style="font-size: 50px;text-align:center">أيجولا</h1>
                </div>
                <div class="col-md-6">
                    <img src="{{asset("imgs/sec-logo.png")}}" alt="" style="width: 100%">
                </div>
               <div class="col-md-12">
                <h4 class="text-center">لـلــحــلــول الـــتـقـنـيـة قـــيـــادة الابــــتـــكــار الــرقــمـي</h4>
               </div>

               </div>

                        
                    </div>

                </div>
         
            </div>
            
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script src="{{asset("js/owl.carousel.min.js")}}"></script>
        <script src="{{asset("js/style.js")}}"></script>
        <script src="https://www.google.com/recaptcha/enterprise.js?render=6Le74IwaAAAAAO1acbWQoUbQSSZqHM6mMUdNk0II"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6Le74IwaAAAAAO1acbWQoUbQSSZqHM6mMUdNk0II', {action: 'login'}).then(function(token) {
       
    });
});


</script>
<script src="http://127.0.0.1:8000/js/style.js"></script>

<script src="{{asset("js/animation.js")}}"></script>
              <script>
              new WOW().init();
         
         </script>
        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass:true,
                    dots:true,
                    center:false,
                    smartSpeed:350,
                    responsive:{
                    0:{
                    items:1,
                    nav:true
                    },
                    600:{
                    items:2,
                    nav:true
                    },
                    1000:{
                    items:4,
                    nav:true,
                    loop:false
                    }
                    }
                });

                $('.owl-carousel2').owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass:true,
                    dots:true,

                    responsive:{
                        0:{
                            items:1,
                            nav:true
                        },
                        600:{
                            items:2,
                            nav:true
                        },
                        1000:{
                            items:6,
                            nav:true,
                            loop:false
                        }
                    }
                });
               
            });
               
        </script>
    </body>
</html>
