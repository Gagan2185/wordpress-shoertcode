<?php

    // Define shortcode function
function custom_shortcode_function() {
    // Your existing code here
    $output = '';
    foreach ($arraySet_step_one as $fulldtls_field) {
        if (isset($fulldtls_field['fulldetails']['heading_main_one'])) {
            $mainhead = $fulldtls_field['fulldetails']['heading_main_one'];
        }
        if (isset($fulldtls_field['fulldetails']['description_one'])) {
            $description = $fulldtls_field['fulldetails']['description_one'];
        }
    }

    $output .= "<span><b>".$mainhead.'</b></span><br>';
    $output .= "<span><b>".$description.'</b></span>';

    foreach ($arraySet_step_one as $fulldtls_field) {
        if (isset($fulldtls_field['fulldetails']['column'])) {
            if ($fulldtls_field['fulldetails']['column'] == 3) {
                $class_width = 'ocr_col_3';
            } elseif ($fulldtls_field['fulldetails']['column'] == 2) {
                $class_width = 'ocr_col_2';
            } elseif ($fulldtls_field['fulldetails']['column'] == 4) {
                $class_width = 'ocr_col_4';
            } else {
                $class_width = 'ocr_col_1';
            }
        }

        $output .= '<div class="' . $class_width . '">';
        foreach ($fulldtls_field['fulldetails']['data'] as $key => $value) {
            $output .= '<div class="ocr_grid">';
            // Your existing code for generating HTML elements
            // You can append to $output variable as needed
        }
        $output .= '</div>';
    }

    return $output;
}

// Register the shortcode with WordPress
add_shortcode('custom_shortcode', 'custom_shortcode_function');
