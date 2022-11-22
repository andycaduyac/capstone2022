<div>
    <div>
        <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Reservation</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent="destroyReservation">
                        <div class="modal-body">
                            Are you sure you want to delete this reservation?
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Yes. Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
    <div>
        <div class="row">
                <div class="col-md-12">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3>Reservations</h3>
                                {{-- <a href="{{ url('admin/reservations/create') }}" class="btn btn-primary btn-sm float-end">Add Reservation</a> --}}
                        </div>

                        <div class="row mx-3 my-3">
                            {{-- <div class="col">
                                <select class="form-select" wire:model.lazy="type">
                                    <option value="all">All</option>
                                    <option value="function_hall">Function Hall</option>
                                    <option value="cottage">Cottage</option>
                                    <option value="table">Table</option>
                                </select>
                            </div> --}}

                            <div class="col">
                                <label for="" class="my-2">Filter by Date</label>
                                <input type="date" value="" class="form-control" placeholder="Select date" wire:model.lazy="date">
                            </div>
                            <div class="col">
                                <label for="" class="my-2">Search</label>
                                <input type="text" class="form-control" placeholder="Search for Name or Type" wire:model.lazy='search'>
                            </div>
                        </div>

                        <div class="card-body">
                            <table class="table table-sm table-hover table-bordered table-striped mb-3">
                                <thead>
                                    <tr>
                                        {{-- <th>ID</th> --}}
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Telephone No.</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Booking Reference</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($reservations as $reservation)
                                        @if ($reservation->verified_at != null)
                                            <tr>
                                                {{-- <td>{{$reservation->id}}</td> --}}
                                                <td>{{$reservation->first_name}} {{$reservation->last_name}}</td>
                                                <td>{{$reservation->email}}</td>
                                                <td>{{$reservation->telephone_no}}</td>
                                                <td>{{$reservation->reservation_date}}</td>
                                                <td>{{$reservation->type}}</td>
                                                <td>JYRS-{{$reservation->remember_token}}</td>
                                                <td>{{$reservation->message}}</td>
                                                <td>
                                                    {{-- <a href="{{ url('admin/reservations/'.$reservation->id.'/edit') }}" class="btn btn-warning btn-sm my-2"><i class="mdi mdi-lead-pencil"></i></a> --}}
                                                    <a href="#" wire:click="deleteReservation({{ $reservation->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger btn-sm"><i class=" mdi mdi-delete "></i></a>

                                                </td>
                                            </tr>
                                        @endif

                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $reservations->links() }}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@push('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#deleteModal').modal('hide');
        });
    </script>


@endpush
