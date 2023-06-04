@extends("admin.master")
@section("content")
    <div class="container text-right">
        <div class="title text-center">
            <h2>تعديل خدمة</h2>
        </div>
        <div class="services">
            <form action="{{route("updatepost",$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="row">
                    <div class="col-md-6">
                        <label for="">صورة</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">عنوان</label>
                        <input type="text" name="title" class="form-control"value="{{$post->title}}">
                    </div>
                    <div class="col-md-12">
                        <label for="">وصف</label>
                       <textarea name="description" id="" cols="15" rows="3" class="form-control">{{$post->description}}</textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">المقال</label>
                       <textarea name="text" id="description" cols="15" rows="5" class="form-control">{{$post->text}}</textarea>
                    </div>
                </div>
                <button class="btn btn-success mt-2 w-100">تحديث</button>
            </form>
        </div>
    </div>
    @endsection