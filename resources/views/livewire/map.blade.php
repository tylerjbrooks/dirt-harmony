<div 
    wire:ignore 
    class="{{ $mapDivClass }}"
    style="{{ $mapDivStyle }}"
    id="map">
</div>

@push('scripts')
<script>
    (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
        key:@js($mapKey),
        v:   @js($mapVersion),
        // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
        // Add other bootstrap parameters as needed, using camel case.
    });

    let map;
    async function initMap() {
        const { Map } = await google.maps.importLibrary("maps");

        map = new Map(document.getElementById("map"), {
            zoom: @js($mapZoom),
            center: { lat: @js( $mapLat ), lng: @js( $mapLng ) },
            streetViewControl: false,
            mapTypeControl: false,
        });
        map.mapTypes.set(
            @js($mapId), 
            new google.maps.StyledMapType(JSON.parse(@js($mapStyle)), { name: @js($mapId) })
        );
        map.setMapTypeId(@js($mapId));
    }

    document.addEventListener('livewire:load', function () { 
        initMap();
    });
</script>
@endpush

