<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.div1{
background-color:violet;
color:white;
height:100%;
width:200px;
}
.maindiv{
position:fixed;
left:207px;
top:45px;
width:100%;
height:100%;
background-color:lightgrey;
}
.settingsicon{
position:fixed;
right:30px;
top:10px;
}
.dropbtn {
  background-color:violet;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.addfs{
background-color:white;
color:black;
position:relative;
top:20px;
left:15px;
height:85%;
width:84%;
}
.state{
width:90%;
height:26px;
}
.city{
width:90%;
height:26px;
}
.namefs{
width:90%;
height:26px;
}
.locationfs{
width:90%;
height:26px;
}
.submit{
background-color:violet;
color:white;
border:none;
width:80px;
height:40px;
}
.dropdown-content a:hover {background-color: violet;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: violet;}
</style>
</head>
<body>
<div class="div1">
<center><h1>FDMS</h1>
<div class="dropdown">
<button class="dropbtn">
<span class="icon"><i class='far fa-user-circle' style='font-size:48px'></i></span></button>
<div class="dropdown-content">
<a href="ownerupdateprofile.php">Profile</a>
<a href="ownerchangepassword.php">Change Password</a>
<a href="ownerlogout.php">Log Out</a>
</div>
</div>
</center><br>
<?php
session_start();
$name=$_SESSION['ownerusername'];
echo "<center>".$name."</center>";
?>
<br>
<br>
<div>
<span class="icon">
&nbsp&nbsp&nbsp&nbsp&nbsp<i class="material-icons" style="font-size:14px">dashboard</i></span>
<a href="owner.php" style="text-decoration:none;color:white;">DashBoard</a><br><br>
</div>
<div class="dropdown">
<button class="dropbtn">
<span class="icon">
&nbsp&nbsp<i class='fas fa-gas-pump' style='font-size:17px'></i></span>
<span class="text">Fuel Station</span></button>
<div class="dropdown-content">
<a href="addfs.php">addfuelstation</a>
<a href="managefs.php">managefuelstaion</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">
<span class="icon">
&nbsp&nbsp<i class="fa fa-first-order" style="font-size:18px"></i></span>
<span class="text">orderof fuel</span></button>
<div class="dropdown-content">
<a href="neworder.php">NewFuelOrder</a>
<a href="confirmedorder.php">Confirmed Fuel Order</a>
<a href="onthewayorder.php">Delivery Boy On the Way</a>
<a href="deliveredorder.php">Fuel Delivered</a>
<a href="cancelledorder.php">Order Cancelled</a>
<a href="allorders.php">All Fuel Orders</a>
</div>
</div>
<div class="settingsicon">
<i class="material-icons" style="font-size:25px;color:black;" >settings</i>
</div>
<div class="maindiv">
<form action="editfsupload.php">
<div class="addfs">
<br>
<center><h2>Update Fuel Station</h2></center>
<br>
&nbsp&nbsp&nbsp&nbspState<br><br>
<?php 
$con=mysqli_connect("localhost","root","","fdms");
$id=$_GET['editfsid'];
$sql="select * from tblfuelstation where ID='$id'";
$sql=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($sql);
$_SESSION['editfsid']=$id; 
$sid=$result['Stateid'];
$sql1="select State from tblstate where ID='$sid'";
$sql1=mysqli_query($con,$sql1);
$res=mysqli_fetch_assoc($sql1);
$cid=$result['Cityid'];
$sql1="select City from tblcity where ID='$cid'";
$sql1=mysqli_query($con,$sql1);
$r=mysqli_fetch_assoc($sql1);
?>
&nbsp&nbsp&nbsp&nbsp<select name="state">
<option><?php echo $res['State']; ?></option>
</select><br><br>
&nbsp&nbsp&nbsp&nbspCity<br><br>
&nbsp&nbsp&nbsp&nbsp<select name="city">
<option><?php echo $r['City']; ?></option>
</select>
<br><br>
&nbsp&nbsp&nbsp&nbspName Of Fuel Station<br><br>
&nbsp&nbsp&nbsp&nbsp<input type="text" name="namefs" class="namefs" value="<?php echo $result['Nameoffuelstation'] ?>"><br><br>
&nbsp&nbsp&nbsp&nbspLocation Of Fuel Station<br><br>
&nbsp&nbsp&nbsp&nbsp<input type="text" name="locationfs" class="locationfs" value="<?php echo $result['Locationoffuelstation']?>"><br><br><br>
<center><button class="submit" >Update</button></center>
</div>
</form>
</div>
</body>
</html>