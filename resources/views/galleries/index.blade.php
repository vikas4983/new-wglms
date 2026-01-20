@extends('layouts.main-app')
@section('title', 'Gallery List')
@section('content')
    <style>
        .btn-inline {
            display: inline-flex !important;
            align-items: center;
            width: auto !important;
            padding: 4px 8px;
            /* 👈 reduce padding */
            white-space: nowrap;
        }

        .guest-inline {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            white-space: nowrap;
        }

        .count-circle {
            background-color: #28A745;
            /* green */
            color: #fff;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
            line-height: 1;
        }
    </style>
    <x-breadcrumb-component :home-route="['name' => 'Home', 'url' => route('dashboard')]" :current-route="['name' => 'List', 'url' => null]" class="mb-5" />
    @include('alerts.alert')
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="{{ route('galleries.create') }}" class="btn btn-info mr-2" id="uploadBtn">
                <span class="guest-inline" title="Add Guest">
                    Add
                    <span class="count-circle"> {{ $count['galleries'] ?? '0' }}</span>
                </span>
                
                </a>

        </div>

    </div>
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>
                    <div class="d-flex align-items-center gap-2">
                        <span>NAME</span>
                    </div>
                </th>
                <th>Status</th>
                <th>Action</th>

            </tr>
        </thead>

        <tbody>
            @if ($galleries->count() > 0)
                @foreach ($galleries as $index => $gallery)
                    <tr class="viewData">
                        <td>{{ $index + 1 }}</td>
                        <td>
                            {{ $gallery->name }}
                       </td>
                        <td>
                            {{ $gallery->status }}
                            
                        </td>

                        <td>
                            <div class="d-flex gap-2">
                                <x-edit-action-component :route="route('galleries.edit', $gallery->id)" :objectData="$gallery" :method="'GET'"
                                    :title="__('labels.guest_title')" :modalSize="__('labels.guest_edit_modal_size')" />
                                <span class="mx-1"></span>
                                <x-delete-action-component :route="route('galleries.destroy', $gallery->id)" />

                            </div>
                        </td>

                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8" class="text-center text-danger py-3">
                        <h3 style="color: rgb(0, 0, 0)">Data not available</h3>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{ $galleries->links() }}
    </div>
    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}", "Success");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}", "Error");
        @endif

        @if (session('warning'))
            toastr.warning("{{ session('warning') }}", "Warning");
        @endif

        @if (session('info'))
            toastr.info("{{ session('info') }}", "Info");
        @endif
    </script>
@endsection
