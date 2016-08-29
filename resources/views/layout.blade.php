<!DOCTYPE html>
<html>
<head>
    <title>Storage System - @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <!-- Content section -->
        <div class="content">
            @yield('content')
        </div><!-- end content -->
    </div><!-- end container -->

</body>
<footer>
    @yield('footer')
</footer>
</html>
