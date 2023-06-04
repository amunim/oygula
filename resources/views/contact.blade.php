@extends("master")
@section("content")
    <section class="container my-5">
        <div class="row">
            
            
            <div class="col-md-5">
                <div class="map">
                    <img src="{{asset("imgs/img1.jpg")}}" alt="" style="width:100%">
                </div>
            </div>
            <div class="col-md-7 text-right" dir="rtl">
                <div class="title">
                    <h1 class="h4 fw-bold m-color">ارسل لنا رسالة</h1>
                </div>
                <div class="form text-center">
                    <form action="" class="d-block">
                        @csrf
                        <div class="">
                            <input type="text" class="form-control p-2 my-4 br-20 bg-light" name="name" placeholder="الاسم">
                            <input type="text" class="form-control p-2 my-4 br-20 bg-light" name="email" placeholder="الايميل">
                            <input type="text" class="form-control p-2 my-4 br-20 bg-light" name="mobile" placeholder="رقم الموبايل">
                            <textarea name="description" id="" cols="30" rows="5" placeholder="تفاصيل الطلب مثال: اريد موقع اليكتروني" 
                            class="form-control p-2 my-4 br-20 bg-light"></textarea>
                            <button class="btn special-button btn-lg">ارسل <i class="fa fa-send"></i></button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
     
    </section>
@endsection