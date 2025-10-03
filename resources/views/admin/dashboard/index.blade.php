
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body bg-primary">
      Halo, {{ auth()->user()->name }} Selamat datang di Administrasi!
      </div>
    </div>
  </div>
</div>

<div class="row">
<div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Pesan Masuk</span>
        <span class="info-box-number">
          {{ $pesan }}
          <small>Pesan Masuk</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

<div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Berita</span>
        <span class="info-box-number">
          {{ $news }}
          <small>Berita</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

<div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Layanan</span>
        <span class="info-box-number">
          {{ $service }}
          <small>Layanan</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

<div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Pengguna</span>
        <span class="info-box-number">
          {{ $user }}
          <small>Pengguna</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
</div>