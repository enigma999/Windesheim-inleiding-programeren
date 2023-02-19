<?php
if(isset($_POST["thuis"])){
    $thuis=$_POST["thuis"];
}else{
    $thuis=0;
}
if(isset($_POST["uit"])){
    $uit=$_POST["uit"];
}else{
    $uit=0;
}
if(isset($_POST["verhoogThuis"])){
    $thuis=$thuis+$_POST["verhoogThuis"];
}
if(isset($_POST["verhoogUit"])){
    $uit=$uit+$_POST["verhoogUit"];
}
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Testpagina</title>
    </head>
    <body>
      <form method="post" action="index.php">
          thuis: <input type="text" name="display" value="<?php echo $thuis?>">
          <input type="hidden" name="thuis" value="<?php echo $thuis+1?>">
          <input type="hidden" name="uit" value="<?php echo $uit?>">
          <input type="submit" value="verhoogThuis">
      </form><br>
      <form method="post" action="index.php">
          uit: <input type="text" name="display" value="<?php echo $uit?>">
          <input type="hidden" name="thuis" value="<?php echo $thuis?>">
          <input type="hidden" name="uit" value="<?php echo $uit+1?>">
          <input type="submit" value="verhoogUit">
      </form><br>
    </body>
</html>
