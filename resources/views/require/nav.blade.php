<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Qing</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Welcome</a></li>
                <li{!!Request::getRequestUri() == '/books' ? ' class="active"' : null!!}><a href="/books">Books</a></li>
                <li{!!Request::getRequestUri() == '/authors' ? ' class="active"' : null!!}><a href="/authors">Authors</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li{!!Request::getRequestUri() == '/search' ? ' class="active"' : null!!}><a href="/search">Search</a></li>
                <li{!!Request::getRequestUri() == '/libs' ? ' class="active"' : null!!}><a href="/libs">Libs</a></li>
                <li{!!Request::getRequestUri() == '/about' ? ' class="active"' : null!!}><a href="/about">About Me</a></li>
            </ul>
        </div>
    </div>
</nav>