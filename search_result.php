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





<?php
include 'header.php';
?>










<div class="bs-example">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>FMID</th>
                <th>Market Name</th>
                <th>Address</th>
               <!-- <th>Street</th>
                <th>City</th>
                <th>State</th>
                <th>Zip code</th>-->
                    <th>Goods Available</th>
                 <th>Nutrition Program Available</th>
            
                <th>Location Type</th>
                <th>Season Start</th>
                <th>Season End</th>
             
            </tr>
        </thead>
      



<tbody>

<?php

if(isset($_POST['season_start'])&&isset($_POST['season_end']))
{
	$season_start1=$_POST['season_start'];
	$season_end1=$_POST['season_end'];
	
	$season_start = date("Y-m-d", strtotime($season_start1));
	$season_end= date("Y-m-d", strtotime($season_end1));
	
 $query = "select * from mix_data where season_start >'$season_start' and season_start < '$season_end' and season_end < '$season_end' ";
 echo $query;
 			 $result = mysql_query ($query);
if ($result) 
{
	
   while ($row1 = mysql_fetch_array ($result)) 
    {
    	
        $goods_final=" ";
    $prog_final=" ";
    
    
    
      if($row1[15]=='Y')
        {
       $goods_final .= "Bakedgoods"; 
        }
        if($row1[16]=='Y')
        {
       $goods_final .= ",Cheese"; 
        }
        
         if($row1[17]=='Y')
        {
        $goods_final .= ",Crafts";  
        }
         if($row1[18]=='Y')
        {
        $goods_final .= " ,Flowers";  
        }
         if($row1[19]=='Y')
        {
          $goods_final .= ",Eggs";  
        }
        
         if($row1[20]=='Y')
        {
        $goods_final.= ",Seafood"; 
        }
         if($row1[21]=='Y')
        {
        $goods_final .= ",Herbs";  
        }
         if($row1[22]=='Y')
        {
        $goods_final .= " ,Vegetables,";  
        }
         if($row1[23]=='Y')
        {
          $goods_final .= ",Honey";  
        }
        
        
         if($row1[24]=='Y')
        {
        $goods_final .= ",Jams"; 
        }
         if($row1[25]=='Y')
        {
        $goods_final.= ",Maple";  
        }
         if($row1[26]=='Y')
        {
        $goods_final .= " ,Meat";  
        }
         if($row1[27]=='Y')
        {
          $goods_final .= ",Nursery";  
        }
        
       
     
        
         if($row1[28]=='Y')
        {
        $goods_final.= ",Nuts"; 
        }
         if($row1[29]=='Y')
        {
        $goods_final .= ",Plants";  
        }
         if($row1[30]=='Y')
        {
        $goods_final.= ",Plotry";  
        }
         if($row1[31]=='Y')
        {
          $goods_final .= ",Prepared";  
        }
        
         if($row1[32]=='Y')
        {
        $goods_final.= ",Soap"; 
        }
         if($row1[33]=='Y')
        {
       $goods_final .= ",Trees";  
        }
         if($row1[34]=='Y')
        {
        $goods_final .= " ,Wine";  
        }
      
         if($goods_final==" ")
        {
         $goods_final ="No Goods Available";	
        }
        
        
        
        
       if($row1[11]=='Y')
        {
        $prog_final .= "WIC,"; 
        }
         if($row1[12]=='Y')
        {
        $prog_final .= "WICash,";  
        }
         if($row1[13]=='Y')
        {
        $prog_final .= " SFMNP,";  
        }
         if($row1[14]=='Y')
        {
          $prog_final .= "SNAP";  
        }
        
         if($prog_final==" ")
        {
         $goods_final ="No Nutrition Program Available";	
        }
        
    	echo "<thread><tr>";
      	echo "<td>$row1[0] </td>";
      	 echo "<td>$row1[1] </td>";
        echo "<td>$row1[3],$row1[4] ,$row1[5],$row1[6]  </td>";        
      
        
         echo "<td>  $goods_final </td>";
    	  echo "<td>$prog_final </td>";
            echo "<td>$row1[9] </td>";
      	 echo "<td>$row1[7] </td>";
        echo "<td>$row1[8] </td>";
   		 echo "</tr></thread>";
     

}


}

else
{
echo "<thread><tr>";

echo "<td>No match found </td>";
echo "</tr></thread>";
}

	
}
?>





<?php
if(isset($_POST['location_type1']))
{

 $location_type = $_POST['location_type1'];
 
 
 
 $query = "SELECT * FROM mix_data WHERE Location_type like '%$location_type%'  ";
 			 $result = mysql_query ($query);
if ($result) 
{
	
   while ($row1 = mysql_fetch_array ($result)) 
    {
    	
        $goods_final=" ";
    $prog_final=" ";
    
    
    
      if($row1[15]=='Y')
        {
       $goods_final .= "Bakedgoods"; 
        }
        if($row1[16]=='Y')
        {
       $goods_final .= ",Cheese"; 
        }
        
         if($row1[17]=='Y')
        {
        $goods_final .= ",Crafts";  
        }
         if($row1[18]=='Y')
        {
        $goods_final .= " ,Flowers";  
        }
         if($row1[19]=='Y')
        {
          $goods_final .= ",Eggs";  
        }
        
         if($row1[20]=='Y')
        {
        $goods_final.= ",Seafood"; 
        }
         if($row1[21]=='Y')
        {
        $goods_final .= ",Herbs";  
        }
         if($row1[22]=='Y')
        {
        $goods_final .= " ,Vegetables,";  
        }
         if($row1[23]=='Y')
        {
          $goods_final .= ",Honey";  
        }
        
        
         if($row1[24]=='Y')
        {
        $goods_final .= ",Jams"; 
        }
         if($row1[25]=='Y')
        {
        $goods_final.= ",Maple";  
        }
         if($row1[26]=='Y')
        {
        $goods_final .= " ,Meat";  
        }
         if($row1[27]=='Y')
        {
          $goods_final .= ",Nursery";  
        }
        
       
     
        
         if($row1[28]=='Y')
        {
        $goods_final.= ",Nuts"; 
        }
         if($row1[29]=='Y')
        {
        $goods_final .= ",Plants";  
        }
         if($row1[30]=='Y')
        {
        $goods_final.= ",Plotry";  
        }
         if($row1[31]=='Y')
        {
          $goods_final .= ",Prepared";  
        }
        
         if($row1[32]=='Y')
        {
        $goods_final.= ",Soap"; 
        }
         if($row1[33]=='Y')
        {
       $goods_final .= ",Trees";  
        }
         if($row1[34]=='Y')
        {
        $goods_final .= " ,Wine";  
        }
      
         if($goods_final==" ")
        {
         $goods_final ="No Goods Available";	
        }
        
        
        
        
       if($row1[11]=='Y')
        {
        $prog_final .= "WIC,"; 
        }
         if($row1[12]=='Y')
        {
        $prog_final .= "WICash,";  
        }
         if($row1[13]=='Y')
        {
        $prog_final .= " SFMNP,";  
        }
         if($row1[14]=='Y')
        {
          $prog_final .= "SNAP";  
        }
        
         if($prog_final==" ")
        {
         $goods_final ="No Nutrition Program Available";	
        }
        
    	echo "<thread><tr>";
      	echo "<td>$row1[0] </td>";
      	 echo "<td>$row1[1] </td>";
        echo "<td>$row1[3],$row1[4] ,$row1[5],$row1[6]  </td>";        
      
        
         echo "<td>  $goods_final </td>";
    	  echo "<td>$prog_final </td>";
            echo "<td>$row1[9] </td>";
      	 echo "<td>$row1[7] </td>";
        echo "<td>$row1[8] </td>";
   		 echo "</tr></thread>";
     

}


}

else
{
echo "<thread><tr>";

echo "<td>No match found </td>";
echo "</tr></thread>";
}


}



?>






<?php
if(isset($_POST['goods']))
{
 
  
  $goods_db=array("Bakedgoods","Cheese","Crafts","Flowers","Eggs","Seafood","Herbs","Vegetables","Honey","Jams","Maple","Meat","Nursery","Nuts","Plants","Plotry","Prepared","Soap",
 "Trees","Wine" );
     
$goods_values = $_POST['goods'];

 $count_user = count($goods_values);
$count_database=count($goods_db);
$temp = array_fill(0, 20, 'N');

for($j=0; $j <$count_database; $j++)
		{
		

for($i=0; $i < $count_user; $i++)
   {
      
		
        if ($goods_values[$i] ==$goods_db[$j])
        {
        $temp[$j]='Y';
   
         }
       
         
    }

}



$query1=" SELECT * FROM `mix_data` WHERE `Bakedgoods`='$temp[0]' and `Cheese`='$temp[1]'  and `Crafts`='$temp[2]'  and `Flowers`='$temp[3]'  and `Eggs`='$temp[4]'  and `Seafood`='$temp[5]'  and  `Herbs`='$temp[6]'  and  
 `Vegetables`='$temp[7]'  and `Honey`='$temp[8]'  and `Jams`='$temp[9]'  and  `Maple`='$temp[10]'  and  `Meat`='$temp[11]'  and  `Nursery`='$temp[12]'  and  `Nuts`='$temp[13]'  and  `Plants`='$temp[14]'  
 and `Ploutry`='$temp[15]'  and `Prepared`='$temp[16]'  and `Soap`='$temp[17]'  and  `Trees`='$temp[18]'  and  `Wine` ='$temp[19]'" ;

 			 $result1 = mysql_query ($query1);
if ($result1) 
{

    while ($row1 = mysql_fetch_array ($result1)) 
    {
    	
        $goods_final=" ";
    $prog_final=" ";
    	echo "<thread><tr>";
      	echo "<td>$row1[0] </td>";
      	 echo "<td>$row1[1] </td>";
        echo "<td>$row1[3],$row1[4] ,$row1[5],$row1[6]  </td>";
        
 
    
        
        if($row1[15]=='Y')
        {
       $goods_final .= "Bakedgoods"; 
        }
        if($row1[16]=='Y')
        {
       $goods_final .= ",Cheese"; 
        }
        
         if($row1[17]=='Y')
        {
        $goods_final .= ",Crafts";  
        }
         if($row1[18]=='Y')
        {
        $goods_final .= " ,Flowers";  
        }
         if($row1[19]=='Y')
        {
          $goods_final .= ",Eggs";  
        }
        
         if($row1[20]=='Y')
        {
        $goods_final.= ",Seafood"; 
        }
         if($row1[21]=='Y')
        {
        $goods_final .= ",Herbs";  
        }
         if($row1[22]=='Y')
        {
        $goods_final .= " ,Vegetables,";  
        }
         if($row1[23]=='Y')
        {
          $goods_final .= ",Honey";  
        }
        
        
         if($row1[24]=='Y')
        {
        $goods_final .= ",Jams"; 
        }
         if($row1[25]=='Y')
        {
        $goods_final.= ",Maple";  
        }
         if($row1[26]=='Y')
        {
        $goods_final .= " ,Meat";  
        }
         if($row1[27]=='Y')
        {
          $goods_final .= ",Nursery";  
        }
        
       
     
        
         if($row1[28]=='Y')
        {
        $goods_final.= ",Nuts"; 
        }
         if($row1[29]=='Y')
        {
        $goods_final .= ",Plants";  
        }
         if($row1[30]=='Y')
        {
        $goods_final.= ",Plotry";  
        }
         if($row1[31]=='Y')
        {
          $goods_final .= ",Prepared";  
        }
        
         if($row1[32]=='Y')
        {
        $goods_final.= ",Soap"; 
        }
         if($row1[33]=='Y')
        {
       $goods_final .= ",Trees";  
        }
         if($row1[34]=='Y')
        {
        $goods_final .= " ,Wine";  
        }
      
         if($goods_final==" ")
        {
         $goods_final ="No Goods Available";	
        }
        
        
        
        
       if($row1[11]=='Y')
        {
        $prog_final .= "WIC,"; 
        }
         if($row1[12]=='Y')
        {
        $prog_final .= "WICash,";  
        }
         if($row1[13]=='Y')
        {
        $prog_final .= " SFMNP,";  
        }
         if($row1[14]=='Y')
        {
          $prog_final .= "SNAP";  
        }
        
         if($prog_final==" ")
        {
         $goods_final ="No Nutrition Program Available";	
        }
        
         echo "<td>  $goods_final </td>";
    	  echo "<td>$prog_final </td>";
            echo "<td>$row1[9] </td>";
      	 echo "<td>$row1[7] </td>";
        echo "<td>$row1[8] </td>";
   		 echo "</tr></thread>";
     

}

}
else
{
echo "<thread><tr>";

echo "<td>No match found </td>";
echo "</tr></thread>";
}


}



