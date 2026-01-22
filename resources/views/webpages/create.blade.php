@extends('layouts.main-app')
@section('title', 'Webpage Content')
@section('content')
    <style>
        #guestsTable.table-hover tbody tr:hover {
            background-color: #F2F2F2 !important;
        }

        #guestsTable.table-hover tbody tr:hover td {
            color: #000000 !important;
            font-weight: 600 !important;
            text-decoration: none !important;
        }
    </style>
    <x-breadcrumb-component :home-route="['name' => 'Home', 'url' => route('dashboard')]" :parent-route="['name' => 'Contents', 'url' => route('webPages.index')]" :current-route="['name' => 'Create', 'url' => null]" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-body">
                    @include('alerts.alert')
                    <div class="text-center mb-5">
                        <h3>Add Content</h3>
                    </div>
                    <form id="createGuest" action="{{ route('webPages.store') }}" method="post">
                        @csrf
                        <div class="row display-flex">
                            <div class="form-group col-lg-3">
                                <label for="name" class="font-weight-medium">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Enter web page name"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="title" class="font-weight-medium">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" placeholder="Enter your title" value="{{ old('title') }}"
                                    inputmode="\d{30}" maxlength="30" required>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="email" class="font-weight-medium">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}"
                                    inputmode="\d{50}" maxlength="50" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="status" class="font-weight-medium">Status</label>

                                <select name="status" id="status"
                                    class="form-control @error('status') is-invalid @enderror" required>
                                    <option value="0" selected>Inactive</option>
                                    <option value="1">Active</option>
                                </select>

                                @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="primary_person" class="font-weight-medium">Primary Person Name</label>
                                <input type="text" class="form-control @error('primary_person') is-invalid @enderror"
                                    id="primary_person" name="primary_person" placeholder="Enter primary person name"
                                    value="{{ old('primary_person') }}" inputmode="\d{30}" maxlength="30">
                                @error('primary_person')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="primary_contact" class="font-weight-medium">Primary Mobile Number</label>
                                <input type="tel" name="primary_contact" placeholder="Enter primary mobile number"
                                    maxlength="10" inputmode="numeric" pattern="^([0-9]{10})$"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57" required
                                    class="form-control @error('primary_contact')
is-invalid
@enderror" id="primary_contact"
                                    name="primary_contact"
                                    placeholder="{{ __('labels.guest_primary_contact_placeholder') }}"
                                    value="{{ old('primary_contact') }}" required>
                                <div class="invalid-feedback"></div>
                                @error('primary_contact')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="address" class="font-weight-medium">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="address" name="address" placeholder="Enter venue address"
                                    value="{{ old('address') }}" required>
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
                                    value="{{ old('primary_person') }}" inputmode="\d{30}" maxlength="30">
                                @error('secondary_person')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group col-lg-4">
                                <label for="secondary_contact" class="font-weight-medium">Secondary Mobile Number</label>
                                <input type="tel" name="secondary_contact"
                                    placeholder="Enter secondary mobile number" maxlength="10" inputmode="numeric"
                                    pattern="^([0-9]{10})$" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                    class="form-control @error('secondary_contact')
is-invalid
@enderror"
                                    id="secondary_contact" name="secondary_contact"
                                    placeholder="{{ __('labels.secondary_contact') }}"
                                    value="{{ old('secondary_contact') }}">
                                <div class="invalid-feedback"></div>
                                @error('secondary_contact')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="copyright" class="font-weight-medium">Copyright</label>
                                <input type="text" class="form-control @error('copyright') is-invalid @enderror"
                                    id="copyright" name="copyright" placeholder="Enter your copyright"
                                    value="{{ old('copyright') }}" required>
                                @error('copyright')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="map" class="font-weight-medium">Google Map</label>
                                <input type="text" class="form-control @error('map') is-invalid @enderror"
                                    id="map" name="map" placeholder="Enter google map url"
                                    value="{{ old('map') }}" required>
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
                                <label for="icon" class="font-weight-medium">Icon</label>
                                <input type="text" class="form-control @error('icon') is-invalid @enderror"
                                    id="icon" name="icon" placeholder="Enter font awesome class"
                                    value="{{ old('icon') }}">
                                <small class="form-text text-muted">
                                    ⚠️ Enter the <strong>complete icon HTML</strong> using the <code>&lt;i&gt;</code> tag
                                    only.<br>
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
                    <div id="success_message" style="color:green;margin-top:10px;"></div>
                </div>
            </div>
        </div>


        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('#createGuest');

                function showError(input, message) {
                    if (!input) return;
                    input.classList.add('is-invalid');
                    const fb = input.closest('.form-group')?.querySelector('.invalid-feedback');
                    if (fb) fb.textContent = message;
                }

                function clearErrors() {
                    form.querySelectorAll('.is-invalid').forEach(i => i.classList.remove('is-invalid'));
                    form.querySelectorAll('.invalid-feedback').forEach(fb => fb.textContent = '');
                }

                form.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    clearErrors();

                    const formData = new FormData(form);

                    try {
                        const response = await fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json'
                            },
                            body: formData
                        });

                       
                        if (response.status === 422) {
                            const payload = await response.json(); 
                            const errors = payload.errors || {};
                            for (const key in errors) {
                                const input = form.querySelector(`[name="${key}"]`);
                                if (input) showError(input, errors[key][0]);
                            }
                            // optional: focus first invalid field
                            const firstInvalid = form.querySelector('.is-invalid');
                            if (firstInvalid) firstInvalid.focus();
                            return; 
                        }

                        if (!response.ok) {
                            // other http errors
                            const txt = await response.text();
                            throw new Error(txt || 'Network response was not ok');
                        }

                        // success
                        const data = await response.json();
                        toastr.success(data.message || 'Success', 'Success');
                        form.reset();

                    } catch (err) {
                        // network/unexpected errors
                        if (err instanceof Error) {
                            toastr.error(err.message || 'Something went wrong', 'Failed');
                        } else {
                            // unlikely here, but keep fallback
                            toastr.error('Unexpected error', 'Failed');
                        }
                    }
                });
            });
        </script> --}}



    </div>
@endsection
