@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Table</h3>
                        <a href="{{ url('admin/rooms') }}" class="btn btn-warning btn-sm float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/rooms/'.$room->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label><strong>Title</strong></label>
                                <input type="text" name="title" value="{{$room->title}}" class="form-control" required/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label><strong>Type</strong></label>
                                <select name="type" class="form-select">
                                    <option hidden="true">{{$room->type}}</option>
                                    <option value="Couple Room">Couple Room</option>
                                    <option value="Family Room">Family Room</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label><strong>Price</strong></label>
                                <input type="numeric" name="price" value="{{$room->price}}" class="form-control" required/>
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
