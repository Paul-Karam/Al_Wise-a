@extends('layout.app2')
@section('content')

<body class="who-we-are-page">
    <div class="who-we-are-container">
        <div class="who-we-are-pic">
            <div class="asp asp-1-1">
                <img src="images/who-we-are.png" alt="">
            </div>
        </div>
        <div class="background-txt">
            <h1>abo</h1>
        </div>
        <div class="who-we-are">
            <h1>who we are</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. 
                Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada.
            <br>
            <br>
                Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. 
                Dictum fusce ut placerat orci nulla. Tincidunt ornare massa eget egestas purus 
                viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit 
                ut tortor pretium. Massa ultricies mi quis hendrerit dolor magna eget.
            </p>
        </div>
    </div>
    <div class="goals">
        <div class="asp asp-3_69-1">
            <img src="images/background.png" alt="">
        </div>
        <div class="mission-vision-value">
            <div class="mvv">
                <video class="video-hover">
                    <source src="images/Mission.mp4" type="video/mp4">
                </video>
                <h3>mission</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. 
                    Iaculis urna id volutpat lacust.
                </p>
            </div>
            <div class="mvv">
                <video class="video-hover">
                    <source src="images/Value.mp4" type="video/mp4">
                </video>
                <h3>vision</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. 
                    Iaculis urna id volutpat lacust.
                </p>
            </div>
            <div class="mvv">
                <video class="video-hover">
                    <source src="images/Vision.mp4" type="video/mp4">
                </video>
                <h3>value</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. 
                    Iaculis urna id volutpat lacust.
                </p>
            </div>
        </div>
    </div>
    <div class="intro-to-team">
        <h1>Introducing Al Wise’a Team</h1>
        <div class="team">
            <div class="member">
                <div class="asp asp-1-1">
                    <img src="images/member1.png" alt="">
                </div>
                <div class="member-info">
                    <h3>position</h3>
                    <h4>johnny doe</h4>
                </div>
            </div>
            <div class="member">
                <div class="asp asp-1-1">
                    <img src="images/member2.png" alt="">
                </div>
                <div class="member-info">
                    <h3>position</h3>
                    <h4>johnny doe</h4>
                </div>
            </div>
            <div class="member">
                <div class="asp asp-1-1">
                    <img src="images/member3.png" alt="">
                </div>
                <div class="member-info">
                    <h3>position</h3>
                    <h4>johnny doe</h4>
                </div>
            </div>
        </div>
    </div>
   <script>
    const videoElements = document.querySelectorAll('.video-hover');

    // Add event listeners to each video element
    videoElements.forEach((videoElement) => {
        // Pause the video when it's loaded
        videoElement.addEventListener('loadeddata', () => {
            videoElement.pause();
        });

        // Play the video when hovering
        videoElement.addEventListener('mouseenter', () => {
            videoElement.play();
        });
    });
   </script>
</body>

@endsection