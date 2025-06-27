<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/highlight/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Add Highlight</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Picture</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($highlights as $highlight)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($highlight->picture)
                                    <img src="{{ asset($highlight->picture) }}" width="100px" alt="Highlight Picture" 
                                    onerror="this.onerror=null; this.src='/path/to/default-image.png';">
                                @else
                                    <span>No Picture</span>
                                @endif
                            </td>
                            <td>{{ $highlight->title }}</td>
                            <td>{{ $highlight->description }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="/admin/highlight/{{ $highlight->id }}/edit" class="btn btn-success mx-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="/admin/highlight/{{ $highlight->id }}" method="POST">
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
