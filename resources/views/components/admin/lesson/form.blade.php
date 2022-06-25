@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $lesson->name ?? old('name') }}">

    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="rooms">Rooms</label>
    <select name="rooms[]" id="rooms" class="form-control @error('rooms') is-invalid @enderror" multiple>
        @php
        if($lesson) $rIds = $lesson->rooms->pluck('id')->toArray();
        @endphp

        @foreach ($rooms as $room)
        <option value="{{ $room->id }}" @if(in_array($room->id, $rIds)) selected @endif>
            {{ $room->name }}
        </option>
        @endforeach
    </select>

    @error('rooms')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="custom-file mb-3">
    <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input @error('thumbnail') is-invalid @enderror">
    <label for="thumbnail" class="custom-file-label">Thumbnail</label>

    @error('thumbnail')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control">{{ $lesson->description ?? old('description') }}</textarea>

    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i> Save
    </button>
</div>

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
@endpush

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

<script>
    $('#rooms').chosen();
</script>
@endpush
