<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Reservation</h3>
                        <a href="{{ url('admin/reservations') }}" class="btn btn-warning btn-sm float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/reservations') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>First Name</label>
                                <input type="text" name='name' class="form-control" required/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Type</label>
                                <select name="type" class="form-select">
                                    <option hidden="true">Select Type</option>
                                    <option selected disabled>Select Type</option>
                                    <option value="Cottage">Cottage</option>
                                    <option value="Function Hall">Function Hall</option>
                                    <option value="Table">Table</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="date">Date</label>
                                <input type="date" name='reservation_date' id="picker" class="form-control" required/>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Note</label>
                                <textarea name='note' class="form-control" rows="3"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-end">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
