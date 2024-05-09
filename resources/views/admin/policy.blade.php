@extends("admin.master")
@section("content")
    <div class="container">
        <div class="title text-right">
            <h2>سياسية الاستخدام</h2>
        </div>
        <div class="text">
            <form action="{{route("textp.update")}}" method="post">
                @method("put")
                @csrf
                <textarea id="description" name="policy">{{$text!=null?$text:""}}</textarea>
                <button class="btn btn-success my-2 w-100">حفظ</button>
            </form>
        </div>
    </div>
@endsection