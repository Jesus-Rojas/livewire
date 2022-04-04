<div>
  <h1>Grouped Checboxes</h1>
  
  <label>
    {{-- El model de livewire omite los atributos de checked, importante dejar como array la propiedad --}}
    <input wire:model="hobbies" value="coding" type="checkbox" />
    Coding
  </label>

  <label>
    <input wire:model="hobbies" value="sailing" type="checkbox" />
    Sailing
  </label>

  <label>
    <input wire:model="hobbies" value="camping" type="checkbox" />
    Camping
  </label>
  <br>

  <p>
    Hobbies: {{ var_export($hobbies) }}
  </p>
  
</div>
