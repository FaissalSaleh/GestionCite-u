<section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            
            <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="name">Prix</label>
                  <input type="text" id="name" class="form-control ">
                </div>

                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="phone">Capacite</label>
                  <input type="text" id="capacite" class="form-control ">
                </div>
              </div>
              
              <div class="row" >

              	   <div class="form-group col-6" style="padding-right:0px;">
			            <select class="form-control" id="residence-chambre">
                    <option value="">select residences</option>
                    @foreach($residences as $r)
			                <option value="{{$r->id}}"> {{$r->name}} </option>
                    @endforeach
			            </select>
			      </div>

              	    <div class="form-group col-6" style="padding-right:0px;">
			            <select class="form-control" id="blocs">
                    <option value="">select Blocks</option>
                    @foreach($blocks as $b)
			                <option value="{{$b->id}}"> {{$b->name}} </option>
                    @endforeach
			            </select>
			         </div>

              </div>
          
              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="message">Description</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" id="valider_chambre" value="Save Now" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                </div>
              </div>
            </form>

          </div>

          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">name:</span> <span class="text-black" id="text-name"> </span></p>
                <p><span class="d-block">capacite: </span> <span class="text-black" id="text-capacite"> </span></p>

                <div style="width:100px;height:100px;border: 1px solid #eee;position: relative;right:0px;margin-bottom: 10px;" >
                  <label for="photo">
                    <img src="images/photo.png" style="width:100%;height:100px;resize: cover;" class="" id="img_residence">
                  </label>
                </div>

                <div id="div-img" style="width: 300px;height:300px;border: 1px solid #eee;position: relative;right:60px;display: none;" >
                		<img src="images/photo.png" style="width:100%;height:200px;resize: cover;" class="" id="img_residence_select">
                    <p style="display:flex;flex-direction: row;font-size: 15px;font-family: Arial;text-align: center;"><span class="ml-2 mt-2">Block : </span> <span class="mt-2" id="img-name"> </span></p>
                    <p style="display:flex;flex-direction: row;font-size: 15px;position: relative;top: -30px;font-family: Arial;text-align: center;"><span class="ml-2">capacite : </span> <span class="" id="img-capacite"> </span></p>
                     <p style="display:flex;flex-direction: row;font-size: 15px;position: relative;top: -60px;font-family: Arial;text-align: center;"><span class="ml-2">Residence : </span> <span class="" id="img-res"> </span></p>
                </div>


              </div>
            </div>
          </div>

        </div>
        <input type="file" id="photo" style="display: none;" name="">
      </div>
    </section>