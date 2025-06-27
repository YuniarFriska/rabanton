<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/news/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Add</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Cover</th>
                            <th>Title</th>
                            <th>Description</th> <!-- Kolom Isi Berita ditambahkan -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if ($item->cover)
                                        <img src="/{{ $item->cover }}" width="100px" alt="Cover Berita">
                                    @else
                                        <span>No Cover</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="/admin/news/{{ $item->id }}"><b>{{ $item->title }}</b></a>
                                </td>
                                <td>{!! $item->body !!}</td> <!-- Menampilkan isi berita -->
                                <td>
                                    <div class="d-flex">
                                        <a href="/admin/news/{{ $item->id }}/edit" class="btn btn-success mx-2"><i class="fas fa-edit"></i> Edit</a>
                                        <form action="/admin/news/{{ $item->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</button>
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
