<nav class="navbar navbar-expand-xl navbar-light bg-light sticky-top">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse navbar-light" id="navBar" style="">
        <ul class="navbar-nav">
            <li class="nav-item {{ (Route::currentRouteName()=='frontend::index')?'active':'' }}">
                <a class="nav-link" id="home" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="aboutUs" href="#">ABOUT US</a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName()=='frontend::bonbon')?'active':'' }}">
                <a class="nav-link" id="bonbon" href="/bonbon">BONBON CITY TOUR</a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName()=='frontend::rewind')?'active':'' }}">
                <a class="nav-link" id="rewind" href="/rewind">VIETNAM REWIND</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="faq" href="#">FAQs</a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName()=='frontend::cart')?'active':'' }}">
                <a class="nav-link" id="cart" href="/cart"><span class="text">CART</span> <span class="amount">(10)</span></a>
            </li>
        </ul>
    </div>
</nav>