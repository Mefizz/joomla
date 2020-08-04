<?php 
// Забороняємо визов скрипта напряму
   defined( '_JEXEC' ) or die( 'Restricted access' ); 
?>



<script type="text/javascript">
	  i=0; 
      setInterval(function() {
      	                       i++;
                    <?php $phrase=$infa; echo "s= '".$phrase."'";?> 
                               alert(s);
                               }, <?php echo $timer;?>);
</script>


<?php 
   echo $phrase;
?>