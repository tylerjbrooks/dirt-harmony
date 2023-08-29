<div id='browser' class='w-full'>
    <div class="border-b-2 border-zinc-100">
        @livewire('search')
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4">
        <div class="col-span-1 md:border-r-2 md:border-zinc-100 md:col-span-3">
            @livewire('map')
        </div>
        <div class="col-span-1 min-[50px]:max-md:border-t-2 min-[50px]:max-md:border-zinc-100">
            @livewire('tally')
        </div>
    </div>
</div>
