<!--================Latest Blog Area =================-->
	<!-- <section class="latest_blog_area section_gap color-bg" id="show" style="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2 class="mt-4">
							Liste des Residences
						</h2> 
					</div>
				</div>
			</div>

			<div class="row">
				@foreach($residences as $r)
				<div class="single-recent-blog col-lg-4 col-md-6 mb-2" >
		<div style="border:1px solid #0c4a55;position: relative;left:3px;border-radius: 15px;" class="hover-residence">
				<div class="thumb">
						<img class="f-img img-fluid mx-auto" style="width: 100%;height: 200px;border-radius: 15px;" src="http://127.0.0.1:8080/files/{{$r->photo}}" alt="">
					</div>
					<div class="bottom d-flex justify-content-between align-items-center flex-wrap mt-2">
						<div>
							<a href="detail-block/{{$r->id}}" style="font-family: Arial" class="btn btn-primary ml-2 detail-res">Detail </a>
						</div>
						<div class="meta mr-2">
							<span style="font-family: Arial;" >Capacites {{$r->capacite}}</span>
						</div>
					</div>
					<a href="#">
						<h4 style="text-align: center;font-family: Arial">{{$r->name}}</h4>
					</a>
					<p style="text-align: center;font-family: Arial" >{{$r->message}}</p>
					</div>
		
				</div>
				@endforeach

			</div>
		</div>
	</section> -->
	<!--================End Latest Blog Area =================-->

	    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>LISTES RESIDENCES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($residences as $r)
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="http://127.0.0.1:8080/files/{{$r->photo}}">
                        <div class="bi-text">
                            <span class="b-tag">RESIDENCES</span>
                            <h4><a href="detail-block/{{$r->id}}">{{$r->name}}</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i>Capacites {{$r->capacite}}</div>
                        </div>
                    </div>
                </div>
               @empty
                     <p style="font-size: 30px;text-align: center;font-family: Arial;margin-top: 130px;" class="text-warning" >Aucune Residences</p>
               @endforelse
               
              
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
