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

<body class="body">
<div class="card-body">
  <?php include_once 'main/cHome.php'?>
</div>
  <div class="container container-fluid">

      <div class="row">

        <div class="col">
            
              <?php include_once '../backend/main.php'; ?>
            
        </div>

        <div class="col">

          <?php include_once 'main/iHome.php'; ?>

        </div>

        </div>

      </div>

</body>

</html>