<?php
$servername='db.worldhosts.fun:3306';
$username='u4512_dGHqQlcF1N';
$password='m^BuBWXaPo9KZ.y4.YZ9j^OK';
$dbname = "s4512_ludo";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
$conn->set_charset("utf8");
if(!$conn){
  die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['submit'])){
  $mail = $_POST['mail'];
  $message = $_POST['message'];

  $sql = "INSERT INTO Feedback (`Mail`,`Message`) VALUES ('$mail','$message')";

  if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">
            window.location = "http://ludocafe.space/contacts.php"
          </script>';
  } else {
    echo "Error: " . $sql . "
  " . mysqli_error($conn);
  }
  mysqli_close($conn);
}

if(isset($_POST['rent_insert'])){
  $name = $_POST['name'];
  $count = $_POST['count'];
  $phone = $_POST['phone'];
  $flg = $_POST['flg'];
  if ($flg == 'on') {
    $flg = 1;
  } else {
    $flg = 0;
  }

  $sql = "INSERT INTO Rent (`Name`,`GuestsCount`,`Phone`,`FullAreaFlg`) VALUES ('$name','$count', '$phone', '$flg')";

  if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">
            window.location = "http://ludocafe.space/rent.php"
          </script>';
  } else {
    echo "Error: " . $sql . "
  " . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>