<!--================Latest Blog Area =================-->
	<section class="latest_blog_area section_gap color-bg" id="show" style="display:none;position: relative;left: -80px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2 style="font-family: Arial;" class="mt-4">
							Liste des Block
						</h2>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach($residences as $r)
				<div class="single-recent-blog col-lg-4 col-md-6 mb-2">
				<div style="border:1px solid #0c4a55;position: relative;left:3px;border-radius: 15px;" class="hover-residence">
					<div class="thumb">
						<img class="f-img img-fluid mx-auto" style="width: 100%;height: 200px;border-radius: 15px;" src="files/{{$r->photo}}" alt="">
					</div>
					<div class="bottom d-flex justify-content-between align-items-center flex-wrap mt-2">
						<div>
							<a href="#" style="font-family: Arial" class="btn btn-primary ml-2">Detail </a>
						</div>
						<div class="meta mr-2" >
							<span style="font-family: Arial;">Capacites {{$r->capacite}}</span>
						</div>
					</div>
					<a href="#">
						<h4 style="text-align: center;font-family: Arial">{{$r->name}}</h4>
					</a>
					<p style="text-align: center;font-family: Arial">{{$r->message}}</p>
				</div>
					
				</div>
				@endforeach

			</div>
		</div>
	</section>
	<!--================End Latest Blog Area =================-->