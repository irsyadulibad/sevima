@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $item->name ?? old('name') }}" autofocus>

    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="video_url">Video URL (Youtube)</label>
    <input type="text" class="form-control @error('video_url') is-invalid @enderror" id="video_url" name="video_url" value="{{ $item->video_url ?? old('video_url') }}" placeholder="">

    @error('video_url')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="text_material">Material Text</label>
    <textarea name="text_material" id="text_material" class="form-control @error('text_material') is-invalid @enderror">{{ $item->text_material ?? old('video_url') }}</textarea>

    @error('text_material')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i> Save
    </button>
</div>

@push('style')
<style>
    .ck-editor__editable {
        min-height: 250px;
    }
</style>
@endpush

@push('script')
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    const editor = document.querySelector('#text_material');;
    ClassicEditor.create(editor, {
        height: 20,
        toolbar: ['undo', 'redo', '|', 'heading', 'bold', 'italic', 'link', '|', 'bulletedList', 'numberedList']
    });
</script>
@endpush
