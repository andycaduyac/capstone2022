<div>
    <div class="container-fluid">
        <form action="{{ url('availables') }}" method="POST">
            @csrf

            <div class="card shadow-lg" style="width: 50rem;">
                <div class="card-body">
                    <div class="row m-2">
                        <div class="col-md-6 mb-4 pb-2">
                            <label class="form-label text-dark" for="date">Date</label>
                            <input type="text" name="book_date" id="picker" class="form-control form-control-lg" placeholder="Select Date" required>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <label class="form-label text-dark">Type</label>
                            <select name="type" class="form-select form-control-lg" required>
                                <option hidden="true">Select Type</option>
                                <option selected disabled>Select Type</option>
                                <option value="Cottage">Cottage</option>
                                <option value="Function Hall">Function Hall</option>
                                <option value="Table">Table</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input href="/availables" type="submit" class="btn btn-primary btn-sm" value="Check availabilty" />
                    </div>
                </div>

            </div>
        </form>



    </div>
</div>

@push('script')
    <script>
        $('#picker').datetimepicker({
            datepicker:true,
            timepicker: false,
            format: 'Y-m-d',
            // value: new Date(),
            minDate: new Date(),
            weeks: false,
        })
    </script>

@endpush
