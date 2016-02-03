	<nav id="sidebar-wrapper" class="">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
                <i class="fa fa-times"></i>
            </a>
           {{--  <li class="sidebar-brand">
                @if (Auth::check()) 
                    <a href="{{{action('HomeController@getLogout')}}}" onclick="$(&quot;#menu-close&quot;).click();">Log Out</a>
                @else
                    <a href="{{{action('HomeController@getLogin')}}}" onclick="$(&quot;#menu-close&quot;).click();">Log In</a>
                @endif
            </li> --}}
            <li>
                <a href="{{{action('HomeController@showHome')}}}" onclick="$(&quot;#menu-close&quot;).click();">Home</a>
            </li>
           {{--  <li>
                <a href="{{{action('HomeController@showResume')}}}" onclick="$(&quot;#menu-close&quot;).click();">Resume</a> --}}
                {{-- URL::asset('assets/pdf/file.pdf'); --}}
            {{-- </li>
            <li>
                <a href="{{{action('PostsController@index')}}}" onclick="$(&quot;#menu-close&quot;).click();">Blog</a>
            </li> --}}
            <li>
                <a href="{{{action('HomeController@showHome')}}}#portfolio" onclick="$(&quot;#menu-close&quot;).click();">Portfolio</a>
            </li>
            <li>
                <a href="{{{action('HomeController@showHome')}}}#footer" onclick="$(&quot;#menu-close&quot;).click();">Contact Me</a>
                {{-- <div class=contactmebtn>
                    {{-- <a href="#" data-toggle="modal" data-target="#myModal">Contact Me</a> --}}
                {{-- </div> --}}
            </li> --}}
             {{-- <li>
                <form action = "{{{action('PostsController@index')}}}">
                    {{Form::text('search', null, ['placeholder'=>'Search blog'])}}
                    {{Form::submit('Submit')}}
                </form>
            </li> --}}

        </ul>
    </nav>