@extends('layout.app')
@section('content')
    
    <div class="home-image">
        <div class="asp asp-2-1">
            <img src="images/mainHome.png" alt="">
        </div>
        <div class="home-title">
            <p>Quality Cuts, Exceptional Taste</p>
        </div>
        <div class="qualities-container">
            <div onclick="window.location.href = '/premium-quality';" class="group">
                <div class="asp asp-2-1">
                    <img src="images/prem-quality.png" alt="">
                </div>
                <p class="prem">premium quality</p>
            </div>
            <div onclick="window.location.href = '/single-service';" class="group">
                <div class="asp asp-2-1">
                    <img src="images/trade.png" alt="">
                </div>
                <p class="high">high standard trading & logistics</p>
            </div>
            <div onclick="window.location.href = '/transparency-trust';" class="group">
                <div class="asp asp-2-1">
                    <img src="images/transparency.png" alt="">
                </div>
                <p class="trust">transparency and trust</p>
            </div>
            <div class="wtp">
                <i class="fa-brands fa-whatsapp" style="color: #29b200;"></i>
            </div>
        </div>
    </div>
    <div class="companies">
        <img src="images/company1.png" alt="">
        <img src="images/company2.png" alt="">
        <img src="images/company3.png" alt="">
        <img src="images/company4.png" alt="">
        <img src="images/company5.png" alt="">
    </div>
    <div class="trust-container">
        @include('components/carousel')
    </div>
    <div class="halal-container">
        <div class="img-container">
            <img src="images/halal.png" alt="">
        </div>
        <div class="text">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Bibendum est ultricies integer quis. Iaculis urna id volutpat 
                lacus laoreet. Mauris vitae ultricies leo integer malesuada.
            </p>
            <p>
                Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu 
                cursus euismod. Dictum fusce ut placerat orci nulla. Tincidunt 
                ornare massa eget egestas purus viverra accumsan in nisl. Tempor 
                id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. 
                Massa ultricies mi quis hendrerit dolor magna eget.
            </p>
            <div class="learn-more-btn">
                <button class="btn">learn more</button>
            </div>
        </div>
    </div>
    <div class="products-container">
        <h1>Wide Range Of Products For Your Needs</h1>
        @include('components/products')
        <div class="view-all-btn">
            <button onclick="window.location.href = '/our-products-categories';" class="btn">view all</button>
        </div>
    </div>
    <div class="cert-container">
        <div class="cert-number">
            <h1>Certifications</h1>
            <p>VAT Number: 123456789012345</p>
        </div>
        <div class="certifications">
            <div class="certified1">
                <img src="images/sfda.png" alt="">
            </div>
            <div class="certified2">
                <img src="images/tijara.png" alt="">
            </div>
            <div class="certified3">
                <img src="images/halal.png" alt="">
            </div>
        </div>
    </div>
    <div class="order-container">
        <div class="asp asp-3-1">
            <img src="images/meat-cutting.png" alt="">
        </div>
        <div class="order-now">
            <h1>Order Now</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. 
                Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada.
            </p>
            <div class="contact-us-btn">
                <button onclick="window.location.href = '/contact-us';" class="btn">contact us</button>
            </div>
        </div>
    </div>
   
    <script>

        function updateBarsIconColor() {
            const barsIcon = document.querySelector('.fa-bars'); // Assuming this is your bars icon
            if (window.scrollY > 780) {
                barsIcon.style.color = 'black'; // Change bars icon color to black
            } else {
                barsIcon.style.color = 'white'; // Change bars icon color to white
            }
        }

        updateBarsIconColor();

        window.addEventListener('scroll', function() {
            const topnav = document.querySelector('.home-nav');
            const barsIcon = document.querySelector('.fa-bars'); // Assuming this is your bars icon

            if (window.scrollY > 780) {
                topnav.classList.add('white-nav');   
                const logo = document.querySelector('.nav-logo');
                logo.innerHTML = `@include('svg-files/logo2')`;
                const logo2 = document.querySelector('.burger-nav-logo');
                logo2.innerHTML = `@include('svg-files/logo2')`;
                barsIcon.style.color = 'black'; // Change bars icon color to black

            } else if(window.scrollY <= 780){
                topnav.classList.remove('white-nav');
                const logo = document.querySelector('.nav-logo');
                logo.innerHTML = `@include('svg-files/logo1')`;
                const logo2 = document.querySelector('.burger-nav-logo');
                logo2.innerHTML = `@include('svg-files/logo1')`;
                barsIcon.style.color = 'white'; // Change bars icon color to white
            }
        });
                    
    </script>

@endsection
