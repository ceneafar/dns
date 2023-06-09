<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DNS look up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class=".flex-column justify-content-center align-items-center" style="width:80%;">

<h1>dns lookup</h1>
<h2>your ip: <?php echo $_SERVER["REMOTE_ADDR"]; ?></h2>

<hr class="hr hr-blurry" />

<form method="post" class="d-flex justify-content-center align-items-center w-3">
	<input type="text"  class="form-control w-40 p-3" name="url" placeholder="url.com" required>
	<input  class="btn btn-primary" name="btn" type="submit" value="send">
</form>
 
<br>

<?php
if(isset($_POST["btn"])){
	require "../controller/controller.php";
}
?>

<a href="https://github.com/ceneafar/dns" target="_blank">github</a>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>
