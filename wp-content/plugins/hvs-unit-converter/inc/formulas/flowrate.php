<?php
/*
 * =================================================================================
 *
 * FLOWRATE conversions
 * Use LITERSEC as common unit - convert ALL to litersec, then convert to specified unit
 *
 * =================================================================================
 */
global $flowrate_to_litersec;
$flowrate_to_litersec = array(
    'cubic_feet_per_min'        => 0.47195,
    'cubic_meters_per_sec'      => 1000,
    'cubic_meters_per_min'      => 16.7,
    'cubic_meters_per_hr'       => .27778,
    'liters_per_sec'            => 1,
    'liters_per_min'            => .0166667,
    'liters_per_hr'             => .000277778,
    'gallons_per_min'           => .0631,
);

function x_to_litersec( $value, $from_unit ) {
    global $flowrate_to_litersec;
    if( array_key_exists( $from_unit, $flowrate_to_litersec ) ) {
        return $value * $flowrate_to_litersec[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_litersec( $value, $to_unit ) {
    global $flowrate_to_litersec;
    if( array_key_exists( $to_unit, $flowrate_to_litersec ) ) {
        return $value / $flowrate_to_litersec[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_flowrate( $value, $from_unit, $to_unit ) {
    $ls_value = x_to_litersec( $value, $from_unit );
    $new_value = x_from_litersec( $ls_value, $to_unit );
    return $new_value;
}