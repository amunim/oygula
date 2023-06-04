<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('addCategory')}}" method="post" enctype="multipart/form-data">
            @csrf
              <input type="text" name="name" class="form-control">
              <input type="file" name="image" id="" class="form-control my-2">
              <button class="btn btn-success w-100">Save</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>