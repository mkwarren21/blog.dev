<!DOCTYPE html>
<html lang="en">
<head>
    <title>Full Stack Web Developer | MK Warren</title>

   	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
   	<link rel="stylesheet" type="text/css" href="/css/main.css">

   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
   	
   	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <style type="text/css">
        a:focus {
            outline: none;
        }
    </style>


   	@yield('top-script')
</head>
<body>

	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
		<i class="fa fa-bars"></i>
	</a>

    @include('partials.navbar')


    @yield('content')

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Contact Me</h4>
          </div>
          <div class="modal-body">
                <input type="text" class="form-control" placeholder="Name">
                <input type="text" class="form-control" placeholder="E-mail">
                <textarea class="form-control" rows="3" placeholder="Message..."></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>


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