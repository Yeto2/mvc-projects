<nav class="navbar navbar-expand-lg bg-dark bg-gradient" style="--bs-bg-opacity: 0.7">
    <div class="container">
    <a class="navbar-logo" href="#"><img width="60px" src="../images/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php if (isset($_SESSION["email"]) && $_SESSION["role"] === "super_admin"){ ?>

        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ">
                <a class="nav-link text-white" href="../pages/superAdmin.php">
            <b><?php $_SESSION['email']?></b>
                </a>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Member</button>
            </div>
            <form action="../data/logout.php" >
                <input class="btn btn-danger" type="submit" value="logout" name="logout">
            </form>
    </div>
    <?php }elseif (isset($_SESSION["email"]) && $_SESSION["role"] === "user"){?>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ">
            <a class="nav-link text-white" href="../pages/superAdmin.php">
            <b><?php $_SESSION['email']?></b>
            </a></div>
            <form action="../data/logout.php" >
                <input class="btn btn-danger" type="submit" value="logout" name="logout">
            </form>
    </div>
    <?php }else{?>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav ">
            <a class="nav-link active text-white" aria-current="page" href="#home">Home</a>
            <a class="nav-link text-white" href="#clubs">Clubs</a>
            <a class="nav-link text-white" href="#contact">Contact</a>
        </div>
        <!-- Button trigger modal -->
            <button class="btn btn-success"data-bs-toggle="modal" data-bs-target="#loginModal" name="login">Login</button>
    </div>
            <?php
        }
        ?>
    </div>
    </div>







<!---------- Modal login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
    <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
        <?php include 'forms/login.php'; ?>
</div>
</div>
</div>

</nav>