<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Tutorial Sample Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" datatarget="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="page-header header container-fluid">
        <div class="overlay"></div>
        <div class="description">
            <h1>Selamat Datang Di Kota Pariwisata Ponorogo</h1>
            <p>Kabupaten Ponorogo adalah sebuah kabupaten di Provinsi Jawa Timur, Indonesia. 
                Kabupaten Ponorogo dikenal dengan julukan Kota Reog atau Bumi Reog karena 
                daerah ini merupakan daerah asal dari kesenian Reog.</p>
            <button id="hide">Hide</button>
            <button id="show">Show</button>
        </div>
    </header>
    <div class="container features">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Klono Sewandono</h3>
                <img src="klonosewandono.jpg" class="img-fluid">
                <p>Klono Sewandono merupakan tokoh raja yang tampan dan sakti mandraguna yang memiliki pusaka andalan bernama 
                    Cemeti Klono Sewandono atau Raja Kelono. Pusaka yang dikenal dengan sebutan Pecut Samandiman ini sangat ampuh 
                    dan selalu dibawa ke manapun raja pergi.</p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Barongan (Dadak Merak) </h3>
                <img src="Ponorogo.jpg" class="img-fluid">
                <p>Barongan (Dadak Merak) merupakan topeng kepala harimau dengan berat 50 sampai 60 kg yang terbuat dari kerangka kayu, rotan, 
                    dan bambu kemudian dilapisi dengan kulit harimau gembong. Topeng ini juga dilengkapi dengan hiasan bulu 
                    merak dan untaian manik-manik (tasbih).</p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Jathil</h3>
                <img src="Jathil.jpg" class="img-fluid">
                <p>Jathil merupakan prajurit berkuda dan merupakan salah satu tokoh dalam seni Reog. Jathil merupakan tarian yang 
                    menggambarkan ketangkasan prajurit berkuda yang sedang berlatih di atas kuda. Tarian ini dibawakan oleh penari 
                    di mana antara penari yang satu dengan yang lainnya saling berpasangan.</p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Warok</h3>
                <img src="warok.jpg" class="img-fluid">
                <p>Warok atau Wewarah merupakan tokoh yang berperan memberikan tuntunan dan perlindungan, bertekad suci, dan 
                    ikhlas tanpa pamrih.</p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Bujang Ganong</h3>
                <img src="Bujang Ganong.jpg" class="img-fluid">
                <p>Bujang Ganong (Ganongan) merupakan tokoh patih muda yang cekatan, cerdik, sakti, berkemauan keras, energik, jenaka, 
                    dan mahir dalam seni bela diri.</p>
            </div>
                        
            <div class="col-lg-4 col-md-4 col-sm-12">
            <div class = "card">
                <div clas = "content">
                    <div id= "flip">
                        <h3>Daftar Pemain Tarian Reog<h3>
                        </div>
                        <?php
                        $menu =  array("Klono Sewandono","Barongan (Dadak Merak)","Jathil","Warok","Bujang Ganong");
                        echo "<br />";
                        foreach ($menu as $mn){
                            echo "$mn";
                            echo "<br />";
                        }
                        ?>
                    </div>
                </div>
            </div>

    <script src="https://code.jquery.com/jquery-3.5.1.main.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>