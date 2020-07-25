<?php
$servername="localhost";
$username="root";
$password="";
$dbname="solemne3";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Coneccion rechazada.".$conn->connect_error);
} else {
    
    $stmt=$conn->prepare("INSERT INTO usuario(Rut)
            VALUES(?)");
    $stmt->bind_param("s", $Rut);
    $Rut=$_POST['Rut'];
     if($stmt->execute()){
        $sql="SELECT Rut FROM usuario WHERE Rut='$Rut'";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo'<script>alert("El Rut '.$row["Rut"].' es Valido")</script>';
            }
        }
    }
    $stmt->close();
    $conn->close();
}