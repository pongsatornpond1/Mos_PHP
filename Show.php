<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Show</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>ค้นหา
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>

<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "work";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
   $sql = "SELECT * FROM history1 WHERE stdid LIKE '%".$strKeyword."%' ";

   $query = mysqli_query($conn,$sql);

?>
<table width="1200" border="1">
  <tr>
    <th width="91"> <div align="center">StudentID </div></th>
    <th width="91"> <div align="center">Firstname </div></th>
    <th width="91"> <div align="center">Lastname </div></th>
    <th width="91"> <div align="center">E-mail </div></th>
    <th width="91"> <div align="center">Phone </div></th>
   
    
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["stdid"];?></div></td>
    <td><?php echo $result["firstname"];?></td>
    <td><?php echo $result["lastname"];?></td>
    <td><?php echo $result["Email"];?></td>
    <td><?php echo $result["Phone"];?></td>
    
    <td align="center" width="98"><a href="update.php?StudentID=<?php echo $result["stdid"];?>
    " a href="update.php?password=<?php echo $result["password"];?>">แก้ไข</a></td>
    
    <td align="center" width="98"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?Studentid=<?php echo $result["stdid"];?>';}">ลบ</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>

<form action="Insert1.php" name="frmAdd" method="post">
 <input type="submit" name="submit" value="เพิ่มข้อมูล">
</form>

</body>
</html>
