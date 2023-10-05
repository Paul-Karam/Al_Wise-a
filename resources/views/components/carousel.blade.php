<link rel="stylesheet" type="text/css" href="https://unpkg.com/flickity@2.0.11/dist/flickity.css">
<div class="prod-carousel-contain">
    <div class="header-arrow">
        <div class="carousel-header">
            <h1>Your Trusted Source For Chilled Meat</h1>
        </div>
        <div class="product-carousel__controls">
            <div class="flickity-prev-button">
                <i class="fa-solid fa-arrow-left-long"></i>
            </div>
            <div class="flickity-next-button">
                <i class="fa-solid fa-arrow-right-long"></i>
            </div>
        </div>
    </div>
    <div class="under-text">
        <h1>Al Wise’a</h1>
    </div>
    <div class="product-carousel-container">
      <div class="product-carousel-cell">
        <div class="asp asp-5-3">
            <img src="images/carousel1.png" alt="">
        </div>
      </div>
      <div class="product-carousel-cell">
        <div class="asp asp-5-3">
            <img src="images/carousel2.png" alt="">
        </div>
      </div>
      <div class="product-carousel-cell">
        <div class="asp asp-5-3">
            <img src="images/beef.png" alt="">
        </div>
      </div>
      <div class="product-carousel-cell">
        <div class="asp asp-5-3">
            <img src="images/veal.png" alt="">
        </div>
      </div>
    </div>
</div>
<script src="https://unpkg.com/flickity@2.0.11/dist/flickity.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var elem = document.querySelector('.product-carousel-container');
    var flkty = new Flickity(elem, {
        autoPlay: false,
        pageDots: false,
        prevNextButtons: false,
        wrapAround: false,
        contain: false,
        cellSelector: undefined,
        draggable: true,
        freeScroll: false
    });
    var previousButton = document.querySelector('.flickity-prev-button');
    previousButton.addEventListener( 'click', function() {
        flkty.previous();
    });
    var nextButton = document.querySelector('.flickity-next-button');
    nextButton.addEventListener( 'click', function() {
        flkty.next();
    });
</script>