<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Mathelist</title>
    <link rel="shortcut icon" href="{{ url('public/assets/images/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{ url('public/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/style.css') }}">
    <script src="{{ url('public/assets/js/jquery.js') }}"></script>
    <!-- include summernote css/js -->
    <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/summernote/summernote-bs4.min.css') }}">
        <!-- Summernote -->
        <script src="{{ URL::to('public/backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <style>
        .header-wrapper>.menu-area>.menu>ul>li>a {
            padding: 10px !important;
        }

        select#salutation {
            border: 1px solid #f0f0f0;
            color: gray;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0px 2px 4px 0px rgb(0 0 0 / 6%);
            height: 57px;
            padding: 0 25px;
        }
    </style>
</head>