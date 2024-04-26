<!--================Latest Blog Area =================-->
	<section class="latest_blog_area section_gap color-bg" id="show" style="position:relative;top:-30px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2 class="mt-1 text-uppercase" style="text-align: left;font-family: Arial;font-size: 22px;">
							<em>Liste de vos Reservations</em>
						</h2>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach($chambres as $r)
				<div class="single-recent-blog col-lg-4 col-md-6 mb-2">
				<div style="border:1px solid #0c4a55;position: relative;left:3px;border-radius: 15px;" class="hover-residence">
					<div class="thumb" id="">
						<img class="f-img img-fluid mx-auto" style="width: 100%;height: 200px;border-radius: 15px;" src="http://127.0.0.1:8080/files/{{$r->chambre_photo}}" alt="">
					</div>
					<div class="bottom d-flex justify-content-between align-items-center flex-wrap mt-2">
						<div>
							<a href="#" style="font-family: Arial" data-nom="{{$r->name}}" class="btn btn-primary openModal">@if( $r->status == 0) En cour @endif @if( $r->status == 1) Valider @endif </a>
						</div>
						<div class="meta mr-2">
							<span style="font-family: Arial">Capacites {{$r->chambre_capacite}}</span>
						</div>
					</div>
					<a href="#">
						<h4 style="text-align: center;font-family: Arial">Numero {{$r->id_chambre}}</h4>
					</a>
					<p style="text-align: center;font-family: Arial">Residence {{$r->nom_residence}} & Block {{$r->num_block}}</p>
				</div>

				</div>
				@endforeach

			</div>
		</div>
	</section>
	<!--================End Latest Blog Area =================-->


	    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="http://127.0.0.1:8080/files/{{$r->chambre_photo}}" alt="">
                        <div class="ri-text">
                            <h4>Numero {{$r->id_chambre}}</h4>
                            <h3>nom_chambre XAF<span>/Mois</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Capacites:</td>
                                        <td>{{$r->chambre_capacite}} places</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Residence:</td>
                                        <td>{{$r->nom_residence}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Block:</td>
                                        <td>{{$r->num_block}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Occupants:</td>
                                        <td>...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>

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
