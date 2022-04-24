<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>

<body>
{{View::make('header')}}
@yield("content")
{{View::make('footer')}}
</body>
<style>
    img {
        object-fit: cover;
    }

    h4 {
        font-weight: normal;
    }

    body {
        overflow: hidden;
    }

    .nav-container {
        height: 7vh;
        background-color: #1a202c;
    }

    /*login*/
    .custom-login {
        height: 85vh;
        padding: 150px;
    }

    .slider-img {
        height: 40vh !important;
        width: 90vw !important;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .slider-text {
        background: rgba(76, 175, 80, 0.3)
    }

    .custom-product {
        padding-top: 20px;
        height: 85vh;
    }

    .trending-img {
        height: 200px;
    }

    .trending-title {
        text-align: center;
    }

    .trending-img-container {
        display: flex;
        justify-content: space-around;
    }

    /*    detail page*/
    .detail-img {
        height: 400px;
    }

    .detail-container {
        height: 85vh;
        width: 100vw;
        display: flex;
        flex-direction: column;
    }

    .detail-container a {
        /*background-color: #1a202c;*/
        height: 50px;
        padding: 10px;
        font-size: 20px;
    }

    .detail-item {
        margin: auto;
        /*background-color: #4f70af;*/
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .detail-item .detail-text-box {
        padding: 100px;
    }

    /*    search page*/
    .search_container {
        height: 85vh;
        /*background-color: #1a202c;*/
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow: auto;
    }

    .search_container img {
        height: 150px;
    }

    .result_card {
        margin-top: 20px;
        margin-bottom: 20px;
        /*background-color: #6b7280;*/
        display: flex;
    }

    .result_text {
        padding: 20px;
    }

    /*    cart */
    .cart-container {
        height: 85vh;
        /*background-color: #1a202c;*/
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow: auto;
    }
    .cart-container img{
        height: 150px;
    }
    .cart-container h3,h4,h5{
        font-weight: normal;
    }
    .cart-container .cart-title{
        padding: 5px;
    }
</style>
</html>
