<?php
/**
 * The class that create the plugin Shortcode.
 * 
 * Sets up the shortcode and its attributes
 * 
 * @since       0.0.1
 * @package     HVS_Unit_Converter
 * @subpackage  HVS_Unit_Converter/inc
 * @author      David Rosenthal <dmrosenthal4biz@gmail.com>
 */

/* Prevent direct access */
if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'HVS_Unit_Converter_Shortcode' ) ) {
    
    class HVS_Unit_Converter_Shortcode {
        
        /**
         * Builds the shortcode object
         * 
         * @since   0.0.1
         */
        public function __construct() {
            
            $this->register();
            
        }
        
        /**
         * Registers the shortcode with WordPress
         * 
         * @since   0.0.1
         */
        protected function register() {
            add_shortcode( 'hvsuc', array( $this, 'hvs_unit_converter_make_shortcode' ) );
        }
        
        /**
         * Creates the view for the shortcode
         * 
         * Only allows ONE instance of the shortcode per page (include_once)
         * Also prevents it from loading in the sidebar because of include_once
         * 
         * @since   0.0.1
         * @global  post    $post   A reference to the current WordPress Post
         */
        public function hvs_unit_converter_make_shortcode() {
            
            // Prevent loading more than once per Page
            global $post;
            if( has_shortcode( $post->post_content, 'hvsuc' ) ) {
                include_once 'view-hvs-unit-converter.php';
            }
            
        }
        
    } // END class HVS_Unit_Converter_Shortcode
    
} // END if ( ! class_exists() )