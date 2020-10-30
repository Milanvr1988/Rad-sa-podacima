<!DOCTYPE html>
<?php require 'db.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rad sa podacima</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>

<nav class="navbar navbar-expend navbar-light bg-light">
  <a href="index.php" class="navbar-brand">Cars</a>
</nav>

<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <h4 class="display-4">Search car</h4>
      <form class="" action="carinfo.php" method="get">
        <div class="input-group">
          <input type="text" name="search" placeholder="<?php if (isset($_GET['error'])) {
            echo "No match found.Try agane!";
          } else {
            echo "search";
          }
           ?>" class="form-control">
          <div class="input-group-append">
            <button type="submit" class="btn btn-info btn-sm">Search</button>
          </div>
        </div>
      </form><br>
    </div>
  </div>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col-8 offset-2 ">
      <?php foreach ($db as $car): ?>
        <a href="carinfo.php?id=<?php echo $car['id']; ?>">
        <div class="card mb-3">
          <div class="card-header"> <?php echo $car['brand']; ?> </div>
          <div class="card-body"> <?php echo $car['name']; ?> </div>
          <div class="card-footer">
            <button class="btn btn-primary btn-sm float-left"><?php echo $car['price']." "."euro"; ?></button>
            <button  class="btn btn-warning btn-sm float-right"><?php if ($car['used']) {
               echo "car is"." : "."used";
            } else {
               echo "car is"." : "."New";
            }
             ?></button>
          </div>

        </div></a>
      <?php endforeach; ?>
    </div>

  </div>
</div>

  </body>
</html>
