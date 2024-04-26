<!DOCTYPE html>
<html>
<head>
<title>CAHIER DE TEXTE</title>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css1/nunito-font.css">
	<!-- Main Style Css sweetalert2.min -->
    <link rel="stylesheet" href="css1/style.css"/>
    <link rel="stylesheet" href="css/sweetalert2.min.css"/>
    <link rel="stylesheet" href="css/styles.css" />
@livewireStyles
</head>
<body>


 @livewire('home2')

 @livewireScripts
 <script type="text/javascript" src="/js/jquery.min.js"></script>
 <script type="text/javascript" src="/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
 <script src="js/app.js"></script>

 <script type="text/javascript">
 	var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
 	$(document).ready(function() {
 		var months = ["janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Julliet", "Aout", "Septembre",
            "Octobre", "Novembre", "Decembre"
        ];
        var days = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
 		         $('#file').change(function(){
   
               // Get the selected file 
               var files = $('#file')[0].files;

               if(files.length > 0){
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
               }else{
                     alert("Please select a file.");
               }

         })

 		    $('#register').click(function(e) {
 		    	e.preventDefault()
 		    	var fd = new FormData();
 		    	let t = $('#t').val()
 		    	let c = $('#c').val()
 		    	let p = $('#p').val()

 		    	fd.append('titre',t);
 		    	fd.append('cour',c);
 		    	fd.append('photo',p);

                fd.append('_token',CSRF_TOKEN);
 		    	$.ajax({
 		    		url:"{{ route('saveCahier') }}",
 		    		type: 'POST',
 		    		data:fd,
 		    		contentType: false,
                    processData: false,
 		    	})
 		    	.done(function(data) {
 		    		if (data.success != undefined) {
 		    			Swal.fire({
					             icon: 'success',
					             title: 'CAHIER ',
					             text:data.success,
					             preConfirm: () => {RefreshTable()}
					         })
 		    		}else {
 		    				Swal.fire({
					             icon: 'error',
					             title: 'CAHIER ',
					             text:data.error,
					             preConfirm: () => {RefreshTable()}
					         })
 		    		}
 		    		         
 		    	})
 		    	.fail(function(error) {
 		    		console.log(error);
 		    	})
 		    	.always(function() {
 		    		console.log("complete");
 		    	});
 		    	
 		    });

 		    function RefreshTable() {
                 location.reload()
               }
          $('.dtee').each(function(index, el) {
                   var dat =  $(el).html()
                     var date = new Date(dat);
                     let jour = date.getDate()+'  '+months[date.getMonth()]+'  '+date.getFullYear();
                    $(el).html(jour)
                  });

          $('.bsheet').click(function(e) {
          	e.preventDefault()
          	console.log('object')
          });

          $("#lundi").click(function(e) {
          	e.preventDefault()
          	let titre = $('#tl').val()
          	let cour = $('#cl').val()

             fd.append('_token',CSRF_TOKEN);
             fd.append('titre',titre);
             fd.append('cour',cour);;

          	$.ajax({
          		url: 'saveActivitesLundi',
          		type: 'POST',
          		data:fd,
          	})
          	.done(function(data) {
          		console.log(data);
          		Swal.fire({
					             icon: 'success',
					             title: 'activiter ',
					             text:data.success,
					             preConfirm: () => {RefreshTable()}
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

 	function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
 </script>
</body>
</html>