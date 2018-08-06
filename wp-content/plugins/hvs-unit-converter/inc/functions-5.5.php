<?php 
/*
 * Functions file - handles ALL conversion functions
 * 
 * In alphabetical order, the functions found in this file are:
 * 1. flowrate             convert_flowrate()          DEFAULT
 * 2. leakrate             convert_leakrate()          DEFAULT
 * 3. pressure             convert_pressure()          DEFAULT
 * 4. volume               convert_volume()            DEFAULT
 */

/*
 * PHP Notes
 *  - in 5.3, can't assign arrays to constants
 *  - in 5.6, CAN assign arrays to constants USE const
 *  - in 7.0, can use define rather than const
 */

/*
 * =================================================================================
 *
 * GENERAL functions 
 *
 * =================================================================================
 */
function optionize( $string ) {
    return str_replace( ' ', '_', strtolower( $string ) );
}

/*
 * Formatting scientific notation
 * number_format( $float, $precision, $point, $sep );
 * sprintf( '%F', 1/1000000 ); => sprintf( '%.6F', 1/1000000 );
 * 
 * Formats a float into a string, avoids default scientific notation, rounds to $precision and trims trailing zeroes.
 */
function float_to_string( $float, $precision=10 ) {
    if( $float == '' ) return $float;
    // Typecast to insure value is a float
    $float = (float) $float;
    $string = number_format( $float, $precision, '.', '' );
    $string = rtrim( $string, '0' );
    $string = rtrim( $string, '.' );
    return $string;
}

function calculate( $list_name, $from_value, $from_unit, $to_unit ) {
    
    switch( $list_name ) {
        
        case 'flowrate':              
            include_once( 'formulas/flowrate.php' ); 
            return convert_flowrate( $from_value, $from_unit, $to_unit );
            
        case 'leakrate':                
            include_once( 'formulas/leakrate.php' ); 
            return convert_leakrate( $from_value, $from_unit, $to_unit );
            
        case 'pressure':            
            include_once( 'formulas/pressure.php' ); 
            return convert_pressure( $from_value, $from_unit, $to_unit );
            
        case 'volume':              
            include_once( 'formulas/volume.php' ); 
            return convert_volume( $from_value, $from_unit, $to_unit );
            
        default:
            return 'Unsupported conversion type.';
            
    }
    
}