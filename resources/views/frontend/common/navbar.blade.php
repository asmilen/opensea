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
            <a class="nav-link" id="cart" href="/cart"><span class="text">CART</span> <span class="amount">({{ $cartCount }})</span></a>
        </li>
    </ul>
</div>
