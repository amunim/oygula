<div class="modal fade " id="exampleModalweb{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          <h5 class="modal-title" id="exampleModalLabel">{{$item->title}}</h5>
        </div>
        <div class="modal-body">
         
          
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                  <img src="/storage/uploads/{{$item->image}}" class="d-block w-100" alt="..." style="width:100%">
              </button>
              @if($item->image1)
              <button type="button" data-bs-target="#carouselExampleIndicators"
               data-bs-slide-to="1" aria-label="Slide 2">
                  <img src="/storage/uploads/{{$item->image1}}" class="d-block w-100" alt="..." style="width:100%">
              </button>
              @endif
          
              @if($item->image2)
              <button type="button" data-bs-target="#carouselExampleIndicators"
               data-bs-slide-to="2" aria-label="Slide 3">
                <img src="/storage/uploads/{{$item->image2}}" class="d-block w-100" alt="..." style="width:100%">
              </button>
              @endif

              @if($item->image3)
              <button type="button" data-bs-target="#carouselExampleIndicators"
               data-bs-slide-to="3" aria-label="Slide 4">
                <img src="/storage/uploads/{{$item->image3}}" class="d-block w-100" alt="..." style="width:100%">
              </button>
              @endif

              @if($item->image4)
              <button type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="4" aria-label="Slide 5">
               <img src="/storage/uploads/{{$item->image4}}" class="d-block w-100" alt="..." style="width:100%">
             </button>
             @endif
             
             @if($item->image5)
             <button type="button" data-bs-target="#carouselExampleIndicators"
             data-bs-slide-to="5" aria-label="Slide 6">
              <img src="/storage/uploads/{{$item->image5}}" class="d-block w-100" alt="..." style="width:100%">
            </button>
            @endif

            @if($item->image6)
            <button type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="6" aria-label="Slide 7">
             <img src="/storage/uploads/{{$item->image6}}" class="d-block w-100" alt="..." style="width:100%">
           </button>
           @endif

           @if($item->image7)
           <button type="button" data-bs-target="#carouselExampleIndicators"
           data-bs-slide-to="7" aria-label="Slide 8">
            <img src="/storage/uploads/{{$item->image7}}" class="d-block w-100" alt="..." style="width:100%">
          </button>
          @endif

          @if($item->image8)
          <button type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="8" aria-label="Slide 9">
           <img src="/storage/uploads/{{$item->image8}}" class="d-block w-100" alt="..." style="width:100%">
         </button>
         @endif

         @if($item->image9)
         <button type="button" data-bs-target="#carouselExampleIndicators"
         data-bs-slide-to="9" aria-label="Slide 10">
          <img src="/storage/uploads/{{$item->image9}}" class="d-block w-100" alt="..." style="width:100%">
        </button>
        @endif

        @if($item->image10)
        <button type="button" data-bs-target="#carouselExampleIndicators"
         data-bs-slide-to="10" aria-label="Slide 11">
          <img src="/storage/uploads/{{$item->image10}}" class="d-block w-100" alt="..." style="width:100%">
        </button>
        @endif
      
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/storage/uploads/{{$item->image}}" class="d-block w-100" alt="..." style="width:100%">

              </div>

              @if($item->image1)
              <div class="carousel-item">
                <img src="/storage/uploads/{{$item->image1}}" class="d-block w-100" alt="..." style="width:100%">
              </div>
              @endif

              @if($item->image2)
              <div class="carousel-item">
                <img src="/storage/uploads/{{$item->image2}}" class="d-block w-100" alt="..." style="width:100%">
              </div>
              @endif

              @if($item->image3)
              <div class="carousel-item">
                <img src="/storage/uploads/{{$item->image3}}" class="d-block w-100" alt="..." style="width:100%">
              </div>
             @endif

             @if($item->image4)
              <div class="carousel-item">
                <img src="/storage/uploads/{{$item->image4}}" class="d-block w-100" alt="..." style="width:100%">
              </div>
             @endif


             @if($item->image5)
              <div class="carousel-item">
                <img src="/storage/uploads/{{$item->image5}}" class="d-block w-100" alt="..." style="width:100%">
              </div>
             @endif


             @if($item->image6)
              <div class="carousel-item">
                <img src="/storage/uploads/{{$item->image6}}" class="d-block w-100" alt="..." style="width:100%">
              </div>
             @endif

             @if($item->image7)
              <div class="carousel-item">
                <img src="/storage/uploads/{{$item->image7}}" class="d-block w-100" alt="..." style="width:100%">
              </div>
             @endif

             @if($item->image8)
             <div class="carousel-item">
               <img src="/storage/uploads/{{$item->image8}}" class="d-block w-100" alt="..." style="width:100%">
             </div>
            @endif

            @if($item->image9)
            <div class="carousel-item">
              <img src="/storage/uploads/{{$item->image9}}" class="d-block w-100" alt="..." style="width:100%">
            </div>
           @endif

           @if($item->image10)
           <div class="carousel-item">
             <img src="/storage/uploads/{{$item->image10}}" class="d-block w-100" alt="..." style="width:100%">
           </div>
          @endif

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


          
        </div>
        
      </div>
    </div>
  </div>