<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UniversityDorm Register</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/sweetalert2.min.css"/>
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <style type="text/css">
    .container-scroller{
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 20px; /* Marge autour du bloc de code */
      background-color: #f8f8f8;
      border: 1px solid #58dffc;
      border-radius: 5px;
      max-width: 90%; /* Largeur maximale du bloc de code */
      overflow: hidden; /* Ajoute une barre de défilement si le contenu dépasse */
      margin-left: 80px;
      height: 50%;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">

        <div class="row flex-grow">

         <!--  <div class="col-lg-4">
            <label for="photo">
              <img src="img/photo.png" id="img-photo" style="margin-top: 200px;" class="img-fluid" alt="photo">
            </label>
            <input type="file" id="photo" style="display:none;" name="">
          </div> -->
           <div class="col-lg-5 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">UniversityDorm ICT &copy; 2024  All rights reserved.</p>
          </div>


             <div class="col-lg-7 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="images/favicon.png" style="height:70px;width:70px;margin-left:100px;" alt="logo"> 
                <h5 style="text-align: center;" >UniversityDorm</h5>
              </div>
              <form class="pt-3">

                <div style="display:flex;flex-direction: row;width:400px;" >
             <div class="form-group mr-4" style="width: 50%;">
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

                  <div class="form-group" style="width: 50%;">
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

                </div>

          

                <div style="display:flex;flex-direction: row;width:400px;">
                      <div class="form-group mr-4" style="width: 50%;">
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

                  <div class="form-group" style="width: 50%;">
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
                </div>

               

                <div style="display:flex;flex-direction: row;width:400px;">
                  
                <div class="form-group mr-4" style="width: 50%;">
                  <label>Sexe</label>
                  <select class="form-control form-control-lg" id="sexe" id="exampleFormControlSelect2" style="padding:18px;">
                    <option>Sexe</option>
                    <option value="M" >M</option>
                    <option value="F" >F</option>
                  </select>
                </div>

                    <div class="form-group" style="width: 50%;">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" id="passe" class="form-control form-control-lg border-left-0"  placeholder="Password">                        
                  </div>
                </div>

                
                </div>
                
                <div class="form-group" >
                  
                  <div class="input-group">
                <label for="photo" style="width: 100%;">Photo
                    <div class="input-group-prepend bg-transparent" id="files">
                     <img src="img/blog/add.jpg" alt="photo" id="img-photo" class="img-thumbnail" style="width: 50px;height: 50px;" alt="">
                    </div>
                  </label>
                    <input type="file" id="photo" style="display: none;" class="form-control form-control-lg border-left-0" placeholder="Password">                        
                  </div>
                </div>

                <div class="mt-3">
                  <a class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn" id="valider" href="/">VALIDER</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <input type="hidden" id="p" value="ict.png"  name="">
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  @include('layout.loader')
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
  <!-- endinject -->
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
       $('#photo').change(function(event) {
       let file = $(this).get(0).files[0]
       if (file) {
        var reader = new FileReader()

        reader.onload = function(){
          $('#img-photo').attr('src', reader.result);
        }
        reader.readAsDataURL(file)


         var files = $('#photo')[0].files;
                     var fd = new FormData();

                     // Append data 
                     fd.append('file',files[0]);
                     fd.append('_token',CSRF_TOKEN);

                     // Hide alert 
                     $('#responseMsg').hide();

                     // AJAX request 
                     $.ajax({ 
                          url: "{{ route('uploadFile') }}",
                          method: 'post',
                          data: fd,
                          contentType: false,
                          processData: false,
                          dataType: 'json',
                          success: function(response){
                            console.log(response)
                            $('#p').val(response)
                          }, 
                          error: function(response){
                            
                                console.log(response.responseText);
                                $('#p').val(response.responseText)
                          }
                     });
       }
         // Get the selected file 
              
               
      });

       $('#valider').click(function(e) {
        $('#loader').show('400')
        e.preventDefault()
            let nom = $('#name').val()
            let email = $('#email').val()
            let filiere = $('#filiere').val()
            let tel = $('#tel').val()
            let sexe = $('#sexe').val()
            let passe = $('#passe').val()
            let file = $('#p').val()

             var fd = new FormData();
             fd.append('nom',nom);
             fd.append('email',email);
             fd.append('filiere',filiere);
             fd.append('tel',tel);
             fd.append('sexe',sexe);
             fd.append('passe',passe);
             fd.append('file',file);
             fd.append('_token',CSRF_TOKEN);

            jQuery.ajax({
              url: '{{ route("register") }}',
              type: 'POST',
              data:fd,
              contentType: false,
              processData: false,
              dataType: 'json',
              complete: function(xhr, textStatus) {
              console.log(xhr)
              },
              success: function(data, textStatus, xhr) {
                if(data['error']){
                   let textEroor = '';
                let json = JSON.parse(xhr.responseText)

                json['error'].forEach((item,index)=>{
                    textEroor +='<p class="text-danger" >'+item+'</p>';
                })
                $('#loader').hide('400')
                  Swal.fire({
                       icon: 'error',
                       title: 'User ',
                       html:textEroor,
                       preConfirm: () => {console.log("object")}
                   })
                }else{
                    Swal.fire({
                       icon: 'success',
                       title: 'User ',
                       text:'created successfully',
                       preConfirm: () => {RefreshTableHref()}
                   })
                }
               
              },
              error: function(xhr, textStatus, errorThrown) {
                $('#loader').hide('400')
               console.log(xhr.responseText)
              }
            });
            
       });
        function RefreshTableHref() {
                 location.href = '/';
               }
    });
  </script>
</body>

</html>