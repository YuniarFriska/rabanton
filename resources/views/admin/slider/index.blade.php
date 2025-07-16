<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/slider/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Add</a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Picture</td>
                        <td>Headline</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($slider as $item)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="/{{ $item->gambar }}" width="100px" alt="Gambar Slider"></td>
                        <td>{{ $item->headline }}</td>
                        <td>
                            <div class="d-flex">
                            <a href="/admin/slider/{{ $item->id }}/edit" class="btn btn-success mx-2"><i class="fas fa-edit"></i>Edit</a>

                            <form action="/admin/slider/{{ $item->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </div>
        </div>
    </div>
</div>