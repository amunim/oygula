@extends("master")
@section("content")
    <section class="container mt-4"dir="rtl">
        <div class="title text-right">
             <h1 class="p-3 fw-bold"style="border-radius:12px;border-right:6px solid orange">الاخبار</h1>
        </div>
        <div class="post-info">
                   <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-3 my-4">
                        <div class="card shadow card-mostsell cursor border p-2"
                              style="border-radius:25px;over-flow:hidden">
                            <img onclick="window.location.href='{{route('post.details',$post->slug)}}'"  src="public/storage/uploads/{{$post->image}}" class="card-img-top" alt="..." style="width:100%;border-top-left-radius:25px;width:100%;border-top-right-radius:25px">
                            <div class="card-body">
                               
                                <p class=" text-center h5 fw-bold" onclick="window.location.href='{{route('post.details',$post->slug)}}'" >{{$post->title}}</p>
                                <p class=" s-color h6 s-color" onclick="window.location.href='{{route('post.details',$post->slug)}}'" >{{$post->description}}</p>
                                <div class="text-right" style="text-align: right">
                                    <p class=" my-0 p-0 fw-bold">شارك خدمتنا عبر</p>
                                    <a href="https://api.whatsapp.com//send?text={{route('post.details',$post->slug)}}" class="btn btn-success mx-1 btn-sm"><i class="fa fa-whatsapp"></i></a>
                                    <span data-link="{{route('post.details',$post->slug)}}" id="copyButton" class="btn btn-primary mx-1 btn-sm"><i class="fa fa-link"></i></span>
                                    <span id="copyMessage" style="display:none;font-size:11px"> <i class="fa fa-check text-success"></i> تم نسخ الرابط</span>

                                    <p class=" my-0 p-1 m-color"> المزيد <i class="fa fa-chevron-left"></i></p>

                                </div>
                              
                            </div>
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection