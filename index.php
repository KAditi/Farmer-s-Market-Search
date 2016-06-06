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

    <title>Farmer's market</title>

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

<!--<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({ dateFormat: 'yy-mm-dd' });
            });
        </script>-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>






<!-- Header -->
<?php
include 'header.php';
?>


    
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title" id="search1">
                            Market by location
                        </h2>
                     
                    </a>
                   <p class="post-meta">
                            <div class="form-group">
    <label for="city_lbl"  >City </label>
             
                   <?php
                $query1="SELECT distinct city FROM mix_data" ;
                $result1=mysql_query($query1) or die(mysql_error()."[".$query1."]");
                ?>
                   <select name"city">
                    <option value="-1">------Select a city----</option>
                   <?php
                   while($row1=mysql_fetch_array($result1))
                   {
                   		echo "<option value='".$row1['city']."'>".$row1['city']."</option>";
                   }
                   ?>

</select>
</div>

 <div class="form-group">
 <label for="state_lbl"  >State </label>

    <?php
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

<div class="form-group">
 <label for="zip_lbl"  >Zipcode</label>



    <?php
                $query1="SELECT distinct zip FROM mix_data" ;
                $result1=mysql_query($query1) or die(mysql_error()."[".$query1."]");
                ?>
                 <select name="zip"> 
                 <option value="-1">-----Select a Zipcode----</option>
                   <?php
                   while($row1=mysql_fetch_array($result1))
                   {
                   		echo "<option value='".$row1['zip']."'>".$row1['zip']."</option>";
                   }
                   ?>
                   
</select>
</div>
<div class="form-group">
 <button type="submit" class="btn btn-info">Search</button>
 
 
 </div>
 </p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title" id="search2">
                        Goods Available
                             </h2>
                    </a>
                           <p class="post-meta">
    <form action=" search_result.php" method="post" name="myform2" role="form">
     <div class="form-group">
    <label for="goods_lbl"  >List of goods </label>
<select name="goods[]"  multiple="multiple" size="10" style="width:170px;">
  <option value="Bakedgoods">Bakedgoods</option>
  <option value="Cheese">Cheese</option>
  <option value="Crafts">Crafts</option>
  <option value="Flowers">Flowers</option>
  <option value="Eggs">Eggs</option>
  <option value="Seafood">Seafood</option>
  <option value="Herbs">Herbs</option>
  <option value="Vegetables">Vegetables</option>
  <option value="Honey">Honey</option>
  <option value="Jams">Jams</option>
  <option value="Maple">Maple</option>
  <option value="Meat">Meat</option>
  <option value="Nursery">Nursery</option>
  <option value="Nuts">Nuts</option>
  <option value="Plants">Plants</option>
  <option value="Plotry">Plotry</option>
  <option value="Prepared">Prepared</option>
  <option value="Soap">Soap</option>
  <option value="Trees">Trees</option>
  <option value="Wine">Wine</option>
  
</select>
</div>

<div class="form-group"> 
  
 <button type="submit" id="submit2" class="btn btn-info">Search</button>
</div>
</form></p>



                </div>
                
                
                
                
                
                
                
                <hr>
                
                 <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title" id="search2">
                        Nutrition Program Available
                             </h2>
                    </a>
                    
                    
                   <p class="post-meta">
     <form action=" search_result.php" method="post" name="myform3" role="form">
 
                      <div class="form-group">
    <label for="prog_lbl"  >List of Programs</label>
    
<select name="progs[]"  multiple="multiple" style="width:170px;">
  <option value="WIC">WIC</option>
  <option value="WICcash">WICcash</option>
  <option value="SNAP">SNAP</option>
  <option value="SFMNP">SFMNP</option>

  
</select>
</div>
<div class="form-group"> 
  
 <button type="submit" id="submit3" class="btn btn-info">Search</button>
</div>
</form>
</p>
                </div>
                
                        <hr>
                
                
                
                <div class="post-preview">
                
                
                    <a href="">
                        <h2 class="post-title" id="search4">
                           Season Date and State
                        </h2>
                       
                    </a>
                    <p class="post-meta">     
           <form action="search_result.php" method="post" name="myform5" role="form">


          <div class="form-group">
    			<label for="s_start">Season Start Date</label> 
    			<!--<input type="text"  id="datepicker1" name="season_start" class="form-control">-->
    			<input type="text"  name="season_start" class="form-control">
			</div>
			                    
			<div class="form-group">
				<label for="s_end" >Season End Date </label>
				<!--<input type="text"  id="datepicker2" name="season_end" class="form-control" >-->
				<input type="text"  name="season_end" class="form-control" >
			</div>
			
	<div class="form-group">
 <button type="submit" id="submit4" class="btn btn-info">Search</button>
</div>

</form>

</p>
                </div>
                
                <hr>
                
                
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title" id="search3">
                      Market Location Type
                        </h2>
                      
                    </a>     	
			<p class="post-meta">
			<form action=" search_result.php" method="post" name="myform" role="form">
	
			<?php
	
                $query1="SELECT distinct Location_type FROM mix_data" ;
                $result1=mysql_query($query1) or die(mysql_error()."[".$query1."]");
                ?>
                <div class="form-group">
   			 <label for="ltype_lbl"  >Location Type</label>
        	 <select name="location_type1" id="location_type1"> 
                 	<option value="-1">-----Select a Location Type----</option>
                   <?php
                 	  while($row1=mysql_fetch_array($result1))
                  	 {
                   		echo "<option value='".$row1['Location_type']."'>".$row1['Location_type']."</option>";
                  	 }
                   ?>
                  
		</select>
 </div>

<div class="form-group"> 
  
<button type="submit" class="btn btn-info"   id="submit4"> Search </button>
   
  </div>
</form>
</p>     
     </div>
              
              
              
              
              
              
      
                
                
                <!--<hr>-->
                <!-- Pager -->
              <!--  <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>-->
            </div>
        </div>
    </div>

    <hr>





   <?php
   include 'footer.php';
   ?>


<script>

$('#datepicker2').datepicker({
    format: 'yyyy-mm-dd'
});

$('#datepicker1').datepicker({
    format: 'yyyy-mm-dd'
});
</script>

<!--<script>


$(document).ready(function(){
$("#submit").click(function(){
var name = $("#name").val();
var option = $("#location_type1 option:selected").val();

alert(name);
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + 'location_type1='+option+;
if(name=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "search_result.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});


</script>-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
