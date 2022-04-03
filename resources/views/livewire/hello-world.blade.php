<div>
    <input type="text" wire:model="name">
    <input type="checkbox" wire:model="loud">
    <select wire:model="greeting" multiple> 
        <option>Hello</option>
        <option>Good Bye</option>
        <option>See you</option>
    </select>

    {{ implode(', ', $greeting) }} {{ $name }} @if($loud) ! @endif

    <form action="#" wire:submit.prevent="$set('name', 'Bingo')">
        {{-- <form action="#" wire:submit.prevent="resetName(Rojas)"> --}}
        <button>Reset Name</button>
        {{-- <button wire:click="resetName($event.target.innerText)">Reset Name</button> --}}
    </form>

</div>
