<!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">ICT © UniversityDorm.com 2024</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="/" target="_blank">UniversityDorm</a></span>
          </div>
        </footer> -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 <div id="animationContainer"></div> 
  <!-- base:js -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/lottie.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/template.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
<!--   <script src="js/jquery.nice-select.min.js"></script> -->
  <script src="/js/jquery-ui.min.js"></script>
  <script src="/js/jquery.slicknav.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/main2.js"></script> 
  <script src="/js/chosen.jquery.js"></script> 


    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>

  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="/vendors/chart.js/Chart.min.js"></script>
  <script src="/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="/js/dashboard.js"></script>
   <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
  <!-- End custom js for this  page-->
  <script type="text/javascript">
  jQuery(document).ready(function($) {
     var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
   
          var animation = lottie.loadAnimation({
              container: document.getElementById('animationContainer'),
              renderer: 'svg',
              loop: true,
              autoplay: false,
              path: '/animation.json' // Chemin de votre fichier d'animation JSON
            });

      $('#animationContainer').show('fast', function() {
         animation.play();
      });
     
      setTimeout(()=>{
          $('#animationContainer').hide();
          $('#chag').hide();
         $('#content').slideDown('slow'); // Afficher le contenu de la page une fois qu'il est prêt
      },2000)
       $('.openModal').click(function(e) {
            $('.modal').fadeIn();
          });

          $('.close').click(function() {
            $('.modal').fadeOut();
          });

        $('.openModal').click(function(e) {
         e.preventDefault()
         let id_residence = $(this).attr('href');
         let nom_residence = $(this).attr('data-nom');

          var fd = new FormData();
          fd.append('id_residence',id_residence);
          fd.append('_token',CSRF_TOKEN);

         jQuery.ajax({
           url: '{{route("show_block_residence")}}',
           type: 'POST',
           dataType: 'json',
           contentType: false,
           processData: false,
           data:fd,
           complete: function(xhr, textStatus) {

           /*$('.detail-chambre').click(function(e) {

            e.preventDefault()
             let id_block = $(this).attr('href'); 
             let nom_block = $(this).attr('data-nom'); 

            var formd = new FormData();
            formd.append('id_block',id_block);
            formd.append('_token',CSRF_TOKEN);

             $.ajax({
               url: '{{route("show_block_chambre")}}',
               type: 'POST',
               dataType: 'json',
               contentType: false,
               processData: false,
               data:formd,
             })
             .done(function(data) {
               let html ='<div class="container-fluid"> <div class="hp-room-items"><div class="row">';
               data.forEach((item,index)=>{
            html +='<div class="col-lg-4 col-md-6 mt-1"><div class="hp-room-item set-bg" data-setbg="files/1712326428_f.png"><div class="hr-text"><h3>Numero '+item['id']+'</h3><h2>'+item['nom_chambre']+'<span> / Mois</span></h2><table><tbody><tr><td class="r-o">Capacite:</td> <td>'+item['chambre_capacite']+'</td></tr><tr><td class="r-o">Residence:</td><td>'+nom_residence+'</td></tr><tr><td class="r-o">Block:</td><td>'+nom_block+'</td></tr><tr><td class="r-o">Ocupants:</td><td>Wifi, Television, Bathroom,...</td></tr></tbody></table><a href="#" class="primary-btn">More Details</a></div></div></div>';
            })
               html +='</div></div> </div>';
                $('#show-detial-block').slideUp('400')
                $('#show-detail-chambre').slideDown('400')
                $('#show-detail-chambre').html(html)
                $('#show-nom').html(nom_residence)
               console.log(html)
             })
             .fail(function(error) {
               console.log(error);
             })
             .always(function() {
               console.log("complete");
             });
             
           });*/
           },
           success: function(data, textStatus, xhr) {
            let html ='';
            data.forEach((item,index)=>{
              html +='<div class="single-recent-blog col-lg-4 col-md-6 mb-2"><div style="border:1px solid #0c4a55;position: relative;left:3px;border-radius: 15px;"><div class="thumb"><img class="f-img img-fluid mx-auto" style="width: 100%;height: 200px;border-radius: 15px;" src="http://127.0.0.1:8080/files/'+item['photo']+'" alt=""></div><div class="bottom d-flex justify-content-between align-items-center flex-wrap mt-2"><div><a style="font-family: Arial" data-nom="'+item['name']+'" href="detail_chambre/'+item['id']+'" class="btn btn-primary detail-chambre">Detail </a></div><div class="meta mr-2"><span style="font-family: Arial">Capacites '+item['capacite']+'</span></div></div><a  href="#"><h4 style="text-align: center;font-family: Arial">'+item['name']+'</h4></a><p style="text-align: center;font-family: Arial">'+item['message']+'</p></div></div>';
            })
            console.log(html)
            $('#show').slideUp('400')
            $('#show-detial-block').slideDown('400')
            $('#show-detia').html(html)
            $('#show-nom').html(nom_residence)
           },
           error: function(xhr, textStatus, errorThrown) {
             console.log(xhr)
           }
         });
         
        });

        $('#logout').removeClass('active')

        $('.reservations').click(function(e) {
           e.preventDefault()
           
           let valid = confirm('Voulez vous vraiment reserve cette chambre')

           if (valid) {
            let chambre = $(this).attr('data-chambre');
            let block = $(this).attr('data-block');
            $('#loader').show('400')
            var formd = new FormData();
            formd.append('chambre',chambre);
            formd.append('block',block);
            formd.append('_token',CSRF_TOKEN);

            $.ajax({
              url: '{{route("add_reservation")}}',
              type: 'POST',
               dataType: 'json',
               contentType: false,
               processData: false,
               data:formd,
            })
            .done(function(data) {
              console.log(data);
                Swal.fire({
                       icon: 'success',
                       title: 'Reservation',
                       text:'Votre demande a ete transmis en attent d\'une confirmation ',
                       preConfirm: () => {RefreshTableHref()}
                   })
              $('#loader').hide('400')
            })
            .fail(function(error) {
              Swal.fire({
                       icon: 'error',
                       title: 'Reservation',
                       text:'Votre demande na pas ete transmis',
                       preConfirm: () => {console.log("object")}
                   })
              $('#loader').hide('400')
              console.log(error);
            })
            .always(function() {
              console.log("complete");
            });
            
           }
        });

         function RefreshTableHref() {
                 location.href = '/reservation';
               }

               
          $('#adults').change(function(event) {
            let residence = $(this).val()
            let res = residence.split('-')
             var fd = new FormData();
             
             fd.append('residence',res[0]);
             fd.append('_token',CSRF_TOKEN)
             console.log(res[1])
             $('#r_r').html(res[1])
             $('#h_r').val(res[0])
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
                let html = '<option value=""></option>';
                data.forEach((item,index)=>{
                  html += '<option value="'+item['id']+'-'+item['name']+'"> '+item['name']+' </option>';
                })
                $('#children').html(html)
                
              console.log(data)
              },
              error: function(xhr, textStatus, errorThrown) {
                console.log(xhr)
              }
            });
            
        });

          $('#children').change(function(event) {
            let residence = $(this).val()
            let res = residence.split('-')
             console.log(res[1])
             $('#r_b').html(res[1])
            $('#h_b').val(res[0])
            
        });

        $('#search_room').click(function(e) {
          e.preventDefault()
          let id_r = $('#h_r').val()
          let id_b = $('#h_b').val()

            var fd = new FormData();   
             fd.append('id_r',id_r);
             fd.append('id_b',id_b);
             fd.append('_token',CSRF_TOKEN)
             location.href ='/search_room/'+id_r+'/'+id_b
          
        });

                $('.reservations-room').click(function(e) {
           e.preventDefault()
          
           let valid = confirm('Voulez vous vraiment reserve cette chambre')

           if (valid) {
            let chambre = $(this).attr('data-chambre');
            let block = $(this).attr('data-block');
            $('#loader').show('400')
            var formd = new FormData();
            formd.append('chambre',chambre);
            formd.append('block',block);
            formd.append('_token',CSRF_TOKEN);

            $.ajax({
              url: '{{route("add_reservation")}}',
              type: 'POST',
               dataType: 'json',
               contentType: false,
               processData: false,
               data:formd,
            })
            .done(function(data) {
              console.log(data);
                Swal.fire({
                       icon: 'success',
                       title: 'Reservation',
                       text:'Votre demande a ete transmis en attent d\'une confirmation ',
                       preConfirm: () => {RefreshTableHref()}
                   })
              $('#loader').hide('400')
            })
            .fail(function(error) {
              Swal.fire({
                       icon: 'error',
                       title: 'Reservation',
                       text:'Votre demande na pas ete transmis',
                       preConfirm: () => {console.log("object")}
                   })
              $('#loader').hide('400')
              console.log(error);
            })
            .always(function() {
              console.log("complete");
            });
            
           }
        });
  $('#residence').change(function(event) {
    let residence = $(this).val()
    console.log("object")
     var formd = new FormData();
         formd.append('residence',residence);
         formd.append('_token',CSRF_TOKEN);
    $.ajax({
              url: '{{route("select_block")}}',
              type: 'POST',
               dataType: 'json',
               contentType: false,
               processData: false,
               data:formd,
      complete: function(xhr, textStatus) {
       
      },
      success: function(data, textStatus, xhr) {
        console.log(data['blocks'])
        let html = '<option value=""></option>';
                data['blocks'].forEach((item,index)=>{
                  html += '<option value="'+item['id']+'"> '+item['name']+' </option>';
                })
                console.log(html)
          $('#block-block').html(html)
          $('#show-reservation').html(data['residence'])
      },
      error: function(xhr, textStatus, errorThrown) {
       console.log(xhr)
      }
    });
    
  });

  });
  </script>
</body>

</html>

