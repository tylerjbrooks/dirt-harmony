<x-landing-layout>
    <div class="flex justify-center my-6">
        <a href="{{route('new-dirt')}}" class="basis-1/3">
            <x-harmony.button class="mr-6 w-full">I Have Dirt</x-harmony.button>
        </a>
        <a href="{{route('new-dirt')}}" class="basis-1/3">
            <x-harmony.button class="ml-6 w-full">I Need Dirt</x-harmony.button>
        </a>
    </div>

    <div class="flex mt-6 overflow-hidden">
        @livewire('browser')
    </div>
</x-landing-layout>

