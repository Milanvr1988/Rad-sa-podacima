<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rad sa podacima</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>

<nav class="navbar navbar-expend navbar-light bg-light">
  <a href="index.php" class="navbar-brand">Home</a>
</nav>
<div class="jumbotron text-center">
  <?php foreach ($cars as $car): ?>
    <h4 class="display-4"><?php echo $car['brand']; ?></h4>
  <?php endforeach; ?>
</div>

<div class="container">
  <div class="row">
      <?php foreach ($cars as $car): ?>
        <div class="col-6" style="outline: 1px solid #ddd">
        <h4><?php echo $car['name'];  ?> </h4><hr>
        <p><?php echo $car['info']; ?></p>
        </div>
      <?php endforeach; ?>
  </div>
</div>

<div class="container">
  <div class="row">
      <?php foreach ($cars as $car): ?>
        <button class="btn btn-success btn btn-success col-3"><?php echo $car['price']." "."euro"; ?></button>
        <button class="btn btn-warning btn btn-warning col-3"> <?php if ($car['used']) {
           echo "car is"." : "."used";
        } else {
           echo "car is"." : "."New";
        }?>
       </button>
      <?php endforeach; ?>
  </div>
</div>
</body>
</html>
