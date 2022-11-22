@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Reservation</h3>
                        <a href="{{ url('admin/reservations') }}" class="btn btn-warning btn-sm float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/reservations/'.$reservation->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>First Name</label>
                                <input type="text" name="name" value="{{$reservation->first_name}}" class="form-control" required/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Last Name</label>
                                <input type="text" name="name" value="{{$reservation->last_name}}" class="form-control" required/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Type</label>
                                {{-- <input value="{{ $reservation->type }}" class="form-select" required/> --}}
                                <select name="type" class="form-select">
                                    <option hidden="false">{{ $reservation->type }}</option>
                                    <option value="Cottage">Cottage</option>
                                    <option value="Function Hall">Function Hall</option>
                                    <option value="Table">Table</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Date</label>
                                <input type="date" name="reservation_date" value="{{ $reservation->reservation_date }}" class="form-control" required/>

                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Note</label>
                                <textarea name="note" class="form-control" rows="3">{{ $reservation->message }}</textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-end">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
