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
<script type="text/javascript" charset="UTF-8" src="//www.google.com/js/th/z3D2AwhN0-6UiuA5hIYy1TOX1bNWraW8m-Dp_HU5DKc.js"></script><style type="text/css">.recaptchatable td img{display:block}.recaptchatable .recaptcha_r1_c1{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') 0 -63px no-repeat;width:318px;height:9px}.recaptchatable .recaptcha_r2_c1{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') -18px 0 no-repeat;width:9px;height:57px}.recaptchatable .recaptcha_r2_c2{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') -27px 0 no-repeat;width:9px;height:57px}.recaptchatable .recaptcha_r3_c1{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') 0 0 no-repeat;width:9px;height:63px}.recaptchatable .recaptcha_r3_c2{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') -18px -57px no-repeat;width:300px;height:6px}.recaptchatable .recaptcha_r3_c3{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') -9px 0 no-repeat;width:9px;height:63px}.recaptchatable .recaptcha_r4_c1{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') -43px 0 no-repeat;width:171px;height:49px}.recaptchatable .recaptcha_r4_c2{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') -36px 0 no-repeat;width:7px;height:57px}.recaptchatable .recaptcha_r4_c4{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') -214px 0 no-repeat;width:97px;height:57px}.recaptchatable .recaptcha_r7_c1{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') -43px -49px no-repeat;width:171px;height:8px}.recaptchatable .recaptcha_r8_c1{background:url('http://www.google.com/recaptcha/api/img/red/sprite.png') -43px -49px no-repeat;width:25px;height:8px}.recaptchatable .recaptcha_image_cell center img{height:57px}.recaptchatable .recaptcha_image_cell center{height:57px}.recaptchatable .recaptcha_image_cell{background-color:white;height:57px}#recaptcha_area,#recaptcha_table{width:318px!important}.recaptchatable,#recaptcha_area tr,#recaptcha_area td,#recaptcha_area th{margin:0!important;border:0!important;padding:0!important;border-collapse:collapse!important;vertical-align:middle!important}.recaptchatable *{margin:0;padding:0;border:0;font-family:helvetica,sans-serif;font-size:8pt;color:black;position:static;top:auto;left:auto;right:auto;bottom:auto}.recaptchatable #recaptcha_image{position:relative;margin:auto}.recaptchatable #recaptcha_image #recaptcha_challenge_image{display:block}.recaptchatable #recaptcha_image #recaptcha_ad_image{display:block;position:absolute;top:0}.recaptchatable img{border:0!important;margin:0!important;padding:0!important}.recaptchatable a,.recaptchatable a:hover{cursor:pointer;outline:none;border:0!important;padding:0!important;text-decoration:none;color:blue;background:none!important;font-weight:normal}.recaptcha_input_area{position:relative!important;width:153px!important;height:45px!important;margin-left:7px!important;margin-right:7px!important;background:none!important}.recaptchatable label.recaptcha_input_area_text{margin:0!important;padding:0!important;position:static!important;top:auto!important;left:auto!important;right:auto!important;bottom:auto!important;background:none!important;height:auto!important;width:auto!important}.recaptcha_theme_red label.recaptcha_input_area_text,.recaptcha_theme_white label.recaptcha_input_area_text{color:black!important}.recaptcha_theme_blackglass label.recaptcha_input_area_text{color:white!important}.recaptchatable #recaptcha_response_field{width:153px!important;position:relative!important;bottom:7px!important;padding:0!important;margin:15px 0 0 0!important;font-size:10pt}.recaptcha_theme_blackglass #recaptcha_response_field,.recaptcha_theme_white #recaptcha_response_field{border:1px solid gray}.recaptcha_theme_red #recaptcha_response_field{border:1px solid #cca940}.recaptcha_audio_cant_hear_link{font-size:7pt;color:black}.recaptchatable{line-height:1!important}#recaptcha_instructions_error{color:red!important}.recaptcha_only_if_privacy{float:right;text-align:right}#recaptcha-ad-choices{position:absolute;height:15px;top:0;right:0}#recaptcha-ad-choices img{height:15px}.recaptcha-ad-choices-collapsed{width:30px;height:15px;display:block}.recaptcha-ad-choices-expanded{width:75px;height:15px;display:none}#recaptcha-ad-choices:hover .recaptcha-ad-choices-collapsed{display:none}#recaptcha-ad-choices:hover .recaptcha-ad-choices-expanded{display:block}

.recaptcha_is_showing_audio .recaptcha_only_if_image,.recaptcha_isnot_showing_audio .recaptcha_only_if_audio,.recaptcha_had_incorrect_sol .recaptcha_only_if_no_incorrect_sol,.recaptcha_nothad_incorrect_sol .recaptcha_only_if_incorrect_sol{display:none !important}</style><script type="text/javascript" src="http://www.google.com/recaptcha/api/reload?c=03AHJ_Vuudj4-adh3X43LH6Af9WQcbFhgp6EwbZMn0IPyZqkopNSMR6VEVw6FgkDcJVvELrXYnW6OTyy3HTrmoQzfszM8TdzzPc3xgNdhnaEkNKfPdAkO0FmIpOuPkwa0A0ELMoL-60E-GmPUfJN6LVZLJSRfM7ZN5AUdc3yctXMULEgqqksrYojdJXe-0jbsc408kIJByL9Gaq4S1rE-rBXYELW2WR5pEDQBVlHtqj1jgcdrR9CYdEtkElaIbRVUTgbTq3lM7l0LaMajCqMGD18Po8kYIdmSyDPnNVuBmuUPd5cwpNp2nBWc&amp;k=6LeNx_MSAAAAAMdj4RBH0sch1nP-nikZlE07joIL&amp;reason=i&amp;type=image&amp;lang=en&amp;th=,KdiwbMjKcwCbj_G2QHggw5nLBq7wAAAAUKAAAAAI-ABWHPkZmGHj_CTHtTB3zxo5vz0zk_VHYDUvYTz15j7c6Gt941C8BMjO15Sm6AHqN-SsAfFww8YHVnABwOs3efKf7AxsXTKW7kViC-dTTlAoW-jc99HYN2LYAM17NsMkMk8hFFMGpSFcOgI7GNgRs8O65_yfhDBniAlQncKsUTVdKU0uMHVeXT8lZGSd-rURxPH5nwLOqP8TGLnZvJDYa40YLhcPUTtFUHMGR1z7GE-ikPDCNYdaCTTCzivv9GLW4HHtVGUIGY4QiDa6pHQ5wovTsJHVf35AC0C1LAtDytZHCan-ynucNeLA5i1t315d9b8UjmuwAQjFehRa5up-T3ejvCNI5VeEdgIJ-Q7LVwbGHzepyE6jAP3gp1zXN0EU9KQBhzZzSb-B"></script><style type="text/css" media="print" data-c2c="c2c_print_container_style">span.skype_c2c_print_container {} span.skype_c2c_container {display:none !important;} .skype_c2c_menu_container {display:none !important;}</style>

<br />

<input type="submit" value="kirim"/>
</form>

</body>
</html>