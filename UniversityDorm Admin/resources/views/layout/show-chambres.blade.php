    <section class="hp-room-section" id="show" style="display:none;position: relative;left: 10px;">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                @foreach($chambres as $c)
                    <div class="col-lg-4 col-md-6 mt-1">
                        <div class="hp-room-item set-bg" data-setbg="files/{{$c->chambre_photo}}">
                            <div class="hr-text">
                                <h3>Numero {{$c->id}}</h3>
                                <h2>{{$c->nom_chambre}}<span> / XAF</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Capacite:</td>
                                            <td>{{$c->chambre_capacite}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Residence:</td>
                                            <td>{{$c->nom_residence}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Block:</td>
                                            <td>{{$c->num_block}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Ocupants:</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">Reservation</a>
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
    </section>
