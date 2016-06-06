                    	
		  <?php
	  
	  //MySQL Database Connect 
include 'database.php';
?>
		
		<p class="post-meta">
	<form action=" search_result.php" method="post" name="myform">
	<?php
	
                $query1="SELECT distinct Location_type FROM mix_data" ;
                $result1=mysql_query($query1) or die(mysql_error()."[".$query1."]");
                ?>
                
               <select name="location_type1" id="location_type1"> 
                 <option value="-1">-----Select a Location Type----</option>
                   <?php
                   while($row1=mysql_fetch_array($result1))
                   {
                   		echo "<option value='".$row1['Location_type']."'>".$row1['Location_type']."</option>";
                   }
                   ?>
                  
</select>

 <input type="submit" class="btn btn-info"  name="search"  id="submit" value="Search" />
<br/>
</form>
</p>     
              
              
              
              
                     <p class="post-meta">
    <form action=" search_result.php" method="post" name="myform2" role="form">
     <div class="form-group">
    <label for="goods_lbl"  >List of goods </label>
<select name="goods[]"  multiple="multiple">
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




 <p class="post-meta">
     <form action=" search_result.php" method="post" name="myform3" role="form">
 
                      <div class="form-group">
    <label for="prog_lbl"  >List of Programs</label>
    
<select name="progs[]"  multiple="multiple">
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
    
               
               
               
               <div class="post-preview">
                
                
                    <a href="">
                        <h2 class="post-title" id="search4">
                           Season Date and State
                        </h2>
                       
                    </a>
                    <p class="post-meta">     
    <form action=" search_result.php" method="post" name="myform5" role="form">

            <div class="form-group">
    			<label for="s_start">Season Start Date</label> 
    			<input type="text"  id="datepicker1" name="season_start">
			</div>
			                    
			<div class="form-group">
				<label for="s_end" >Season End Date </label>
				<input type="text"  id="datepicker2" name="season_end">
			</div>
			
		<div class="form-group"> 
  
<button type="submit" class="btn btn-info"   id="submit5"> Search </button>
   
  </div>
</form>

</p>
                </div>



