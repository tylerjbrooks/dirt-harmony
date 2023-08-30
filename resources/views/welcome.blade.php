<x-landing-layout>
    <div class="flex justify-center my-6">
        <div class="basis-2/5 mr-2 md:basis-1/3 md:mr-6">
            <a href="{{route('new-dirt')}}">
                <x-harmony.button class="w-full">I Have Dirt</x-harmony.button>
            </a>
        </div>
        <div class="basis-2/5 mr-2 md:basis-1/3 md:mr-6">
            <a href="{{route('new-dirt')}}">
                <x-harmony.button class="w-full">I Need Dirt</x-harmony.button>
            </a>
        </div>
    </div>

    <div class="flex mt-6 overflow-hidden">
        @livewire('browser')
    </div>
</x-landing-layout>

