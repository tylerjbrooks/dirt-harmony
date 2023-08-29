<div id="search" class="w-full">
    <div class="flex items-center my-6 mx-10">
        <div class="flex-none mr-5">
            <label class="font-bold text-zinc-500" for='search-input'>Adddress:</label>
        </div>
        <div class="flex-1">
            <input type="text" class="w-full border-zinc-500" id="search-input" wire:model.defer="address" />
        </div>
        <div class="flex-none ml-5">
            <button type="button" wire:click="search" class="bg-cyan-700 hover:bg-cyan-500 text-white font-bold py-2 px-4 rounded">Search</button>
        </div>
    </div>
</div>

