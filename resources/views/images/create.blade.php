@extends('layouts.main-app')
@section('title', 'Upload Image')
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
    <x-breadcrumb-component :home-route="['name' => 'Home', 'url' => route('dashboard')]" :parent-route="['name' => 'Images', 'url' => route('images.index')]" :current-route="['name' => 'Create', 'url' => null]" />
    @include('alerts.alert')
    <div class="row">
        <div class="form-group col-lg-6 mt-5">
            <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="banner" class="font-weight-medium">
                    Upload Banner <small class="text-muted">(1280 × 893)</small>
                </label>

                <input type="file" class="form-control @error('banner') is-invalid @enderror col-lg-6" id="banner"
                    name="banner" required>

                <small class="form-text text-muted">
                    Recommended size: <strong>1280 × 893 pixels</strong>
                </small>
                @error('banner')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary mt-3">Upload</button>
            </form>
        </div>

        <div class="form-group col-lg-6 mt-5">
            <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="gallery" class="font-weight-medium">
                    Upload Gallery <small class="text-muted">(640 × 426)</small>
                </label>

                <input type="file" class="form-control @error('gallery') is-invalid @enderror col-lg-6" id="gallery"
                    name="gallery" required>

                <small class="form-text text-muted">
                    Recommended size: <strong>640 × 426 pixels</strong>
                </small>

                @error('gallery')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-group mt-5">
                    <label for="gallery_type" class="font-weight-medium">
                        Select Gallery Type
                    </label>

                    <select name="gallery_type" id="gallery_type" class="form-control col-lg-6" required>
                        <option value="" disabled selected>Choose type</option>
                        <option value="couple">Couple</option>
                        <option value="groom">Groom</option>
                        <option value="bride">Bride</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Upload</button>
            </form>
        </div>
    </div>

@endsection
