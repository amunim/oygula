@extends("master")
@section('content')
    @include("inc.carousel")
    <section class="  text-center"id="">
    <div id="about" class=" py-5" style="padding-top:50px">

  
        <div class="container my-5" id="section-2">
            <div class="row">
                <div class="col-md-5 m-auto order-md-1 order-2 pc-view">
                    <div class="img wow flipInX pt-md-5">
                        <img src="{{asset("public/imgs/code3.gif")}}" alt="" style="width:100%;border-radius:45px" class="">
                    </div>
                </div>
                <div class="col-md-7 m-auto order-md-2 order-1">
                    <div class="info">
                        <div class="title m-color mb-4">
                            <div class="row mt-5 text-center">
                                <div class="col-md-8 order-md-1 order-2 about-desc" style="text-align:right;margin:auto">
                                {{---    <span class="m-color fw-bold">ألاخـتـــيـار الـــصـــحيــح لـــــشـركــــة الــبـــرمــجــــيــات تـــرفـــع مـــــن مـــســـتـــوي عــــمــلــك</span>--}}
                                    <span class="m-color fw-bold wow flash ">الاخــتـيـار الـصـحـيـح لـشـركـة الـبـرمـجـيـات تـرفـع مـن مـسـتـوي عـمـلـك</span>
                                </div>
                                <div class="col-md-4 order-md-2 order-1 about-title" style="text-align: right">
                                    <h4 class=" fw-bold title-btn  br-40 px-3 py-2 wow wobble " style="display:inline-block;">لمحة عامة عنا</h4>

                                </div>
                            </div>

                        </div>

                            <div class="row">
                                <div class="col-12 my-auto mob-view">
                                    <div class="img wow flipInX">
                                        <img src="{{asset("public/imgs/code3.gif")}}" alt="" style="width:100%;border-radius:45px" class="">
                                    </div>
                                </div>
                                <div class="col-md-6 my-2 mx-auto">
                                    <div class="card shadow br-20 wow fadeIn about-icons" style="">
                                        <div class="card-body">
                                          <h5 class="card-title">
                                            <img src="{{asset("public/imgs/quality.gif")}}" alt="" style="width:40%">
                                          </h5>
                                          <h2 class="card-subtitle mb-2 text-muted fw-bold m-color">الجودة</h2>
                                          <p class="h6">
سعى دائماً لتحقيق الإنجازات، ونبذل أعلى مستويات الأداء في

 كل ما نقوم به، ونطالب بالريادة ولا نرضى بأقل من ذلك                                          </p>
                                          
                                        </div>
                                      </div>
                                </div>

                                <div class="col-md-6 my-2">
                                    <div class="card shadow br-20 wow fadeIn about-icons" style="">
                                        <div class="card-body">
                                          <h5 class="card-title">
                                            <img src="{{asset("public/imgs/lamp.gif")}}" alt="" style="width:40%">
                                          </h5>
                                          <h2 class="card-subtitle mb-2 text-muted fw-bold m-color"> الإبداع و الإختلاف</h2>
                                          <p class=" h6">نحن نبتكر دائماً ونتميز بالاختلاف، لتقديم حلول برمجية فريدة ومبتكرة

 تلبي احتياجات عملائنا بشكل مثالي       </p>
                                        
                                        </div>
                                      </div>
                                </div>


                                <div class="col-md-6 my-2">
                                    <div class="card shadow br-20 wow fadeIn about-icons" style="">
                                        <div class="card-body">
                                          <h5 class="card-title">
                                            <img src="{{asset("public/imgs/team.gif")}}" alt="" style="width:40%">
                                          </h5>
                                          <h2 class="card-subtitle mb-2 text-muted fw-bold m-color">العمل الجماعى</h2>
                                          <p class=" h6">نحن ملتزمون بالعمل عن كثب مع 

