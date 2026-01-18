@extends('layouts.main-app')
@section('title', 'Images')

@section('content')

    <style>
        /* Image wrapper */
        .image-wrapper {
            position: relative;
            overflow: hidden;
        }

        /* Center action buttons */
        .image-actions-banner {
            position: absolute;
            top: 93%;
            left: 53%;
            transform: translate(-50%, -50%);
            z-index: 10;
            display: flex;
            gap: 8px;
        }

        .image-actions-gallery {
            position: absolute;
            top: 88%;
            left: 53%;
            transform: translate(-50%, -50%);
            z-index: 10;
            display: flex;
            gap: 8px;
        }

        /* Image heading */
        .image-heading {
            position: absolute;
            top: 1px;
            left: 1px;
            background: rgba(0, 0, 0, 0.65);
            color: #fff;
            padding: 1px 4px;
            font-size: 7px;
            font-weight: 600;
            border-radius: 4px;
            text-transform: uppercase;
            z-index: 10;
        }

        .count-circle {
            background-color: #28A745;
            color: #fff;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
    <x-breadcrumb-component :home-route="['name' => 'Home', 'url' => route('dashboard')]" :current-route="['name' => 'Images', 'url' => null]" class="mb-4" />
    @include('alerts.alert')
    <!-- Top button -->
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('images.create') }}" class="btn btn-info">
            Add Image
            <span class="count-circle">{{ $count['invitationCards'] ?? 0 }}</span>
        </a>
    </div>
    <!-- Gallery Layout -->
    <div class="row">
        <!-- LEFT: Gallery thumbnails -->
        <div class="col-lg-6">
            <div class="text-center ">
                <button class="btn btn-info">Galleries</button>
            </div>
            <div class="row no-gutters">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-3 col-md-4 col-sm-6 px-1 mb-2">
                        <div class="card h-100">
                            <div class="image-heading">{{ $gallery->gallery_type ?? '' }}</div>
                            <div class="image-wrapper">
                                <!-- Centered actions -->
                                <div class="image-actions-gallery">
                                    <x-delete-action-component :route="route('images.destroy', $gallery->id)" />
                                </div>

                                <!-- Image -->
                                <img class="card-img-top" src="{{ asset('storage/' . $gallery->path) }}"
                                    alt="Gallery Image">
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-left mt-4">
                {{ $galleries->links() }}
            </div>
        </div>
        <!-- RIGHT: Banner images -->
        <div class="col-lg-6">
            <div class="text-center ">
                <button class="btn btn-info">Banners</button>
            </div>
            <div class="row no-gutters">
                @foreach ($banners as $banner)
                    <div class="col-lg-6 px-1 mb-2">
                        <div class="card h-100">
                            <div class="image-wrapper">
                                <!-- Centered actions -->
                                <div class="image-actions-banner">
                                    <x-delete-action-component :route="route('images.destroy', $banner->id)" />
                                </div>
                                <img class="card-img-top" src="{{ asset('storage/' . $banner->path) }}" alt="Banner Image">
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-4">
                    {{ $banners->links() }}
                </div>
            </div>
        </div>

    </div>

    <!-- Pagination -->


@endsection
