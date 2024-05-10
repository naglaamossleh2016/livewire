<div>
    hello here is the {{ $counter }}
    {{-- <input type="text" wire:model.defer="fullName" style="border: 1px solid #ccc" />
    <input type="submit" wire:click="add" value="send" style="border: 1px solid #ccc" /> --}}
    {{-- <h1>{{ $this->userName }}</h1> --}}
    <button style="border: 1px solid #ccc;padding:10px" wire:click="increament({{ $counter }})">+</button>
    <button style="border: 1px solid #ccc;padding:10px" wire:click="decreament">-</button>
    <button type="button" wire:click="$refresh">
        refresh post
    </button>
</div>
