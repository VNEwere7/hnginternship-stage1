<html>
  <head>
    <title>Judgemental Webpage</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <div id="main">
      <div class="text" id="time">
        <?php
          echo strtoupper(date('h:i a'));
        ?>
      </div>
      <div class="text" id="date">
        <?php
          echo date('l, F d');
        ?>
      </div>
      
      <div class="text" id="whydt">
          What have you done today?
      </div>
      <div class="text" id="foot">Judgemental<br>Webpage</div>
    </div>
  </body>
</html>