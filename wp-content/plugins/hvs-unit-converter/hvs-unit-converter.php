<?php
/**
 * @since       0.0.1
 * @package     HVS_Unit_Converter
 * @author      David Rosenthal <dmrosenthal4biz@gmail.com>
 * 
 * Plugin Name: HVS Unit Converter
 * Plugin URI: https://github.com/DmRos123/hvs_conversions
 * Description: This plugin provides a calculator for unit measurement conversions, including volume, pressure, flowrate and leakrate.
 * Author: David Rosenthal
 * Version: 1.0
 * Author URI: https://github.com/DmRos123/
 * Text Domain: hvs-unit-converter
 * Domain Path: /languages/
 * License:     GPL2
 * 
 */

/**
 * HVS Unit Converter allows you to easily convert between different types of units.
 * 
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

/**
 * Plugin Notes:
 * 
 * 
 */

/* Prevent direct access */
if ( ! defined( 'WPINC' ) ) die;

/*
 * The class that represents the MAIN HVS ADMIN settings page
 */

/*
 * The class that represents and defines the core plugin 
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/class-hvs-unit-converter.php';

/*
 * The class that creates the Widget
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/class-hvs-unit-converter-widget.php';

/*
 * The class that creates the Shortcode
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/class-hvs-unit-converter-shortcode.php';

/*
 * The function that creates a new HVS_Unit_Converter object and runs the program
 */
function run_unitconverter() {
    // Instantiate the plugin class
    $HVS_Unit_Converter = new HVS_Unit_Converter( 'hvs-unit-converter', '0.0.1' );
}

run_unitconverter();