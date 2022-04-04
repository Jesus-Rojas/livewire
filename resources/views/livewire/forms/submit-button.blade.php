<div class="p-4 mx-auto max-w-md space-y-4">
  <div class="space-y-4">
    <h1>Forms and Submit Buttons</h1>
    <form action="/articles/create" method="POST" >
      <label>
        Title
        <input type="text" name="title">
      </label>
      <button class="mt-4" type="submit">Create Article</button>
      </form>
  </div>

  <div class="space-y-4">
    <h1>Action Buttons</h1>
    <form action="/file/download" method="POST">
      @csrf
      <button type="submit">Download File</button>
      </form>
  </div>
</div>