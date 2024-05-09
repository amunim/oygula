@extends("master")
@section("content")

    <section class="container text-center shadow bg-light" dir="rtl">
        <div class="title">
           <h1 class="m-color fw-bold" style="font-size: 30px"> {{$post->title}}</h1>
        </div>
        <div class="details">
            <div class="row mx-auto text-center">
                <div class="col-md-12">
                    <p>
                        {!! $post->text !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection