<div>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Cottage</h3>
                            <a href="{{ url('admin/rooms') }}" class="btn btn-warning btn-sm float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/rooms') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Title</label>
                                    <input type="text" name='title' class="form-control" required/>
                                </div>
                                {{-- <div class="col-md-6 mb-3">
                                    <label>Type</label>
                                    <input type="text" name='type' class="form-control" required/>
                                </div> --}}
                                <div class="col-md-6 mb-3">
                                    <label>Type</label>
                                    <select name="type" class="form-select">
                                        <option hidden="true">Select Type</option>
                                        <option selected disabled>Select Type</option>
                                        <option value="Couple Room">Couple Room</option>
                                        <option value="Family Room">Family Room</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="number">Price</label>
                                    <input type="number" name='price' class="form-control" required/>
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
</div>
