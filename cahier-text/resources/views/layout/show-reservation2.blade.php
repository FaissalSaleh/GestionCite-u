<section class="rooms-section spad" style="position: relative;top: -130px;">
        <div class="container">
            <div class="row" id="show-reservation">
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
                                        <td>{{$r->nom_user}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Demande @if($r->status == 0) En cour @endif @if($r->status == 1) Valider @endif @if($r->status == 2) Annuler @endif</a>
                        </div>
                    </div>
                </div>
                 @empty
                     <p style="font-size: 30px;text-align: center;font-family: Arial;margin-top: 130px;" class="text-warning" >Aucune Reservations</p>
               @endforelse

            </div>
        </div>
    </section>
