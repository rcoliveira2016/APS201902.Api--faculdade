<?php  
function teste(){
	ob_start();
	$titulo = "LGPD Helper";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?= $titulo; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body style="margin: 0; padding: 0;">
		<h1><?= $titulo; ?></h1>
		<p></p>
	</body>
</html>
<?php
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  return  $pagemaincontent;
}
  
  echo teste();
?>