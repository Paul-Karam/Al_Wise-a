<nav class="white-nav">
    <div class="nav-container">
        <div  onclick="window.location.href = '/';" class="nav-logo">
            @include('svg-files/logo2')
        </div>
        <div class="burger-header">
            <i class="fa-solid fa-bars" id="openSidebar"></i>
            <div onclick="window.location.href = '/';">
                @include('svg-files/logo2')
            </div>
        </div>
        <div class="nav-list">
            <ul>
                <li><a href="/about-us">about us</a></li>
                <li><a href="/our-products-categories">our products</a></li>
                <li class="dropdown">
                    <div class="dropdown">
                        <button class="dropbtn">our services 
                          <i class="fa fa-caret-down" style="color: #000000"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="/single-service">Trading & Logistics</a>
                            <a href="/premium-quality">Premium Quality</a>
                            <a href="/transparency-trust">transparency & trust</a>
                          </div>
                    </div> 
                </li>
                <li><a href="/sustainability">sustainability</a></li>
                <li><a href="/contact-us">contact us</a></li>
            </ul>
        </div>
    </div>
</nav>

