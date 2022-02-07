<div>
    <div class="shell">
       @if(count($albums) > 0)
       <div class="container">
           <div class="row">
              @foreach($albums as $album)
            <div class="col-md-3">
              <div class="wsk-cp-product ">
                <div class="wsk-cp-img">
                  <img src="/img/album-capa/{{ $album->image_capa }}" alt="Product" class="img-fluid" />
                </div>
                <div class="wsk-cp-text">
                  <div class=" display-fluid ml-2 mt-2 mr-2 text-center">
                    <h4> {{ $album->name }} </h4>
                  </div>
                  <div class="title-product mt-2">
                    <h3> {{ $album->category }} </h3>
                  </div>
                  <div class="description-1 display-fluid ml-4 mb-4 mr-4 text-center">
                    <h4>{{ $album->description }} </h4>
                  </div>
                  <div class="card-footer">
                    <div class="wcf-left"><span class="price">Galeria </span></div>
                    <div class="wcf-right"><a href="/albums/{{ $album->id }}" class="buy-btn"><i class="bi bi-images"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endif
        </div>
      </div>
</div>
