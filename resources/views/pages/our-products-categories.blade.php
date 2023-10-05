@extends('layout.app2')
@section('content')

<body class="our-products-page">
    <div class="our-products-intro">
        <div class="asp asp-3-1">
            <img src="images/cows.png" alt="">
        </div>
        <div class="our-products-content">
            <h1>our products</h1>
            <div class="our-products-text">
                <p>
                    We offer fresh and frozen halal meat products for our customers in mass retail, 
                    traditional butchery, distributes, wholesalers, catering, restaurants and industry. 
                    Our ranges follow changing eating habits thanks to global sourcing and a dynamic 
                    product innovation policy, combining traditional raw products with increasingly processed, 
                    tailor-made products. Discover all of our 100% taste and pleasure ranges.!
                </p>
            </div>
        </div>
    </div>
    <div class="our-products-container">
        @include('components/products')
        @include('components/products')
    </div>
</body>

@endsection