 
<?php
  defined('IN_PRODUCTION') or die('No direct access allowed!');
?><!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
      body{
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
</head>
<body>
 
  <div class="container">
    <div class="container">

      <?php  

        if( isset($_SESSION["error"]) ):
      ?>
      <div class="alert alert-danger my-3"><?php print $_SESSION["error"];?></div>
      <?php 
      unset($_SESSION["error"]); 
      endif; 
      ?>

      <h2 class="text-center mb-4">Login</h2>
    </div>
    <div class="container">
      <div class="row g-3">
        <div class="col-md-6">
          <form action="" method="post" class="card">
            <div class="row card-body g-3">
            <h5 class="card-title">Player1 <?php print (( isset($_SESSION["player1"]) )? '<i class="bi bi-check-lg text-success"></i>':'')?></h5>
              <div class="col-12">
                <label for="username1"  class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Player1" id="username1" name="username1" <?php print (( isset($_SESSION["player1"]) )? 'disabled':'')?>>
              </div>
          
              <div class="col-12">
                <label for="password1"  class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="password" id="password1" name="password1" <?php print (( isset($_SESSION["player1"]) )? 'disabled':'')?>>
              </div>
           
              <div class="col-12 mt-3">
                <button class="btn btn-success" <?php print (( isset($_SESSION["player1"]) )? 'disabled':'')?>>Login</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
        <form action="" method="post" class="card">
          <div class="row  card-body g-3">
          <h5 class="card-title">Player2 <?php print (( isset($_SESSION["player2"]) )? '<i class="bi bi-check-lg text-success"></i>':'')?></h5>
            <div class="col-12">
              <label for="username1"  class="form-label">Username</label>
              <input type="text" class="form-control" placeholder="Player2" id="username2" name="username2" <?php print (( isset($_SESSION["player2"]) )? 'disabled':'')?>>
            </div>
        
            <div class="col-12">
              <label for="password2" class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="password" id="password2" name="password2" <?php print (( isset($_SESSION["player2"]) )? 'disabled':'')?>>
            </div>
         
            <div class="col-12 mt-3">
              <button class="btn btn-success" <?php print (( isset($_SESSION["player2"]) )? 'disabled':'')?>>Login</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
