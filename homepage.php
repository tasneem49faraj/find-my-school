<?php?>
<!DOCTYPE html>
<html>
<head>
<title>find my school</title>
<meta charset="utf-8"  >
<meta ame="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.cs
s" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle
.min.js"></script>
<style>
.vl {
  border-left: 6px solid #5ba8a0;;
  height: 300px;
  position: absolute;
  left: 40%;
  
  top:40%;
}
button {
	border:solid 1px #5ba8a0; border-bottom: none;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  border-radius: 10px;background-color:white; height:40px;
  width:200px;margin-left:70px; 
}

  @media only screen and (min-width:769px) {
              .dropdown:hover .dropdown-menu {
                  display: block;
				  max-height:200px;
				  overflow-y:scroll;
				  float:center;
              }
			  .container {
  position: relative;
  width: 90%;
  height:auto;
  display:inline;
  float:right;
  
}

  .image {
  display:block;

  width: 100%;

  height: auto;
  margin-bottom:60px;
  margin-left:auto;margin-right:auto;
  
}



.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.container:hover .overlay {
  height: 100%;
}


.text {
  color:#5ba8a0 ;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

</style>
</head>
<body>

<div class="row justify-content-md-center">
<div style="background-color:white;border:solid 1px #5ba8a0;margin-left:auto;margin-right:auto;
 width:75%;
 padding-top:20px;
 box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
 border-radius:10px;
  ">
 <div style="border:solid 1px #5ba8a0;margin-left:auto;margin-right:auto;
 width:75%;
 padding-top:20px;
 box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
 border-radius:10px;
  background-color:#5ba8a0;">
<h1 style="text-align:center; color:white;font-size:50px;
	font-family:AnuDaw;">find my school</h1>
</div>
</div>
</div>

<br>
<br>
<br>
<div class="row justify-content-md-center">
 <div style="border:solid 1px #5ba8a0; border-bottom: none;height: 500px; max-height: 500px;  width: 75%; 
  
  margin-left:auto;margin-right:auto;
  
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  border-radius: 10px;">
  <div class="col">
   <h2 style="color:darkslategrey;font-size:30px;
	font-family:DG Sahabah;
	text-align: left;margin-left:40px;
	padding-top:40px;"><stong>choose location </strong></h2>

	<div class="dropdown">
 <br>
 <br>
  <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"style="background-color:#5ba8a0;" >
    ابحث
  </button>
  
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"  >
   <form action="page2.php" method="post" ><button type="submit" name="loc1"><li><a class="dropdown-item" > تلاع العلي</a></li></button></form><br>
     <form action="page2.php" method="post" ><button type="submit" name="loc2"> <li><a class="dropdown-item" > أبو نصير</a></li></button></form><br>
	 <form action="page2.php" method="post" > <button type="submit" name="loc3"><li><a class="dropdown-item"> خلدا</a></li></button></form><br>
    <form action="page2.php" method="post" ><button type="submit" name="loc4"> <li><a class="dropdown-item" > الشميساني</a></li></button></form><br>
    <form action="page2.php" method="post" > <button type="submit" name="loc5"><li><a class="dropdown-item" > دابوق</a></li></button></form><br>
	  <form action="page2.php" method="post" ><button type="submit" name="loc6"><li><a class="dropdown-item"> الصويفية</a></li></button></form><br>
    <form action="page2.php" method="post" > <button type="submit" name="loc7"><li><a class="dropdown-item" > المنارة</a></li></button></form><br>
    <form action="page2.php" method="post" ><button type="submit" name="loc8"> <li><a class="dropdown-item" > حي نزال</a></li></button></form><br>
	  <form action="page2.php" method="post" ><button type="submit" name="loc9"><li><a class="dropdown-item" > ماركا</a></li></button></form><br>
     <form action="page2.php" method="post" ><button type="submit" name="loc10"><li><a class="dropdown-item" > جبل النزهة</a></li></button></form><br>
    <form action="page2.php" method="post" ><button type="submit" name="loc11"> <li><a class="dropdown-item" > جبل الحسين</a></li></button></form><br>
	<form action="page2.php" method="post" ><button type="submit" name="loc12"><li><a class="dropdown-item" > جبل النصر</a></li></button></form><br>
    <form action="page2.php" method="post" ><button type="submit" name="loc13"> <li><a class="dropdown-item" > المقابلين</a></li></button></form><br>
  
  </ul>
 
 
  
</div>

  </div>
   <div class="col">
   <div class="vl"></div>
   </div>
   <div class="container" >
    <div class="col" style=" position: relative;
  width: 50%;
  height:90%;
  display:inline;
  float:right;">
	  <img src="school-locator-graphic.png" alt="Avatar" class="image"  >
  <div class="overlay" style="background-color:white;">
    <div class="text" style="background-color:white;">find my school </div>
  </div>
 </div>
 </div>
	</div>

</div>




</div>
 
</body>
</html>