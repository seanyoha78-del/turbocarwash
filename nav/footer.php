<link rel="stylesheet" href="../assets/dist/css/footer.css">
<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="footer-contact">
                    <h2>Get In Touch</h2>
                    <p><i class="fa fa-map-marker-alt"></i>91 Abucay, Tacloban CIty</p>
                    <p><i class="fa fa-phone-alt"></i>+9123456789</p>
                    <p><i class="fa fa-envelope"></i>turboexpress@gmail.com</p>
                    <div class="footer-social">
                        <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="footer-link">
                    <h2>Popular Links</h2>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="washing-plans.php">Washing Plans</a>
                    <a href="location.php">Washing Points</a>
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>

        </div>
    </div>
    <div class="container copyright">
        <p>Turbo Wash Express</p>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Car Wash Booking</h4>
            </div>
            <div class="modal-body">
                <form method="post">
                    <p>
                        <select name="packagetype" required="" class="form-control">
                            <option value="">Package Type</option>
                            <option value="1">BASIC CLEANING ($10.99)</option>
                            <option value="2">PREMIUM CLEANING ($20.99)</option>
                            <option value="3 ">COMPLEX CLEANING($30.99)</option>
                        </select>

                    </p>
                    <p>
                        <select name="washingpoint" required="" class="form-control">
                            <option value="">Select Washing Point</option>

                            <option value="1">Cielo Car Washing Point (ABC Street New Delhi 1110001)</option>

                            <option value="2">ABC Car Washing Point (A3263 Sector 1- Noida 201301)</option>

                            <option value="3"> Matrix Car washing Point (H911 Indira Puram Ghaziabad 201017 UP)</option>

                            <option value="6">Pawing Car Wash Center (Pawing, Palo, Leyte)</option>

                            <option value="7">Poto's War Wash (Pater St. Tacloban CIty)</option>

                            <option value="9">Jake Car Wash0 (Government Center, Palo Leyte, Sample)</option>
                        </select>
                    </p>
                    <p><input type="text" name="fname" class="form-control" required="" placeholder="Full Name"></p>
                    <p><input type="text" name="contactno" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required="" placeholder="Mobile No."></p>
                    <p>Wash Date <br><input type="date" name="washdate" required="" class="form-control"></p>
                    <p>Wash Time <br><input type="time" name="washtime" required="" class="form-control"></p>
                    <p><textarea name="message" class="form-control" placeholder="Message if any"></textarea></p>
                    <p><input type="submit" class="btn btn-custom" name="book" value="Book Now"></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- Footer End --> <!-- Back to top button -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>