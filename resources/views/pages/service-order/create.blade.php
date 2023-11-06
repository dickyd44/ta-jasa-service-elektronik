<form action="{{ route('service-order.store') }}" method="post">
    @csrf
    <!-- Modal -->
    <div class="modal fade col-md-12" id="createServiceOrder" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create Service Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="InputName">Name</label>
                        <input type="text" class="form-control" id="InputName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="InputAddress">Address</label>
                        <input type="text" class="form-control" id="InputAddress" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPhone">Phone</label>
                        <input type="text" class="form-control" id="InputPhone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="InputProblem">Problem</label>
                        <input type="text" class="form-control" id="InputProblem" name="problem" required>
                    </div>
                    <div class="form-group">
                        <label for="InputType">Type</label>
                        <select class="form-control" name="type" id="type">
                            @foreach ($types as $type)
                            <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="InputDate">Date</label>
                        <input type="date" class="form-control" id="InputDate" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPrice">Price</label>
                        <input type="number" class="form-control" id="InputPrice" name="price" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>