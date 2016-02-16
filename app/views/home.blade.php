@extends('layouts.master')

@section('content')	

    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Mary Kaitlin Warren</h1>
            <hr class = "horizontalrule">
            <h3>Full Stack Web Developer</h3>
            <a href="{{{action('HomeController@showResume')}}}" class="btn btn-dark btn-lg">Resume</a>
            <br>
           {{--  <a href="{{{action('HomeController@showResume')}}}" class="btn btn-dark btn-lg">Resume</a> --}}
        </div>
    </header>

    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>“Get action. Do things; be sane; don’t fritter away your time; create, act, take a place wherever you are and be somebody; get action.”</h2>
                    <p class="lead">Theodore Roosevelt</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Languages</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-html5 fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>HTML5</strong>
                                </h4>
                                <p></p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-css3 fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>CSS</strong>
                                </h4>
                                <p></p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-jsfiddle fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>JavaScript</strong>
                                </h4>
                                <p></p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-stack-overflow   fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>PHP</strong>
                                </h4>
                                <p></p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>My Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="http://greasemonkey.rocks">
                                    <img class="img-portfolio img-responsive" src="/img/greasemonkey.png">
                                </a>
                                <p>A web resource for DIY automechanics using the Laravel framework and a mySql database.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="https://chrome.google.com/webstore/detail/adeleing/aokkldlmlolojcjaicldakcjbjhjoaen">
                                    <img class="img-portfolio img-responsive" src="/img/adeling.png">
                                </a>
                                <p>A chrome extension that generates a random Adele music video.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="{{{action('HomeController@showWhackamole')}}}">
                                    <img class="img-portfolio img-responsive" src="/img/reverseflash.png">
                                </a>
                                <p>A Javascript game built on the jQuery library.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="{{{action('HomeController@showSimpleSimon')}}}">
                                    <img class="img-portfolio img-responsive" src="/img/simplesimon.png">
                                </a>
                                <p>A Javascript game that uses a continuous callback function.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    {{-- <a href="{{{action('HomeController@showPortfolio')}}}" class="btn btn-dark">View More Items</a> --}}
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>"We have a choice to use the gift of our lives to make the world a better place."</h3>
                    <h1 class = "lead">- Dr. Jane Goodall</h1>
                </div>
            </div>
        </div>
    </aside>


    <footer id = "footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Mary Kaitlin Warren</strong>
                    </h4>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:mkwarren21@gmail.com">mkwarren21@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://github.com/mkwarren21"><i class="fa fa-github fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/MaryKaitW"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="http://codepen.io/mkwarren21/"><i class="fa fa-codepen fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright © Mary Kaitlin Warren 2016</p>
                </div>
            </div>
        </div>
    </footer>
@stop

