<?php include '../nav/admin_header.php';


// ✅ Database connection
$conn = mysqli_connect("localhost", "root", "", "carwash_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

<link rel="stylesheet" href="../assets/dist/css/admin_header.css">

<div class="col-md-10">
    <div class="animated-gradient-2 text">
        <p><i><b>TURBO WASH EXPRESS MANAGEMENT SYSTEM</b></i></p>
    </div>

    <hr>

    <div class="breadcrumb">
        <a href="../page/admin.php">Home</a>
        <span class="separator">›</span>
        <span>Manage All Bookings</span>
    </div>

    <center>
        <div class="col-md-10" style="width: 90%;">
            <!-- Contact Messages Table -->
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM appointments ORDER BY created_at DESC");
                    if (mysqli_num_rows($result) > 0):
                        $counter = 1;
                    ?>
                        <h5 class="mb-0">All Bookings</h5>
                </div>
                <div class="card-body table-container">
                    <table class="table table-bordered table-hover">
                        <thead class="table-light">
                            <tr style="text-align: center;">
                                <th>Booking No.</th>
                                <th>Name</th>
                                <th>Package Type</th>
                                <th>Washing Point</th>
                                <th>Washing Date/Time</th>
                                <th>Posting Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Mapping arrays
                            $packages = [
                                1 => "BASIC CLEANING ($10.99)",
                                2 => "PREMIUM CLEANING ($20.99)",
                                3 => "COMPLEX CLEANING ($30.99)"
                            ];

                            $washingPoints = [
                                1 => "Cielo Car Washing Point (ABC Street New Delhi 1110001)",
                                2 => "ABC Car Washing Point (A3263 Sector 1- Noida 201301)",
                                3 => "Matrix Car washing Point (H911 Indira Puram Ghaziabad 201017 UP)",
                                6 => "Pawing Car Wash Center (Pawing, Palo, Leyte)",
                                7 => "Poto's War Wash (Pater St. Tacloban City)",
                                9 => "Jake Car Wash0 (Government Center, Palo Leyte, Sample)"
                            ];
                            while ($row = mysqli_fetch_assoc($result)) : ?>
                                <tr>
                                    <td><?= $counter++ ?></td>
                                    <td><?= htmlspecialchars($row['FullName']) ?></td>
                                    <td><?= $packages[$row['package_type']] ?? 'Unknown' ?></td>
                                    <td><?= $washingPoints[$row['washing_point']] ?? 'Unknown' ?></td>
                                    <td><?= $row['scheduled_at'] ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td>
                                        <center><a href="" class="btn btn-sm btn-info text-white bg-dark"  data-bs-toggle="modal" data-bs-target="#messageModal">
                                                <i class="bi bi-eye"></i>
                                            </a></center>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p class="text-muted">No Booking found.</p>
                <?php endif; ?>
                </tbody>
                </table>
    </center>
    <div class="footers" style="margin-top: 5%;">
        &copy; All Rigth Reserved. 2025 TWEMS
    </div>
    <?php include '../nav/admin_footer.php'; ?>