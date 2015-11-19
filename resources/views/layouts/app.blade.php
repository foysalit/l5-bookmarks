<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bookmarks</title>

        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="/assets/semantic/main.min.css">
        <link rel="stylesheet" href="/css/app.css">

        <script src="/assets/plugins.min.js"></script>
    </head>

    <body>
        @include('layouts.menus')
    		
		<div class="pusher content">
             <div class="ui inverted vertical masthead center aligned segment">

                <div class="ui container">
                    <div class="ui large secondary inverted pointing menu">
                        <a class="toc item">
                            <i class="sidebar icon"></i>
                        </a>
                        <a class="active item">Home</a>
                        <a class="item" href="{{ route('bookmarks.index') }}">Bookmarks</a>
                        <div class="right item">
                            <a class="ui inverted button" href="{{ route('auth.login') }}">Log in</a>
                            <a class="ui inverted button" href="{{ route('auth.register') }}">Sign Up</a>
                        </div>
                    </div>
                </div>

            </div>
	        @yield('content')
    	</div>
    </body>
</html>