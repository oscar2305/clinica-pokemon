<?php
   $servidor="localhost";
   $usuario="root";
   $clave="";
   $basededatos="pokemon";

   $enlace=mysqli_connect($servidor,$usuario,$clave,$basededatos);
    if(!$enlace){
        echo"error en la conexion con el servidor";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Autorizacion de medicina</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estil.css">
    <link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
    <form method="post">
    	<h1>Ingrese sus datos</h1>
    	<input type="text" name="nombre" placeholder="Nombre ">
        <input type="text" name="apell" placeholder="Apellido">
        <input type="email" name="email" placeholder="Email">
         <input type="text" name="dni" placeholder="DNI">
        <input type="text" name="pokemon" placeholder="pokemon">
        <input type="text" name="estado" placeholder="Estado del pokemon">
    	<input type="submit" name="register">
        <img src="enfermera.png">
         <p>
    <a  href="index.php"><img src="boton r.png" width="40%" Height="40%"></a>
</p>

    </form>

</body>
</html>
<?php 

    if(isset($_POST['register'])){
        $nombre=$_POST["nombre"];
        $apell=$_POST["apell"];
        $email=$_POST["email"];
        $dni=$_POST["dni"];
        $pokemon=$_POST["pokemon"];
        $estado=$_POST["estado"];

        $insertardatos="INSERT INTO registro(nombre,apellido,email, dni, pokemon, estado) VALUES ('$nombre','$apell','$email','$dni','$pokemon','$estado')";

        $ejecutarinsertar =mysqli_query($enlace,$insertardatos);
        if($ejecutarinsertar){
            ?>
            
            
            <h3 class="ok">¡Tu solicitud ha sido recibida exitosamente!</h3>
            


            <?php
        }else{
            ?>
            <h3 class="bad">¡Por favor complete los campos!</h3>

            <?php
        }
    

}
?>
