@extends("master")
@section("content")

    <section class="container text-right" dir="rtl">
        <div class="title my-3">
            <h1 class="fw-bold">{{$work->title}}</h1>
        </div>
        <div class="info">
            <div class="row">
                @foreach($work->items as $item)
                        <div class="col-md-3 text-right mb-5">
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
                                    <a class="btn btn-warning" href="{{$item->link}}">{{$item->title}}</a>
                                 </div>
                                 @endif
    
    
                                 
                                 
                    </div>
                @endforeach
            </div>
        </div>

@endsection
