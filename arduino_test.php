<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sensorValue = $_POST['sensorValue'];
    
    // Bạn có thể lưu trữ giá trị này vào file hoặc cơ sở dữ liệu
    file_put_contents('sensor_data.txt', $sensorValue);
    
    echo "Data received: " . $sensorValue;
}
?>
