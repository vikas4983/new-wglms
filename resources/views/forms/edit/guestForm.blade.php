<form id="updateGuest" action="{{ route('weddings.update', $objectdata->id) }}" method="post">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="name" class="font-weight-medium">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Enter your name" value="{{ $objectdata->name }}"
                inputmode="\d{30}" maxlength="30">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-6">
            <label for="email" class="font-weight-medium">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                name="email" placeholder="Enter your email" value="{{ $objectdata->email }}"
                inputmode="\d{50}" maxlength="50" required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-6">
            <label for="guest_phone" class="font-weight-medium">Phone</label>
            <input type="tel" name="phone" placeholder="Enter your mobile number" maxlength="10"
                                    inputmode="numeric" pattern="[0-9]{10}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57" required
                class="form-control @error('phone')
is-invalid
@enderror" id="phone" name="phone"
                placeholder="{{ __('labels.guest_phone_placeholder') }}" value="{{ $objectdata->phone }}" required>
            <div class="invalid-feedback"></div>
            @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <button type="submit" id="submitBtn" title="{{ __('titles.add_guest') }}"
                class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
