<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/home.css" rel="stylesheet">
  <link rel="stylesheet" href="../estily/boots1.css">
  <link rel="stylesheet" href="../estily/boots2.java">
  <link rel="stylesheet" href="../estily/boots3.java">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
 .row{
   position: relative; 
   top: 15px; 
 }
</style>
<body>
  <div class="container container-fluid text-center">
    <div class="row">
      <div class="col"><?php include_once 'nav/cabesa.php'; ?></div>
      <div class="col"> <?php include_once 'main/infos.php'; ?></div>
      <div class="col"><?php include_once 'main/insert.php'; ?></div>
    </div>
  </div>
</body>

</html>