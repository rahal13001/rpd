<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
rel="stylesheet">


@if ( $mime == "image/png" || $mime == "image/jpg" || $mime == "image/jpeg")
<img src="{{ asset('storage/juli/'.$dokumentasi) }}" alt="Dokumenntasi juli" class="img-fluid img-thumbnail w-auto">
@elseif ($mime == "application/pdf")
<div class="iframe-container">
    <iframe
        src ="{{ asset('/laraview/#../storage/juli/'.$dokumentasi)}}"
        width="1600"
        height="900"
        frameborder="0"
        allowfullscreen>
    </iframe>
</div>
@else
<h3>Data akan segera terdownload, refresh jika download tidak berhasil</h3>
@endif

<style>
.iframe-container {
  overflow: hidden;
  /* 16:9 aspect ratio */
  padding-top: 56.25%;
  position: relative;
}

.iframe-container iframe {
   border: 0;
   height: 100%;
   left: 0;
   position: absolute;
   top: 0;
   width: 100%;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

