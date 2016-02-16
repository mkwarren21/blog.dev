<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="csrf-token" content="{{{ csrf_token() }}}">
    <title>Full Stack Web Developer | MK Warren</title>

   	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-markdown.min.css">
   	<link rel="stylesheet" type="text/css" href="/css/post.css">

   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

   	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
   	
   	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <style type="text/css">
        a:focus {
            outline: none;
        }
    </style>
   

</head>
<body>

    
    @yield('content')



	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap-markdown.js"></script>

	<script src="/js/main.js"></script>
	<!-- @yield('bottom-script') -->

	<script type="text/javascript">
        (function(){
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Scrolls to the selected menu item on the page
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    })();
    </script>
</body>
</html>