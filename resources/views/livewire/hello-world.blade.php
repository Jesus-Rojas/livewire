<div>
    @foreach ($users as $user)
        <div>
            @livewire('say-hi', ['user' => $user], key($user->id))
        </div>
    @endforeach

    <hr>

    {{ now() }}

    <button wire:click="$emit('foo')">Refresh Children</button>
    {{-- <button wire:click="refreshChildren">Refresh Children</button> --}}
</div>
