<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\GoogleMapsService;

class Search extends Component
{
    public $address;

    public function search() {
        $res = GoogleMapsService::geocode($this->address);

        $this->dispatchBrowserEvent('updatedMapLocation', [
            'lat' => $res['lat'],
            'lng' => $res['lng'],
        ]);
    }

    public function render() {
        return view('livewire.search');
    }
}
