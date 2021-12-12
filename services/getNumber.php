<?php

// services untuk mengambil data keperluan form
$generate_random_number = rand(10, 1000);

echo json_encode(array('generated_number' => $generate_random_number));

?>