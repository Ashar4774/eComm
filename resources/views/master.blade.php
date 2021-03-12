<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce in Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
</head>

<body>
    @yield('content')
</body>
<style>
    .custom-login,
    .custom-product {
        height: 600px;
        padding-top: 10px;
    }

    img.slider-img {
        height: 400px !important;
    }

    .carousel-control-next:hover {
        background-image: linear-gradient(45deg, transparent, black) !important;
    }

    .carousel-control-prev:hover {
        background-image: linear-gradient(45deg, black, transparent) !important;
    }

    .carousel-caption {
        background-color: #00000073;
        border-radius: 15px;
        box-shadow: 0 0 10px #8080808a;
        color: #ffffffed;
    }

    .carousel-inner{
        background-color: #8080802b!important;
    }

    /* footer{
        position: fixed;
        bottom: 0;
        width: 100%;
    } */

    .trending-wrapper{
        margin: 30px;
    }

    .trending-item{
        /* margin: 0 20px; */
        float: left;
        width: 30%;
    }

    .trending-img{
        height: 100px;
    }

    .div-detail-img{
        background-color: rgba(128, 128, 128, 0.288);
    }

    .detail-img{
        height: 200px;
        /* margin: 0 auto; */
    }

</style>

</html>
