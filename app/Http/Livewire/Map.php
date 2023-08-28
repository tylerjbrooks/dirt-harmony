<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Map extends Component
{
    // Seattle
    public $mapLat = 47.606209;
    public $mapLng = -122.332069;

    // Map mapId
    public $mapId = 'dirt-harmony';

    // Map zoom
    public $mapZoom = 6;

    // Map div class
    public $mapDivClass = '';

    // Map div style
    public $mapDivStyle = "width:100%;height:600px;";

    // Map key
    public $mapKey;

    // Map version
    public $mapVersion = 'weekly';

    // Map style
    public $mapStyle = '[
        {
            "featureType": "all",
            "elementType": "geometry.fill",
            "stylers": [{ "weight": "2.00" }]
        },{
            "featureType": "all",
            "elementType": "geometry.stroke",
            "stylers": [{ "color": "#9c9c9c" }]
        },{
            "featureType": "all",
            "elementType": "labels.text",
            "stylers": [{ "visibility": "on" }]
        },{
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [{ "color": "#f2f2f2" }]
        },{
            "featureType": "landscape",
            "elementType": "geometry.fill",
            "stylers": [{ "color": "#ffffff" }]
        },{
            "featureType": "landscape.man_made",
            "elementType": "geometry.fill",
            "stylers": [{ "color": "#ffffff" }]
        },{
            "featureType": "poi",
            "elementType": "all",
            "stylers": [{ "visibility": "off" }]
        },{
            "featureType": "road",
            "elementType": "all",
            "stylers": [
                { "saturation": -100 },
                { "lightness": 45}
            ]
        },{
            "featureType": "road",
            "elementType": "geometry.fill",
            "stylers": [{ "color": "#eeeeee" }]
        },{
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [{ "color": "#7b7b7b" }]
        },{
            "featureType": "road",
            "elementType": "labels.text.stroke",
            "stylers": [{ "color": "#ffffff" }]
        },{
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [{ "visibility": "simplified" }]
        },{
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [{ "visibility": "off" }]
        },{
            "featureType": "transit",
            "elementType": "all",
            "stylers": [{ "visibility": "off" }]
        },{
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                { "color": "#46bcec" },
                { "visibility": "on"}
            ]
        },{
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [{ "color": "#c8d7d4" }]
        },{
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [{ "color": "#070707" }]
        },{
            "featureType": "water",
            "elementType": "labels.text.stroke",
            "stylers": [{ "color": "#ffffff" }]
        }
    ]';

    public function mount() {
        $this->mapKey = env("GOOGLE_MAPS_API_KEY");
    }

    public function render() {
        return view('livewire.map');
    }
}
