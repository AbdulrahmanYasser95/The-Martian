<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<h1>Monitoring the data from Mars</h1>
 <p class="text-monospace">THE MARTIANS</p>
 
    <a href="index.php" class="btn btn-danger">Back to the dashboard</a>

<?php 
$file = file("file.txt");
$file = array_reverse($file);
foreach($file as $f){
    echo $f."<br />";
}
?>	
</div>
