@extends('layouts.main-app')
@section('title', 'Invitation List')
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
            <a href="{{ route('invitationCards.create') }}" class="btn btn-info mr-2" id="uploadBtn">
                <span class="nav-text"><span class="guest-inline" title="Add Guest">
                        Add
                        <span class="count-circle"> {{ $count['invitationCards'] ?? '0' }}</span>
                    </span>
                    <a href="#" class="btn btn-info  btn-inline mr-2">
                        <span class="nav-text"><i class="mdi mdi-account-group"></i>
                            <span class="count-circle"> {{ $count['invitationCard_member'] ?? '0' }}</span>
                            </i>
                        </span>
                    </a>
                    <form id="sendInvitation" style="margin-left: 10px; display:none"
                        action="{{ route('send.invitation') }}" method="post">
                        @csrf
                        <button type="button" id="invitationBtn" disabled class="btn btn-info">
                            INVITATION
                        </button>
                    </form>
        </div>
        <div class="input-group" style="max-width:255px;">
            <form action="{{ route('filter.keyword') }}" method="get" class="d-flex w-100">
                <input type="hidden" name="url" value="{{ $url ?? '' }}">
                <input type="text" class="form-control" name="keyword" placeholder="Name, Mobile, Email..."
                    autocomplete="off">
                <button class="input-group-text">
                    Search
                </button>
            </form>
        </div>
    </div>
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>
                    <div class="d-flex align-items-center gap-2">
                        <input type="checkbox" class="allCb" id="allCb"> &nbsp;
                        <span>NAME</span>
                    </div>
                </th>

                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>

            </tr>
        </thead>
        <div class="text-center">
            <span id="copyData" style="color: rgb(30, 9, 218)"></span>
        </div>
        <tbody>
            @if ($guests->count() > 0)
                @foreach ($guests as $index => $guest)
                    <tr class="viewData">
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" class="allCb  singleCb" value="{{ $guest->id }}" name="id[]">
                                &nbsp;
                                <span>{{ $guest->name }}</span>
                            </div>
                        </td>
                        <td>
                            <a href="tel:{{ $guest->phone }}" style="text-decoration: none; color: inherit;">
                                {{ $guest->phone }}
                            </a>

                        </td>
                        <td>
                            <a href="mailto:{{ $guest->email }}" style="text-decoration: none; color: inherit;">
                                {{ $guest->email }}
                            </a>

                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <x-edit-action-component :route="route('invitationCards.edit', $guest->id)" :objectData="$guest" :method="'GET'"
                                    :title="__('labels.guest_title')" :modalSize="__('labels.guest_edit_modal_size')" />
                                <span class="mx-1"></span>
                                <x-delete-action-component :route="route('invitationCards.destroy', $guest->id)" />

                            </div>
                        </td>

                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center text-danger py-3">
                        <h3 style="color: rgb(0, 0, 0)">Data not available</h3>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{ $guests->links() }}
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
