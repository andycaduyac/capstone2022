<div>
    <div>
        <div>
            <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Table</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form wire:submit.prevent="destroyBooking">
                            <div class="modal-body">
                                Are you sure you want to delete this booking?
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
                                <h3>Bookings</h3>
                                    <a href="{{ url('admin/bookings/create') }}" class="btn btn-primary btn-sm float-end">Add Booking</a>
                            </div>

                            <div class="row mx-3 my-3">

                            <div class="card-body">
                                <table class="table table-sm table-hover table-bordered table-striped mb-3">
                                    <thead>
                                        <tr>
                                            {{-- <th>ID</th> --}}
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Book Date</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{-- {{ $tables->links() }} --}}
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
</div>
