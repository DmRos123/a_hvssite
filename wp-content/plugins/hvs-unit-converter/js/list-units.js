/*
 * @link: https://en.wikipedia.org/wiki/Conversion_of_units#Torque_or_moment_of_force (BEST)
 * @link: http://www.dyn-web.com/tutorials/forms/select/paired.php
 */
// object literal holding data for option elements
var Conversion_Unit_Lists = {
    
    'from_unit[]': {   // name of associated select box
        
        // names match option values in controlling select box
     
        energy: {
            text: [ 'barrels of oil equivalent', 'British thermal units', 'calories', 'electron volts', 'ergs', 'foot-pounds', 'grams of TNT', 'joules', 'kilocalories', 'kilograms of TNT', 'megatons of TNT', 'megawatt hours', 'tons of TNT', 'US therms', 'watt hours' ],
            default: [ 'joules', 'kilojoules', 'calories', 'kilocalories', 'watt hours', 'kilowatt hours', 'megawatt hours', 'British thermal units', 'US therms', 'foot-pounds' ],
        },
        flowrate: {
            text: [ 'cubic feet per min', 'cubic meters per sec', 'cubic meters per min', 'cubic meters per hr',  'liters per sec', 'liters per min', 'liters per hr', 'gallons per min' ],
            default: [ 'cubic feet per min', 'cubic meters per sec', 'cubic meters per min', 'cubic meters per hr',  'liters per sec', 'liters per min', 'liters per hr', 'gallons per min' ],
        },
        leakrate: {
            text: [ 'mbar liters per sec', 'std cc per hr', 'std cc per min', 'std cc per sec', 'torr liters per sec', 'pascal liters per sec', 'molecules per sec' ],
            default: [ 'mbar liters per sec', 'std cc per hr', 'std cc per min', 'std cc per sec', 'torr liters per sec', 'pascal liters per sec', 'molecules per sec'  ],
        },
        
        pressure: {
            text: [ 'atmospheres', /*'barries',*/ 'bars', 'inches of mercury', 'inches of water', 'millibars', 'millimeters of mercury', 'Pascals', /*'poises',*/ 'pounds per square inch', 'torrs' ],
            default: [ 'atmospheres', 'bars', 'Pascals', 'pounds per square inch', 'torrs' ],
        },
        volume: {
            text: [ 'acre-feet', 'barrels of oil', 'beer barrels', 'beer firkins', 'beer hogsheads', 'beer kilderkins', 'board feet', 'bushels', 'cords', 'cubic centimeters', 'cubic feet', 'cubic inches', 'cubic kilometers', 'cubic meters', 'cubic millimeters', /*'English tierces', 'fluid barrels',*/ 'fluid drams', 'fluid ounces', 'full kegs', 'gills', 'Gross Register Tonnes', /*'half barrels', 'hogsheads', 'Imperial beer barrels',*/ 'Imperial bushels', 'Imperial dessertspoons', 'Imperial fluid drams', 'Imperial ounces', 'Imperial gallons', 'Imperial gills', 'Imperial minims', 'Imperial pecks', 'Imperial pints', 'Imperial quarts', 'Imperial tablespoons', 'Imperial teaspoons', 'liters', 'minims', 'pecks', 'pints', /*'puncheons', 'quarter barrels',*/ 'quarts', 'register tonnes', 'shots', /*'sixth barrels',*/ 'sticks of butter', 'tablespoons', 'teaspoons', /*'tierces',*/ 'US cups', 'US gallons', /*'wine firkins', 'wine rundlets'*/ ],
            default: [ 'liters', 'milliliters', 'US gallons', 'US quarts', 'US pints', 'US cups', 'US ounces', 'US tablespoons', 'US teaspoons', 'imperial gallons', 'imperial quarts', 'imperial pints', 'imperial cups', 'imperial ounces', 'imperial tablespoons', 'imperial teaspoons', 'cubic inches', 'cubic feet', 'cubic centimeters', 'cubic meters', ],
        },
        
        
    },
    
    'to_unit[]': {   // name of associated select box
        
        // names match option values in controlling select box
        
        energy: {
            text: [ 'barrels of oil equivalent', 'British thermal units', 'calories', 'electron volts', 'ergs', 'foot-pounds', 'grams of TNT', 'joules', 'kilocalories', 'kilograms of TNT', 'megatons of TNT', 'megawatt hours', 'tons of TNT', 'US therms', 'watt hours' ],
            default: [ 'joules', 'kilojoules', 'calories', 'kilocalories', 'watt hours', 'kilowatt hours', 'megawatt hours', 'British thermal units', 'US therms', 'foot-pounds' ],
        },
        flowrate: {
            text: [ 'cubic feet per min', 'cubic meters per sec', 'cubic meters per min', 'cubic meters per hr',  'liters per sec', 'liters per min', 'liters per hr', 'gallons per min' ],
            default: [ 'cubic feet per min', 'cubic meters per sec', 'cubic meters per min', 'cubic meters per hr',  'liters per sec', 'liters per min', 'liters per hr', 'gallons per min' ],
        },
        leakrate: {
            text: [ 'mbar liters per sec', 'std cc per hr', 'std cc per min', 'std cc per sec', 'torr liters per sec', 'pascal liters per sec', 'molecules per sec' ],
            default: [ 'mbar liters per sec', 'std cc per hr', 'std cc per min', 'std cc per sec', 'torr liters per sec', 'pascal liters per sec', 'molecules per sec'  ],
        },
        
        pressure: {
            text: [ 'atmospheres', /*'barries',*/ 'bars', 'inches of mercury', 'inches of water', 'millibars', 'millimeters of mercury', 'Pascals', /*'poises',*/ 'pounds per square inch', 'torrs' ],
            default: [ 'atmospheres', 'bars', 'Pascals', 'pounds per square inch', 'torrs' ],
        },
        volume: {
            text: [ 'acre-feet', 'barrels of oil', 'beer barrels', 'beer firkins', 'beer hogsheads', 'beer kilderkins', 'board feet', 'bushels', 'cords', 'cubic centimeters', 'cubic feet', 'cubic inches', 'cubic kilometers', 'cubic meters', 'cubic millimeters', /*'English tierces', 'fluid barrels',*/ 'fluid drams', 'fluid ounces', 'full kegs', 'gills', 'Gross Register Tonnes', /*'half barrels', 'hogsheads', 'Imperial beer barrels',*/ 'Imperial bushels', 'Imperial dessertspoons', 'Imperial fluid drams', 'Imperial ounces', 'Imperial gallons', 'Imperial gills', 'Imperial minims', 'Imperial pecks', 'Imperial pints', 'Imperial quarts', 'Imperial tablespoons', 'Imperial teaspoons', 'liters', 'minims', 'pecks', 'pints', /*'puncheons', 'quarter barrels',*/ 'quarts', 'register tonnes', 'shots', /*'sixth barrels',*/ 'sticks of butter', 'tablespoons', 'teaspoons', /*'tierces',*/ 'US cups', 'US gallons', /*'wine firkins', 'wine rundlets'*/ ],
            default: [ 'liters', 'milliliters', 'US gallons', 'US quarts', 'US pints', 'US cups', 'US ounces', 'US tablespoons', 'US teaspoons', 'imperial gallons', 'imperial quarts', 'imperial pints', 'imperial cups', 'imperial ounces', 'imperial tablespoons', 'imperial teaspoons', 'cubic inches', 'cubic feet', 'cubic centimeters', 'cubic meters', ],
        },
        
    },
    
}

