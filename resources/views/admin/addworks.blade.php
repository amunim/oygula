@extends("admin.master")
@section("content")
    <div class="container text-right">
        <div class="title text-center">
            <h2>اضافة خدمة</h2>
        </div>
        <div class="services">
            <form action="{{route("savework")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                   
                    <div class="col-md-12">
                        <label for="">عنوان</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                   
                </div>
                <button class="btn btn-success mt-2 w-100">حفظ</button>
            </form>
        </div>
        <div class="all-works">
           <div class="row">
                @foreach($works as $work)
                    <div class="col-md-2 my-4">
                       <div class="button btn btn-outline-primary mb-2">{{$work->title}}</div>
                            <div class="settings ">
                                
                                
                                <!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalwork{{$work->id}}">
    <i class="fa fa-pencil"></i>
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalwork{{$work->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات الوظيفة</h5>
        </div>
        <div class="modal-body">
            <form action="{{route("updatework",$work->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="row">
                   
                    <div class="col-md-12">
                        <label for="">عنوان</label>
                        <input type="text" name="title" class="form-control" value="{{$work->title}}">
                    </div>
                    
                </div>
                <button class="btn btn-success mt-2 w-100">حفظ</button>
            </form>
        </div>
        
      </div>
    </div>
  </div>
                                
                                <form action='{{route('deletework',$work->id)}}' class="d-inline" method="post">
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