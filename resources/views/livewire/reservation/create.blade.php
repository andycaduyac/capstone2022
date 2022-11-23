<div>
    <div>
        <div wire:ignore.self class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent="destroyReservation">
                        <div class="modal-body">
                            Please check your email for confirmation.
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--  --}}
    <div class="container-fluid">
        <div class="container-fluid mt-3">
            <h1 class="display-5"> <strong> Guest Details </strong> </h1>
            <p class="text-muted"> &nbsp; &nbsp; Please fill in the following to proceed: </p>
        </div>
        <div class="container-fluid mt-3">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12">
                    @if (session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <form action="{{ url('/make-reservation') }}" method="POST">
                        @csrf

                        <div class="card mb-5">
                            <div class="card-body">
                                <form class="mt-4">
                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-4">

                                            <label class="form-label text-dark" for="firstName">First Name*</label>
                                            <input type="text" name="first_name" id="firstName" class="form-control form-control-lg" required />

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <label class="form-label text-dark" for="lastName">Last Name*</label>
                                            <input type="text" name="last_name" id="lastName" class="form-control form-control-lg" required />

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <label class="form-label text-dark" for="emailAddress">Email Address*</label>
                                            <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" required />

                                        </div>
                                        <div class="col-md-6 pb-2">

                                            <label class="form-label text-dark" for="phoneNumber">Phone Number*</label>
                                            <input type="number" name="telephone_no" id="phoneNumber" class="form-control form-control-lg" placeholder="09XXXXXXXXX" pattern="[0-9]{11}" required />

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-4 pb-2">
                                            <label class="form-label text-dark" for="date">Date</label>
                                            <input type="text" name="reservation_date" id="picker" class="form-control form-control-lg" placeholder="Select Date">
                                        </div>

                                        <div class="col-md-6 mb-4 pb-2">
                                            <label class="form-label text-dark">Type</label>
                                            <select name="type" class="form-select form-control-lg">
                                                <option hidden="true">Select Type</option>
                                                <option selected disabled>Select Type</option>
                                                <option value="Cottage">Cottage</option>
                                                <option value="Function Hall">Function Hall</option>
                                                <option value="Table">Table</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label text-dark">Message</label>
                                        <textarea name='message' class="form-control" rows="5"></textarea>
                                    </div>

                                    <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg float-end" type="submit" value="Proceed" />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card {
        min-height: 60vh;
    }
</style>
@push('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#deleteModal').modal('hide');
        });
    </script>

    <script>
        $('#picker').datetimepicker({
            datepicker:true,
            timepicker: false,
            format: 'Y-m-d',
            value: new Date(),
            minDate: new Date(),
            weeks: false,
        })
    </script>

@endpush

