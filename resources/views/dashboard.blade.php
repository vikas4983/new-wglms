@extends('layouts.main-app')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <!-- Frist box -->
        <div class="col-xl-3 col-md-6">
            <a href="{{ route('weddings.index') }}">
                <div class="card card-default bg-secondary">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-white rounded-circle mr-3">
                            <i class="mdi mdi-shape text-secondary"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block text-white">{{ $count['total_guests'] ?? '' }}</span>
                            <p class="text-white">Guests</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Second box -->
        <div class="col-xl-3 col-md-6">
            <a href="{{ route('invited.guests') }}">
                <div class="card card-default bg-success">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-white rounded-circle mr-3">
                            <i class="mdi mdi-email-check text-success"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block text-white">{{ $count['invited'] ?? '' }}</span>
                            <p class="text-white">Invited Guests</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="{{ route('invited.guests') }}">
                <div class="card card-default bg-primary">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-white rounded-circle mr-3">
                            <i class="mdi mdi-email-check text-success"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block text-white">{{ $count['invitationCards'] ?? '' }}</span>
                            <p class="text-white">Physically Invited </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="{{ route('webPages.index') }}">
                <div class="card card-default bg-info">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-white rounded-circle mr-3">
                            <i class="mdi mdi-content-copy text-info"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block text-white">{{ $count['webpages'] ?? '' }}</span>
                            <p class="text-white">Webpages </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="{{ route('events.index') }}">
                <div class="card card-default bg-secondary">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-white rounded-circle mr-3">
                            <i class="mdi mdi-label text-secondary"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block text-white">{{ $count['events'] ?? '' }}</span>
                            <p class="text-white">Events </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="{{ route('galleries.index') }}">
                <div class="card card-default bg-success">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-white rounded-circle mr-3">
                            <i class="mdi mdi-vector-intersection text-success"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block text-white">{{ $count['galleries'] ?? '' }}</span>
                            <p class="text-white">Gallery Types </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="{{ route('images.index') }}">
                <div class="card card-default bg-primary">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-white rounded-circle mr-3">
                            <i class="mdi mdi-image-outline text-primary"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block text-white">{{ $count['images'] ?? '' }}</span>
                            <p class="text-white">Images </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Third box -->
        
        <!-- Fourth box -->

    </div>

@endsection
