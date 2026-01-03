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
                            <i class="mdi mdi-label text-success"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block text-white">{{ $count['invited'] ?? '' }}</span>
                            <p class="text-white">Invited Guests</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Third box -->
        
        <!-- Fourth box -->

    </div>

@endsection
