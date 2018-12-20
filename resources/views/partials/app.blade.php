<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="./assets/logo.svg">
  <meta name="description" content="Governance Clout is a platform for nigerians to give their takes and opinions on their government and how they are governed. It is open for all types of users. GClout gives your direct access to the government officials that you have elected">
  <meta name="keywords" content="Government, Nigeria, Opinion, GClout">
  <meta name="author" content="staybusy.ng">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#00B0F0">
  <meta name="og:title" property="og:title" content="Governance Clout | Coming soon">
  <meta name="og:description" property="og:title" content="Governance Clout is a social networking site for everyone (starting from Nigerians) to socialize, contribute and give opinions on governance at all levels. It is open for all type of users. GClout gives you direct access to the government officials that you have elected.">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>GClout | Admin @yield('title')</title>
</head>

<body>

    <nav class="g-navbar">
        <div class="container">
            <img src="{{ asset('img/logo.svg') }}" alt="gclout branding">
        </div>
    </nav>

 @yield('content')
<!-- content here -->

</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="./assets/main.js"></script>

</html>