// removes all option elements in select box
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions( sel, removeGrp ) {
    var len, groups, par;
//    if( removeGrp ) {
//        groups = sel.getElementsByTagName( 'optgroup' );
//        len = groups.length;
//        for( var i=len; i; i-- ) {
//            sel.removeChild( groups[ i-1 ] );
//        }
//    }
    len = sel.options.length;
    for( var i=len; i; i-- ) {
        par = sel.options[ i-1 ].parentNode;
        par.removeChild( sel.options[ i-1 ] );
    }
}

function appendDataToSelect( sel, obj, str ) { // str="" default
    // alert( index );
    
    // Default value for str (pre-ES2015)
    str = typeof str !== 'undefined' ? str : "";
    
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions( obj ) {
        var f = document.createDocumentFragment();
        var o;
        
        if( !document.getElementById( 'show_all_units' ).checked && obj.default ) {
            for( var i=0, len=obj.default.length; i<len; i++ ) {
                o = document.createElement( 'option' );
                o.appendChild( document.createTextNode( obj.default[i] ) );

                if( obj.value ) {
                    o.value = obj.value[i];
                } else {
                    o.value = obj.default[i].replace( ' ', '_' );
                }
                if( obj.default[i] == str ) {
                    o.selected = true;
                }

                f.appendChild( o );
            }
        } else {
            for( var i=0, len=obj.text.length; i<len; i++ ) {
                o = document.createElement( 'option' );
                o.appendChild( document.createTextNode( obj.text[i] ) );

                if( obj.value ) {
                    o.value = obj.value[i];
                } else {
                    o.value = obj.text[i].replace( ' ', '_' );
                }
                if( obj.text[i] == str ) {
                    o.selected = true;
                }

                f.appendChild( o );
            }
        }
        return f;
    }
    
    if( obj.text ) {
        opts = addOptions( obj );
        f.appendChild( opts );
    } else {
        for( var prop in obj ) {
            if( obj.hasOwnProperty( prop ) ) {
                labels.push( prop );
            }
        }
        for( var i=0, len=labels.length; i<len; i++ ) {
            group = document.createElement( 'optgroup' );
            group.label = labels[ i ];
            f.appendChild( group );
            opts = addOptions( obj[ labels[ i ] ] );
            group.appendChild( opts );
        }
    }
    sel.appendChild( f );
    
}

