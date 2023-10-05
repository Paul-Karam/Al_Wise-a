@extends('layout.app2')
@section('content')
<body class="contact-us">
    <div class="map">
        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387245.4973801198!2d-74.03329190057092!3d40.688168714443414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2slb!4v1695362191566!5m2!1sen!2slb" 
        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <div class="office-details">
            <div class="office-upper">
                <div class="office-head" onclick="toggleInfo('office-info')">
                    <h3>office</h3>
                    <i class="fa-solid fa-chevron-up"></i>
                </div>
                <div class="office-info">
                    <div class="info">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Office: Al Imam Abdel Aziz, Al Faysaliya</p>
                    </div>
                    <div class="info">
                        <i class="fa-solid fa-phone"></i>
                        <p>+966 5 5586 6105 / +966 5 0552 4378</p>
                    </div>
                    <div class="info">
                        <i class="fa-regular fa-envelope"></i>
                        <p>info@alwisaa.com</p>
                    </div>
                </div>
            </div>
            <div class="cold-store" onclick="toggleInfo('cold-store-info')">
                <h3>cold store</h3>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>
    </div>
    <div class="get-in-touch">
        <h1>get in touch</h1>
        <div class="input-data">
            <label for="">first name</label>
            <input type="text" placeholder="first name">
        </div>
        <div class="input-data">
            <label for="">last name</label>
            <input type="text" placeholder="first name">
        </div>
        <div class="input-data">
            <label for="">email address</label>
            <input type="email" placeholder="email address">
        </div>
        <div class="input-data">
            <label for="">phone number</label>
            <input id="phone" name="phone" type="tel" placeholder="Phone Number">
        </div>
        <div class="input-data">
            <label for="">message</label>
            <textarea name="" id="" cols="30" rows="5" placeholder="message"></textarea>
        </div>
        <div class="submit-btn">
            <button class="btn">submit</button>
        </div>
    </div>
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        var input = document.querySelector('[name="phone"]');
        var iti = window.intlTelInput(input, {
            preferredCountries: ['lb'],
            utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
        });
    });
</script>
<script>
    function toggleInfo(infoClass) {
        const infoElement = document.querySelector(`.${infoClass}`);
        const chevronElement = infoElement.previousElementSibling.querySelector('i.fa-solid');

        if (infoElement.style.display === 'none' || infoElement.style.display === '') {
            infoElement.style.display = 'flex';
            chevronElement.classList.replace('fa-chevron-down', 'fa-chevron-up');
        } else {
            infoElement.style.display = 'none';
            chevronElement.classList.replace('fa-chevron-up', 'fa-chevron-down');
        }
    }
</script>
</body>