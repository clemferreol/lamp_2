
<?php 
if(isset($_POST['choice'])){
  //do stuff pour envoi post
  header("Location: /");
  exit;
}
//stuff pour tout le monde
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<form method="POST">
  <input type="radio" name="choice" value="yes" checked="checked">
  <input type="submit" value="ok">
</form>
  
</body>
</html>