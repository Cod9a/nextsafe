<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>@yield('title') &bull; Nextsafe</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="@yield('description')">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo.png') }}">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/fontawesome/css/all.min.css') }}">
  <!-- Animation -->
  <link rel="stylesheet" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/animate-css/animate.css') }}">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/slick/slick-theme.css') }}">
  <!-- Colorbox -->
  <link rel="stylesheet" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/colorbox/colorbox.css') }}">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/css/style.css') }}">

  <link rel="stylesheet" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/css/custom.css') }}">

</head>
<body>