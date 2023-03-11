<?php
    session_start();
?>
<?php if (isset($_SESSION["email"])) { ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--- css file --->
    <link rel="stylesheet" href="../css/super_admin.css">
    <title>Club Managment</title>
</head>
<body>
    <?php include '../sections/navbar.php'; ?>
        <div class="hero-sections">
            <div class="container">
                    <?php if (isset($_GET['success'])) {?>
                        <div class="alert alert-success" role="alert" id="alert">
                            <?=$_GET['success']?>
                        </div>
                    <?php }elseif (isset($_GET['error'])) {?>
                        <div class="alert alert-danger" role="alert" id="alert">
                            <?=$_GET['error']?>
                        </div>
                    <?php }?>
            <!------------------------------------------->
                <div class="container row">
                    <div class="col-4"></div>
                    <div class="col-10"></div>
                </div>
            </div>
        </div>








    <!-- Modal ADD Member -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Join Club</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <?php include '../forms/addMember.php'; ?>
            </div>
        </div>
    </div>


























<script>
    let alert = document.getElementById('alert')
    
    if(alert){setTimeout(function() {
        alert.style.display ="none"
        // window.location.href = "index.php";
    },3500)
    }else{
        alert.style.display ="block"
    }
    // --------------
    
</script>
</body>
</html>

<?php }else { 
    
        header ("location: ../index.php?error=Something Went Wrong");
    
} ?>