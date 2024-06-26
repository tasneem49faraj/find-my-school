<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>page3</title>
	<style>

		.main-div{
			
			box-shadow:  0 5px 25px rgba(1, 1, 1, 15%);
padding: 20px 30px;
width: 50.25em;
  height: 30.25em;
 
  border-radius: 30px;
  transition: 0.7s ease;
  position: relative;
top:100px;
left: 300px;

		}
		.contant{
display: flex;
justify-content: center;
align-items: center;

}
.name{
	margin-bottom: 0px;
	text-align: right;
	color: #5ba8a0;
	font-family:"AnuDaw";
	font-size: 40px;
}
.loc{
	margin-bottom: 0px;
	text-align: right;
	color: #5ba8a0;
	font-family:"AnuDaw";
	font-size: 40px;
}
.num{
	margin-bottom: 0px;
	text-align: right;
	color: #5ba8a0;
	font-family:"AnuDaw";
	font-size: 40px;
}
.but1{
	width: 400px;
        height: 50px;
        color: #fff;
        border-radius: 50px;
       background-color:#5ba8a0 ;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        margin-top: 20px;
		text-decoration: none;
border: none;
}
	</style>
</head>
<body>
	
</body>
</html>
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
 $sql5="select * from project where  name='ميمونة الاساسية'";
 $sql6="select * from project where  name='الحكمة'";
 $sql7="select * from project where  name='حسن البصري'";
 $result5 = $conn->query($sql5);
 $result6 = $conn->query($sql6);
 $result7 = $conn->query($sql7);
 if($result5->num_rows > 0) { 
 if (isset($_POST["button1"])){
 $row = $result5->fetch_assoc();
 
 echo "<div  class=\"main-div\"><div class=\"contant\">

 </div> <h1 class=\"name\">  اسم المدرسة:$row[name]</h1> <br> <h2 class=\"loc\">  عنوان المنطقة:$row[loc]</h2> <br> <h3 class=\"num\">رقم المدرسة: $row[numper]</h3> <br>
 
 <button class=but1><a>لمعرفة المزيد </a></button><br>
 <button class=but1><a>موقع المدرسة التفصيلي</a></button>
 </div>";
 

 
 
 }}
 
echo "<br>"."<br>"."<br>";

if($result6->num_rows > 0) {
	if (isset($_POST["button2"])){
	$row = $result6->fetch_assoc();
 
	echo "<div  class=\"main-div\"><div class=\"contant\">

	</div> <h1 class=\"name\">  اسم المدرسة:$row[name]</h1> <br> <h2 class=\"loc\">  عنوان المنطقة:$row[loc]</h2> <br> <h3 class=\"num\">رقم المدرسة: $row[numper]</h3> <br>
	
	<button class=but1><a>لمعرفة المزيد </a></button><br>
	<button class=but1><a>موقع المدرسة التفصيلي</a></button>
	</div>";
	
   
}	}
echo "<br>"."<br>"."<br>";
if($result7->num_rows > 0) {
	if (isset($_POST["button3"])){
	$row = $result7->fetch_assoc();
 
	echo "<div  class=\"main-div\"><div class=\"contant\">

	</div> <h1 class=\"name\">  اسم المدرسة:$row[name]</h1> <br> <h2 class=\"loc\">  عنوان المنطقة:$row[loc]</h2> <br> <h3 class=\"num\">رقم المدرسة: $row[numper]</h3> <br>
	
	<button class=but1><a>لمعرفة المزيد </a></button><br>
	<button class=but1><a>موقع المدرسة التفصيلي</a></button>
	</div>";
	
   
 
}	}
?>