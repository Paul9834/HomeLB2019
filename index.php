<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inicio</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
</head>

<style>
    table tr:nth-child(even) {
        background-color: ;
    }
    table tr:nth-child(odd) {
        background-color: #1FB2DE;
        color: white;
    }
    table th {
        border-collapse: collapse;
        background-color: #0F385A;
        color: white;
    }
    th, td {
        padding: 15px;
    }
</style>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="assets/img/poli.png" width="200" height="60">
            </a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#services">tabla de datos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span data-aos="fade">¡Bienvenido a nuestra página web!</span></div>
                <div class="intro-heading text-uppercase"><span data-aos="fade-up">bici-retos</span></div><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" data-aos="zoom-in" data-aos-delay="150" data-aos-once="true" href="#services">cuentame más</a></div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">tabla de datos</h2>
                    <h3 class="text-muted section-subheading">Datos obtenidos con el dispositivo de Hardware MyRIO.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <div align="center">
                        <meta http-equiv="refresh" content="10">

                        <?php
                        $link = mysqli_connect("35.199.40.228", "paul9834", "paul9834", "labview");
                        $sql = "SELECT * FROM datos ORDER BY id  DESC  LIMIT  10";

                        if ($res = mysqli_query($link, $sql)) {
                            if (mysqli_num_rows($res) > 0) {

                                echo "<table class='table'>";
                                echo "<tr>";
                                echo "<th>id</th>";
                                echo "<th>dato1</th>";
                                echo "<th>dato2</th>";
                                echo "<th>dato3</th>";
                                echo "<th>dato4</th>";
                                echo "<th>fecha</th>";
                                echo "</tr>";
                                while ($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['dato'] . "</td>";
                                    echo "<td>" . $row['dato2'] . "</td>";
                                    echo "<td>" . $row['dato3'] . "</td>";
                                    echo "<td>" . $row['dato4'] . "</td>";
                                    echo "<td>" . $row['horadecreacion'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "No matching records are found.";
                            }
                        } else {
                            echo "ERROR: Could not able to execute $sql. "
                                . mysqli_error($link);
                        }
                        mysqli_close($link);
                        ?>

                        
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div align="center">
    <a href="https://info.flagcounter.com/rOkQ"><img src="https://s11.flagcounter.com/count2/rOkQ/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Desarrollado por Formación Retos.</span></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>
</html>