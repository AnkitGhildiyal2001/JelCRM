<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once('modules/jjwg_Markers/jjwg_Markers_sugar.php');
require_once('modules/jjwg_Maps/jjwg_Maps.php');


class jjwg_Markers extends jjwg_Markers_sugar {

    /**
     * @var settings array
     */
    var $settings = array();

    function __construct($init=true) {

        parent::__construct();
        // Admin Config Setting
        if($init) $this->configuration();
    }

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code, use __construct instead
     */
    function jjwg_Markers($init=true){
        $deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
        if(isset($GLOBALS['log'])) {
            $GLOBALS['log']->deprecated($deprecatedMessage);
        }
        else {
            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
        }
        self::__construct($init);
    }


    /**
     * Load Configuration Settings using Administration Module
     * See jjwg_Maps module for setting config
     * $GLOBALS['jjwg_config_defaults']
     * $GLOBALS['jjwg_config']
     */
    function configuration() {

        $this->jjwg_Maps = new jjwg_Maps();
        $this->settings = $GLOBALS['jjwg_config'];
    }

    /**
     *
     * Define Marker Location
     * @param $marker mixed (array or object)
     */
    function define_loc($marker = array()) {

        if (empty($marker)) {
            $marker = $this;
        }
        $loc = array();
        if (is_object($marker)) {
            $loc['name'] = $marker->name;
            $loc['lat'] = $marker->jjwg_maps_lat;
            $loc['lng'] = $marker->jjwg_maps_lng;
        } elseif (is_array($marker)) {
            $loc['name'] = $marker['name'];
            $loc['lat'] = $marker['lat'];
            $loc['lng'] = $marker['lng'];
        }
        if (empty($loc['name'])) {
            $loc['name'] = 'N/A';
            $loc['lat'] = null;
            $loc['lng'] = null;
        }
        if (!$this->is_valid_lat($loc['lat'])) {
            $loc['lat'] = $this->settings['map_default_center_latitude'];
        }
        if (!$this->is_valid_lng($loc['lng'])) {
            $loc['lng'] = $this->settings['map_default_center_longitude'];
        }
        
        $markerImage = null;
        if (isset($marker->marker_image)) {
            $markerImage = $marker->marker_image;
        } else {
            LoggerManager::getLogger()->warn('Marker image is not set for jjwg Markers :: define_loc');
        }
        
        $loc['image'] = $markerImage;
        return $loc;
    }

    /**
     *
     * Check for valid longitude
     * @param $lng float
     */
    function is_valid_lng($lng) {
        return (is_numeric($lng) && $lng >= -180 && $lng <= 180);
    }

    /**
     *
     * Check for valid latitude
     * @param $lat float
     */
    function is_valid_lat($lat) {
        return (is_numeric($lat) && $lat >= -90 && $lat <= 90);
    }

}
