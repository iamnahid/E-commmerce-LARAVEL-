<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title','E-commerce')
    </title>
    @include('partials.styles')
    
</head>
<body>
    <div class="wrapper">
        <!-- NAV BAR -->
            
            @include('partials.nav')
        
        <!-- END NAV BAR -->
        @yield('content')


        

    </div>

    @include('partials.scripts')
</body>
</html>