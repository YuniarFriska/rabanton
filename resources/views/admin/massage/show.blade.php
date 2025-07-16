<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <a href="/admin/massage" class="btn btn-primary btn-sm px-5"><i class="fas fa-arrow-left"> </i>Back</a>
                    <h4><b>From : {{ $pesan->name }}</b></h4>
                    <p>Date Created : {{ $pesan->created_at }}</p>
                    {!!  $pesan->desc !!}
                </div>
            </div>
        </div>
    </div>
</div>