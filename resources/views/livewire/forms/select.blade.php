<div class="p-4 mx-auto max-w-md space-y-4">
  <div>
    <h1>T-shirt size</h1>

    <select wire:model="size">
      <option disabled>Select a size</option>
      <option value="n" selected>None</option>
      <option value="s">Small</option>
      <option value="m">Medium</option>
      <option value="l">Large</option>
    </select>
    <br>
    <p>
      Size: @json($size)
    </p>
  </div>

  <div>
    <h1>Extra Swag</h1>
    <select wire:model="extras" multiple>
      <option value="bag">Bag</option>
      <option value="hat">Hat</option>
      <option value="mug">Mug</option>
      <option value="stickers" selected>Stickers</option>
    </select>
    <br>
    <p>
      Extras: @json($extras)
    </p>
  </div>
</div>