مؤسسة العميل ونعتبر نجاحهم نجاحًا لنا</p>
                                        
                                        </div>
                                      </div>
                                </div>


                                <div class="col-md-6 my-2">
                                    <div class="card shadow br-20 wow fadeIn about-icons" style="">
                                        <div class="card-body">
                                          <h5 class="card-title">
                                            <img src="{{asset("public/imgs/timer.gif")}}" alt="" style="width:40%">
                                          </h5>
                                          <h2 class="card-subtitle mb-2 text-muted fw-bold m-color">الإلتزام</h2>
                                          <p class=" h6">يلتزم جميع أعضاء فريقنا بأدوارهم بهدف تحقيق النجاح للشركة والعملاء     </p>
                                        
                                        </div>
                                      </div>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
     
    </div>
        <div class="container " id="our-serve">
            <div class="department-info" id="section-3">
                <div class="title ">
                    <h4 class=" fw-bold title-btn  br-40 px-5 py-2 wow bounceIn" style="display:inline-block;">خــــدمـــاتــنــا</h4>
                    <p class="h5 mt-4  wow tada">
                          نوفر لكم أكثر من مجرد خدمة، فنحن نقدم حلول تقنية شاملة ومخصصة تلبي جميع احتياجاتكم

   
                    </p>
                    <p class="h5 wow tada">
                         وتساعدكم على تحقيق أهدافكم الأعمالية بكل فاعلية وكفاءة إذا أمكن 
                    </p>
                </div>
                <div class="services">
                    <div class="row">
                        <div class="col-md-4 my-2">
                            <div class="serve-info wow bounceIn about-icons">
                                <div class="card shadow br-20" style="">
                                    <div class="card-body">
                                      <h5 class="card-title">
                                        <img src="{{asset("public/imgs/ecommerce.gif")}}" alt=""  style="width:50%">
                                      </h5>
                                      <h4 class="card-subtitle mb-2 text-muted fw- m-color">أنظمة التجارة الإلكترونية  </h4>
                                      <p class=" h6">تطوير منصات التجارة الإلكترونية التي تكون جذابة ومرنة ومستدامة لأحجام حركة المرور العالية

 مع تجربة مستخدم تفاعلية. من خلال دمج أنظمة تخطيط موارد

 المؤسسات الحالية ونقاط البيع المخصصة

 ، تُثري خدماتنا الاستشارية التقنية التجربة الرقمية</p>
                                    
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2">
                            <div class="serve-info wow bounceIn about-icons">
                                <div class="card shadow br-20" style="">
                                    <div class="card-body">
                                      <h5 class="card-title">
                                        <img src="{{asset("public/imgs/products2.gif")}}" alt="" style="width:50%">
                                      </h5>
                                      <h4 class="card-subtitle mb-2 text-muted fw-bold m-color">تطوير المنتجات</h4>
                                      <p class=" h6">نقدم لكم حلولاً كاملة لتحديث أنظمة البرامج القديمة أو إنشاء منتجات برمجية

 جديدة باستخدام خبرتنا. نحن نفهم نطاق العمل، 

ونستكشف الإمكانات ونقلل من ضغوط التطوير من خلال التطبيقات الفعالة والأداء  </p>
                                    
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2">
                            <div class="serve-info wow bounceIn about-icons">
                                <div class="card shadow br-20" style="">
                                    <div class="card-body">
                                      <h5 class="card-title">
                                        <img src="{{asset("public/imgs/websiteicon.gif")}}" alt="" style="width:50%">
                                      </h5>
                                      <h4 class="card-subtitle mb-2 text-muted fw-bold m-color">تطوير مواقع الانترنت</h4>
                                      <p class=" h6">نحن نقدم تطبيقات ويب عالية الأداء

 مخصصة لتلبية احتياجات

 التطوير الفريدة لأعمال B2B و B2C وتسريع ربحية الأعمال  </p>
                                    
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2">
                            <div class="serve-info wow bounceIn about-icons">
                                <div class="card shadow br-20" style="">
                                    <div class="card-body">
                                      <h5 class="card-title">
                                        <img src="{{asset("public/imgs/ads.gif")}}" alt="" style="width:50%">
                                      </h5>
                                      <h4 class="card-subtitle mb-2 text-muted fw-bold m-color">التسويق والمبيعات</h4>
                                      <p class=" h6">سواء كان التحدي لديكم يتمثل في زيادة الوعي بعلامتكم التجارية

 أو تحقيق المزيد من النشاطات وعمليات الشراء، 

