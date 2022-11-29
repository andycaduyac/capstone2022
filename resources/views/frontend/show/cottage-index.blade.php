@extends('base')
@section('content')

<div class="container-fluid">
    <div class="row m-5 d-flex justify-content-center">
        @foreach ($cottages as $c)
            <div class="col col-md-3 mx-5">
                <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">
                    <div class="card-body">
                        <p class="card-title">
                            <strong>{{$c->title}}</strong>
                        </p>
                        <p class="card-subtitle">
                            ₱{{$c->price}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>





{{-- @foreach ($function_hall as $fh)
<tr>
    <td>{{$fh->title}}</td>
    <td>{{$fh->price}}</td>
    <td>
        <a href="{{ url('admin/function-hall/'.$fh->id.'/edit') }}" class="btn btn-warning btn-sm my-2"><i class="mdi mdi-lead-pencil"></i></a>
        <a href="#" wire:click="deleteHall({{ $fh->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger btn-sm"><i class=" mdi mdi-delete "></i></a>

    </td>
</tr> --}}
{{-- @endforeach --}}
@endsection
