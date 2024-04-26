<script type="text/javascript">
	   $('.detailblock').click(function(e) {
       e.preventDefault()
       let idr = $(this).attr('href');

       location.href = '/detail_chambre/'+idr;
      });
</script>