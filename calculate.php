<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $height = $_POST["height"];
    $heightunit = $_POST["heightunit"];
    $weight = $_POST["weight"];
    $weightunit = $_POST["weightunit"];
    if ($height == '' || $weight == '' || $heightunit == '' || $weightunit == '') {
        $error = "กรุณากรอกข้อมูลให้ครบถ้วน";
    } elseif (filter_var($height, FILTER_VALIDATE_FLOAT) === false || filter_var($weight, FILTER_VALIDATE_FLOAT) === false) {
        $error = "กรุณากรอกข้อมูลเป็นเพียงตัวเลขเท่านั้น";
    } else {
        $hinches = ($heightunit == 'centimeter') ? $height * 0.393701 : (($heightunit == 'foot') ? $height * 12 : (($heightunit == 'meter') ? $height * 39.3700787 : $height));
        $wpound = ($weightunit = 'kilogram') ? $weight * 2.2 : $weight;
        $bmiindex = round($wpound / ($hinches * $hinches) * 7.3, 2);

        if ($bmiindex < 18.5) {
            $message = "น้ำหนักต่ำกว่าเกณฑ์";
        } else if ($bmiindex <= 24.90) {
            $message = "น้ำหนักปกติ";
        } else if ($bmiindex <= 29.9) {
            $message = "น้ำหนักเกินเกณฑ์";
        } else {
            $message = "คุณอ้วนมากก";
        }
    }
    if (isset($heightunit) && $heightunit == 'centimeter') {
        echo "selected";
    }
    if (isset($heightunit) && $heightunit == 'inch' || !isset($heightunit)) {
        echo "selected";
    }
    if (isset($heightunit) && $heightunit == 'foot' || !isset($heightunit)) {
        echo "selected";
    }
    if (isset($heightunit) && $heightunit == 'meter' || !isset($heightunit)) {
        echo "selected";
    }

    if (isset($weightunit) && $weightunit == 'kilogram') {
        echo "selected";
    }
    if (isset($weightunit) && $weightunit == 'pound') {
        echo "selected";
    }
}
