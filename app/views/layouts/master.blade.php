<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>

   	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
   	<link rel="stylesheet" type="text/css" href="/css/main.css">

   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
   	
   	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


   	@yield('top-script')
</head>
<body>

	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
		<i class="fa fa-bars"></i>
	</a>

	<nav id="sidebar-wrapper" class="">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
                <i class="fa fa-times"></i>
            </a>
            <li class="sidebar-brand">
                <a href="#" onclick="$(&quot;#menu-close&quot;).click();">Look Around</a>
            </li>
            <li>
                <a href="/" onclick="$(&quot;#menu-close&quot;).click();">Home</a>
            </li>
            <li>
                <a href="/resume" onclick="$(&quot;#menu-close&quot;).click();">Resume</a>
            </li>
            <li>
                <a href="/#services" onclick="$(&quot;#menu-close&quot;).click();">Languages</a>
            </li>
            <li>
                <a href="/portfolio" onclick="$(&quot;#menu-close&quot;).click();">Portfolio</a>
            </li>
            <li>
                <a href="/#contact" onclick="$(&quot;#menu-close&quot;).click();">Contact</a>
            </li>
        </ul>
    </nav>
    @yield('content')

	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script type="/js/main.js"></script>
	@yield('bottom-script')

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