<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!-- if you need normalize.css -->
        {{-- HTML::style('css/normalize.min.css') }}
        
        {{ HTML::style('css/app.css') }}
        
        {{ HTML::script('js/foundation/modernizr.foundation.js') }}
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        
        <!-- begin content -->
        <div class="wrapper">
            <!-- Top Bar -->
                    <nav class="top-bar">
                            <ul>
                              <li class="name"><h1><a href="#">PictureApp.</a></h1></li>
                              <li class="toggle-topbar"><a href="#"></a></li>
                            </ul>

                            <section>
                              <ul class="left">
                                  <li>{{HTML::link('messages/', 'Messages')}}</li>
                                  <li>{{HTML::link('pictures/', 'Pictures')}}</li>
                                  <li>{{HTML::link('users/show', 'Users')}}</li>
                              </ul>

                              <ul class="right">
                              <li class="search">
                                  <form>
                                    <input type="search">
                                  </form>
                              </li>

                                <li class="has-button">
                                <a class="small button secondary radius" href="#">Search</a>
                              </li>
                              </ul>
                            </section>
                        </nav>            
            <!-- End Top Bar -->
            <div class="row">
                <div class = "twelve columns centered">

                    @yield('header')
                    
                    @if (Session::get('alert'))
                        <div class= {{ '"alert-box '.Session::get('alert')['alert type'].'"'}}>
                            {{Session::get('alert')['message']}}
                            <a href="" class="close">&times;</a>
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- end content -->
        
        <!-- begin javascript -->
        
        <!-- Use Googles online jQuery lib -->
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
        <!-- Use local jQuery lib -->
        {{ HTML::script('js/foundation/jquery.js') }}
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script> -->
        
        {{ HTML::script('js/foundation/jquery.foundation.tabs.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.reveal.js') }}
        {{ HTML::script('js/foundation/jquery.event.swipe.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.joyride.js') }}
        {{ HTML::script('js/foundation/jquery.placeholder.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.tooltips.js') }}
        {{ HTML::script('js/foundation/jquery.cookie.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.clearing.js') }}
        {{ HTML::script('js/foundation/jquery.event.move.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.topbar.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.accordion.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.navigation.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.mediaQueryToggle.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.buttons.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.orbit.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.alerts.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.magellan.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.forms.js') }}
        {{ HTML::script('js/foundation/app.js') }}
        
        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/main.js') }}

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <!-- end javascript -->
    </body>
</html>