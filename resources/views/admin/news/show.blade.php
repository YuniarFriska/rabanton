<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">

                <a href="/admin/news" class="btn btn-primary px-4"><i class="fas fa-arrow-left"></i>Back</a>

                <h4><b>{{ $news->title }}</b></h4>
                <p>Date Created {{ $news->created_at }}</p>

                <img src="/{{ $news->cover }}" width="100%" alt="">

                <div class="py-3"></div>
                <p>{!! $news->body !!}</p>
            </div>
        </div>
    </div>
</div>