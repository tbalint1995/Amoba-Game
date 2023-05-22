<?php
  defined('IN_PRODUCTION') or die('No direct access allowed!');
?>
<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Amőba</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?logout">Kilépés</a>
        </li>
         
      </ul>
      <div class="d-flex" >
       &nbsp;<b><?php print \classes\Controller::$PLAYER1["username"]?></b>&nbsp;&nbsp;vs&nbsp;&nbsp;<b><?php print \classes\Controller::$PLAYER2["username"]?></b>
      </div>
    </div>
  </div>
</nav>