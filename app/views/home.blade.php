@extends('layouts.master')

@section('content')	

    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Mary Kaitlin Warren</h1>
            <h3>Full Stack Web Developer</h3>
            <br>
            <a href="{{{action('HomeController@showResume')}}}" class="btn btn-dark btn-lg">Resume</a>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
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

    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Vertically Centered Text</h1>
        </div>
    </aside>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>My Work</h2>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="../simplesimon.dev">
                                    <img class="img-portfolio img-responsive" src="/img/reverseflash.png">
                                </a>
                                <p>A Javascript game built on the jQuery library.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="../adlister.dev">
                                    <img class="img-portfolio img-responsive" src="/img/adlister.png">
                                </a>
                                <p>A PHP based application with a MySQL database.</p>
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
                                <a href="../simplesimon.dev">
                                    <img class="img-portfolio img-responsive" src="/img/simplesimon.png">
                                </a>
                                <p>A Javascript game that uses a continuous callback function.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="{{{action('HomeController@showPortfolio')}}}" class="btn btn-dark">View More Items</a>
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
                    <h3>Play Roll Dice. Pick a number!</h3>
                    <a href="{{{action('HomeController@showRollDice', array(1))}}}" class="btn btn-lg btn-light">1</a>
                    <a href="{{{action('HomeController@showRollDice', array(2))}}}" class="btn btn-lg btn-dark">2</a>
                    <a href="{{{action('HomeController@showRollDice', array(3))}}}" class="btn btn-lg btn-light">3</a>
                    <a href="{{{action('HomeController@showRollDice', array(4))}}}" class="btn btn-lg btn-dark">4</a>
                    <a href="{{{action('HomeController@showRollDice', array(5))}}}" class="btn btn-lg btn-light">5</a>
                    <a href="{{{action('HomeController@showRollDice', array(6))}}}" class="btn btn-lg btn-dark">6</a>
                </div>
            </div>
        </div>
    </aside>

    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Codeup.,+Houston+Street,+San+Antonio,+TX&amp;aq=0&amp;oq=twitter&amp;sll=29.4267857,-98.4917651&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Codeup.,+Houston+Street,+San+Antonio,+TX&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br>
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Codeup.,+Houston+Street,+San+Antonio,+TX&amp;aq=0&amp;oq=twitter&amp;sll=29.4267857,-98.4917651&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Codeup.,+Houston+Street,+San+Antonio,+TX&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Start Bootstrap</strong>
                    </h4>
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright © Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>
@stop

