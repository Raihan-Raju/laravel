
@include('user_layout.header')
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
 @include('user_layout.navuser')      
        <!-- Navbar & Hero End -->
         
        @yield('content')
       
        

        <!-- Footer Start -->
 @include('user_layout.footeruser')