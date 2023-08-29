<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class GoogleMapsService {

    private static $key = null;

    private static function getGoogleMapsKey() {
        if (is_null(self::$key)) {
            self::$key = env('GOOGLE_MAPS_API_KEY');
        }
        return self::$key;
    }

    public static function geocode($address) {
        $key = self::getGoogleMapsKey();
        $address = urlencode($address);

        $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$key}";
        $resp = json_decode(file_get_contents($url), true);
        if ($resp['status'] == 'OK') {
            $formatted_address = $resp['results'][0]['formatted_address'] ?? "";
            $lat               = $resp['results'][0]['geometry']['location']['lat'] ?? "";
            $lng               = $resp['results'][0]['geometry']['location']['lng'] ?? "";
            $streetNumber      = null;
            $streetName        = null;
            $city              = null;
            $state             = null;
            $zip               = null;
            if (isset($resp['results'][0]['address_components'])) {
                foreach($resp['results'][0]['address_components'] as $component) {
                    if (isset($component['types'])) {
                        if ($streetNumber && in_array("street_number", $component['types'])) {
                            $streetNumber = $component['long_name'];
                        } else if (!$streetName && in_array("route", $component['types'])) {
                            $streetName = $component['long_name'];
                        } else if (!$city && in_array("locality", $component['types'])) {
                            $city = $component['long_name'];
                        } else if (!$city && in_array("neighborhood", $component['types'])) {
                            $city = $component['long_name'];
                        } else if (!$city && in_array("administrative_area_level_3", $component['types'])) {
                            $city = $component['long_name'];
                        } else if (!$state && in_array("administrative_area_level_1", $component['types'])) {
                            $state = $component['short_name'];
                        } else if (!$zip  && in_array("postal_code", $component['types'])){
                            $zip = $component['long_name'];
                        }
                    }
                }
            }

            if (isset($city) && isset($state)) {
                return [
                    'formatted_address' => $formatted_address, 
                    'lat'               => $lat, 
                    'lng'               => $lng, 
                    'street_number'     => $streetNumber ?? "", 
                    'street_name'       => $streetName   ?? "", 
                    'city'              => $city, 
                    'state'             => $state, 
                    'zip'               => $zip ?? ""
                ];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
