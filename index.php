<html>
    <head>
        <title>Organizer Ucznia</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="resources/style/style.css">
        <link rel="stylesheet" href="resources/color/color.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar bgPrimaryTranslucent shadow-sm fixed-top">
            <div class="container-fluid p-0">
                <div class="col-5 pl-0">
                    <a class="navbar-brand" href="#">
                        <div class="d-inline-block align-top">
                            <img class="rounded-circle" src="https://lh3.googleusercontent.com/nSanxwfGDbQUXogLXkUq6n5JplTObqs72T1Ym5zvAVhmu6Jr5LodJyrrePtzRT2V7Jw" width="50" height="50" alt="Logo Guzooo">
                            <img class="rounded-circle" src="https://lh3.googleusercontent.com/QTAMstRyyggKhfhtgSF5pwpNGrU8vVlTB8LajYuS2TyykhcvzBH98Kw3Spni_i2QWiMT" width="50" height="50" alt="Logo Aplikacji">
                        </div>
                        <div class="d-inline-block">
                            <span class="textNormal">Organizer Ucznia</span><br>
                            <span class="textDescription">© Guzooo 2020</span>
                        </div>
                    </a>
                </div>
                <div class="col-7 pr-0">
                    <div class="row">
                        <span class="col-12 textNormal">Semestr: 1 • Średnia końcowa: 4,00 • Polski za 5 minut</span>
                        <span class="col-12 textDescription">Średnia końcowa 4.13 • 4</span>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-5 p-0">
                    <?php include 'pages/main/main.php' ?>
                </div>
                <div class="col-7 p-0">
                    <?php include 'pages/info/info.php' ?>
                </div>
            </div>
        </div>
    </body>
</html>