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
        <span>Add Car Wash Booking</span>
    </div>
    <div class="form-container">
        <h2>Add Car Wash Booking</h2>
        <form>
            <div class="form-group">
                <label for="wash-name">Package Type</label>
                <div>
                    <select name="packagetype" required class="boxes">
                        <option value="">Package Type</option>
                        <option value="1">BASIC CLEANING ($10.99)</option>
                        <option value="2">PREMIUM CLEANING ($20.99)</option>
                        <option value="3 ">COMPLEX CLEANING($30.99)</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Adress</label>
                <div>
                    <select name="packagetype" required class="boxes">
                        <option value="">Select Washing Point</option>
                        <option value="1">Yone Car Washing Point (701 Hillsboro Blvd, Manchester, TN 37355, USA)</option>
                        <option value="2">Matrix Car washing Point (1075 Diffley Rd, Eagan, MN 55123, USA)</option>
                        <option value="3 ">Poto's War Wash(2401 N Rock Rd, Derby, KS 67037, USA)</option>
                        <option value="4"> ABC Car Washing Point (2122 North Avenue, Grand Junction, CO, USA)</option>
                        <option value="5">Pawing Car Wash Center (Pawing, Palo, Leyte)</option>
                        <option value="6">jade Car Wash0 (Government Center, Palo Leyte, Sample)</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="contact">Full Name</label>
                <input type="text" id="contact" name="contact" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <label for="contact">Moblie No.</label>
                <input type="text" id="contact" name="contact" placeholder="Contact No." required>
            </div>
            <div class="form-group">
                <label for="contact">Wash Date</label>
                <p><input type="date" name="washdate" required="" class="form-control boxes"></p>
            </div>
            <div class="form-group">
                <label for="contact">Washing Time</label>
                <p><input type="time" name="washtime" required="" class="form-control boxes"></p>
            </div>
            <div class="form-group">
                <label for="contact">Message (if any)</label>
                <input type="text" id="contact" name="mssg" placeholder="Message if any" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-add">ADD</button>
                <button type="reset" class="btn-reset">RESET</button>
            </div>
        </form>
        <hr>
    </div>
    <div class="footers" style="margin-top: 5%;">
        &copy; All Rigth Reserved. 2025 TWEMS
    </div>
    <?php include '../nav/admin_footer.php'; ?>