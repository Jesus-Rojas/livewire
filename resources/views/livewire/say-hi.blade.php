<div>
    {{-- <input type="text" wire:model="user.name"> --}}

    Hello {{ $user->name }} {{ now() }}

    <button wire:click="$refresh">Refresh</button>
</div>
