
    if(isset($_POST['register'])){
        $nombre=$_POST["nombre"];
        $apell=$_POST["apell"];
        $dni=$_POST["dni"];
        $email=$_POST["email"];
        $pokemon=$_POST["pokemon"];
        $estado=$_POST["estado"];

        $insertardatos="INSERT INTO registro(nombre,apellido,email, dni, pokemon, estado) VALUES ('$nombre','$apell','$dni','$email','$pokemon','$estado')";

        $ejecutarinsertar =mysqli_query($enlace,$insertardatos);

        if($ejecutarinsertar){
            echo=

        }


?>