<!-- footer start -->

<div class="blue-section pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="bottombox">
                        <h6 class="text-dark">Information</h6>
                        <ul>
                            <li><a href="#" class="text-white">ICTRD E Library</a></li>
                            <li><a href="#" class="text-white">Active India Pvt Ltd. </a></li>
                            <li><a href="#" class="text-white">Trimurti Ngr, Nagpur 441104</a></li>
                            <li><a href="#" class="text-white">Maharashtra</a></li>
                            <!--<li><a href="#" class="text-white">10th class book</a></li>-->
                            <!--<li><a href="#" class="text-white">10th class book</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="bottombox">
                        <h6 class="text-dark">Link</h6>
                        <ul>
                            <li><a href="#" class="text-white">Blog</a></li>
                            <li><a href="" class="text-white">Contact Us</a></li>
                            <li><a href="" class="text-white">Privacy Policy</a></li>
                            <li><a href="" class="text-white">Terms and condition</a></li>
                            <li><a href="" class="text-white">Delete Account Policy</a></li>
                            <!--<li><a href="#" class="text-white">10th class book</a></li>-->
                        </ul>
                    </div>
                </div>
                

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="bottombox">
                        <h6 class="text-dark">Contact with Us</h6>
                        
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.5628260627354!2d79.12468937471817!3d21.169789382920786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c7c6ed82d29b%3A0x2f068c14563c9c6d!2sCARPENTER%20IN%20NAGPUR%20(Amit)!5e0!3m2!1sen!2sin!4v1715670139215!5m2!1sen!2sin"
                            width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com" class="text-white" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com" class="text-white" target="_blank"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li><a href="https://in.pinterest.com" class="text-white" target="_blank"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.linkedin.com" class="text-white" target="_blank"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com" class="text-white" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">All Rights Reserved Developed & Maintained by <a href="#"
                            class="orange-color">ICTRD</a></p>
                </div>
            </div>
        </div>
    </div>
    
<!-- Foooter end -->


    <!-- Adding Bootstrap JS and Popper.js for Bootstrap functionalities -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
       document.addEventListener("DOMContentLoaded", function () {
            function updateCurrentDate() {
                const currentDateElement = document.getElementById("current-date");
                const currentDate = new Date();
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                const formattedDate = currentDate.toLocaleDateString('en-US', options);
                currentDateElement.textContent = formattedDate;
            }

            // Initial update of the current date
            updateCurrentDate();

            // Update the current date every second
            setInterval(updateCurrentDate, 1000);
        });
    </script>
</body>
</html>
