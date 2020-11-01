<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
            <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>WhiteClouds - Flight Bookings</title>
       
    </head>
    <body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"> <img src="/img/cloud2.png" width="50" height="30" alt=""
                loading="lazy">WhiteClouds</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Trending <span class="badge badge-danger">New</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" target="_blank" href="http://www.backpackerbanter.com/blog/">Travel
                            Blog</a>
                        <a class="dropdown-item" target="_blank"
                            href="https://timesofindia.indiatimes.com/life-style/health-fitness/health-news/coronavirus-vaccine-from-covaxin-to-russian-vaccine-roll-out-here-are-all-the-updates-regarding-covid-19-vaccine-development/photostory/78362614.cms">Pandemic
                            News</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" target="_blank"
                            href="https://www.healthline.com/nutrition/27-health-and-nutrition-tips">Health Care
                            Tips</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contactUs">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bookings/create">Book Tickets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faqs">FAQs <span class="badge badge-warning">?</span></a>
                </li>
            </ul>
        
     
    </nav>
      <h1>{{$Booking->Fname}} yours ticket has been booked</h1>
      <h1>Check previous bookings here:<h1>
   
    <button type="button" class="btn btn-warning btn-lg btn-block">   <a class="dropdown-item" href="/home">
                                        Dashboard
                                    </a></button>
      </body>

</html>
