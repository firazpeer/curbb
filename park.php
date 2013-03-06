<?
include("header.php");
?>

    
    
<?
include("nav.php");
?>


<div class="container">



      <form class="form-signi" action="summary.php" method="post" style="height: 240px">
 
 
 
         	<table width="80%" align="center" cellspacing="10" cellpadding="10">
        		<tr>
        			<td width="30%" valign="top" align="right"><h4>Space: </h4></td><td width="70%" valign="top"><input type="text" name="input_space" class="input-mini" placeholder="Space"></td>
        		</tr>	
         		<tr>
        			<td width="30%" valign="top" align="right"><h4>Time: </h4></td><td width="70%" valign="top">


 <select class="input-medium" name="input_time">
    
    <?	
    for ($d = 1; $d <= 30; $d++)
    {
    	$per_min = 8 * $d;
		
		
		//Every 8 minutes it is $0.25
		$meter_cost = $d * .25;
		$meter_cost = sprintf("%.2f", $meter_cost);
		
    ?>	

		
    <option value="<?php echo $per_min; ?>"><?php echo $per_min; ?> Min. - $<?php echo $meter_cost; ?></option>
    
    <?php
    }
	?>

    	
    </select>	



</td>
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
