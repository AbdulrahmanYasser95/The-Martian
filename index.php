<!DOCTYPE html>
<html>
    <head>
    	<meta http-equiv="refresh" content="5">
        <title>Arduino Web Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
        </head>

    <body>
     <div class="card">
  <h5 class="card-header">Farming Monitoring Station</h5>
  <div class="card-body">
    <p class="card-title" style="text-align: center;">We are here to monitor the farming in Mars</p>
    <h6 class="card-text" style="text-align: center;"> Make sense out of Mars project for NASA Space Apps Challenge '18</h6>
   <!--<h5 style="color: red">Today is <?php echo date("Y/m/d") ?> <br> </h5> -->
    <h5 style="color: blue; font-size: 15px"> Today's date is : <span id="date"></span> <br> </h5>
    <a href="showData.php" class="btn btn-primary" style="margin-left: 30px;">Show the full data</a>
  </div>
</div>
      <div class="container" style="text-align: center;">
   
<?php 
$file = array_slice(file("file.txt"),-12);
$file = array_reverse($file);
foreach($file as $f){
    echo "<p>".$f."<br></p>";
    
}
?>
      </div>
    </body>
</html>



<script type="text/javascript">
  var today = new Date();
 document.getElementById('date').innerHTML = today
</script>