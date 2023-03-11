<?php
include 'dbCon.php';


if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $classN = $_POST['classN'];
    $email = $_POST['emailRegister'];
    $club = $_POST['clubs'];
    $cne = $_POST['cartNat'];
    $role = "user";



    $sql_check = "SELECT fullname , email , cne FROM members WHERE fullname=? OR email=? OR cne =? ";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->execute([$fullname,$email,$cne]);
    $results = $stmt_check->fetchAll();

     // insert data to database
    $sql = "INSERT INTO members (fullname, class, email, id_club, cne, role) VALUES (:fullname, :class, :email, :id_club, :cne, :role)";
    $stmt = $conn->prepare($sql);


    if (!$results) {
        $stmt->execute([':fullname' => $fullname, ':class' => $classN, ':email' => $email, ':id_club' =>$club, ':cne' => $cne , ':role' => $role]);
        header ("location: ../index.php?success=account created successfully");
    }else {
        header ("location: ../index.php?error=Information already exist");
    }
}else{
    header ("location: ../index.php");
}
?>
