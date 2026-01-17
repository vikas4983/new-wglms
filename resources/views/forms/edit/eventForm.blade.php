<form id="createGuest" action="{{ route('events.update', $objectData->id) }}" method="post">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="form-group col-lg-3  mt-5">
            <label for="name" class="font-weight-medium">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name"
                placeholder="Enter event name" value="{{ old('name', $objectData->name ?? '') }}" inputmode="\d{30}"
                maxlength="30" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-9  mt-5">
            <label for="description" class="font-weight-medium">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror " id="description"
                name="description" placeholder="Enter event description"
                value="{{ old('description', $objectData->description ?? '') }}" inputmode="\d{30}" maxlength="50">
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group col-lg-3  mt-5">
            <label for="date" class="font-weight-medium">Date</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror " id="date"
                name="date" placeholder="Enter event date" value="{{ old('date', $objectData->date ?? '') }}"
                inputmode="\d{30}" maxlength="30" required>
            @error('date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-3  mt-5">
            <label for="time" class="font-weight-medium">Time</label>
            <input type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="time"
                placeholder="Enter event time"
                value="{{ old('time', \Carbon\Carbon::parse($objectData->time)->format('H:i')) }}" inputmode="\d{30}"
                maxlength="30" required>
            @error('time')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-3  mt-5">
            <label for="icon" class="font-weight-medium">Icon</label>
            <input type="text" class="form-control @error('icon') is-invalid @enderror " id="icon"
                name="icon" placeholder="Enter event icon" value="{{ old('icon', $objectData->icon ?? '') }}"
                inputmode="\d{30}" maxlength="50">
            @error('icon')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group col-lg-3  mt-5">
            <label for="status" class="font-weight-medium">Status</label>
            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                <option value="0", {{ old('status', $objectData->status) == 0 ? 'selected' : '' }} selected>
                    Inactive</option>
                <option value="1", {{ old('status', $objectData->status) == 1 ? 'selected' : '' }}>Active</option>
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
            <button type="submit" id="submitBtn" title="Submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
