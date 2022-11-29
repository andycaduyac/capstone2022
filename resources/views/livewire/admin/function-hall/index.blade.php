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
                        <form wire:submit.prevent="destroyHall">
                            <div class="modal-body">
                                Are you sure you want to delete this table?
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
                                <h3>Table</h3>
                                    <a href="{{ url('admin/function-hall/create') }}" class="btn btn-primary btn-sm float-end">Add Function Hall</a>
                            </div>

                            <div class="row mx-3 my-3">

                            <div class="card-body">
                                <table class="table table-sm table-hover table-bordered table-striped mb-3">
                                    <thead>
                                        <tr>
                                            {{-- <th>ID</th> --}}
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($function_hall as $fh)
                                                <tr>
                                                    {{-- <td>{{$reservation->id}}</td> --}}
                                                    <td>{{$fh->title}}</td>
                                                    <td>{{$fh->price}}</td>
                                                    <td>
                                                        <a href="{{ url('admin/function-hall/'.$fh->id.'/edit') }}" class="btn btn-warning btn-sm my-2"><i class="mdi mdi-lead-pencil"></i></a>
                                                        <a href="#" wire:click="deleteHall({{ $fh->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger btn-sm"><i class=" mdi mdi-delete "></i></a>

                                                    </td>
                                                </tr>
                                        @endforeach
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
