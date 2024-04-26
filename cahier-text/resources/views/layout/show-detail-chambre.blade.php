<section class="rooms-section spad">
        <div class="container">
            <div class="row">
                @forelse($chambres as $r)
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
                            <a href="#"  data-chambre="{{$r->id_chambre}}" data-block="{{$r->id_block}}" class="primary-btn reservations text-primary fw-bold">More Details</a>
                        </div>
                    </div>
                </div>
               @empty
                     <p style="font-size: 30px;text-align: center;font-family: Arial;margin-top: 130px;" class="text-warning" >Aucun Chambres</p>
               @endforelse
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
