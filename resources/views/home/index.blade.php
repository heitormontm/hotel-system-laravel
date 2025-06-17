<!DOCTYPE html>
<html lang="en">
    <head>

        @include('home.css');

    </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         @include('home.header');
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      @include('home.slider');
      <!-- end banner -->
      <!-- about -->
      @include('home.about');
      <!-- end about -->
      <!-- our_room -->
      @include('home.room');
      <!-- end our_room -->
      <!-- gallery -->
      @include('home.gallery');
      <!-- end gallery -->
      <!-- blog -->
      
      <!-- end blog -->
      <!--  contact -->
      @include('home.contact');
      <!-- end contact -->
      <!--  footer -->
      @include('home.footer');
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>