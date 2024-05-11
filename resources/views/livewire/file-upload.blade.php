<form class="w-50 m-auto mt-4" wire:submit="submit">

    <div class="mb-3">
        <label for="photoUpload" class="form-label">Upload Photo</label>
        <input type="file" class="form-control" id="photoUpload" wire:model="photo">
        @error('photo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        @if ($photo)
            <img src="{{ $photo->temporaryUrl() }}">
        @endif

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
