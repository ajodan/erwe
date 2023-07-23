<!-- ERROR -->
@error('name')
<script>
iziToast.error({
    title: 'Gagal!',
    message: '{{$message}}',
    position: 'bottomRight'
  });
</script>
@enderror

@error('email')
<script>
iziToast.error({
    title: 'Gagal!',
    message: '{{$message}}',
    position: 'bottomRight'
  });
</script>
@enderror

@error('password')
<script>
iziToast.error({
    title: 'Gagal!',
    message: '{{$message}}',
    position: 'bottomRight'
  });
</script>
@enderror

@error('no_telp')
<script>
iziToast.error({
    title: 'Gagal!',
    message: '{{$message}}',
    position: 'bottomRight'
  });
</script>
@enderror

@error('nik')
<script>
iziToast.error({
    title: 'Gagal!',
    message: '{{$message}}',
    position: 'bottomRight'
  });
</script>
@enderror

@error('no_kk')
<script>
iziToast.error({
    title: 'Gagal!',
    message: '{{$message}}',
    position: 'bottomRight'
  });
</script>
@enderror

@error('foto')
<script>
iziToast.error({
    title: 'Gagal!',
    message: '{{$message}}',
    position: 'bottomRight'
  });
</script>
@enderror



<!-- SUCCESS -->
@if(session("alertStore"))
<script>
iziToast.success({
    title: 'Berhasil!',
    message: 'Data Berhasil ditambah',
    position: 'topRight'
  });
</script>

@elseif(session("alertUpdate"))
<script>
iziToast.success({
    title: 'Berhasil!',
    message: 'Data Berhasil diubah',
    position: 'topRight'
  });
</script>

@elseif(session("alertDestroy"))
<script>
iziToast.success({
    title: 'Berhasil!',
    message: 'Data Berhasil dihapus',
    position: 'topRight'
  });
</script>

@elseif(session("alertUser"))
<script>
iziToast.error({
    title: 'Gagal!',
    message: 'Pengguna tidak dapat masuk ke halaman admin',
    position: 'bottomRight'
  });
</script>

@elseif (session()->has('success'))
<script>
iziToast.info({
    title: 'Info!',
    message: 'Selamat Datang di Aplikasi Rukun Tetangga Rukun Warga 13 Taman Alamanda',
    position: 'bottomCenter'
  });
</script>
@endif


