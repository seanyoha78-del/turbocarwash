<?php include '../nav/header.php'; ?>
<link rel="stylesheet" href="../assets/dist/css/home.css">

 <!-- Page Header Start -->
 <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="home.php">Home</a>
                        <a href="contact.php">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
         <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h2>Quick Contact Info</h2>
                            <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <i class="fa fa-map-marker-alt"></i>
                                        </div>
                                        <div class="contact-info-text">
                                            <h3>Address</h3>
                                            <p>PALO, LEYTE</p>
                                        </div>
                                    </div>
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="contact-info-text">
                                            <h3>Opening Hour</h3>
                                            <p>Mon - Fri, 9:00 AM - 9:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <i class="fa fa-phone-alt"></i>
                                        </div>
                                        <div class="contact-info-text">
                                            <h3>Call Us</h3>
                                            <p>+9123456789</p>
                                        </div>
                                    </div>
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="contact-info-text">
                                            <h3>Email Us</h3>
                                            <p>turboexpress@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-10 mx-auto col-lg-5">
                            <form action="../page/contact.php?function=sendSms&page=contact" class="p-4 p-md-5 border rounded-3 bg-light" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Name (optional)">
                                    <label>Name (optional)</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="mssg" placeholder="Message/Feedback" style="height: 100px"></textarea>
                                    <label>Message/Feedback</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    <label>Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="contact" placeholder="Contact Number">
                                    <label>Contact Number</label>
                                </div>
                                <button class="w-100 btn btn-lg btn btn-custom" type="submit" name="send_msg">Send</button>
                                <hr class="my-4">
                                <small class="text-muted">By clicking Send, you agree to our terms of use.</small>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

<?php include '../nav/footer.php'; ?>