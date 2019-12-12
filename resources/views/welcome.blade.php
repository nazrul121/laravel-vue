<!doctype html>
<html class="no-js" lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admitdoctors | A non-profit organization</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="{{ asset('storage/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/fontawesome/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/chosen.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/transitions.css')}}">
    <script src="{{asset('front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <style>
    .sticky {position: fixed;top: 0;width: 100%;}
    .sticky + .content {padding-top: 60px;}
    </style>
</head>
<body class="dc-home">

    <!-- Preloader Start -->
  <!--   <div class="preloader-outer">
        <div class="wt-preloader-holder">
            <div class="wt-loader"></div>
        </div>
    </div> -->
    
    <!-- Wrapper Start -->
    <div id="app" class="dc-wrapper dc-haslayout">
        <!-- Header Start -->
        <header id="dc-header" class="dc-header dc-haslayout">
            
          
            <top_menu></top_menu>
            
            <!-- @include('portions/home_slider') -->
            <home_slider v-if="this.$route.path=='/'"></home_slider>
        </header>


        <!-- Main content -->
        <main id="dc-wrapper" class="dc-main dc-haslayout">
         
            <div v-if="loading" style="color:red;">
                <p class="alert text-center">Loading...</p>
            </div>
            <router-view :key="$route.path" v-if="!loading"> </router-view>
            
            <vue-progress-bar></vue-progress-bar>
            
        </main>

        <short_links></short_links>
        <!-- Footer Start -->
        @include('portions/footer')
       
    </div>
    <!-- <script src="{{ asset('front/js/vendor/jquery-3.3.1.js') }}"></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('front/js/vendor/jquery-library.js') }}"></script>
    <script src="{{ asset('front/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/moment.min.js') }}"></script>
    <script src="{{ asset('front/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/chosen.jquery.js') }}"></script>
    <script src="{{ asset('front/js/scrollbar.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('front/js/prettyPhoto.js') }}"></script>
    <script src="{{ asset('front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('front/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/js/appear.js') }}"></script>
    <script src="{{ asset('front/js/jRate.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>


<!-- open time modal-->
<div id="openModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<style lang="scss">
    .loader-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 999;
        cursor: pointer;
        span.text {
            display: inline-block;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: #fff;
        }
        .loader {
            animation: loader-animate 1.5s linear infinite;
            clip: rect(0, 80px, 80px, 40px);
            height: 80px;
            width: 80px;
            position: absolute;
            left: calc(50% - 40px);
            top: calc(50% - 40px);
            &:after {
                animation: loader-animate-after 1.5s ease-in-out infinite;
                clip: rect(0, 80px, 80px, 40px);
                content: '';
                border-radius: 50%;
                height: 80px;
                width: 80px;
                position: absolute;
            }
        }
        @keyframes loader-animate {
            0% {
                transform: rotate(0deg)
            }
            100% {
                transform: rotate(220deg)
            }
        }
        @keyframes loader-animate-after {
            0% {
                box-shadow: inset #fff 0 0 0 17px;
                transform: rotate(-140deg);
            }
            50% {
                box-shadow: inset #fff 0 0 0 2px;
            }
            100% {
                box-shadow: inset #fff 0 0 0 17px;
                transform: rotate(140deg);
            }
        }
    }
</style>
</body>
</html>