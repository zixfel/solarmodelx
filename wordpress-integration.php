<?php
/**
 * Plugin Name: Solar Calculator Integration
 * Description: Nhúng ứng dụng tính toán tiết kiệm điện mặt trời
 * Version: 1.0
 * Author: Your Name
 */

// Shortcode: [solar_calculator]
function solar_calculator_shortcode() {
    $html = '<div style="width: 100%; max-width: 1400px; margin: 0 auto;">';
    $html .= '<iframe ';
    $html .= 'src="' . plugins_url('index.html', __FILE__) . '" ';
    $html .= 'width="100%" ';
    $html .= 'height="1200px" ';
    $html .= 'frameborder="0" ';
    $html .= 'style="border: none; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">';
    $html .= '</iframe>';
    $html .= '</div>';
    return $html;
}
add_shortcode('solar_calculator', 'solar_calculator_shortcode');

// Shortcode: [evn_calculator]
function evn_calculator_shortcode() {
    $html = '<div style="width: 100%; max-width: 900px; margin: 0 auto;">';
    $html .= '<iframe ';
    $html .= 'src="' . plugins_url('TEST-TIERED-PRICING.html', __FILE__) . '" ';
    $html .= 'width="100%" ';
    $html .= 'height="800px" ';
    $html .= 'frameborder="0" ';
    $html .= 'style="border: none; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">';
    $html .= '</iframe>';
    $html .= '</div>';
    return $html;
}
add_shortcode('evn_calculator', 'evn_calculator_shortcode');
?>
