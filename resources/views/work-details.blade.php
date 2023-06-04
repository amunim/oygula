@extends("master")
@section("content")

    <section class="container text-right" dir="rtl">
        <div class="title my-3 d-flex">
            <h2 class="p-3 fw-bold h1" style="border-radius:12px;border-right:6px solid orange">{{$work->title}}</h2>
        <a  href="javascript:history.back()" class="m-color my-auto me-auto h4" style="text-decoration:none">العودة <i class=" fa fa-arrow-left"></i> </a>
        </div>

        <div class="info">
            <div class="row">
                @foreach($work->mosts()->paginate(8) as $most)
                <div class="allinfo col-md-3 my-3 num_{{$most->work->id}}" data-id="{{$most->work->id}}" >
                    <div class="mostsell-details">
                <div class="card shadow card-mostsell cursor" style="border-radius:25px;over-flow:hidden">
                    <img src="/storage/uploads/{{$most->image}}" class="card-img-top" alt="..." style="width:100%;border-top-left-radius:25px;width:100%;border-top-right-radius:25px">
                    <div class="card-body">
                       
                        <p class="card-text h2 text-center">{{$most->title}}</p>
                        <p class=" h6">{{$most->description}}</p>
                        <a href="{{$most->link}}"target="__blank" class="btn shadow special-button w-100">التفاصيل</a>
                    </div>
                    </div>
              
            </div>
        </div>
                @endforeach
            </div>
        </div>

@endsection
