<div class="sidebar">
    <div class="icon-x">
        <i class="fa-solid fa-xmark" onclick="closeSidebar()"></i>
        <div onclick="window.location.href = '/';">
            @include('svg-files/logo2')
        </div>
    </div>
    <div class="menu-container">
        <hr>
        <div class="side-menu" onclick="window.location.href = '/about-us';">
            <a>about us</a>
        </div>
        <hr>
        <div class="side-menu" onclick="window.location.href = '/our-products-categories';">
            <a>our products</a>
        </div>
        <hr>
        <div class="side-menu">
            <div class="sidebar-dropdown">
                <button class="sidebar-dropbtn">our services
                        <i class="fa fa-caret-down"></i>
                </button>
                <div class="side-dropdown-content">
                  <a href="/single-service">Trading & Logistics</a>
                  <a href="/premium-quality">Premium Quality</a>
                  <a href="/transparency-trust">transparency & trust</a>
                </div>
            </div> 
        </div>
        <hr>
        <div class="side-menu" onclick="window.location.href = '/sustainability';">
            <a>sustainability</a>
        </div>
        <hr>
        <div class="side-menu" onclick="window.location.href = '/contact-us';">
            <a>contact us</a>
        </div>
        <hr>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector(".sidebar");
    const openSidebarIcon = document.getElementById("openSidebar");
    const closeSidebarIcon = document.querySelector(".fa-xmark");

    openSidebarIcon.addEventListener("click", function () {
        sidebar.style.left = "0";
    });

    closeSidebarIcon.addEventListener("click", function () {
        sidebar.style.left = "-100%";
    });
});
</script>
<script>
    $(document).ready(function () {
        $(".side-dropdown-content").hide();
        $(".sidebar-dropbtn").click(function () {
            $(this).next(".side-dropdown-content").slideToggle();
        });
    });
</script>