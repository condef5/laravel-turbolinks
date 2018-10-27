{{ csrf_field() }}

<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $anime->name) }}" required>
</div>

<div class="form-group">
    <label for="year">Year:</label>
    <input type="text" class="form-control" id="year" name="year" value="{{ old('year', $anime->year) }}" required>
</div>

<div class="form-group">
    <label for="gender">Gender:</label>
    <input type="text" class="form-control" id="gender" name="gender" value="{{ old('gender', $anime->gender) }}" required>
</div>

<div class="form-group">
    <label for="url">Image:</label>
    <input type="url" class="form-control" id="image" name="image" value="{{ old('image', $anime->image) }}" required>
</div>

<div class="form-group text-right">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>

@include('partials.errors')