<div id="search" class="w-full">
    <div class="flex items-center my-6 mx-2 md:mx-10">
        <div class="flex-none mr-1 md:mr-5">
            <label class="font-bold text-zinc-500" for='search-input'>Address:</label>
        </div>
        <div class="flex-1">
            <input type="text" class="w-full border-zinc-500" id="search-input" wire:change="search" wire:model.defer="address" />
        </div>
        <div class="flex-none ml-1 md:ml-5">
            <button type="button" wire:click="search" class="bg-cyan-700 hover:bg-cyan-500 text-white font-bold py-2 px-4 rounded">Search</button>
        </div>
    </div>
</div>

