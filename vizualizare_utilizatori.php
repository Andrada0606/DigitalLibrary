<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li><h1 style="margin: 0;"><a href="#">DigitalLibrary</a></h1></li>
            </ul>
        </div>
        <div class="top-bar-left">
            <ul class="menu">
                <li><a href="acasa.html">Acasă</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="Despre.html">Despre</a></li>
            </ul>
        </div>
    </div>

    <div class="top-bar" style="background-color: white;">
        <div class="top-bar-right" style="float: right;">
            <a class="button success" href="index.html">Logout</a>
        </div>
        <div style="clear: both;"></div>
    </div>
<h2>Vizualizare</h2>
</br>

<?php
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"librarie");

$nume = $email = "";
$start=0;
$limit=2;
$id=1;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}

$sqlv="SELECT * FROM utilizatori LIMIT $start, $limit"; 

$resultv= mysqli_query($db,$sqlv);
 if (!$resultv)
 die('Invalid querry:' .mysqli_error($db));
 else {
  echo "<table class=\"unstriped\">";
  echo "<tr><thead><th width=\"200\"><b>Id</b></th><th width=\"150\"><b>Nume</b></th><th width=\"150\"><b>Email</b></th></thead><tbody>";

  while ($myrow = mysqli_fetch_assoc($resultv)) {
      echo "<tr><td>";
      echo $myrow["id"];
      echo "</td><td>";
      echo $myrow["nume"];
      echo "</td><td>";
      echo $myrow["email"];
      echo "</td></tr>";
  }
}


$rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM utilizatori "));
$total=ceil($rows/$limit);

if($id>1)
{
echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS </a>";
}

if($id!=$total)
{
echo "<a href='?id=".($id+1)."' class='button'> NEXT</a>";
}

echo "<ul class='page'>";
for($i=1;$i<=$total;$i++)
  {
    if($i==$id) 
      { echo "<li class='current'>".$i."</li>"; }
      else 
      { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
  }
echo "</ul>";

?>
</br>
<a href="utilizatori.html" class="button">Inapoi</a>
<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
