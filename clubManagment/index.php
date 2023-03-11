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
    <link rel="stylesheet" href="css/style.css">
    <!-- javaScript form regex -->
    <script defer src="javaScript/form-regex.js"></script>
    <title>Club Managment</title>
</head>
<body>
    <?php include 'sections/navbar.php'; ?>
        <div class="hero-sections">
            <?php if (isset($_GET['success'])) {?>
                <div class="alert alert-success" role="alert" id="alert">
                    <?=$_GET['success']?>
                </div>
            <?php }elseif (isset($_GET['error'])) {?>
                <div class="alert alert-danger" role="alert" id="alert">
                    <?=$_GET['error']?>
                </div>
            <?php }?>
            <div class="container hero-text">
                <h1>Clubs scolaires</h1>
                <p class="text-center">youcode et offrir à ses adhérents un milieu agréable où ils peuvent améliorer leurs soft skills.</p>
                <div class="icon-scroll" data-v-0f1e6496=""></div>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="images/club.jpg" class="d-block" alt="club">
                    </div>
                    <div class="carousel-item">
                    <img src="images/ecole.jpg" class="d-block" alt="ecole">
                    </div>
                    <div class="carousel-item">
                    <img src="images/student.jpg" class="d-block" alt="student">
                    </div>
                </div>
            </div>
        </div>
        <!-- clubs section -->
        <div class="container club-section" id="clubs">
            <h3 class="col-sm-12 mt-3 mb-5 text-center">Clubs</h3>
            <div class="clubs row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Art</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing consectetur elit.</p>
                        </div>
                        <img src="images/clubs/art.jpg" alt="art">
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Robotique</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing consectetur elit.</p>
                        </div>
                        <img src="images/clubs/robotique.jpg" alt="robotique">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Sport</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing consectetur elit.</p>
                        </div>
                        <img src="images/clubs/sport.jpg" alt="sport">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Social</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing consectetur elit.</p>
                        </div>
                        <img src="images/clubs/social.jpg" alt="social">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Environnement</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing consectetur elit.</p>
                        </div>
                        <img src="images/clubs/Environnement.jpg" alt="Environnement">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-join">
                    <button class="btn btn-primary"><a class="nav-link" href="">Découvrir plus</a></button>
                    </div>
                </div>
            </div>
        </div>
        <section class="sponsor-section">
            <div class="headding">
                <h3>Sponsor</h3>
            </div>
            <div class="logos container">
                <marquee behavior="smooth" direction="ltr">
                    <img src="images/sponsors/freefire.png" alt="freefire" >
                    <img src="images/sponsors/ocp.png" alt="ocp" >
                    <img src="images/sponsors/simplon.png" alt="simplon" >
                    <img src="images/sponsors/polylingua.png" alt="simplon" >
                    
                </marquee>
            </div>
        </section>

    <?php include 'sections/footer.php'; ?>



<script>
    let alert = document.getElementById('alert')
    
    if(alert){setTimeout(function() {
        alert.style.display ="none"
        // window.location.href = "index.php";
    },3500)
    }else{
        alert.style.display ="block"
    }
</script>
</body>
</html>