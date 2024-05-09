@extends("master")
@section("content")
    <section class="container mt-4" dir="rtl">
        <div class="title text-center my-5 p-1" style="background: #F4A433;border-radius:10px">
            <h1 style="font-size: 30px">نماذج اعمالنا</h1>
        </div>
   

        @foreach($works as $work)
        <div class="programing-info mt-5" style="text-align: right">
            <div class="title">
                <h2 class="p-3 fw-bold h4" style="border-radius:12px;border-right:6px solid orange">{{$work->title}}</h2>
            </div>
            <div class="row">
                @foreach($work->items->take(4) as $item)

                    <div class="col-md-3 text-right">
                        @if($work->id==1 || $work->id==2 || $work->id==3 )
                        <div class="card  cursor" style="width: 18rem;over-flow:hidden;border:0" 
                          @if($work->id==1)
                        onclick="window.location.href='{{route('website.details',$item->id)}}'"
                        
                        @elseif($work->id==3)
                          onclick="window.location.href='{{$item->link}}'"
                          @endif
                        >
                          
                             <img src="/storage/uploads/{{explode(',',$item->image)[0]}}" class="card-img-top" alt="..." style="width:100%;">
                             
                             </div>
                             @else
                              <iframe style="width:100%;border:3px solid #ccc"
                              src="https://www.youtube.com/embed/{{$item->ylink}}">
                              </iframe>
                             @endif
                             @if($work->id==1)
                             <div class="text-center my-2">
                                <button class="btn btn-warning">{{$item->title}}</button>
                             </div>
                             @endif


                             
                             
                     </div>
                     
                @endforeach
            </div>
        </div>
        <div class="text-center my-5">
            <a class="btn btn-warning" href="{{route("work.details",$work->slug)}}">عرض المزيد من الاعمال</a>
          </div>
        @endforeach


    </section>
@endsection