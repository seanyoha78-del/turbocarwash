<?php
require_once "db_connection.php";

class BookingModel extends Connectors {

    function createBooking($data) {
        $sql = "INSERT INTO appointments 
                (FullName, user_id, vehicle_id, scheduled_at, status, Contact, package_type, washing_point, notes) 
                VALUES (:FullName, :user_id, :vehicle_id, :scheduled_at, :status, :Contact, :package_type, :washing_point, :notes)";
        
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':FullName', $data['FullName']);
        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':vehicle_id', $data['vehicle_id']);
        $stmt->bindParam(':scheduled_at', $data['scheduled_at']);
        $stmt->bindValue(':status', 'pending'); 
        $stmt->bindParam(':Contact', $data['Contact']);

        // ✅ Match keys correctly
        $packageType  = !empty($data['package_type']) ? (int)$data['package_type'] : 0;
        $washingPoint = !empty($data['washing_point']) ? (int)$data['washing_point'] : 0;
        $notes        = !empty($data['notes']) ? $data['notes'] : '';

        $stmt->bindParam(':package_type', $packageType, PDO::PARAM_INT);
        $stmt->bindParam(':washing_point', $washingPoint, PDO::PARAM_INT);
        $stmt->bindParam(':notes', $notes, PDO::PARAM_STR);

        return $stmt->execute();
    }
}
