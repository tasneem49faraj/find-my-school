  <?php
 function UnsetPreviousSession(){
unset($_SESSION['user_name']);
}
if(isset($_POST['reb1'])){
UnsetPreviousSession();	
}
error_reporting(E_ERROR | E_PARSE);
?>

  <!DOCTYPE HTML>
<html>
<title> page2</title>
<head>
 
<style>
#zoomA {
  /* (A) OPTIONAL DIMENSIONS */
  width: 250pxpx;
  height: auto;
 
  /* (B) ANIMATE ZOOM */
  /* ease | ease-in | ease-out | linear */
  transition: transform ease-in-out 0.3s;
}
 
/* (C) ZOOM ON HOVER */
#zoomA:hover { transform: scale(1.2); }


.caption {
    display: block;
    font-size:3vw;
     text-align:center;
     color:darkslategrey;
     font-family:AnuDaw;
     position:relative; 
    
      top:20px;
}

.container{
	display:flex;
	column-gap:100px;
}
.box-1{
	height:700px;
	width:600px;
	border:solid 5px #5ba8a0;

	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	margin-left:90px;
	border-radius:10px;
	

}


button {
	border:solid 3px #5ba8a0; border-bottom: none;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  background-color:white; height:40px;
  width:600px;
  border-radius: 30px;
}
img:hover {
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}
.item{
  display: flex;
        align-items: center;
        justify-content: center;
       position:absolute;
      
       flex-wrap: wrap;
        height: 100%;
}
.item2{
  position: relative;
 
  left:400px;

}
.item2 img{
  border:solid 5px #5ba8a0;
border-radius:10px; 
}

.item3{
  position: relative;
 
  left:600px;

}
.item3 img{
  border:solid 5px #5ba8a0;
border-radius:10px; 
}
.container1{
  margin-top: 400px;
}
.container2{
  margin-top: 200px;
}
#school{
  position: relative;
  top:370px
}
#Nursery{
  position: relative;
  top:170px
}
</style>
<meta charset="utf-8"  >
<meta name="viewport\" content=\"width=device-width, initial-scale=1.0 ">
<meta name="viewport\" content=\"width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css/ " rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle
.min.js"></script>


</head> 	
<body> 
<div class="item">
<div class="item2">
 <a href="#Nursery"><img src="project2-44.jpg"  id="zoomA" alt="nersury" width=250px> </a>
   <span class="caption" >Nursery</span>
   <span class="caption" >حضانة </span>
   
</div>

