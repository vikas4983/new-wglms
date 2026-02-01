@extends('layouts.main-app')
@section('title', 'Add - Purpose')
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
    <x-breadcrumb-component :home-route="['name' => 'Home', 'url' => route('dashboard')]" :parent-route="['name' => 'Purposes', 'url' => route('purposes.index')]" :current-route="['name' => 'Create', 'url' => null]" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-body">
                    @include('alerts.alert')
                    <div class="text-center mb-5">
                        <h3>Add Purpose</h3>
                    </div>
                    <form id="createGuest" action="{{ route('purposes.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label for="name" class="font-weight-medium">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}"
                                    required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="icon" class="font-weight-medium">Icon</label>
                                <input type="text" class="form-control @error('icon') is-invalid @enderror"
                                    id="icon" name="icon" placeholder="Enter only font awesome class"
                                    value="{{ old('icon') }}">
                                <small class="form-text text-muted">
                                    Example: <strong>fa fa-heart</strong>
                                </small>
                                @error('icon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="title" class="font-weight-medium">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" placeholder="Enter title"
                                    value="{{ old('title') }}">
                               
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
<div class="form-group col-lg-3">
                                <label for="status" class="font-weight-medium">Status </label>
                               <select name="status" class="form-control" id="status">
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                               </select>
                                @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>                            

                            <div class="form-group col-lg-6">
                                <label for="description" class="font-weight-medium">Descriptions </label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    value="{{ old('description') }}" style="height:80px">Enter Purpose Descriptions</textarea>
                                @error('description')
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
    </div>
  
@endsection
