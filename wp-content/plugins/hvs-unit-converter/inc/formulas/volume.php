<?php
/*
 * =================================================================================
 *
 * VOLUME conversions
 * Use LITERS as common unit - convert ALL to liters, then convert to specified unit
 *
 * =================================================================================
 */
global $volume_to_liter;
$volume_to_liter = array(
    'cubic_inches'          => 0.0163871,
    'cubic_feet'            => 28.3168,
    'cubic_millimeters'     => 0.000001,
    'cubic_centimeters'     => 0.001,
    'cubic_meters'          => 1000,
    'cubic_kilometers'      => 1000000000000,
    'imperial_gallons'      => 4.54609,
    'imperial_quarts'       => 1.13652,
    'imperial_pints'        => 0.568261,
    'imperial_cups'         => 0.284131,
    'imperial_ounces'       => 0.0284131,
    'us_gallons'            => 3.78541,
    'us_quarts'             => 0.946353,
    'us_pints'              => 0.473176,
    'us_cups'               => 0.24,
    'us_ounces'             => 0.0295735,
    'liters'                => 1,
    'milliliters'           => 0.001,

);

function x_to_liters( $value, $from_unit ) {
    global $volume_to_liter;
    if( array_key_exists( $from_unit, $volume_to_liter ) ) {
        return $value * $volume_to_liter[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_liters( $value, $to_unit ) {
    global $volume_to_liter;
    if( array_key_exists( $to_unit, $volume_to_liter ) ) {
        return $value / $volume_to_liter[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_volume( $value, $from_unit, $to_unit ) {
    $liter_value = x_to_liters( $value, $from_unit );
    $new_value = x_from_liters( $liter_value, $to_unit );
    return $new_value;
}