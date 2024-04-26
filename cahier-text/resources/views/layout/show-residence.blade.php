
	    <section class="rooms-section spad" id="show">
        <div class="container">
            <div class="row">

               @foreach($residences as $r)
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="http://127.0.0.1:8080/files/{{$r->photo}}" alt="">
                        <div class="ri-text">
                            <h4>{{$r->name}}</h4>
                            <h3>Capacites<span>/{{$r->capacite}}</span></h3>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
