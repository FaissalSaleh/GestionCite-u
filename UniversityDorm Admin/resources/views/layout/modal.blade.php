<style type="text/css">
	.modal {
  position: fixed;
  z-index: 22999;
  top: 0;
  left: 0;
  width: 100vw;
  height: 105vh;
  background-color: rgba(0, 0, 0, 0.5);
  overflow: auto;
}

.modal-content {
  background-color: #fefefe;
  margin: 20vh auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  height: 100%;
  position: relative;
  top: -180px;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  margin-top: 20px;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<div class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 >Detail user  <em id="nom_user"></em></h2> 
    <div id="detail_user_r" style="position: relative;left: 80px;">
              <div class="row flex-grow">

         <!--  <div class="col-lg-4">
            <label for="photo">
              <img src="img/photo.png" id="img-photo" style="margin-top: 200px;" class="img-fluid" alt="photo">
            </label>
            <input type="file" id="photo" style="display:none;" name="">
          </div> -->
           <div class="col-lg-5 register-half-bg d-flex flex-row">
            <img id="photo_user" src="http://127.0.0.1:8000/files/1713124380_g5.jpg" style="width: 100%;height:80%;">
          </div>


             <div class="col-lg-7 d-flex align-items-center justify-content-center" style="position:relative;top: -60px;">
            <div class="auth-form-transparent text-left p-3">
              <form class="pt-3">

              
             <div class="form-group mr-4" style="width: 100%;">
                  <label>Nom complet</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" id="name" class="form-control form-control-lg border-left-0" placeholder="Nom complet">
                  </div>
                </div>


           <div class="form-group mr-4" style="width: 100%;">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" id="email" class="form-control form-control-lg border-left-0" placeholder="Email">
                  </div>
                </div>

              
                      <div class="form-group mr-4" style="width: 100%;">
                  <label>Filiere</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="icon-image text-primary"></i>
                      </span>
                    </div>
                    <input type="text" id="filiere" class="form-control form-control-lg border-left-0" placeholder="Filiere">
                  </div>
                </div>

                <div class="form-group mr-4" style="width: 100%;">
                  <label>Telephone</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="icon-signal text-primary"></i>
                      </span>
                    </div>
                    <input type="text" id="tel" class="form-control form-control-lg border-left-0" placeholder="Telephone">
                  </div>
                </div>

               
                  
               <div class="form-group" style="width: 100%;">
                  <label>Sexe</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="icon-signal text-primary"></i>
                      </span>
                    </div>
                    <input type="text" id="sexe" class="form-control form-control-lg border-left-0" placeholder="Telephone">
                  </div>
                </div>


                    

                 <div id="status_reservation">
                   
                 </div>
                </div>
              </form>

            </div>
          </div>
          
        </div>
    </div>
  </div>
 
</div>