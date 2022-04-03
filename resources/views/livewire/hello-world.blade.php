<div>
    @foreach ($users as $user)
        <div>
            @livewire('say-hi', ['user' => $user], key($user->id))
            <br>
            <button wire:click="removeUser({{ $user->id }})">Remove</button>
        </div>
    @endforeach

    <hr>

    {{ now() }}

    <button wire:click="$refresh">Refresh</button>

    <hr>

    Test Eloquent: {{ json_encode($customEloquent) }}
</div>
