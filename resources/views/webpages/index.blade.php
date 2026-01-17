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
            <a href="{{ route('webPages.create') }}" class="btn btn-info mr-2" id="uploadBtn">
                <span class="guest-inline" title="Add Content">
                    Add
                    <span class="count-circle"> {{ $count['invitationCards'] ?? '0' }}</span>
                </span>
                <a href="#" class="btn btn-info  btn-inline mr-2">
                    <span class="nav-text"><i class="mdi mdi-account-group"></i>
                        <span class="count-circle"> {{ $count['invitationCard_member'] ?? '0' }}</span>
                        </i>
                    </span>
                </a>
                <form id="sendInvitation" style="margin-left: 10px; display:none" action="{{ route('send.invitation') }}"
                    method="post">
                    @csrf
                    <button type="button" id="invitationBtn" disabled class="btn btn-info">
                        INVITATION
                    </button>
                </form>
        </div>
    </div>
    <div class="mt-3">

        @if ($webPages->count() > 0)
            <div class="row">
                @foreach ($webPages as $index => $webPage)
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-white border-0 d-flex justify-content-between align-items-start">
                                <h4 class="font-weight-bold text-success mb-0 pr-3">
                                    Title : {{ $webPage->title }}
                                </h4>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex gap-2">
                                        <x-edit-action-component :route="route('webPages.edit', $webPage->id)" :objectData="$webPage" :method="'GET'"
                                            :title="__('labels.guest_title')" :modalSize="__('labels.guest_edit_modal_size')" />
                                        <span class="mx-1"></span>
                                        <x-delete-action-component :route="route('webPages.destroy', $webPage->id)" />
                                    </div>

                                </div>
                            </div>
                            <div class="card-body p-4">
                                <ul class="list-unstyled mb-4">

                                    <li class="d-flex align-items-start mb-3">
                                        <span class="mr-3">👤</span>
                                        <div>
                                            <small class="text-muted">Primary Person</small><br>
                                            <strong>{{ $webPage->primary_person }}</strong>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-start mb-3">
                                        <span class="mr-3">📞</span>
                                        <div>
                                            <small class="text-muted">Primary Contact</small><br>
                                            <strong>{{ $webPage->primary_contact }}</strong>
                                        </div>
                                    </li>

                                    @if ($webPage->secondary_person)
                                        <li class="d-flex align-items-start mb-3">
                                            <span class="mr-3">👥</span>
                                            <div>
                                                <small class="text-muted">Secondary Person</small><br>
                                                <strong>{{ $webPage->secondary_person }}</strong>
                                            </div>
                                        </li>
                                    @endif

                                    @if ($webPage->secondary_contact)
                                        <li class="d-flex align-items-start mb-3">
                                            <span class="mr-3">📱</span>
                                            <div>
                                                <small class="text-muted">Secondary Contact</small><br>
                                                <strong>{{ $webPage->secondary_contact }}</strong>
                                            </div>
                                        </li>
                                    @endif

                                    <li class="d-flex align-items-start">
                                        <span class="mr-3">✉️</span>
                                        <div>
                                            <small class="text-muted">Email</small><br>
                                            <strong>{{ $webPage->email }}</strong>
                                        </div>
                                    </li>

                                </ul>

                                <div class="border-top pt-3 d-flex justify-content-between align-items-center">
                                    <small class="text-muted">© {{ $webPage->copyright }}</small>
                                    <span class="badge badge-{{ $webPage->status ? 'success' : 'secondary' }}">
                                        {{ $webPage->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <tr>
                <td colspan="8" class="text-center text-danger py-3">
                    <h3 style="color: rgb(0, 0, 0)">Data not available</h3>
                </td>
            </tr>
        @endif
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $webPages->links() }}
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
