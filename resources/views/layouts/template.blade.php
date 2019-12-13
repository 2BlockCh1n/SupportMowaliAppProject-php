<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SupportMowaliApp - @yield('title')</title>

    <!-- Bootstrap CSS cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Own bootstrap link -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" />
  
  </head>
  <body>
    
   <!-- header of my template page -->
    <header class="p-5 mb-5 bg-white text-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-3 shift-logo"><img src="{{ URL::asset('assets/images/mowali.png')}}" alt="logo-mowali"/></div>
        </div>
        <div class="row">
          <div class="col-md-12  font-italic font-weight-bold"><marquee><h4>transforming the financial landscape...</h4></marquee></div>
        </div>
      </div>
    </header>

  <!-- nav bar of my template page -->
    <div class="container">
      <nav class="navbar navbar-light bg-light rounded" >
        <div class="btn-group-sm">
          <button type="button" class="btn btn-outline-dark">Home</button>
          <button type="button" class="btn btn-outline-dark">Informations</button>
          <button type="button" class="btn btn-outline-dark">Members</button>
        </div>
      
      <div class="btn-group-sm" style="margin-right: 0px;">
        <form class="form-inline" style="margin-right: 0px;">
          <input class=" col-md-offset-2 form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        @yield('signin_session')
      </div>
      <nav>
    </div>

  <!-- Content of my others pages -->
      
        @yield('contenu')

  <!-- Footer of my template page -->
    <footer>


    </footer>



    <!-------------------------------------------------------------------------------------------------->
    <!-- BOOTSTRAP JQUERY AND POPPER CDN --------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------->

    <!-- jquery Cdn links -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <!-- Popper.js Cdn links -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap javascript precompiled Cdn links -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

  </body>
</html>