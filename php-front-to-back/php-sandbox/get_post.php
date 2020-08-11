<?php
  if (isset($_GET['name'])){
    print_r($_GET);
  // echo $_GET['name'];
  // echo $_GET['name'];
  // $name = htmlentities($_GET['name']);
  // echo $name;
  }

  if (isset($_POST['name'])){
    print_r($_POST);
    $name = htmlentities($_POST['name']); //it sends it through the headers
    echo $name;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My website</title>
</head>

<body>
  <form method="POST" action="get_post.php">
    <div>
      <label for="">Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label for="">Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
</body>

</html>
