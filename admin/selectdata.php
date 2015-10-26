<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>asdf</title>
  </head>
  <body>
    <form class="" action="try.php" id="register_form" method="post">

  <td><input  type="text" name="user_id" ></td>
  <td><input  type="text" name="rollno" ></td>
  <td><input  type="checkbox" value="<?php $date = date('d-m-Y'); ?>" name="date" ></td>
  <td><input  type="checkbox" value="<?php $time = time(); ?>" name="time" ></td>

  <input type="submit" name="submit" value="submit" >
  </form>
  </body>
</html>
