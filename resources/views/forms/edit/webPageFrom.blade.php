<form id="createGuest" action="{{ route('webPages.update', $objectdata) }}" method="post">
    @csrf
    @method('PATCH')
    <div class="row display-flex">
        <div class="form-group col-lg-3">
            <label for="name" class="font-weight-medium">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Enter webpage name" value="{{ old('name', $objectdata->name ?? '') }}" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-3">
            <label for="title" class="font-weight-medium">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                name="title" placeholder="Enter your title" value="{{ old('title', $objectdata->title ?? '') }}"
                inputmode="\d{30}" maxlength="30" required>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-3">
            <label for="email" class="font-weight-medium">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                name="email" placeholder="Enter your email" value="{{ old('email', $objectdata->email ?? '') }}"
                inputmode="\d{70}" maxlength="70" required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-3">
            <label for="status" class="font-weight-medium">Status</label>
            <select name="status" class="form-control">
                <option value="0" {{ old('status', $objectdata->status) == 0 ? 'selected' : '' }}>
                    Inactive
                </option>
                <option value="1" {{ old('status', $objectdata->status) == 1 ? 'selected' : '' }}>
                    Active
                </option>
            </select>
            @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group col-lg-4">
            <label for="primary_person" class="font-weight-medium">Primary Person Name</label>
            <input type="text" class="form-control @error('primary_person') is-invalid @enderror" id="primary_person"
                name="primary_person" placeholder="Enter primary person name"
                value="{{ old('primary_person', $objectdata->primary_person ?? '') }}" inputmode="\d{40}"
                maxlength="40">
            @error('primary_person')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-4">
            <label for="primary_contact" class="font-weight-medium">Primary Mobile Number</label>
            <input type="tel" name="primary_contact" placeholder="Enter primary mobile number" maxlength="12"
                inputmode="numeric" pattern="^([0-9]{10}|[0-9]{12})$"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                onkeypress="return event.charCode >= 48 && event.charCode <= 57" required
                class="form-control @error('primary_contact')
is-invalid
@enderror" id="primary_contact"
                name="primary_contact" placeholder="{{ __('labels.guest_primary_contact_placeholder') }}"
                value="{{ old('primary_contact', $objectdata->primary_contact ?? '') }}" required>
            <div class="invalid-feedback"></div>
            @error('primary_contact')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-4">
            <label for="address" class="font-weight-medium">Venue Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                name="address" placeholder="Enter primary person name"
                value="{{ old('address', $objectdata->address ?? '') }}" inputmode="\d{40}" maxlength="40">
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-4">
            <label for="secondary_person" class="font-weight-medium">Secondary Person Name</label>
            <input type="text" class="form-control @error('secondary_person') is-invalid @enderror"
                id="secondary_person" name="secondary_person" placeholder="Enter secondary person name"
                value="{{ old('secondary_person', $objectdata->secondary_person ?? '') }}" inputmode="\d{30}"
                maxlength="30">
            @error('secondary_person')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="form-group col-lg-4">
            <label for="secondary_contact" class="font-weight-medium">Secondary Mobile Number</label>
            <input type="tel" name="secondary_contact" placeholder="Enter secondary mobile number"
                maxlength="12" inputmode="numeric" pattern="^([0-9]{10}|[0-9]{12})$"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                class="form-control @error('secondary_contact')
is-invalid
@enderror" id="secondary_contact"
                name="secondary_contact" placeholder="{{ __('labels.secondary_contact') }}"
                value="{{ old('secondary_contact', $objectdata->secondary_contact ?? '') }}">
            <div class="invalid-feedback"></div>
            @error('secondary_contact')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-3">
            <label for="copyright" class="font-weight-medium">Copyright</label>
            <input type="text" class="form-control @error('copyright') is-invalid @enderror" id="copyright"
                name="copyright" placeholder="Enter your copyright"
                value="{{ old('copyright', $objectdata->copyright ?? '') }}" required>
            @error('copyright')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-lg-6">
            <label for="map" class="font-weight-medium">Google Map</label>
            <input type="text" class="form-control @error('map') is-invalid @enderror" id="map"
                name="map" placeholder="Enter google map url" value="{{ old('map', $objectdata->map ?? '') }}"
                required>
            <small class="form-text text-muted">
                ⚠️ Enter <strong>ONLY Google Maps embed URL</strong> starting with
                <code>https://</code>.<br>
                Example: <code>https://www.google.com/maps/embed?pb=...</code>
            </small>
            @error('map')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group col-lg-6">
            <label for="icon" class="font-weight-medium">Icon Class</label>
            <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon"
                name="icon" placeholder="Enter font awesome icon class"
                value="{{ old('icon', $objectdata->icon ?? '') }}">
            <small class="form-text text-muted">
                ⚠️ Enter the <strong>complete icon HTML</strong> using the <code>&lt;i&gt;</code> tag only.<br>
                Example: <code>&lt;i class="fa fa-heart"&gt;&lt;/i&gt;</code>
            </small>
            @error('icon')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <button type="submit" id="submitBtn" title="{{ __('titles.add_guest') }}"
                class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
