<div style="background: no-repeat url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/d9e6161a-962f-4986-a8e2-5ae6a53fd317/d4n85cg-2352b9f6-4f2e-4e93-a9da-7086574b37b7.png');height:100vh">
<form class="container text-center form" style="padding-top: 175px;color:white" method="POST">
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nom du pokémon">
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label for="location" class="form-label">Location:</label>
            <input type="text" class="form-control" name="location" id="location" placeholder="Lieu du pokémon">
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
  <label for="hp" class="form-label">HP:</label>
            <input type="number" class="form-control" name="hp" id="hp" min="0" value="0" step="10">
  </div>

  <div class="form-group">
            <label for="type" class="form-label">Type:</label>
            <select name="type" id="type">
                <option value="" disabled>--Select type--</option>
                <option value="fire">Fire</option>
                <option value="water">Water</option>
                <option value="lightning">Lightning</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hasEvolve" class="form-label">HasEvolve:</label>
            <input type="checkbox" class="form-control" name="hasEvolve" id="hasEvolve" >
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Image URL (.png):</label>
            <input type="url" class="form-control" name="image" id="image" pattern="https://.*.png" placeholder="https://example.png">
        </div>
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Créer</button>
</form>
</div>