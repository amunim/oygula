@extends("master")
@section("content")
    <div class="container mt-5">
        <div class="title text-center shadow p-4" style="background: #e3e3e3;color:orange">
            <h2>شروط الاستخدام</h2>
        </div>
        <div class="info mt-5">{!! $text->condition !!}</div>
    </div>
@endsection