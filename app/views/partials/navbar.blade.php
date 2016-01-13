	<nav id="sidebar-wrapper" class="">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
                <i class="fa fa-times"></i>
            </a>
            <li class="sidebar-brand">
                <a href="#" onclick="$(&quot;#menu-close&quot;).click();">Look Around</a>
            </li>
            <li>
                <a href="{{{action('HomeController@showHome')}}}" onclick="$(&quot;#menu-close&quot;).click();">Home</a>
            </li>
            <li>
                <a href="{{{action('HomeController@showResume')}}}" onclick="$(&quot;#menu-close&quot;).click();">Resume</a>
                {{-- URL::asset('assets/pdf/file.pdf'); --}}
            </li>
            <li>
                <a href="{{{action('PostsController@index')}}}" onclick="$(&quot;#menu-close&quot;).click();">Blog</a>
            </li>
            <li>
                <a href="{{{action('HomeController@showPortfolio')}}}" onclick="$(&quot;#menu-close&quot;).click();">Portfolio</a>
            </li>
            <li>
                {{-- <div class=contactmebtn> --}}
                    <a href="#" data-toggle="modal" data-target="#myModal">Contact Me</a>
                {{-- </div> --}}
            </li>
        </ul>
    </nav>