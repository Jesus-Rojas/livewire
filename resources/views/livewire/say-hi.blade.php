<div>
    {{-- <input type="text" wire:model="user.name"> --}}

    Hello {{ $user->name }} {{ now() }}

    <button wire:click="$emitUp('foo')">Refresh</button>
    {{-- <button wire:click="$emit('foo')">Refresh</button> --}}
    {{-- <button wire:click="$refresh">Refresh</button> --}}
</div>
