<?php
    session_start();
    include 'dbCon.php';

if (isset($_POST['login'])) {
    // super admin login
    $super_admin = array("admin@gmail.com","HH123456","Joe Shmoe");
    // inserted login
    $email = $_POST['user'];
    $cne = $_POST['cneLog'];

    $sql_check = "SELECT email , cne , role FROM members WHERE email=? AND cne =? ";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->execute([$email,$cne]);
    $results = $stmt_check->fetchAll();

    
        if ($email === $super_admin[0] && $cne === $super_admin[1]) {
            header ("location: ../pages/super_admin.php?success=Controll Panel");
            $_SESSION["email"] = $super_admin[0];
            $_SESSION["cne"]   = $super_admin[1];
            $_SESSION["name"]   = $super_admin[2];
        }elseif ($results) {
            // Set session variables
                $_SESSION["email"] = $results[0][0];
                $_SESSION["cne"]   = $results[0][1];
                $_SESSION["role"]  = $results[0][2];

                if ($_SESSION["role"] === "admin") {
                            header ("location: ../pages/admin.php");
                        }
                        elseif ($_SESSION["role"] === "user") {
                            header ("location: ../pages/user.php");
                        }else{
                        header ("location: ../index.php?error=Something Went Wrong");
                        }

            }else{
                header ("location: ../index.php?error=somting went wrong");
            }
        


}

?>