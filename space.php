<?
include("header.php");
?>

    
    
<?
include("nav.php");
?>


<div class="container">



      <form class="form-signi" action="summary.php" method="post">
 
 
 
         	<table width="80%" align="center" cellspacing="10" cellpadding="10">
        		<tr>
        			<td width="30%" valign="top" align="right"><h4>Space: </h4></td><td width="70%" valign="top"><input type="text" name="input_space" class="input-mini" placeholder="Space"></td>
        		</tr>	
         		<tr>
        			<td width="30%" valign="top" align="right"><h4>Time: </h4></td><td width="70%" valign="top"><div class="input-prepend input-append">
    <input class="input-mini" style="width: 70px" type="text" name="input_time" placeholder="Ex: 10"><span class="add-on">Minutes</span>
    
    
    <select class="input-small" name="input_time">
    
    <?	
    for ($d = 8; $d <= 240; $d + 8)
    {
    	
		$meter_cost = $d * .25;
		$meter_cost = sprintf("%.2f", $meter_cost);
		
    ?>	

		
    <option value="<?php echo $d; ?>"><?php echo $d; ?> Min. - <?php echo $meter_cost; ?></option>
    
    <?php
    }
	?>

    	
    </select>	
    
    </div></td>
        		</tr>       		



         	        		
   
           		
        		
        	</table>	
 

    <input type="hidden" name="input_cost" value=".25">
    <input type="hidden" name="input_meter" value="4355">
 
 
      	

    <input name="submit" type="submit" class="btn btn-large btn-info btn-block" value="Next"></button>
 	
      	
      	
  
    </form>
    </div> <!-- /container -->

<?
include("footer.php");
?>
