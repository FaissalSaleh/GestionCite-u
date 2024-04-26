 @include('layout.headerreservation')
  <div class="container-scroller" id="content" style="display: none;" >
    <!-- partial:partials/_navbar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include('layout.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">


          <div class="row mt-3">
              <!--================Home Banner Area =================-->
      
  <!--================End Home Banner Area =================-->
   <section class="section pb-4" style="position:relative;top: -130px;">
      <div class="container">
       
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

            <form action="#">

              <div class="row">

                <div class="col-md-6 mb-3 mb-lg-0 col-lg-10">
                  <label for="checkin_date" class="font-weight-bold text-black">Status</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>

              </div>
            </form>
          </div>


        </div>
      </div>
    </section>
  <!--================Booking Area =================-->
          <!-- Rooms Section Begin -->
    <section class="rooms-section spad" style="position:relative;top: -140px;">
        <div class="container">
            <div class="row" id="myTable">

                 @foreach($reservations as $r)
                <div class="col-lg-6 col-md-6 tr">
                    <div class="room-item">
                        <img src="http://127.0.0.1:8080/files/{{$r->chambre_photo}}" style="width: 100%;height:200px;" alt="">
                        <div class="ri-text">
                            <h4>Numero {{$r->id_chambre}}</h4>
                            <h3>{{$r->nom_chambre}} XAF<span>/Mois</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Capacites:</td>
                                        <td>{{$r->chambre_capacite}} plces</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Residence:</td>
                                        <td>{{$r->nom_residence}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Block:</td>
                                        <td>{{$r->num_block}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Occupants:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="display:flex;flex-direction: row;">
                                <a href="{{$r->id_chambre}}" style="font-size: 12px;" class="btn btn-outline-success valider" id=""> @if($r->status == '1') Valider  @endif @if($r->status == '0')Demande En cour valider maintenant  @endif  </a>

                                <a href="{{$r->id_chambre}}" style="font-size: 12px;"  class="btn btn-outline-success ml-2 text-sm annuler" id=""> @if($r->status == '1') Valider  @endif @if($r->status == '0')Demande En cour Annuler maintenant  @endif  </a>
                            </div>
                            
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
    <!-- Rooms Section End -->
  <!--================End Booking Area =================-->
          </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layout.footer')