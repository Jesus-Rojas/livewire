<div>
  <h1>Question?</h1>
  
  <label>
    <input wire:model="answer" value="yes" type="radio" />
    Yes
  </label>

  <label>
    <input wire:model="answer" value="no" type="radio" />
    No
  </label>
  <br>

  <p>
    Answer: {{ var_export($answer) }}
  </p>
  
</div>