أو أي مسائل أخرى متعلقة بالمبيعات والتسويق، فإننا نمتلك الخبرة

 التسويقية اللازمة لمساعدتكم في تجاوز جميع التحديات  </p>
                                    
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2">
                            <div class="serve-info wow bounceIn about-icons">
                                <div class="card shadow br-20" style="">
                                    <div class="card-body">
                                      <h5 class="card-title">
                                        <img src="{{asset("public/imgs/uxui.gif")}}" alt="" style="width:50%">
                                      </h5>
                                      <h5 class="card-subtitle mb-2 text-muted fw-bold m-color">تصميم تجربة المستخدم وشاشة العميل UI/UX </h5>
                                      <p class=" h6">توفر سنوات خبرتنا الفنية قدرات لا مثيل لها لمساعدة أعمالك على

 تلبية احتياجاتها. ينشئ مطورو تطبيقات 

الأجهزة المحمولة الخبراء لدينا تطبيقات من

 الدرجة الأولى بأمان موثوق به وميزات غنية </p>
                                    
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2">
                            <div class="serve-info wow bounceIn about-icons">
                                <div class="card shadow br-20" style="">
                                    <div class="card-body">
                                      <h5 class="card-title">
                                        <img src="{{asset("public/imgs/mob-dev.gif")}}" alt=""style="width:50%">
                                      </h5>
                                      <h4 class="card-subtitle mb-2 text-muted fw-bold m-color">تطبيقات الهاتف الذكية</h4>
                                      <p class=" h6"> توفر سنوات خبرتنا الفنية قدرات لا مثيل لها لمساعدة أعمالك على

 تلبية احتياجاتها. ينشئ مطورو تطبيقات 

الأجهزة المحمولة الخبراء لدينا تطبيقات من

 الدرجة الأولى بأمان موثوق به وميزات غنية  </p>
                                    
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 my-2">
                            <div class="serve-info wow bounceIn about-icons">
                                <div class="card shadow br-20" style="">
                                    <div class="card-body">
                                      <h5 class="card-title">
                                        <img src="{{asset("public/imgs/design.gif")}}" alt="" style="width:50%">
                                      </h5>
                                      <h4 class="card-subtitle mb-2 text-muted fw-bold m-color">التصميم والانتاج</h4>
                                      <p class=" h6">ابتداء من محتوى شبكات التواصل الاجتماعي ومنشورات المدوّنات، 

وصولاً إلى المنتجات الإعلامية المميزة وحلول التصميم والإنتاج المتكاملة</p>
                                    
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>

                    </div>
                </div>
            </div>
        </div>
<div id="our-work">
        <div class="container" id="section-4">
            <div class="mostsell-info">
                <div class="title mt-5 mb-3">
                    <h2 class="m-color fw-bold wow tada">اعمالنا</h2>
                </div>
                <div class="buttons">
                    <button class="btn btn-light  fillter-button0 mx-2 m-color br-20 wow fadeInRight my-1" style="border:2px solid #EE9294;" data-id="0">الكل</button>

                    @foreach($works as $work)
                        <button class="btn btn-light fillter-button1 mx-2 m-color br-20 wow bounceIn my-1" style="border:2px solid #EE9294;" data-id="{{$work->id}}">{{$work->title}}</button>
                    @endforeach
                </div>
                @foreach($works as $work)
                <div class="filtering cat_{{$work->id}} ">
                    <div class="row">
                        @foreach($work->mosts()->take(8)->orderBy("created_at","desc")->get() as $most)
                        <div class="allinfo col-md-3 my-3 num_{{$most->work->id}} col-6" data-id="{{$most->work->id}}" >
                            <div class="mostsell-details">
                        <div class="card shadow card-mostsell cursor" style="border-radius:25px;over-flow:hidden">
                            <img src="public/storage/uploads/{{$most->image}}" class="card-img-top" alt="..." style="width:100%;border-top-left-radius:25px;width:100%;border-top-right-radius:25px">
                            <hr>
                            <div class="card-body">
                               
                                <p class="card-text h2">{{$most->title}}</p>
                                <p class="card-text h6 m-color">{{$most->description}}</p>
                                <a href="{{$most->link}}"target="__blank" class="btn details-btn  text-light w-100 br-20">التفاصيل</a>
                            </div>
                            </div>
                      
                    </div>
                </div>
                @endforeach
            </div>
            <div class="more mb-5">
                <a class="btn title-btn more-btn my-1" href="{{route("work.details",$work->slug)}}">   عرض المزيد من الاعمال <i class="fa fa-plus m-color"></i></a>
            </div>
        </div>
        @endforeach
        
                <div class="mostsell">
                    <div class="row">
                        @foreach($mosts as $most)
                        <div class="allinfo col-md-3 my-3  wow bounceIn num_{{$most->work->id}} col-6" data-id="{{$most->work->id}}" >
                            <div class="mostsell-details">
                        <div class="card shadow card-mostsell cursor" style="border-radius:25px;over-flow:hidden">
                            <img src="public/storage/uploads/{{$most->image}}" class="card-img-top" alt="..." style="width:100%;border-top-left-radius:25px;width:100%;border-top-right-radius:25px">
                            <hr>

                            <div class="card-body">
                               
                                <p class="card-text h2">{{$most->title}}</p>
                                <p class=" h6 mob-view m-color">{{Str::limit($most->description,20)}}</p>
                                <p class=" h5 pc-view m-color">{{$most->description}}</p>
                                <a href="{{$most->link}}"target="__blank" class="btn details-btn m-border text-light w-100 br-20">التفاصيل</a>
                            </div>
                            </div>
                      
                    </div>
                </div>
                @endforeach
            </div>
            <div class="more mb-5">
                <a class="btn title-btn more-btn my-1" href="{{route("work.details","كل-الاعمال")}}">   عرض المزيد من الاعمال <i class="fa fa-plus m-color"></i></a>
            </div>
        </div>
        </div>
    </div>
