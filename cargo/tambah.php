<?php
require 'functions.php';
if( isset($_POST["submit"]) ) {
if( tambah($_POST) > 0 ) {
	echo "
	<script>
	alert('Success update databased');
	document.location.href ='stok.php';
	</script>
	";
	} else {
	echo "
	<script>
	alert('Failed Update databased');
	document.location.href ='stok.php';
	</script>
	";
}
}
?>
<!DOCTYPE html>
<html>
   <meta charset="utf-8">
    <title>Add New Product</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://www.hockeycomputindo.com/favicon.ico' rel='icon' type='image/x-icon'/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
  <?php require 'head.php';?>
<?php require 'nav.php';?>
  <div class="row shadow rounded">
    <div class="col-12 col-md-12 p-3 p-md-5">
  <div class="text-center">
  <h3>Axcora cargo apps</h3>
  <p>Plugins for get axcora cms - 
  <a href="https://axcora.com/getaxcoracms">axcora.com/getaxcoracms</a>
  </div>
  <form action="" method="post">
  <div class="row">
   <div class="col-12 col-md-6 p-3">
  <label for="id"><h6>Sender </h6></label>
  <input type="text" name="nama" class="col-9 rounded float-right" id="nama" required>
</div>

<div class="col-12 col-md-6 p-3">
    <label class="text-start" for="id"><h6>Tracking No </h6></label>
  <input type="text" name="track" class="col-9 rounded float-right" id="track" required>
  </div>

  <div class="col-12 col-md-6 p-3">
    <label for="id"><h6>Receiver</h6></label>
   <textarea type="text" name="barcode" class="form-control rounded float-right" col="30" rows="6" id="barcode" required> </textarea><br/>
 </div>
 <div class="col-12 col-md-6 p-3">
    <label for="id"><h6>Lots </h6></label>
   <textarea type="text" name="jual" class="form-control rounded float-right"col="30" rows="6" id="jual"> </textarea><br/>
 </div>
 <div class="col-12 col-md-6 p-3"><br/>
    <label for="id"><h6>Fee </h6></label>
  <input type="text" name="beli" class="col-9 rounded float-right" id="beli" required>
 </div>
 <div class="col-12 col-md-6 p-3"><br/>
    <label for="id"><h6>Status </h6></label>
  <input type="text" name="stok" class="col-9 rounded float-right" id="stok" required>
</div>
<br/>
</div>
<button type="hidden" class="btn btn-dark float-right col-3" type="submit" name="submit">
Save
</button>
</div>
  </form>
    <div class="col-12 col-md-4"></div>
    <div class="col-12 col-md-12 text-center">
<hr>
<p class="text-center"><small>present by <a href="https://mesinkasironline.web.app" class="text-dark"> https://mesinkasironline.web.app</a></small></p>
</div>
</div>
</div>
</div>
</body>
</html>