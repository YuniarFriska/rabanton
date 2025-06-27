<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ isset($news) ? '/admin/news/' . $news->id : '/admin/news' }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($news))
                        @method('PUT')
                    @endif

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Judul Berita" value="{{ isset($news) ? $news->title : old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="body">News Body</label>
                        <textarea name="body" id="summernote" class="form-control @error('body') is-invalid @enderror" rows="6" placeholder="Isi Berita">{{ isset($news) ? $news->body : old('body') }}</textarea>
                        @error('body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" name="cover" id="cover" class="form-control @error('cover') is-invalid @enderror">
                        @error('cover')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($news) && $news->cover)
                            <img src="{{ asset($news->cover) }}" class="mt-4" width="100%" alt="Cover Berita">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
