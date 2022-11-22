@extends('layouts.admin')

@section('content')

<h4>Dashboard</h4>

<div class="row mt-5">
    <div class="col-sm-2 mx-3">
        <div class="card shadow">
            <div class="card-body">

                <div class="d-none d-xl-flex flex-column flex-grow-1 align-items-center justify-content-center">
                    <i class="mdi mdi-calendar-check icon-lg text-primary"></i>
                    <h4>Reservations</h4>
                    <p>{{ $reservations->count() }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-2 mx-3">
        <div class="card shadow">
            <div class="card-body">

                <div class="d-none d-xl-flex flex-column flex-grow-1 align-items-center justify-content-center">
                    <i class="mdi mdi-calendar-check icon-lg text-primary"></i>
                    <h4>Users</h4>
                    <p>{{ $users->count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">

    <h4>Recent</h4>
    <div class="card">

        <div class="card-body">
                <livewire:admin.reservation.index />
        </div>

    </div>
</div>

@endsection
