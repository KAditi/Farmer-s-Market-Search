<!DOCTYPE html>
<?php
//MySQL Database Connect 
include 'database.php';
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Farmer's market-Search Results</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function(){
    jQuery('#datetimepicker').datepicker();

})
</script>

                


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>




	<!-- <div class="form-group">
			<label for="state"  >
                    State</label><?php
                $query1="SELECT distinct state FROM mix_data" ;
                $result1=mysql_query($query1) or die(mysql_error()."[".$query1."]");
                ?>
                  <select name="state"> 
                  <option value="-1">-----Select a State----</option>
                   <?php
                   while($row1=mysql_fetch_array($result1))
                   {
                   		echo "<option value='".$row1['state']."'>".$row1['state']."</option>";
                   }
                   ?>
</select>
</div>
-->
<?php

//select * from mix_data where season_start >'2013-01-01' and season_start < '2013-06-01' and season_end < '2013-06-01'

include 'header.php';
?>

<?php
//MySQL Database Connect 
include 'database.php';

?>







<div class="bs-example">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>FMID</th>
                <th>Market Name</th>
                <th>Street</th>
                <th>City</th>
                <th>State</th>
                <th>Zip code</th>
                <th>Location Type</th>
                <th>Season Start</th>
                <th>Season End</th>
              <!--  <th>Nutrition Program Available</th>
                <th>Foods Available</th>-->
            </tr>
        </thead>
      



<tbody>




<?php
if(isset($_POST['location_type1'])
{
 $location_type = $_POST['location_type1'];
 }
 
 
 $query = "SELECT FMID,MarketName,street,city,state,zip,Location_type,season_start,season_end FROM mix_data WHERE Location_type like '%$location_type%'  ";
 			 $result = mysql_query ($query);
if ($result) 
{
	
    while ($row = mysql_fetch_array ($result)) 
    {
    	echo "<thread><tr>";
      	echo "<td>$row[0] </td>";
      	 echo "<td>$row[1] </td>";
        echo "<td>$row[2] </td>";
    	echo "<td>$row[3] </td>";
      	 echo "<td>$row[4] </td>";
        echo "<td>$row[5] </td>";
        echo "<td>$row[6] </td>";
      	 echo "<td>$row[7] </td>";
        echo "<td>$row[8] </td>";
   		 echo "</tr></thread>";
     

}

}







?>


<?php
if(isset($_POST['goods'])
{

     
$values = $_POST['goods'];

foreach ($values as $a){
    echo $a;

}







?>



</tbody>
       
    </table>
</div>
                 












   <?php
   include 'footer.php';
   ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
