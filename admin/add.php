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
        <span>Add Washing Point</span>
    </div>
    <div class="form-container">
        <h2>Add Washing Point</h2>
        <form>
            <div class="form-group">
                <label for="wash-name">Car Wash Point Name</label>
                <input type="text" id="wash-name" name="wash-name" placeholder="Washing Point Name" required>
            </div>

            <div class="form-group">
                <label for="address">Adress</label>
                <textarea id="address" name="address" rows="4" placeholder="Address" required></textarea>
            </div>

            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="text" id="contact" name="contact" placeholder="Contact Number" required>
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