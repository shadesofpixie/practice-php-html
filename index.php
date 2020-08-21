<?php 
  $title = 'Top 5 Learning Tips';
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $title; ?></title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <div class="wrap">
        <div class="sidebar">
          <?php include 'inc/learning_quotes.html'; ?>
        </div>
        <div class="main">
          <h1><?php echo $title; ?></h1>
    
          <?php include 'inc/learning_tips.html'; ?>

        </div>
        <div class="footer">Practice Completed: <?php echo date('F j, Y'); ?></div>
    </div>
  </body>
</html>