</div>
   
    </section>
    <div class="container" id="contact">
       <div class="row" id="section-5">
        <div class="col-md-8">
            <div class="title mb-4" style="text-align: center;" >
                <h4 class=" fw-bold title-btn  br-40 px-5 py-2 text-center wow bounceIn" style="display:inline-block;">تواصل معنا</h4>  
  <div class=" my-4 wow fadeIn mob-view ">
            <img src="{{asset("public/imgs/abouticon.gif")}}" alt="" style="width: 100%" >
        </div>
                <p class="h6 wow tada text-dark">
                     تستطيع التواصل معنا للحصول على المزيد من المعلومات 
                </p>
            </div>
          
            <div class="row wow fadeIn">
                <div class="col-6 text-center m-color" style="text-align: right;">
                    <h5>
                        رقم للتواصل

 
                    </h5>
                    <p class="h6" style="">
                       +966559136504
                    </p>
                </div>
                <div class="col-6  text-center m-color" style="text-align: right;">
                    <h5>
                        بريدنا الإلكتروني

 
                    </h5>
                    <p class="h6" style="">
contact@oygula.com
                    </p>
                </div>
                
            </div>
              <div class="inputs w-100 m-auto py-3">
                <form action="{{route("message")}}" class="wow bounceIn" method="post">
                    @csrf
                    <input type="text" name="name" class="form-control my-2 p-2 br-20"
                     id="input1" placeholder="الإسم" style="text-align: right;border:2px solid #999">
                    <input type="text" name="email" class="form-control my-2 p-2 br-20"
                     id="input2" placeholder="البريد الإلكتروني" style="text-align: right;border:2px solid #999">
                    <input type="text" name="mobile" class="form-control my-2 p-2 br-20"
                     id="input3" placeholder="رقم هاتف للتواصل " style="text-align: right;border:2px solid #999">
                    <textarea name="message"  cols="5" rows="4" id="input4" class="form-control my-2 br-20" placeholder="الرسالة"style="text-align: right;border:2px solid #999"></textarea>
                    <div class="right-p confirm text-center" style="text-align:center;width:100%">
                        <button class="btn details-btn  text-light  br-20 w-25" id="emcee" style="position:relative"><i class="fa fa-send"></i> ارسال </button>
                        {!! htmlFormSnippet() !!}                    </div>
                    
                </form>
            </div>
        </div>
        <div class="col-md-4 my-auto wow fadeIn pc-view">
            <img src="{{asset("public/imgs/abouticon.gif")}}" alt="" style="width: 100%" >
        </div>
      
       </div>
    </div>
@endsection