<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="csrf-token" content="{{{ csrf_token() }}}">
    <title>Full Stack Web Developer | MK Warren</title>

   	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-markdown.min.css">

    <link rel="stylesheet" type="text/css" href="/css/blog-home.css">
    

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

	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
		<i class="fa fa-bars"></i>
	</a>

    @include('partials.navbar')

    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

    <div class="container">

      <div class="row">

          <!-- Blog Entries Column -->
          <div class="col-md-8">
            
    
    @yield('content')

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    {{ Form::open(array('action' => array('HomeController@search'), 'method' => 'GET', 'class' => 'input-group')) }}
                    
                        <input type="text" name='search' class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="fa fa-search"></span>
                        </button>
                        </span>
                    {{ Form::close() }}
                    <!-- /.input-group -->
                </div>

               
        

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Full Disclaimer</h4>
                    <p>All thoughts are mine and mine alone. </p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>


    </div>


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

  <script src="/js/bootstrap-markdown.js"></script>


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