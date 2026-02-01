@extends('layouts.main-app')
@section('title', 'Purpose - List')
@section('content')
    <style>
        .round {
            display: inline-block;
            vertical-align: middle;
        }

        .circle {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 6px;
            /* space before text */
        }

        .green {
            background-color: #28a745;
        }

        .red {
            background-color: #fc0000;
        }
    </style>
    <x-breadcrumb-component :home-route="['name' => 'Home', 'url' => route('dashboard')]" :current-route="['name' => 'List', 'url' => null]" class="mb-5" />
    @include('alerts.alert')
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="{{ route('purposes.create') }}" class="btn btn-info mr-2" id="uploadBtn">
                <span class="purpose-inline" title="Add purpose">
                    Add
                    <span class="count-circle"> {{ $count['purposes'] ?? '0' }}</span>
                </span>
            </a>
        </div>
    </div>
    <table style="width:100%" class="table table-striped mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Name </th>
                <th>Icon</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($purposes->count() > 0)
                @foreach ($purposes as $index => $purpose)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            @if (isset($purpose) && $purpose->status == 1)
                                <i class="round circle green"></i>
                            @else
                                <i class="round circle red"></i>
                            @endif
                            {{ $purpose->name }}
                        </td>
                        <td>
                            <i class="{{ $purpose?->icon ?? '' }}"></i> {{ $purpose->icon }}
                        </td>
                        <td>{{ $purpose->description }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <x-edit-action-component :route="route('purposes.edit', $purpose->id)" :objectData="$purpose" :method="'GET'"
                                    :title="__('labels.purpose_title')" :modalSize="__('labels.purpose_edit_modal_size')" />
                                <span class="mx-1"></span>
                                <x-delete-action-component :route="route('purposes.destroy', $purpose->id)" />
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
        {{ $purposes->links() }}
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
