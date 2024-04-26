<!--     <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                @foreach($chambres as $c)
                    <div class="col-lg-4 col-md-6">
                         <div class="hp-room-item set-bg" data-setbg="http://127.0.0.1:8080/files/{{$c->chambre_photo}}">
                            <div class="hr-text">
                                <h3 class="text-primary fw-bold">Numero {{$c->id}}</h3>
                                <h2 class="text-primary fw-bold">{{$c->nom_chambre}}<span class="text-primary fw-bold"> / Mois</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o text-primary fw-bold">Capacite:</td>
                                            <td class=" text-primary fw-bold" >{{$c->chambre_capacite}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o text-primary fw-bold">Residence:</td>
                                            <td class="text-primary">{{$c->nom_residence}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o text-primary fw-bold">Block:</td>
                                            <td class="text-primary fw-bold">{{$c->num_block}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o text-primary fw-bold">Ocupants:</td>
                                            <td class="text-primary fw-bold">Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" data-chambre="{{$c->id_chambre}}" data-block="{{$c->id_block}}" class="primary-btn reservations-room text-primary fw-bold">Reservation</a>
                            </div>
                        </div>
                    </div>
                @endforeach


                </div>
            </div>
        </div>

        <div class="col-lg-12">
                    <div class="room-pagination">
                    	<a href="#">Prev <i class="fa fa-long-arrow-left"></i></a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
    </section> -->


    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                @foreach($chambres as $r)
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="http://127.0.0.1:8080/files/{{$r->chambre_photo}}" style="width: 100%;height:200px;" alt="">
                        <div class="ri-text">
                            <h4>Numero {{$r->id_chambre}}</h4>
                            <h3>{{$r->nom_chambre}} XAF<span>/Mois</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Capacites:</td>
                                        <td>{{$r->chambre_capacite}} places</td>
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
                                        <td>...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Reservation</a>
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
