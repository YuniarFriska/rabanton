<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/product/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Add Product</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Picture</th>
                            <th>Title</th>
                            <th>Description</th> <!-- Kolom Description ditambahkan di sini -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($product->picture)
                                <img src="/{{ $product->picture }}" width="100px" alt="Product Picture">
                                @else
                                <span>No Picture</span>
                                @endif
                            </td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td> <!-- Menampilkan full description -->
                            <td>
                                <div class="d-flex">
                                    <a href="/admin/product/{{ $product->id }}/edit" class="btn btn-success mx-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="/admin/product/{{ $product->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
