<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{{action('HomeController@showHome')}}}">MK Warren</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{{action('HomeController@showHome')}}}#portfolio">Portfolio<span class="sr-only">(current)</span></a></li>
        <li><a href="{{{action('HomeController@showResume')}}}">Resume</a></li>
        <li><a href="{{{action('PostsController@index')}}}">Blog</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Me <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mailto:mkwarren21@gmail.com"><i class="fa fa-envelope"></i> E-mail</a></li>
            <li><a href="https://www.linkedin.com/in/mary-kaitlin-warren-a9515a5b"><i class="fa fa-linkedin-square"></i> Linked In</a></li>
            <li><a href="https://twitter.com/MaryKaitW"><i class="fa fa-twitter"></i> Twitter</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="https://github.com/mkwarren21"><i class="fa fa-github"></i> Git Hub</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>