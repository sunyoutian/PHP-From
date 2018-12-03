<?php
$display_name = "carimu";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PHP Basics by <?php echo $display_name; ?></title>
  <link href="CSS/style.css" rel="stylesheet"/>
</head>

</body>
<div id="wrap">
  <section class="sidebar text-center">
  <div class="avater">
    <img src="CSS/logo.png" alt="frog">
  </div>

  <h1><?php echo $display_name;  ?></h1>
  <p>contact:</br>
  <a href="mailto:mickey@ao">Email</a><p>
    <hr/>
  <li> <a href=""><span class="icon twitter"></span></a></li>
</ul>
<hr />
<p>Today: D,D M Y></p>

</section>
<section class="main">
<h1>My First Page </h1>
<h2>echo</h2>
<?php include 'INC/echo.php'; ?>
<hr />

<h2>Echo 2</h2>
<?php include 'INC/echo2.php'; ?>
<hr />

<h2>Addition</h2>
<?php include 'Image/Addition.php'; ?>
<hr />

<h2>syntax</h2>
<?php include 'INC/syntax.php'; ?>
<hr />


<h2>Condition</h2>
<?php include 'Image/Condition.php'; ?>
<hr />

<h2>Strings</h2>
<?php include 'INC/Strings.php'; ?>

</section>
</div>

<section class="footer text-center">
  &copy; <?php
  echo date('Y');
  echo " ". $dispaly_name . ".";
  echo "last modified: ". date ("F D Y H;i;s", getlastword());
  ?>
</section>
</body>
</html>