?>





<?php
if(isset($_POST['progs']))
{
 
  
  $progs_db=array("WIC" ,"WICash","SFMNP","SNAP");
     
$progs_values = $_POST['progs'];

 $count_user = count($progs_values);
$count_database=count($progs_db);
$temp = array_fill(0, 4, 'N');

for($j=0; $j <$count_database; $j++)
		{
		

for($i=0; $i < $count_user; $i++)
   {
      
		
        if ($progs_values[$i] ==$progs_db[$j])
        {
        $temp[$j]='Y';
       
         }
       
         
    }

}



$query2=" SELECT * FROM `mix_data` WHERE `WIC`='$temp[0]' and `WICash`='$temp[1]'  and `SFMNP`='$temp[2]'  and `SNAP`='$temp[3]' " ;


 			 $result2 = mysql_query ($query2);
if ($result2) 
{
	
	
    while ($row2= mysql_fetch_array ($result2)) 
    {
        $goods_final=" ";
    $prog_final=" ";
    	echo "<thread><tr>";
      	echo "<td>$row2[0] </td>";
      	 echo "<td>$row2[1] </td>";
        echo "<td>$row2[3],$row2[4] ,$row2[5],$row2[6]  </td>";
        
 
    
        
        if($row2[15]=='Y')
        {
       $goods_final .= "Bakedgoods,"; 
        }
        if($row2[16]=='Y')
        {
       $goods_final .= "Cheese,"; 
        }
        
         if($row2[17]=='Y')
        {
        $goods_final .= "Crafts,";  
        }
         if($row2[18]=='Y')
        {
        $goods_final .= " Flowers,";  
        }
         if($row2[19]=='Y')
        {
          $goods_final .= "Eggs,";  
        }
        
         if($row2[20]=='Y')
        {
        $goods_final.= "Seafood,"; 
        }
         if($row2[21]=='Y')
        {
        $goods_final .= "Herbs,";  
        }
         if($row2[22]=='Y')
        {
        $goods_final .= " Vegetables,";  
        }
         if($row2[23]=='Y')
        {
          $goods_final .= "Honey,";  
        }
        
        
         if($row2[24]=='Y')
        {
        $goods_final .= "Jams,"; 
        }
         if($row2[25]=='Y')
        {
        $goods_final.= "Maple,";  
        }
         if($row2[26]=='Y')
        {
        $goods_final .= " Meat,";  
        }
         if($row2[27]=='Y')
        {
          $goods_final .= "Nursery,";  
        }
        
       
     
        
         if($row2[28]=='Y')
        {
        $goods_final.= "Nuts,"; 
        }
         if($row2[29]=='Y')
        {
        $goods_final .= "Plants,";  
        }
         if($row2[30]=='Y')
        {
        $goods_final.= " Plotry,";  
        }
         if($row2[31]=='Y')
        {
          $goods_final .= "Prepared";  
        }
        
         if($row2[32]=='Y')
        {
        $goods_final.= "Soap,"; 
        }
         if($row2[33]=='Y')
        {
       $goods_final .= "Trees,";  
        }
         if($row2[34]=='Y')
        {
        $goods_final .= " Wine,";  
        }
      
         if($goods_final==" ")
        {
         $goods_final ="No Goods Available";	
        }
        
        
        
        
       if($row2[11]=='Y')
        {
        $prog_final .= "WIC,"; 
        }
         if($row2[12]=='Y')
        {
        $prog_final .= "WICash,";  
        }
         if($row2[13]=='Y')
        {
        $prog_final .= " SFMNP,";  
        }
         if($row2[14]=='Y')
        {
          $prog_final .= "SNAP";  
        }
        
         if($prog_final==" ")
        {
         $goods_final ="No Nutrition Program Available";	
        }
        
         echo "<td>  $goods_final </td>";
    	  echo "<td>$prog_final </td>";
            echo "<td>$row2[9] </td>";
      	 echo "<td>$row2[7] </td>";
        echo "<td>$row2[8] </td>";
   		 echo "</tr></thread>";
     

}

}
else
{
echo "<thread><tr>";

echo "<td>No match found </td>";
echo "</tr></thread>";
}







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
