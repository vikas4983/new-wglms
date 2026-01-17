@extends('layouts.main-app')
@section('title', 'Events List')
@section('content')
    <x-breadcrumb-component :home-route="['name' => 'Home', 'url' => route('dashboard')]" :current-route="['name' => 'List', 'url' => null]" class="mb-5" />
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <a href="{{ route('events.create') }}" class="btn btn-info" id="addGuestBtn">Add Event</a>
        </div>
    </div>
    @include('alerts.alert')
    <table class="table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Action</th>
                <th>Event</th>
                <th>Date</th>
                <th>Time</th>
                <th>Description</th>
                <th>Icon</th>

            </tr>
        </thead>
        <tbody>
            @if ($events->count() > 0)
                <div class="row ">
                    <div class="col text-center mb-5" style="color: rgb(10, 207, 233)">
                        <span id="copyData"></span>
                    </div>
                </div>
                @foreach ($events as $index => $event)
                    <tr class="viewData">
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <x-edit-action-component :route="route('events.edit', $event->id)" :objectData="$event" :method="'GET'"
                                    :title="__('labels.event_title')" :modalSize="__('labels.event_edit_modal_size')" />
                                <span class="mx-1"></span>
                                <x-delete-action-component :route="route('events.destroy', $event->id)" />

                            </div>
                        </td>
                        <td>
                            <span>
                                @if ($event->status == 1)
                                    <i class="fas fa-circle text-success"></i>
                                @else
                                    <i class="fas fa-circle text-danger"></i>
                                @endif{{ Str::limit($event->name ?? '', 25) }}
                            </span>

                        </td>
                        <td>
                            {{ $event->date ? \Carbon\Carbon::parse($event->date)->format('d M Y') : '' }}
                        </td>

                        <td>
                            {{ $event->time ? \Carbon\Carbon::parse($event->time)->format('h:i A') : '' }}
                        </td>
                        <td>{{ Str::limit($event->description ?? '', 25) }}</td>
                        <td>{{ Str::limit($event->icon ?? '', 25) }}</td>

                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center text-danger py-3">
                        <h2 style="color: rgb(226, 15, 15)">Data not available</h2>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-5">
        {{ $events->links() }}
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
