@extends('layouts.master')

@section('content') 

<section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>My Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="simplesimon.dev">
                                    <img class="img-portfolio img-responsive" src="/img/reverseflash.png">
                                </a>
                                <p>A Javascript game built on the jQuery library.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="adlister.dev">
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
                                <a href="simplesimon.dev">
                                    <img class="img-portfolio img-responsive" src="/img/simplesimon.png">
                                </a>
                                <p>A Javascript game that uses a continuous callback function.</p>
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
@stop