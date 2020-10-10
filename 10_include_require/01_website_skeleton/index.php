<?php

// 1. Generate html boilerplate code
// 2. Create <header> and <footer> html elements
// 3. Create about.php
// 4. Move header.php and footer.php in partials folder
// 5. Create variable $companyName which can be accessed in footer.php

// 7.
$companyName = 'TraversyMedia';
?>
<!-- 6. Rename header.php to  show Fatal error-->
<?php require "partials/header.php"; ?>
<!-- 7. Create weather.php in partials-->
<!-- 8. Rename weather.php to show warning-->
<?php include "partials/weather.php" ?>
<h1>Welcome to my cool website</h1>
<?php require "partials/footer.php"; ?>
