<?php
/**
 * The main plugin class that handles all other plugin parts.
 * 
 * Defines the plugin name, version, and hooks for enqueing the stylesheet and JavaScript.
 * 
 * @package     HVS_Unit_Converter
 * @subpackage  HVS_Unit_Converter/inc
 * @author      David Rosenthal <dmrosenthal4biz@gmail.com>
 */

/* Prevent direct access */
if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'HVS_Unit_Converter' ) ) {
    
    class HVS_Unit_Converter {
    
        /**
         * The ID of the plugin.
         * 
         * @since   0.0.1
         * @access  private
         * @var     string  $name       The ID of the plugin.
         */
        private $name;
        
        /**
         * Current version of the plugin.
         * 
         * @since   0.0.1
         * @access  private
         * @var     string  $version    The current version of the plugin.
         */
        private $version;
        
        /**
         * Widget
         * 
         * @since   0.0.1
         * @access  private
         * @var     HVS_Unit_Converter_Widget       $widget     A reference to the widget.
         */
        private $widget;
        
        /**
         * Shortcode
         * 
         * @since   0.0.1
         * @access  private
         * @var     HVS_Unit_Converter_Shortcode    $shortcode  A reference to the shortcode.
         */
        private $shortcode;
        
        
        /**
         * CONSTRUCTOR !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
         * Initializes the HVS_Unit_Converter object and sets its properties
         * 
         * @since   0.0.1
         * @var     string  $name       The name of the plugin.
         * @var     string  $version    The version of the plugin.
         */
        public function __construct( $name, $version ) {
            
            // Set the name and version number
            $this->name     = $name;
            $this->version  = $version;
            
            // Create the widget
            $this->make_widget();
            
            // Create the shortcode
            $this->make_shortcode();
            
            // Load the plugin and supplementary files
            $this->load();
            
        }
        
        /**
         * Creates the Widget
         * 
         * @since   0.0.1
         * @return  object  $widget     The Widget
         */
        protected function make_widget() {
            
            if ( is_null( $this->widget ) ) {
                $this->widget = new HVS_Unit_Converter_Widget();
            }
            return $this->widget;
            
        }
        
        /**
         * Creates the Shortcode
         * 
         * @since   0.0.1
         * @return  object  $shortcode  The Shortcode
         */
        protected function make_shortcode() {
            
            if ( is_null( $this->shortcode ) ) {
                $this->shortcode = new HVS_Unit_Converter_Shortcode();
            }
            return $this->shortcode;
            
        }
        
        /**
         * Loads translation directory
         * Adds the call to enqueue styles and scripts
         * 
         * @since   0.0.1
         */
        protected function load() {
            
            load_plugin_textdomain( 'hvs-unit-converter', false, basename( dirname( __FILE__ ) ) . '/languages' );
            add_action( 'wp_enqueue_scripts', array( $this, 'hvs_uc_scripts_styles' ) );
            
        }
        
        /**
         * Enqueues Styles and Scripts
         * 
         * @since   0.0.1
         */
        public function hvs_uc_scripts_styles() {

            // Selectively load styles and scripts only when the widget or shortcode are active on a page
            global $post;
            if( is_active_widget( false, false, 'hvs_unit_converter_widget' ) || has_shortcode( $post->post_content, 'hvsuc' ) ) {
                
                wp_enqueue_style( 'hvs-uc-style', plugins_url( '../style.css', __FILE__ ) );
                wp_enqueue_script( 'hvs-uc-functions', plugins_url( '../js/functions.js', __FILE__ ), array(), '20160417', true );
                wp_enqueue_script( 'hvs-list-choice', plugins_url( '../js/list-choice.js', __FILE__ ), array(), '20160417', true );
                wp_enqueue_script( 'hvs-list-units', plugins_url( '../js/list-units.js', __FILE__ ), array(), '20160417', true );

            }
            
        }
        
    } // END class HVS_Unit_Converter
    
} // END if ( ! class_exists() )