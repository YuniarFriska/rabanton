<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">

                   
                    <tr>
                        <td width="100px">#</td>
                        <td width="250px">Nama</td>
                        <td>Pesan Masuk</td>
                        <td>Email</td>
                        <td>Aksi</td>
                    </tr>

                    @foreach ($pesan as $item)
                    <tr style="{{ $item->is_read == 1 ? 'background-color: #f0f0f0;' : '' }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="/admin/massage/{{ $item->id }}"><b>{{ $item->name }}</b></a>
                        </td>
                        <td>{!! Illuminate\Support\Str::limit($item->desc, 100) !!}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                        <form action="/admin/massage/{{ $item->id }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>