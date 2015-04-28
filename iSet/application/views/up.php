<?php
// setting nama folder tempat upload
$uploaddir = '/assets/upload/';
// membaca nama file yang diupload
$fileName = $_FILES['userfile']['name']; 
// nama file temporary yang akan disimpan di server
$tmpName = $_FILES['userfile']['tmp_name']; 
// membaca ukuran file yang diupload
$fileSize = $_FILES['userfile']['size'];
// membaca jenis file yang diupload
$fileType = $_FILES['userfile']['type'];
// menyimpan properti atau informasi file ke tabel upload dalam db
// dengan terlebih dahulu mengecek ada tidaknya nama file dalam tabel
$query = "SELECT count(*) as jum FROM upload WHERE name = '$fileName'";
header("Location:upload");
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
if ($data['jum'] > 0)
{
 $query = "UPDATE upload SET size = '$fileSize' WHERE name = '$fileName'";
}
else $query = "INSERT INTO upload (name, size, type) VALUES ('$fileName', '$fileSize', '$fileType')";
mysql_query($query);
// menggabungkan nama folder dan nama file
$uploadfile = $uploaddir . $fileName;
// proses upload file ke folder 'data'
// membaca id file yang akan dihapus
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="button.css" />
<link rel="stylesheet" type="text/css" href="home.css" />
<link rel="stylesheet" type="text/css" href="stylee.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
body,td,th {
	color: #FFFFFF;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body background="images/top.jpg" align="center">
<div class="wrap">
    	<div class="logo"><a href="index.html"><img  src="images/test.png" alt="" title="" border="0" /></a></div>
        
        <div id="menu">
            <ul>                                                                       
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Data Karyawan</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="galery.html">Galery</a></li>
            </ul>
        </div>
        
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <form enctype="multipart/form-data" action="upload.php" method="POST" >
 <input type="hidden" name="MAX_FILE_SIZE" value="3000000" border="9" />
 <input name="userfile" type="file"  border="3"/>
 <input type="submit" value="Upload"  border="9" />
</form>
<table width="1050" border="0" align="center">
    <tr  height="0">
    </tr>
</table>
<table background="Image/button3.png" align="center"width="800"  height="50" border="0">
  <tr>
    <th><?php
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
 echo "";
} else {
 echo "";
}
?></th>
  </tr>
</table>
<table width="600" border="0"align="center" >
          <tr  height="40" align="center">
          <th width="30"  background="image/button2.png">Download</th>
          <th width="700"  background="image/button5.png">File</th>
          <th width="30"   background="image/button2.png">Delete</th>
    </tr>
<?php
$query = "SELECT * FROM upload order by id asc";
$hasil = mysql_query($query);
$data['no']="1";
while($data = mysql_fetch_array($hasil))
{
  
  echo "<tr align='center'>";
        echo "<td><a href='download.php?id=".$data['id']."'><input type='buttonbb'   	
		       class='button8' value='Download'></a> </td>";   
		echo "<td input type='button' class='button8'>".$data['name']."</td>";
		
		echo "<td><a href='hapus.php?id=".$data['id']."'><input type='buttonbb' class='button8'
			   value='Delete'></a> </td>";
      
}
?>
<tr >
        <th width="5"   background="image/button2.png"></th>
        <th width="700"  background="image/button5.png"></th>
    	<th width="30" height="20"  background="image/button2.png"></th>
    </tr>
</table>
</body>
</html>