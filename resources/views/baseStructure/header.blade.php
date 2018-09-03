<header>
    {{--LOGO--}}
    <div class="navbar__top">
        <div class="container" style="margin-top:-8px;">
            <h1><a class="logo" href="{{route("index")}}">Internet shop</a></h1>
        </div>
    </div>
    {{--nav-bar--}}
    <div class="navbar__bottom navbar navbar-light navbar-static-top navbar_styles" >
        <div class="container">
            <div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu" style="border:1px solid white;">
                    <span class="sr-only" >Открыть навигацию</span>
                    <span class="icon-bar btn-in-navbar-when-small"></span>
                    <span class="icon-bar btn-in-navbar-when-small"></span>
                    <span class="icon-bar btn-in-navbar-when-small"></span>
                </button>
            </div>
            {{--Categories--}}
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle nav-bar-buttons" data-toggle="dropdown">Categories<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>Laptops</li>
                            <li>Mobile devices</li>
                            <li>PC</li>
                        </ul>
                    </li>
                </ul>
                {{--search form--}}
                <form class="input-group" role="search" method="get" id="searchform" action="#">
                    <input  class="form-control" placeholder="Search for" type="text" value="" name="s" id="s"><!-- для перевода на страницу поиска аттрибут name и id должны иметь значение 's' -->

                    <span class="input-group-btn">
                        <input class="btn btn-secondary btn-styles" id="searchsubmit" type="submit" value="GO!"/>
                    </span>
                </form>
                {{--Sign in button--}}
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a id="cabinet" href="#" class="nav-bar-buttons">
                            Sign in
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
