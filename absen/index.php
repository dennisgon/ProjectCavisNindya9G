<!-- 
  Tampilan Absensi Cavis 9G, by Indra
-->

<?php 
//error_reporting(0); //Tidak menampilkan error meskipun ada error
 ?>

<html>
<head>
<title>OJT 9G Absence System</title>
<link href="../assets/css/button.css" rel="stylesheet" type="text/css">
<link href="../assets/css/textbox.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="" method="get">
  <!-- <table width="1307" height="605" border="0"> -->
  <table width="1307" height="605" border="1">
    <!-- Row 1 -->
    <tr>
      <td width="250" height="245" align="center"><img src="../assets/img/bslc-logo.jpg" width="239" height="200"/></td>
      <td align="center">
        <h1 font style="font-family:Arial, Helvetica, sans-serif; color:#0FC">
          OJT 9G Absence System <br>
          Binus Student Learning Community
        </h1>
      </td>
      <td></td>
    </tr>

    <!-- Row 2 -->
    <tr>
      <td height="89" ><h1 align="right" style="color:#0FC; padding-top:20">NIM</h1></td>
      <td><input type="text" name="NIM" id="textfield" size="40px" class="tb5"></td>
      <td width="338" rowspan="2" valign="top">
        <!-- Picket List Table -->
        <table width="350" height="254" border="1">
          <tr align="right">
            <td width="318" height="24" bgcolor="#00CCCC" align="center" font style="color: #FFF">Picket List</td>
          </tr>
          <tr>
            <td height="222" valign="top">
              <?php 
                if(isset($_GET['NIM']))
                {
                  if($_GET['NIM']==1901459125){
                    echo "Indra";
                  }
                }
              ?>
            </td>
          </tr>
        </table>
        <!-- End Picket List -->
      </td>
    </tr>

    <tr>
      <td height="130">&nbsp;</td>
      <td width="207" valign="top">
        <?php 
          if(isset($_GET['NIM']) )
          {
            if($_GET['NIM']==1901459125){
            echo "<h3>Indra</h3>";
            }
          }
        ?>
      </td>
    </tr>

    <!-- Admin Button -->
    <tr>
      <td height="77">&nbsp;</td>

      <!-- Login Logout Button -->
      <td valign="top"><input name="input" type="submit" value="Login" class="btn">
        <input type="submit" name="button" id="button" value="Logout" class="logout"></td>

      <td align="right"><a href="admin.php"><img src="../assets/img/icon_admin_128.png" width="57" height="44"></a></td>
    </tr>

  </table>
</form>

</body>
</html>