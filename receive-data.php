<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ Arduino
    $sensorValue = $_POST['sensorValue'];
    
    // Lưu dữ liệu vào file sensor_data.txt
    file_put_contents('sensor_data.txt', $sensorValue);
    
    // Phản hồi lại cho Arduino
    echo "Data received: " . $sensorValue;
} else {
    echo "No data received.";
}
?>
