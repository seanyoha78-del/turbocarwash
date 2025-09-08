<?php include '../nav/admin_header.php'; ?>

<link rel="stylesheet" href="../assets/dist/css/admin_header.css">

<div class="col-md-10">
    <div class="animated-gradient-2 text">
        <p style="margin-top: 3%;"><i><b>TURBO WASH EXPRESS MANAGEMENT SYSTEM</b></i></p>
    </div>

    <hr>

    <div class="breadcrumb">
        <a href="dashboard.php">Home</a>
        <span class="separator">›</span>
        <span>Contact Us Information</span>
    </div>
    <div class="form-container">
        <h2>Update Contact Information</h2>
        <form>
            <div class="form-group">
                <label for="text">Address</label>
                <input type="text" id="contact" name="" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="text">Opening Hours</label>
                <input type="text" id="contact" name="" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="email">Email ID</label>
                <input type="email" id="contact" name="" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="number">Contact No.</label>
                <input type="number" id="contact" name="" placeholder="" required>
            </div>
            <a class="btn btn-custom" href="">Update</a>
        </form>
        <hr>
    </div>
    <div class="footers" style="margin-top: 5%;">
        &copy; All Rigth Reserved. 2025 TWEMS
    </div>
    <?php include '../nav/admin_footer.php'; ?>