<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($slider))
                <form action="/admin/slider/{{ $slider->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                <form action="/admin/slider" method="POST" enctype="multipart/form-data">

                @endif
                @csrf
                <div class="form-group">
                    <label for="">Headline</label>
                    <input type="text" name="headline" class="form-control @error('headline') is-invalid @enderror" placeholder="Headline" value="{{ isset($slider) ? $slider->headline : old('headline') }}">
                    @error('headline')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="Deskripsi" value="{{ isset($slider) ? $slider->desc : old('desc') }}">
                    @error('desc')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Picture</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" placeholder="Password" value="{{ old('gambar') }}">
                    
                    
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    @if (isset($slider))
                    <img src="{{ asset($slider->gambar) }}" width="100%" class="mt-4" alt="">
                    @endif

                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
        </div>
    </div>
</div>