@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $room->name ?? old('name') }}" autofocus>

    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i> Save
    </button>
</div>
