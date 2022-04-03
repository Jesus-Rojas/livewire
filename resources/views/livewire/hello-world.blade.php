<div>
    <input type="text" wire:model="name">
    
    Hello {{ $name }}

    <br>

    Custom: {{ json_encode($hooksCustom) }}

</div>
