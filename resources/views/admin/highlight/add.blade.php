<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset($highlight))
                <form action="/admin/highlight/{{ $highlight->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                <form action="/admin/highlight" method="POST" enctype="multipart/form-data">
                @endif
                @csrf

                <div class="form-group">
                    <label for="title">Highlight Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Highlight Title" value="{{ isset($highlight) ? $highlight->title : old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Highlight Description">{{ isset($highlight) ? $highlight->description : old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="picture">Highlight Image</label>
                    <input type="file" name="picture" class="form-control @error('picture') is-invalid @enderror">
                    @error('picture')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    @if (isset($highlight) && $highlight->picture)
                    <img src="{{ asset($highlight->picture) }}" width="100%" class="mt-4" alt="Highlight Image">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
        </div>
    </div>
</div>
