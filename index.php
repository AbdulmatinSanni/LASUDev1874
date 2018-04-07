<?php
include_once "includes/attendees.php";
?>
<!doctype html>

<html lang="en">
<head>
  <title>LASUDev1874 | Collaborative Coding using VCS - Git</title>
  <meta name="author" content="Abdumatin Sanni">
  <meta name="description" content="LASUDev1874 Collaborative Coding using VCS - Git">
  <meta charset="utf-8">

  <link rel="stylesheet" href="css/style.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
    <h1 class="text-center">LASUDev1874 Collaborative Coding using VCS - Git</h1>
    <hr>
    <?php foreach ($attendees as $key => $attendee): ?>
        <h2 class="text-center"><?php echo $attendee; ?></h2>
    <?php endforeach; ?>
</body>
</html>
