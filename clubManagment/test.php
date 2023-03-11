<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="email" name="email" />
        <input type="text" name="cne" />
        <input type="submit" name="submit" value="submit"/>
    </form>




    <?php 
include 'data/dbCon.php';

// get data to get club data
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $cne = $_POST['cne'];

    $sql_check = "SELECT email , cne FROM members WHERE email=? OR cne =? ";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->execute([$email,$cne]);
    $results = $stmt_check->fetchAll();

    
    if ($results) {
        echo "email exist";
    }else {
        echo "ready to go";
    }

    
}
?>


</body>
</html>
