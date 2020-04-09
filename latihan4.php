<HTML>
<HEAD>
	<TITLE>Penggunaan is array</TITLE>
</HEAD>
<body>
<?php 
$var  = array(1,2,3,4,5,6,7 );
$scan = is_array($var);
if ($scan == false){
	$status = "bukan";
}else {
	$status = "";
}
echo "\$var = array(1,2,3,4,5,6,7)";
echo "<br>";
echo "variable\$var $status merupakan array";
 ?>
</body>
</HTML>