<div>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Cottage</h3>
                            <a href="{{ url('admin/cottages') }}" class="btn btn-warning btn-sm float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/cottages') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Title</label>
                                    <input type="text" name='title' class="form-control" required/>
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
