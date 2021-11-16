@extends('layouts.layout')

@section('judul', 'Edit Realisasi Penarikan Dana')

@section('isi')
{{-- <div class="card mb-2">
    <div class="p-2">
        <h3>
            Realisasi Kegiatan 
            @foreach ($item as $job )
               {{ $job->job->kegiatan }}
            @endforeach
        </h3>
    </div>
   
</div> --}}
<div class="card shadow mb-4">
    <div class="container mt-3">
        <h3>
           Edit Realisasi Kegiatan 
            @foreach ($item as $job )
               {{ $job->job->kegiatan }}
            @endforeach
        </h3>
    </div>

    @php
      function rupiah($angka){
         $hasil_rupiah = number_format($angka);
        return $hasil_rupiah;
        }  
    @endphp
    
    
    <div class="col-lg-10 mx-auto">
        
        <div class="p-5">
            <form class="user" method="post" action="{{ route('data_update', $rpdreal->id) }}" enctype="multipart/form-data" >
                @csrf
                @method('put')       
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="januari">Januari</label>
                        <input type="text" class="form-control form-control-user number-separator @error('januari') is-invalid @enderror" id="januari" name="januari" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdreal->januari) }}">
                            @error('januari') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="jan">Bukti Dukung Januari</label>
                        @if ($rpdreal->documentation->januari !== NULL)
                            <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                            <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                        @endif
                        
                        <input type="file" class="form-control-file @error('jan') is-invalid @enderror" id="jan" name="jan" value="{{ old('jan') }}">
                        <small>Masukan File Bukti Dukung Bulan Januari</small>
                            @error('jan') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="febuari">Febuari</label>
                        <input type="text" class="form-control form-control-user number-separator @error('febuari') is-invalid @enderror" id="febuari" name="febuari" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdreal->febuari) }}">
                            @error('febuari') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="feb">Bukti Dukung Febuari</label>
                        @if ($rpdreal->documentation->febuari !== NULL)
                        <a href="/documentationfebuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->febuari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a> 
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                        @endif
                        <input type="file" class="form-control-file @error('feb') is-invalid @enderror" id="feb" name="feb">
                        <small>Masukan File Bukti Dukung Bulan Febuari</small>
                            @error('jan') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="maret">Maret</label>
                        <input type="text" class="number-separator form-control form-control-user @error('maret') is-invalid @enderror" id="maret" name="maret" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdreal->maret) }}">
                            @error('maret') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="mar">Bukti Dukung Maret</label>
                        @if ($rpdreal->documentation->maret !== NULL)
                        <a href="/documentation/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->maret }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                    @endif
                        <input type="file" class="form-control-file @error('mar') is-invalid @enderror" id="mar" name="mar">
                        <small>Masukan File Bukti Dukung Bulan Maret</small>
                            @error('mar') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="april">April</label>
                        <input type="text" class="number-separator form-control form-control-user @error('april') is-invalid @enderror" id="april" name="april" step="0.01"
                            placeholder="masukan nominal" value="{{rupiah($rpdreal->april)}}">
                            @error('april') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="ap">Bukti Dukung April</label>
                        @if ($rpdreal->documentation->april !== NULL)
                        <a href="/documentation/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->april }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                        @endif
                        <input type="file" class="form-control-file @error('ap') is-invalid @enderror" id="ap" name="ap">
                        <small>Masukan File Bukti Dukung Bulan April</small>
                            @error('ap') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="mei">Mei</label>
                        <input type="text" class="number-separator form-control form-control-user @error('mei') is-invalid @enderror" id="mei" name="mei" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdreal->mei) }}">
                            @error('mei') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="may">Bukti Dukung Mei</label>
                        @if ($rpdreal->documentation->mei !== NULL)
                        <a href="/documentation/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->mei }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                       @endif
                        <input type="file" class="number-separator form-control-file @error('may') is-invalid @enderror" id="may" name="may" value="{{ old('may') }}">
                        <small>Masukan File Bukti Dukung Bulan Mei</small>
                            @error('may') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="juni">Juni</label>
                        <input type="text" class="number-separator form-control form-control-user @error('juni') is-invalid @enderror" id="juni" name="juni" step="0.01"
                            placeholder="masukan nominal" value="{{rupiah($rpdreal->juni) }}">
                            @error('juni') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="june">Bukti Dukung Juni</label>
                        @if ($rpdreal->documentation->juni !== NULL)
                        <a href="/documentation/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->juni }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                         @endif
                        <input type="file" class="form-control-file @error('june') is-invalid @enderror" id="june" name="june" value="{{ old('june') }}">
                        <small>Masukan File Bukti Dukung Bulan Juni</small>
                            @error('june') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="juli">Juli</label>
                        <input type="text" class="number-separator form-control form-control-user @error('juli') is-invalid @enderror" id="juli" name="juli" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdreal->juli) }}">
                            @error('juli') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="july">Bukti Dukung Juli</label>
                        @if ($rpdreal->documentation->juli !== NULL)
                        <a href="/documentation/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->juli }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                    @endif
                        <input type="file" class="form-control-file @error('july') is-invalid @enderror" id="july" name="july" value="{{ old('july') }}">
                        <small>Masukan File Bukti Dukung Bulan Juli</small>
                            @error('july') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="agustus">Agustus</label>
                        <input type="text" class="number-separator form-control form-control-user @error('agustus') is-invalid @enderror" id="agustus" name="agustus" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdreal->agustus) }}">
                            @error('agustus') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="agt">Bukti Dukung Agustus</label>
                        @if ($rpdreal->documentation->agustus !== NULL)
                        <a href="/documentation/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->agustus }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                    @endif
                        <input type="file" class="form-control-file @error('agt') is-invalid @enderror" id="agt" name="agt" value="{{ old('agt') }}">
                        <small>Masukan File Bukti Dukung Bulan Agustus</small>
                            @error('agt') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="september">September</label>
                        <input type="text" class="number-separator form-control form-control-user @error('september') is-invalid @enderror" id="september" name="september" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdreal->september) }}">
                            @error('september') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="sep">Bukti Dukung September</label>
                        @if ($rpdreal->documentation->september !== NULL)
                        <a href="/documentation/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->september }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                    @endif
                        <input type="file" class="form-control-file @error('sep') is-invalid @enderror" id="sep" name="sep" value="{{ old('sep') }}">
                        <small>Masukan File Bukti Dukung Bulan September</small>
                            @error('sep') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="oktober">Oktober</label>
                        <input type="text" class="number-separator form-control form-control-user @error('oktober') is-invalid @enderror" id="oktober" name="oktober" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdreal->oktober) }}">
                            @error('oktober') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="okt">Bukti Dukung Oktober</label>
                        @if ($rpdreal->documentation->oktober !== NULL)
                        <a href="/documentation/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->oktober}}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                        @endif
                        <input type="file" class="form-control-file @error('okt') is-invalid @enderror" id="okt" name="okt" value="{{ old('okt') }}">
                        <small>Masukan File Bukti Dukung Bulan Oktober</small>
                            @error('okt') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="november">November</label>
                        <input type="text" class="number-separator form-control form-control-user @error('november') is-invalid @enderror" id="november" name="november" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdreal->november) }}">
                            @error('november') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nov">Bukti Dukung November</label>
                        @if ($rpdreal->documentation->november !== NULL)
                        <a href="/documentation/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->november }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                        @endif
                        <input type="file" class="form-control-file @error('nov') is-invalid @enderror" id="nov" name="nov" value="{{ old('nov') }}">
                        <small>Masukan File Bukti Dukung Bulan November</small>
                            @error('nov') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="desember">Desember</label>
                        <input type="text" class="number-separator form-control form-control-user @error('desember') is-invalid @enderror" id="desember" name="desember" step="0.01" placeholder="Masukan nominal" value="{{ rupiah($rpdreal->desember) }}">
                            @error('desember') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="des">Bukti Dukung Desember</label>
                        @if ($rpdreal->documentation->desember !== NULL)
                        <a href="/documentation/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->desember }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                        @else
                        <button type="button" class="badge badge-danger" disabled>Tidak ada data dukung</button>
                        @endif
                        <input type="file" class="form-control-file @error('des') is-invalid @enderror" id="des" name="des" value="{{ old('des') }}">
                        <small>Masukan File Bukti Dukung Bulan Desember</small>
                            @error('des') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-warning mr-4 mb-4 float-left">Ubah Data</button>
            </form>
            <a name="batal" id="batal" class="btn btn-danger" href="/data" role="button">Batal</a>
        </div>
    </div>
    
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/easy-number-separator.js') }}"></script>

@endsection