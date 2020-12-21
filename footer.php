<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
?>
	
</div>
<!-- #main --> 



</div>
<!-- #wrapper -->
	<a href="JavaScript:void(0);" title="<?php _e('Back To Top','instaappointment-lite'); ?>" id="backtop"></a>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Botão voltar no histórico-->
    <script>
      function goBack() {
        window.history.back();
      }
    </script>    
  <!-- Fim Botão voltar no histórico-->

  <?php wp_footer(); ?>
  
</body>
</html>