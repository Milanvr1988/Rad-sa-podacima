<?php  require 'db.php';

      if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $cars = array_filter($db, function ($el)
  {
    global $id;
    return $el['id'] == $id;
  });
}
// echo "<pre>";
// var_dump($cars);
// echo "</pre>";
      elseif (isset($_GET['search'])) {
  $search = $_GET['search'];
  $cars = array_filter($db, function ($el)
  {
    global $search;
    return $el['brand'] == $search || $el['name'] == $search || $el['price'] == $search;
  });
}if (count($cars)==0) {
  header('location:index.php?error');
}
// echo "<pre>";
// var_dump($cars);
// echo "</pre>";
?>

 <?php require 'view/car.view.php'; ?>