<div class="item3">
 <a  href="#school"><img src="project2-2222.jpg"id="zoomA" alt="school" width=250px></a>
  <span class="caption"  >school</span>
   <span class="caption" >مدرسة </span>
 </div>
 </div>
 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb101";
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset( $conn, 'utf8');
 
 $sql="SELECT name  from project where loc='تلاع العلي ' ";
 $sql3="SELECT name  from project where loc='ابو نصير ' ";
  $sql2="SELECT name1  from ner where loc='تلاع العلي ' ";
  $sql4="SELECT name1  from ner where loc='ابو نصير ' ";
  $sql5="select * from project where  name='ميمونة الاساسية'";
 $result = $conn->query($sql);
 $result2 = $conn->query($sql2);
 $result3 = $conn->query($sql3);
 $result4 = $conn->query($sql4);
 $result5 = $conn->query($sql5);
 //save result
 
   if($result->num_rows > 0) { 
            
        

$conn->close();
if (isset($_POST["loc1"])){
	////////////////
 echo "
<div class=\"main\">
 <p id=\"school\"style=\"font-size:3vw; text-align:left;color:#D76217;font-family:AnuDaw;margin-left:300px;\">schools   </p>
  <! منطقة تلاع العلي >
<div class= \"container1\"style=\"border:solid 5px #5ba8a0; margin-left:auto;margin-right:auto;padding:30px;width:800px; height:700px;box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
 border-radius:10px;\">


   
 <div class=\"container\">
 <div class=\"box-1\">";
 

$row = $result->fetch_assoc();
$row2 = $result->fetch_assoc();
$row3 = $result->fetch_assoc();

                echo "<form action=\"page3.php\" method=\"post\"><button name=\"button1\" type=\"submit\" style=\"font-size:20px;color:#D76217;\">".$row["name"]."</button>"."</form>"."<br>";
				echo"<form action=\"page3.php\"method=\"post\"><button name=\"button2\" type=\"submit\"style=\"font-size:20px;color:#D76217;\">".$row2["name"] ."</button>"."</form>"."<br>";
				echo"<form action=\"page3.php\"method=\"post\"><button name=\"button3\" type=\"submit\"style=\"font-size:20px;color:#D76217;\">".$row3["name"] ."</button>"."</form>"."<br>";
			
			
echo"<div style=\"width:30px;float:right;margin-right:1000px;margin-pottom:100px;\"> <img src=\"project2-13.png\" class=\"rounded float-start\" alt=\"school\" style=\"\width:300px;height:300px; margin-right:300px;display: inline-block;\" > </div> ";
 echo"<div style=\"width:30px;float:right;margin-right:1000px;\"> <img src=\"project2-12.png\" class=\"rounded float-start\" alt=\"school\" style=\"\width:300px;height:300px; margin-right:300px;display: inline-block;\" > </div> ";

 echo"</div> ";
 

 
 


 echo"</div>
</div>

</div>
</div>
</div>
   <br><br> <br> <br> <br> ";}}

///////////حضانات تلاع العلي 

if($result2->num_rows > 0) {
	if (isset($_POST["loc1"])){
	echo "<p id=\"Nursery\" style=\"font-size:3vw; text-align:left;color:#D76217;font-family:AnuDaw;margin-left:300px;\"> Nursery</p> ";
echo 
"<div  class= \"container2\"style=\"border:solid 5px #5ba8a0; margin-left:auto;margin-right:auto;padding:30px;width:800px; height:700px;box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
 border-radius:10px;\">
   
 <div class=\"container\">
 <div class=\"box-1\">";
 
 while($row = $result2->fetch_assoc()) {
                echo "<button style=\"font-size:20px;color:#D76217;margin-top:10px;\">".$row["name1"] ."</button>"."<br>";
            }
echo"<div style=\"width:30px;float:left;margin-left:450px;margin-pottom:100px;\"> <img src=\"project2-8.png\" class=\"rounded float-start\" alt=\"school\" style=\"\width:300px;height:300px; margin-left:300px;display: inline-block;\" > </div> ";
 echo"<div style=\"width:30px;float:left;margin-left:450px;\"> <img src=\"project2-6.png\" class=\"rounded float-start\" alt=\"school\" style=\"\width:300px;height:300px; margin-left:300px;display: inline-block;\" > </div> ";
 
 $conn->close();
echo" </div>";
 echo"
</div>
</div>
</div>
</div>

</body>

   </html> ";}}


///////////////////

	
if($result3->num_rows > 0) { 
if (isset($_POST["loc2"])){
	echo "


<div style=\"border:solid 5px #5ba8a0; margin-left:auto;margin-right:auto;padding:30px;width:800px; height:700px;box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
 border-radius:10px;\">

   
 <div class=\"container\">
 <div class=\"box-1\">";
 
while($row = $result3->fetch_assoc()) {
                echo "<button  style=\"font-size:20px;color:#D76217;\">".$row["name"] ."</button>"."<br>";
            }

 echo"<div style=\"width:30px;float:right;margin-right:1000px;margin-pottom:100px;\"> <img src=\"project2-13.png\" class=\"rounded float-start\" alt=\"school\" style=\"\width:300px;height:300px; margin-right:300px;display: inline-block;\" > </div> ";
 echo"<div style=\"width:30px;float:right;margin-right:1000px;\"> <img src=\"project2-12.png\" class=\"rounded float-start\" alt=\"school\" style=\"\width:300px;height:300px; margin-right:300px;display: inline-block;\" > </div> ";
 
 echo"</div> ";
 
 

 
 
echo"
</div>
</div>

</div>
</div>
<br><br> <br> <br> <br> ";}}
///////////////

if($result4->num_rows > 0) {
	if (isset($_POST["loc2"])){
	echo "<p id=\"Nursery\"style=\"font-size:3vw; text-align:left;color:#D76217;font-family:AnuDaw;margin-left:300px;\" > Nursery</p> ";
echo 
"<div style=\"border:solid 5px #5ba8a0; margin-left:auto;margin-right:auto;padding:30px;width:800px; height:700px;box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
 border-radius:10px;\">
   
 <div class=\"container\">
 <div class=\"box-1\">";
 
 while($row = $result4->fetch_assoc()) {
                echo "<button  style=\"font-size:20px;color:#D76217;\>".$row["name1"] ."</button>"."<br>";
            }
echo"<div style=\"width:30px;float:left;margin-left:450px;margin-pottom:100px;\"> <img src=\"project2-8.png\" class=\"rounded float-start\" alt=\"school\" style=\"\width:300px;height:300px; margin-left:300px;display: inline-block;\" > </div> ";
 echo"<div style=\"width:30px;float:left;margin-left:450px;\"> <img src=\"project2-6.png\" class=\"rounded float-start\" alt=\"school\" style=\"\width:300px;height:300px; margin-left:300px;display: inline-block;\" > </div> ";
 
 $conn->close();
echo" </div>";
 echo"
</div>
</div>
</div>
</div>


</div> 
</body>

   </html> ";}}
	

?>



