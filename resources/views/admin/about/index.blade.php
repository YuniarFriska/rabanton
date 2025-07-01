<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="/admin/about/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @csrf

                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="">Name of The Company</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Perusahaan" value="{{ isset($about) ? $about->name : old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Cover</label>
                    <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror" placeholder="Password" value="{{ old('cover') }}">
                    
                    
                    @error('cover')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    @if (isset($about))
                    <img src="{{ asset($about->cover) }}" width="100%" class="mt-4" alt="">
                    @endif

                </div>


                </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Description</label>
                            <textarea name="desc" class="form-control" id="summernote" cols="30" rows="10">{{ $about->desc }}</textarea>
                            @error('desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
        </div>
    </div>
</div>