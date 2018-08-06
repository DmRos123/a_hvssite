<?php
/*
 * =================================================================================
 *
 * #1 : LEAKRATE conversions
 * Use MBARLSEC as common unit - convert ALL to mbar liters/sec, then convert to specified unit
 *
 * =================================================================================
 */
global $leakrate_to_mbarlsec;
$leakrate_to_mbarlsec = array(
    'mbar_liters_per_sec'       => 1,
    'std_cc_per_hr'             => .000281,
    'std_cc_per_min'            => .0169,
    'std_cc_per_sec'            => 1.013,
    'torr_liters_per_sec'       => 1.33,
    'pascal_liters_per_sec'     => .01,
    'molecules_per_sec'         => 45.24,
);

function x_to_mbarlsec( $value, $from_unit ) {
    global $leakrate_to_mbarlsec;
    if( array_key_exists( $from_unit, $leakrate_to_mbarlsec ) ) {
        return $value * $leakrate_to_mbarlsec[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_mbarlsec( $value, $to_unit ) {
    global $leakrate_to_mbarlsec;
    if( array_key_exists( $to_unit, $leakrate_to_mbarlsec ) ) {
        return $value / $leakrate_to_mbarlsec[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_leakrate( $value, $from_unit, $to_unit ) {
    $mbarlsec_value = x_to_mbarlsec( $value, $from_unit );
    $new_value = x_from_mbarlsec( $mbarlsec_value, $to_unit );
    return $new_value;
}


