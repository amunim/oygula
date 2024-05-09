@extends("admin.master")
@section("content")
    <div class="container">
        <div class="title">
            <h2>  اضافة عمل جديد</h2>
        </div>
        <div class="most-info">
            <form action="{{route("savemost")}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <input type="file" name="image" id="" class="form-control">
                    </div>

                    <div class="col-md-6 mt-2">
                        <input type="text" name="title" id="" class="form-control" placeholder="عنوان">
                    </div>
                    <div class="col-md-6 mt-2">
                        <select name="work_id" id="" class="form-control" >
                            @foreach(\App\Models\Work::get() as $work)
                                <option value="{{$work->id}}">{{$work->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mt-2">
                        <input type="text" name="link" id="" class="form-control" placeholder="رابط">
                    </div>
                    <div class="col-md-12 mt-2">
                        <textarea type="text" name="description" id="" class="form-control" placeholder="وصف">
</textarea>
                    </div>
                </div>
                <button class="btn btn-success btn-sm w-100 mt-2">حفظ</button>
            </form>
        </div>
        <div class="all-mosts mt-4">
            <div class="row">
                @foreach($mosts as $most)
                    <div class="col-md-4 text-right">
                        <div class="card shadow  cursor" style="width: 18rem;border-radius:25px;over-flow:hidden">
                            <img src="/public/storage/uploads/{{$most->image}}" class="card-img-top" alt="..." style="width:100%;border-top-left-radius:25px;width:100%;border-top-right-radius:25px">
                            <div class="card-body">
                               
                                <p class="card-text">{{$most->title}}</p>
                                <span class="badge bg-info">{{$most->work_id}}</span>
                                <a href="{{$most->link}}" class="btn shadow special-button w-100 mb-2">التفاصيل</a>

                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModaleditowner{{$most->id}}"><i class="fa fa-pencil"></i></button>
                     
  
 
                                <div class="modal fade" id="exampleModaleditowner{{$most->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                
                                        <h5 class="modal-title" id="exampleModalLabel">تعديل الصورة</h5>
                                        </div>
                                        <div class="modal-body">
                                            

                                            <form action="{{route("updatemost",$most->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method("put")
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <input type="file" name="image" id="" class="form-control" >
                                                    </div>
                                
                                                    <div class="col-md-6 mt-2">
                                                        <input type="text" name="title" id="" class="form-control" value="{{$most->title}}">
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <select name="work_id" id="" class="form-control">
                                                            @foreach(\App\Models\Work::get() as $work)
                                                                <option value="{{$work->title}}">{{$work->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <input type="text" name="link" id="" class="form-control" value="{{$most->link}}">
                                                    </div>
                                                </div>
                                                <button class="btn btn-success btn-sm w-100 mt-2">حفظ</button>
                                            </form>
                                        </div>
                                     
                                    </div>
                                    </div>
                                </div>

                                <form action="{{route("deletemost",$most->id)}}" method="post" class="d-inline-block ">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger btn-sm " onclick="return confirm('انت على وشك حذف العنصر')"><i class="fa fa-trash"></i></button>

                                </form>
                            </div>
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection