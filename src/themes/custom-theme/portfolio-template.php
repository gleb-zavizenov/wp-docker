<?php
/*
Template Name: Portfolio Page Template
*/


$teamlead = get_field('project_lead');
$image = get_field('project_screenshot');

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="screenshot-call-out">
    <img src="<?php echo $image; ?>">
    <h2><?php echo $teamlead; ?></h2>
  </div>
</body>
</html>
