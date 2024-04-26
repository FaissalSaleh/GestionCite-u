<!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">ICT © UniversityDorm.com 2024</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="/" target="_blank">UniversityDorm</a></span>
          </div>
        </footer> -->
        <input type="hidden" value="0" id="scroll_next" name="">
        <input type="hidden" value="0" id="scroll_prev" name="">
        <!-- partial -->
      </div>
      <!-- main-panel ends moment.min -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 <div id="animationContainer"></div>
 <input type="hidden" id="p" value="ict.png"  name="">
  <!-- base:js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lottie.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
 <!--  <script src="js/jquery.nice-select.min.js"></script> -->
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/main2.js"></script>

  <script src="js/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope.pkgd.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/owl-carousel-thumb.min.js"></script>
  <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>

    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>


    <script src="js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
    <script src="js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script><script>eval(mod_pagespeed_gFRwwUbyVc);</script>
    <script>eval(mod_pagespeed_rQwXk4AOUN);</script>
    <script>eval(mod_pagespeed_U0OPgGhapl);</script>
    <script src="js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js"></script><script>eval(mod_pagespeed_6Ja02QZq$f);</script>
    <script>eval(mod_pagespeed_KxQMf5X6rF);</script>

  <!-- endinject -->
  <!-- plugin js for this page  -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/moment.min.js"></script>
  <!-- End custom js for this page-->
  <script type="text/javascript">
     function afficherHeure() {
            var maintenant = new Date();
            var heure = maintenant.getHours();
            var minutes = maintenant.getMinutes();
            var secondes = maintenant.getSeconds();
            
            // Ajoute un zéro devant les chiffres < 10
            heure = heure < 10 ? '0' + heure : heure;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            secondes = secondes < 10 ? '0' + secondes : secondes;

            var heureAffichee = heure + ':' + minutes + ':' + secondes;
            $("#heure").text(heureAffichee);
        }
  jQuery(document).ready(function($) {
      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
          var animation = lottie.loadAnimation({
              container: document.getElementById('animationContainer'),
              renderer: 'svg',
              loop: true,
              autoplay: false,
              path: 'animation.json' // Chemin de votre fichier d'animation JSON
            });

      $('#animationContainer').show('fast', function() {
         animation.play();
      });
     
      setTimeout(()=>{
          $('#animationContainer').hide();
          $('#chag').hide();
         $('#content').slideDown('slow'); // Afficher le contenu de la page une fois qu'il est prêt
      },1000)
      $('#search_user').keydown(function(event) {
       let value = $(this).val()
        var fd = new FormData();
        fd.append('value',value);
        fd.append('_token',CSRF_TOKEN);
       $.ajax({
         url: '{{route("search_user")}}',
         type: 'POST',
         dataType: 'json',
         data:fd,
          contentType: false,
          processData: false,
       })
       .done(function(data) {
        let html = '';
        let users = data['success']
      let result =  users.forEach((user,index)=>{
          html += '<li ><a class="result" href="'+user['name']+'">'+user['name']+'</a></li>';
          return html;
        })
         $('#list_user').html(html)
       })
       .fail(function(error) {
         console.log(error);
       })
       .always(function() {
         $('.result').click(function(e) {
           e.preventDefault()
           let name = $(this).attr('href');;
           console.log(name)
           $('#search_user').val(name)
            $('#list_user').html('')
         });
       });
       
      });

      $('#submit_search').click(function(e) {
         e.preventDefault()
         let value = $('#search_user').val()
        var fd = new FormData();
        fd.append('value',value);
        fd.append('_token',CSRF_TOKEN);
         $.ajax({
           url:'{{route("search_user")}}',
           type:'POST',
           dataType:'json',
           data:fd,
           contentType: false,
           processData: false,
         })
         .done(function(data) {
              let html = '';
        let users = data['success']
      let result =  users.forEach((user,index)=>{
          html += '<div class="comment-option col-lg-6"> <div class="single-comment-item first-comment"><div class="sc-author"><img src="http://127.0.0.1:8000/files/'+user['photo']+'" alt=""></div><div class="sc-text"><span>'+user['created_at']+'</span> <h5>'+user['name']+'</h5><p style="display: flex;flex-direction: column;" > <span>'+user['email']+'</span><span>'+user['tel']+'</span><span>'+user['sexe']+'</span></p><a href="#" class="comment-btn">Voir +</a><a href="#" class="comment-btn">Supprimer</a></div></div><hr></div>';
          return html;
        })
         $('#row').html(html)
           console.log(data);
         })
         .fail(function(error) {
           console.log(error);
         })
         .always(function() {
           console.log("complete");
         });
         
      });

             $('#photo').change(function(event) {
       let file = $(this).get(0).files[0]
       if (file) {
        var reader = new FileReader()

        reader.onload = function(){
          $('#img_residence').attr('src', reader.result);
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
               
      });

        $('#name').keyup(function(event) {
         let value = $(this).val()
         $('#text-name').text(value)
        });

          $('#capacite').keyup(function(event) {
         let value = $(this).val()
         $('#text-capacite').text(value)
        });

        $('#valider_residence').click(function(e) {
          $('#loader').show('400')
          e.preventDefault()
          let name = $('#name').val()
          let capacite = $('#capacite').val()
          let message = $('#message').val()
          let file = $('#p').val()
          let residence = $('#residence').val()
                var fd = new FormData();

                fd.append('name',name);
                fd.append('capacite',capacite);
                fd.append('message',message);
                fd.append('file',file);
                fd.append('residence',residence);
                fd.append('_token',CSRF_TOKEN)

                    

            jQuery.ajax({
              url: '{{ route("valider_residence") }}',
              type: 'POST',
              data:fd,
              contentType: false,
              processData: false,
              dataType: 'json',
              complete: function(xhr, textStatus) {
             $('#loader').hide('400')
              },
              success: function(data, textStatus, xhr) {
                if(data['error']){
                   let textEroor = '';
                let json = JSON.parse(xhr.responseText)

                json['error'].forEach((item,index)=>{
                    textEroor +='<p class="text-danger" >'+item+'</p>';
                })
                  Swal.fire({
                       icon: 'error',
                       title: 'residence ',
                       html:textEroor,
                       preConfirm: () => {console.log("object")}
                   })
                }else{
                    Swal.fire({
                       icon: 'success',
                       title: 'residence ',
                       text:'created successfully',
                       preConfirm: () => {RefreshTableHref()}
                   })
                }
               
              },
              error: function(xhr, textStatus, errorThrown) {
               console.log(xhr.responseText)
              }
            });
  });



         function RefreshTableHref() {
          $('#name').val("")
          $('#capacite').val("")
          $('#message').val("")
          $('#img_residence').attr('src', "images/photo.png");
          $('#text-name').text("")
          $('#text-capacite').text("")
        }

        function RefreshTableBloc() {
          $('#name').val("")
          $('#capacite').val("")
          $('#message').val("")
          $('#residence').val("")
          
          $('#img_residence').attr('src', "images/photo.png");
          $('#div-img').hide();
          $('#text-name').text("")
          $('#text-capacite').text("")

          $('#img-name').text("")
          $('#img-capacite').text("")
        }

    /*menu-residence*/
        $('.menu-residence').click(function(e) {
          e.preventDefault()
          $(this).addClass('active')
          let $this = $(this)
          $('.menu-residence').not($this).removeClass('active')

          let menu = $(this).attr('data-menu');
          if (menu == 'show') {
            $('#next').hide('400')
            $('#show').show('400')
          }
          if (menu == 'next') {
            $('#show').hide('400')
            $('#next').show('400')
          }
        });

        $('#residence').change(function(event) {
            let residence = $(this).val()

             var fd = new FormData();

             fd.append('residence',residence);
             fd.append('_token',CSRF_TOKEN)


            jQuery.ajax({
              url: '{{ route("select_residence") }}',
              type: 'POST',
              dataType: 'json',
              contentType: false,
              processData: false,
              data:fd,
              complete: function(xhr, textStatus) {
                //called when img_residence_select complete
                console.log(xhr)
              },
              success: function(data, textStatus, xhr) {
              $('#div-img').show('400')
               $('#img_residence_select').attr('src', 'files/'+data['photo']);
               $('#img-name').text(' '+data['name'])
               $('#img-capacite').text(' '+data['capacite'])
                console.log(data['photo'])
              },
              error: function(xhr, textStatus, errorThrown) {
                console.log(xhr)
              }
            });
            
        });


$('#valider_block').click(function(e) {
          $('#loader').show('400')
          e.preventDefault()
          let name = $('#name').val()
          let capacite = $('#capacite').val()
          let message = $('#message').val()
          let file = $('#p').val()
          let residence = $('#residence').val()
                var fd = new FormData();

                fd.append('name',name);
                fd.append('capacite',capacite);
                fd.append('message',message);
                fd.append('file',file);
                fd.append('residence',residence);
                fd.append('_token',CSRF_TOKEN)

                    

            jQuery.ajax({
              url: '{{ route("valider_block") }}',
              type: 'POST',
              data:fd,
              contentType: false,
              processData: false,
              dataType: 'json',
              complete: function(xhr, textStatus) {
             $('#loader').hide('400')
              },
              success: function(data, textStatus, xhr) {
                if(data['error']){
                   let textEroor = '';
                let json = JSON.parse(xhr.responseText)

                json['error'].forEach((item,index)=>{
                    textEroor +='<p class="text-danger" >'+item+'</p>';
                })
                  Swal.fire({
                       icon: 'error',
                       title: 'Block ',
                       html:textEroor,
                       preConfirm: () => {console.log("object")}
                   })
                }else{
                    Swal.fire({
                       icon: 'success',
                       title: 'Block ',
                       text:'created successfully',
                       preConfirm: () => {RefreshTableBloc()}
                   })
                }
               
              },
              error: function(xhr, textStatus, errorThrown) {
               console.log(xhr.responseText)
              }
            });
  });



  
          $('#residence-chambre').change(function(event) {
            let residence = $(this).val()

             var fd = new FormData();

             fd.append('residence',residence);
             fd.append('_token',CSRF_TOKEN)


            jQuery.ajax({
              url: '{{ route("select_residence_chambre") }}',
              type: 'POST',
              dataType: 'json',
              contentType: false,
              processData: false,
              data:fd,
              complete: function(xhr, textStatus) {
                //called when img_residence_select complete
                console.log("complete")
              },
              success: function(data, textStatus, xhr) {
                let html = '<option value="">select Blocks</option>';
                data.forEach((item,index)=>{
                  html += '<option value="'+item['id']+'"> '+item['name']+' </option>';
                })
                $('#blocs').html(html)
              console.log(data)
              },
              error: function(xhr, textStatus, errorThrown) {
                console.log(xhr)
              }
            });
            
        });

    $('#blocs').change(function(event) {
            let block = $(this).val()

             var fd = new FormData();

             fd.append('block',block);
             fd.append('_token',CSRF_TOKEN)


            jQuery.ajax({
              url: '{{ route("select_blocb_chambre") }}',
              type: 'POST',
              dataType: 'json',
              contentType: false,
              processData: false,
              data:fd,
              complete: function(xhr, textStatus) {
                //called when img_residence_select complete
                console.log(xhr)
              },
              success: function(data, textStatus, xhr) {
              $('#div-img').show('400')
               $('#img_residence_select').attr('src', 'files/'+data[0]['photo']);
               $('#img-name').text(' '+data[0]['nom'])
               $('#img-res').text(' '+data[0]['name'])
               $('#img-capacite').text(' '+data[0]['capacite'])
                console.log(data[0])
              },
              error: function(xhr, textStatus, errorThrown) {
                console.log(xhr)
              }
            });
            
        });

    $('#valider_chambre').click(function(e) {
          $('#loader').show('400')
          e.preventDefault()
          let name = $('#name').val()
          let capacite = $('#capacite').val()
          let message = $('#message').val()
          let file = $('#p').val()
          let residence = $('#residence-chambre').val()
          let block = $('#blocs').val()
                var fd = new FormData();

                fd.append('name',name);
                fd.append('capacite',capacite);
                fd.append('message',message);
                fd.append('file',file);
                fd.append('residence',residence);
                fd.append('block',block);
                fd.append('_token',CSRF_TOKEN)

                    

            jQuery.ajax({
              url: '{{ route("valider_chambre") }}',
              type: 'POST',
              data:fd,
              contentType: false,
              processData: false,
              dataType: 'json',
              complete: function(xhr, textStatus) {
             $('#loader').hide('400')
              },
              success: function(data, textStatus, xhr) {
                if(data['error']){
                   let textEroor = '';
                let json = JSON.parse(xhr.responseText)

                json['error'].forEach((item,index)=>{
                    textEroor +='<p class="text-danger" >'+item+'</p>';
                })
                  Swal.fire({
                       icon: 'error',
                       title: 'Chambre ',
                       html:textEroor,
                       preConfirm: () => {console.log("object")}
                   })
                }else{
                    Swal.fire({
                       icon: 'success',
                       title: 'Chambre ',
                       text:'created successfully',
                       preConfirm: () => {RefreshTableBloc()}
                   })
                }
               
              },
              error: function(xhr, textStatus, errorThrown) {
               console.log(xhr.responseText)
              }
            });
    });

        function RefreshTableChambre() {
          $('#name').val("")
          $('#capacite').val("")
          $('#message').val("")
          $('#blocs').val("")
          $('#residence-chambre').val("")
          
          $('#img_residence').attr('src', "images/photo.png");
          $('#div-img').hide();
          $('#text-name').text("")
          $('#text-capacite').text("")

          $('#img-name').text("")
          $('#img-capacite').text("")
        }


        $('.openModal').click(function(e) {
          e.preventDefault()
            $('.modal').fadeIn();
             let nom = $(this).attr('data-nom');
            let id = $(this).attr('data-id');
            console.log(nom)
            $("#nom_user").text(nom)

                var fd = new FormData();

                fd.append('id',id);
                fd.append('_token',CSRF_TOKEN)


            $.ajax({
              url: '{{ route("detail_user_reservation") }}',
                type: 'POST',
                data:fd,
                contentType: false,
                processData: false,
                dataType: 'html',
            })
            .done(function(data) {
              //$("#detail_user_r").html(data)
              console.log(data);
            })
            .fail(function(error) {
              console.log(error);
            })
            .always(function() {
              /**/
              $('#Annuler').click(function(e) {
               e.preventDefault()
               let idr = $(this).attr('href');
               fd.append('idr',idr);
               $.ajax({
                 url: '{{ route("Annuler") }}',
                type: 'POST',
                data:fd,
                contentType: false,
                processData: false,
                dataType: 'json',
               })
               .done(function(data) {
                 console.log(data);
                   Swal.fire({
                       icon: 'success',
                       title: 'demande ',
                       text:'Annuler avec success',
                       preConfirm: () => {Refresh()}
                   })
               })
               .fail(function(error) {
                 console.log(error);
               })
               .always(function() {
                 console.log("complete");
               });
               
              });

               $('#valider').click(function(e) {
               e.preventDefault()
               let idr = $(this).attr('href');
               fd.append('idr',idr);
               $.ajax({
                 url: '{{ route("valider") }}',
                type: 'POST',
                data:fd,
                contentType: false,
                processData: false,
                dataType: 'json',
               })
               .done(function(data) {
                 console.log(data);
                 Swal.fire({
                       icon: 'success',
                       title: 'demande ',
                       text:'valider avec success',
                       preConfirm: () => {Refresh()}
                   })
               })
               .fail(function(error) {
                 console.log(error);
               })
               .always(function() {
                 console.log("complete");
               });
               
              });

            });
            
          });

  $('.close').click(function() {
        $('.modal').fadeOut();
      });

        $("#checkin_date").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable .tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
           });
        });

        function Refresh() {
          location.reload()
        }

            $("#autocomplete").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "{{ route('autocomplete') }}",
                        dataType: "json",
                        data: {
                            term: request.term
                        },
                        success: function(data) {
                            response(data);
                            console.log(data)
                        }
                    });
                },
                minLength: 2 // Nombre minimum de caractères avant de déclencher la recherche
            });
    
          $('#autocomplete').keypress(function(e) {
           console.log(e.keyCode)
           if (e.keyCode == '13') {
            let value = $(this).val()
            var fd = new FormData();

                fd.append('value',value);
                fd.append('_token',CSRF_TOKEN)
                 $.ajax({
                        url: "{{ route('submit_search') }}",
                        type: 'POST',
                        data:fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(data) {
                            console.log(data)
                            let html = '';
                            data.forEach((item,index)=>{
                                 html+='<div class="col-md-3 col-sm-6 col-xs-12 first"> <div class="shop-item-list entry"> <div class="border border-success"><img style="width:100%;height: 160px;" src="http://127.0.0.1:8000/files/'+item['photo']+'" alt=""> <div class="magnifier"></div></div><div class="shop-item-title clearfix  border border-success"> <h4><a href="course-single.html">'+item['name']+'</a></h4><div class="shopmeta"><span class="pull-left"> '+item['filiere']+'</span><div class="rating pull-right"> <span class="pull-right">'+item['tel']+'</span></div></div> </div><div class="visible-buttons"><a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a><a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a></div></div></div>';
                              })
                            $('#list').html(html)
                        }
                    });
           }
          });
         var dateDuJour = moment().format('dddd Do MMMM YYYY');
         $("#date").text(dateDuJour);
          // Affiche l'heure actuelle
            afficherHeure();

            // Met à jour l'heure chaque seconde
            setInterval(afficherHeure, 1000);

          $('.detail_use').click(function(e) {
            e.preventDefault()
            $('#modal').css('display', 'flex');
          });



                $('.openModal2').click(function(e) {
          e.preventDefault()
            $('.modal').fadeIn();
             let nom = $(this).attr('data-nom');
            let id = $(this).attr('data-id');
            console.log(nom)
            $("#nom_user").text(nom)

                var fd = new FormData();

                fd.append('id',id);
                fd.append('_token',CSRF_TOKEN)


            $.ajax({
              url: '{{ route("detail_user_reservation2") }}',
                type: 'POST',
                data:fd,
                contentType: false,
                processData: false,
                dataType: 'json',
            })
            .done(function(data) {
              $('#name').val(data['name'])
              $('#email').val(data['email'])
              $('#filiere').val(data['filiere'])
              $('#tel').val(data['tel'])
              $('#sexe').val(data['sexe'])
              $('#photo_user').attr('src', 'http://127.0.0.1:8000/files/'+data['photo']);
              if (data['studentId'] == null) {
                $('#status_reservation').html('<p class="text-uppercase text-warning text-lg-center">Aucune Reservation</p>')
              } else {
                 $('#status_reservation').html('<a href="" class="text-uppercase text-warning text-lg-center">Aucune Reservation</a>')
              }
              console.log(data);
            })
            .fail(function(error) {
              console.log(error);
            })
            .always(function() {
              /**/
             
          

            });
            
          });

           $('.valider').click(function(e) {
               e.preventDefault()
               let idr = $(this).attr('href');
               var fd = new FormData();
                fd.append('_token',CSRF_TOKEN)
               fd.append('idr',idr);
               $.ajax({
                 url: '{{ route("valider") }}',
                type: 'POST',
                data:fd,
                contentType: false,
                processData: false,
                dataType: 'json',
               })
               .done(function(data) {
                 console.log(data);
                 Swal.fire({
                       icon: 'success',
                       title: 'demande ',
                       text:'valider avec success',
                       preConfirm: () => {Refresh()}
                   })
               })
               .fail(function(error) {
                 console.log(error);
               })
               .always(function() {
                 console.log("complete");
               });
               
              });

                $('.annuler').click(function(e) {
               e.preventDefault()
               var fd = new FormData();
               let idr = $(this).attr('href');
               fd.append('idr',idr);
               $.ajax({
                 url: '{{ route("Annuler") }}',
                type: 'POST',
                data:fd,
                contentType: false,
                processData: false,
                dataType: 'json',
               })
               .done(function(data) {
                 console.log(data);
                   Swal.fire({
                       icon: 'success',
                       title: 'demande ',
                       text:'Annuler avec success',
                       preConfirm: () => {Refresh()}
                   })
               })
               .fail(function(error) {
                 console.log(error);
               })
               .always(function() {
                 console.log("complete");
               });
               
              });

  });
  </script>
</body>

</html>

