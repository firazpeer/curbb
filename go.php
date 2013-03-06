<?
include("header.php");
?>



    
<?
include("nav.php");

$input_meter  = $_POST[input_meter];
$input_space  = $_POST[input_space];
$input_alias  = $_POST[input_alias];
$input_time   = $_POST[input_time];
$input_notify = $_POST[input_notify];
$input_cost   = $_POST[input_cost];


?>

<?

$current_month = date('m');
$current_day = date('d');
$current_year = date('Y');
$current_date = date('Y-m-d');
$current_date_time = date('Y-m-d H:i:s');
$current_time = date('h:i A');	
$current_time_24 = date('H:i');		
$current_date_string = strtotime($current_date);
$current_datetime_string = strtotime($current_date_time);


defined('CURRENT_DATETIME_STRING') ? null : define("CURRENT_DATETIME_STRING", $current_datetime_string);

$future = 60 * $input_time;
$current = (int)CURRENT_DATETIME_STRING;
$future = (int)$future;
$future_time = $current + $future + 3600; //Added for additional hour for Eastern. Just for demo. Use GMT for official


$future_date_time = date('h:i', $future_time);

?>
<br><br>
<h1 align="center">Confirmed</h1>
<br>
<center>
<h4>Your Parking Space Expires at: </h4>
<h2><?=$future_date_time; ?></h2>

<br>
<img src="images/confirmation.png" width="200">

</center>
<?
include("footer.php");
?>

<?
include("notify.php");
?>
