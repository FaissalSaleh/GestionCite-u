<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UniversityDorm Login</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css --> 
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
      height:10%;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 login-half-bg d-flex flex-row"></div>
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="images/favicon.png" style="height:70px;width:70px;margin-left:70px;" alt="logo"> 
                <h5 style="text-align: center;" >UniversityDorm</h5>
              </div>
              <!-- <h4>Welcome back!</h4> -->
              <form class="pt-3">
                <div class="form-group" style="width:300px;">
                  <label for="exampleInputEmail">Email</label>

                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="email" placeholder="Email">
                  </div>

                </div>
                <div class="form-group" style="width:300px;">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-info"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="passe" placeholder="Password">                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center" style="width:300px;">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="forgot" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3" style="width:300px;">
                  <a class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn" id="valider" href="/">LOGIN</a>
                </div>
               
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register" class="text-info">Create</a>
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
  <!-- container-scroller -->
  <!-- base:js -->
  @include('layout.loader')
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#valider').click(function(e) {
            e.preventDefault()
            $('#loader').show('400')
            var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
            let email = $('#email').val()
            let passe = $('#passe').val()

             var fd = new FormData();
             fd.append('email',email);
             fd.append('passe',passe);
             fd.append('_token',CSRF_TOKEN);

            jQuery.ajax({
              url: '{{ route("login") }}',
              type: 'POST',
              data:fd,
              contentType: false,
              processData: false,
              dataType: 'json',
              complete: function(xhr, textStatus) {
              console.log(xhr)
              },
              success: function(data, textStatus, xhr) {
                setTimeout(()=>{
                  $('#loader').hide('400')
                },2000)
               if(data['success']){
                  location.href = '/';
               }else {
                Swal.fire({
                       icon: 'error',
                       title: 'User ',
                       text:'email ou Password incorrect !',
                       preConfirm: () => {console.log("object")}
                   })
               }
              },
              error: function(xhr, textStatus, errorThrown) {
                 setTimeout(()=>{
                  $('#loader').hide('400')
                },2000)
               console.log(xhr.responseText)
              }
            });
            
       });
    });
  </script>
</body>

</html>
