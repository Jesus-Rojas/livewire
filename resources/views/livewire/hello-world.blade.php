<div>
    <input type="text" wire:model="name">
    <input type="checkbox" wire:model="loud">
    <select wire:model="greeting" multiple> 
        <option>Hello</option>
        <option>Good Bye</option>
        <option>See you</option>
    </select>
    {{ implode(', ', $greeting) }} {{ $name }} @if($loud) ! @endif
</div>
