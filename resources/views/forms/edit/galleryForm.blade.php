<form id="createGuest" action="{{ route('galleries.update', $objectdata->id) }}" method="post">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="name" class="font-weight-medium">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Enter your name" value="{{ old('name', $objectdata->name ?? '') }}" inputmode="\d{30}"
                maxlength="30" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-6">
            <label for="status" class="font-weight-medium">Status</label>
            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                <option value="0"
                    {{ old('status', $objectdata->getRawOriginal('status')) == 0 ? 'selected' : '' }}>Inactive
                </option>
                <option value="1"
                    {{ old('status', $objectdata->getRawOriginal('status')) == 1 ? 'selected' : '' }}>Active</option>
            </select>

            @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <button type="submit" id="submitBtn" title="Add Gallery" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
