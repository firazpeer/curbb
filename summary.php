<?
include("header.php");
?>


    
<?
include("nav.php");
?>
    
<?
$input_meter  = $_POST[input_meter];
$input_space  = $_POST[input_space];
$input_alias  = $_POST[input_alias];
$input_time   = $_POST[input_time];
$input_notify = $_POST[input_notify];
$input_cost   = $_POST[input_cost];

?>    


      <form class="form-signi" action="go.php" method="post">
        <p class=".lead">
        	<h1 align="center">Summary</h1>
        	
        	
        	<table width="80%" align="center">
        		<tr>
        			<td width="35%"><h4>Meter #: </h4></td><td width="65%"><h4><?=$input_meter; ?></h4></td>
        		</tr>	
         		<tr>
        			<td width="35%"><h4>Space #: </h4></td><td width="65%"><h4><?=$input_space; ?></h4></td>
        		</tr>       		

<?

$true_cost = $input_cost * $input_time; 

$true_cost = $true_cost / 8;
$true_cost = sprintf("%.2f", $true_cost);
?>


         		<tr>
        			<td width="35%"><h4>Time: </h4></td><td width="65%"><h4><?=$input_time; ?> Minutes</h4></td>
        		</tr>         		
        		 <tr>
        			<td width="35%"><h4>Cost: </h4></td><td width="65%"><h4>$<?=$true_cost; ?></h4></td>
        		</tr> 
        	
        	</table>	
        	

        	
        	Please review your purchase and click PAY to reserve your parking spot. </p> 
  
  
          	<table width="80%" align="center" cellpadding="3">
        		<tr>
        			<td width="50%"><input class="btn btn-block btn-large" type="submit" value="Edit" onClick="location.href='index.php'"></td><td width="50%"><input class="btn btn-info  btn-block btn-large" type="submit" value="Pay"></td>
        		</tr>	
        		
        	</table>	
        		
     <input type="hidden" name="input_time" value="<?=$input_time; ?>">
 
      </form>
       </div>


<?
include("footer.php");
?>
