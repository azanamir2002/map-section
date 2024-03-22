<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps</title>
    <link rel="icon" href="img/WTG-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

<!-- header section start -->
<div class="containerFluid">
    <header>
        <div class="container">
            <div class="logo">
                <img src="img/Eco Home.png" alt="logo">
            </div>
            <button class="toggleMenu">
                <i class="fa fa-bars"></i>
            </button>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Donation</a></li>
                    <li><a href="#skills">Request Food</a></li>
                    <li><a href="#services">Maps</a></li>
                    <li><a href="#portfolio">Rewards</a></li>
                    <li><a href="#contact">Feedback</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>
<!-- header section end -->

<!-- banner section start -->
<section id="home" class="bannerSection">
    <div class="particleJs"  id="particles-js"></div>
</section>
<!-- banner section end -->

<!-- about section start -->
<section class="containerFluid" id="about">
    <div class="container">
        <h2 class="title">Find Foodbanks</h2>
        <!-- Add space between maps -->
        <div style="margin-top: 100px;"></div>
        <!-- Text Box with the same size as the first map border -->
        <div class="text-box">
            <!-- Your text content goes here -->
            <p>Get Directions</p>
            <!-- Embedded Second Map -->
            <iframe class="embedded-map" src="https://storage.googleapis.com/maps-solutions-7h6bn0kn7o/locator-plus/dkfx/locator-plus.html" loading="lazy" style="height: 500px;"></iframe>
        </div>
        <!-- New text box below the map -->
        <div class="new-text-box">
            <p>My Location</p>
            <p>Click the button to get your coordinates.</p>

            <button onclick="getLocation()">Click here</button>

            <p><strong>Note:</strong> The geolocation property is not supported in IE8 and earlier versions.</p>

            <p id="demo"></p>

            <script>
                var x = document.getElementById("demo");

                function getLocation() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showPosition);
                    } else { 
                        x.innerHTML = "Geolocation is not supported by this browser.";
                    }
                }

                function showPosition(position) {
                    x.innerHTML = "Latitude: " + position.coords.latitude + 
                    "<br>Longitude: " + position.coords.longitude;
                }
            </script>

        </div>
    </div>
</section>
<!-- about section end -->

<!-- banner section end -->
<!-- contact section start -->
<section class="containerFluid lightBlueSection" id="contact">
    <div class="container">
        <h3 class="title">Contact Us .</h3>
        <!-- Added paragraph below the header -->
        <p>If there are food banks in London that are not on the map, please enter their details in the form below so we can add them.</p>
        <hr>
        <!-- Contact form -->
        <div class="contact">
            <form action="process.php" method="post" class="contact-form">
                <div class="form-group">
                    <label for="UName">Name</label>
                    <input type="text" name="UName" id="UName" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" id="Email" class="form-control" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <label for="Subject">Subject</label>
                    <input type="text" name="Subject" id="Subject" class="form-control" placeholder="Subject" required>
                </div>

                <div class="form-group">
                    <label for="Message">Message</label>
                    <textarea name="msg" id="Message" class="form-control" placeholder="Message"></textarea>
                </div>

                <button type="submit" class="btn btn-success btn-send" name="ok">Send Message</button>
            </form>
        </div>
    </div>    
</section>

<!-- Particles Js start -->
<script src="particleJs/particles.js"></script>
<script src="particleJs/app.js"></script>
<!-- Particles Js end -->

<!-- Js links start -->
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
<!-- Js links end -->
</body>
</html>
