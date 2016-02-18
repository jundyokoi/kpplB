<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Application Form</title>


	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/css_aisindo.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/strip.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bg.css">
</head>
<body>
<h2> Tes Form </h2>

<?php 
echo form_open('pelanggan/form');
?>
<label class="" for="id">ID</label>
<br />
<input name="id" id="id"/>
<br />

<label for="nama">NAMA</label>
<br />
<input name="nama" id="nama"/>
<br />

<label for="alamat">ALAMAT</label>
<br />
<textarea name="alamat" id="alamat"></textarea>
<br />

<label for="no_hp">NOMOR HP</label>
<br />
<input name="no_hp" id="no_hp"/>
<br />

<input type="submit" value="kirim"/>
</form>

</body>
</html>