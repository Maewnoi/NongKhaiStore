<!DOCTYPE html>
<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
<link rel="stylesheet" media="all" type="text/css" href="jquery-ui.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" media="all" type="text/css" href="jquery-ui-timepicker-addon.css" />
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="jquery-ui-sliderAccess.js"></script>

<style>
        h6 {
            font-size: 15px;
        }
        .w3-myfont {
            font-family: 'Kanit', sans-serif;
        }

        </style>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
  <?php
session_start();

  $objConnect = mysql_connect("localhost","root","") or die(mysql_error());
  $objDB = mysql_select_db("test");
  mysql_query("SET NAMES UTF8");


  // Check Exists ID
  $strSQL = "SELECT * FROM member WHERE UserID= '".$_SESSION["UserID"]."' ";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);
  ?>
<div class="w3-bar w3-deep-orange w3-myfont">
  <a class="w3-bar-item w3-hide-small" ><img src="logo1.png" width="90"></a>
  <a class="w3-myfont "><H3>Nong Khai Store</H3><h6>เว็บไซต์แนะนำร้านค้า และส่วนลด ในจังหวัดหนองคาย</h6></a> 
   <a href="Admin.html" class="w3-bar-item w3-button w3-hide-small">หน้าหลัก</a>
  <a href="Admin2.html" class="w3-bar-item w3-button w3-hide-small">สร้างโปรโมชั่น</a>
    <a href="Admin3.html" class="w3-bar-item w3-button w3-hide-small">หน้าร้าน</a>

</div>


<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>BEYOND CAFE</b></h1>
  <p>CAKE.COFFEE.TEA <span class="w3-tag">@Vviang</span></p>
</header>
<div class="w3-content" >
<table class="w3-table" border="1" class="btn btn-light">
  <tr>
        <th>Promotion</th>
        <th>เริ่ม</th>
        <th>หมดเขตุ</th>
        <th>รายละเอียด</th>
        <th>ราคา</th>
        <th>จำนวนโปรโมชั่นที่เหลือ</th>
      
  </tr>
  <?php

  $con = mysqli_connect("localhost", "root", "", "test");
  mysqli_set_charset($con, "utf8");

  $query = "SELECT * FROM `pro`";
  $res = mysqli_query($con,$query);


  while($row=mysqli_fetch_array($res)) {
    ?>
      <tr>
        <tr>

             <td><?php echo $row["name"]; ?></td>
             <td><?php echo $row["st_time"]; ?></td>
             <td><?php echo $row["ed_time"]; ?></td>
             <td><?php echo $row["des"]; ?></td>
             <td><?php echo $row["price"]; ?></td>
             <td><?php echo $row["stock"]; ?></td>
         
           
        </tr>
  <?php

  }
  ?>
  </table>
</div>


<footer class="w3-container w3-deep-orange w3-center w3-margin-top">
  <p>322236 Web Application Programming</p>
</footer>
</body>
</html>
