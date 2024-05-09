@extends("admin.master")
@section("content")
    <div class="container text-right">
        <div class="title text-center">
            <h2> اضافة مقال</h2>
        </div>
        <div class="services">
            <form action="{{route("savepost")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="">صورة</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">عنوان</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">وصف</label>
                       <textarea name="description" id="" cols="15" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">المقال</label>
                       <textarea name="text" id="description" cols="15" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <button class="btn btn-success mt-2 w-100">حفظ</button>
            </form>
        </div>
        <div class="all-posts">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 my-4">
                        <div class="card shadow card-mostsell cursor border p-2" style="width: 18rem;border-radius:25px;over-flow:hidden">
                            <img src="/storage/uploads/{{$post->image}}" class="card-img-top" alt="..." style="width:100%;border-top-left-radius:25px;width:100%;border-top-right-radius:25px">
                            <div class="card-body">
                               
                                <p class="card-text text-center h6">{{$post->title}}</p>
                                <p class="card-text s-color">{{$post->description}}</p>
                            </div>
                            </div>
                            <div class="settings ">
                                <button class="btn btn-warning btn-sm" onclick="window.location.href='{{route('editpost',$post->id)}}'"><i class="fa fa-pencil"></i></button>
                                
                                <form action='{{route('deletepost',$post->id)}}' class="d-inline" method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('انت على وشك حذف العنصر')"><i class="fa fa-trash"></i></button>
                                </form>
  
 
                                
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection