   <footer class="eb_h3-footer-area">
                    <div class="eb_h3-footer-top pt-110 pb-80">

                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-7">
                                    <div class="eb_h3-footer-widget1 mb-30">
                                        <div class="eb_h3-footer-logo">
                                            <a href="index.php"><img src="assets/img/logo/footer.png" alt=""></a>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <!-- <ul class="d-flex list-unstyled gap-3 m-0">
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                            </ul> -->
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-5">
                                    <div class="eb_h3-footer-widget mb-30">
                                        <h3 class="eb_h3-footer-widget-title">
                                            Quick Links
                                        </h3>
                                        <ul>

                                            <li><a href="blog.php">Blogs</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                            <li><a href="about.php">About US</a></li>
                                            <li><a href="privacy-policy.php">Privacy-Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-5">
                                    <div class="eb_h3-footer-widget mb-30">
                                        <h3 class="eb_h3-footer-widget-title">Services</h3>
                                        <ul>
                                            <li><a href="price.php">Pricing</a></li>
                                            <li><a href="faq.php">FAQ</a></li>
                                            <li><a href="blog.php">Blogs</a></li>
                                            <li><a href="terms-and-conditions.php"> Terms & Conditions</a></li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-7 order-lg-4 order-sm-3">
                                    <div class="eb_h3-footer-widget mb-30">
                                        <h3 class="eb_h3-footer-widget-title">Address </h3>


                                    </div>
                                    <div class="eb_h3-footer-address">
                                        <a href="#"><i class="fa-solid fa-location-dot"></i>5922 Nash ave , Westerville Ohio 43081
Company name: Venira Accountancy LLC</a>
                                        <a href="tel:+16146808687"><i class="fa-solid fa-phone"></i>+1 (614) 680-8687</a>

                                        <a href="mailto:marketing@veniraaccountancy.com"><i class="fa-solid fa-envelope"></i>
                                        marketing@veniraaccountancy.com </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="eb_h3-footer-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <div class="eb_h3-footer-copyright-text">
                                        <p>©2025 All Rights Reserved by site</p>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="eb_h3-footer-menu">
                                        <ul>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Term of Service</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </footer>

                
            </div>
        </div>
    </div>


    <!-- jQuery Js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script> 
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/chroma.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.bxslider.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Load country-specific content on page load
        const country = localStorage.getItem('country') || 'us'; // Default to 'us' if not set

        // Function to load country-specific content
        function loadCountryContent(countryCode) {
            let content = '';
            
            if (countryCode === 'uk') {
                content = `
                    <h1>Welcome to UK</h1>
                    <p>This is the UK version of the content.</p>
                `;
            } else {
                content = `
                    <h1>Welcome to USA</h1>
                    <p>This is the USA version of the content.</p>
                `;
            }

            document.getElementById('countryContent').innerHTML = content;
            localStorage.setItem('country', countryCode); // Save user preference in localStorage
        }

        // Initially load the country content
        loadCountryContent(country);

        // Event listeners for country flags
        document.getElementById('ukFlag').addEventListener('click', function() {
            loadCountryContent('uk');
        });

        document.getElementById('usaFlag').addEventListener('click', function() {
            loadCountryContent('us');
        });
    });
</script>

 