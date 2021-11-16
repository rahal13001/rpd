@extends('layouts.layout')

@section('judul', 'Tambah Data Rencana dan Realisasi Penarikan Dana')

@section('isi')



<div class="card shadow mb-4">
   
    <div class="col-lg-10 mx-auto">
        <div class="p-5">
            <form class="user" method="post" action="{{ route('plan_store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <h5>Data Perencanaan</h5>
                </div>
                <div class="form-group row" id="tambah">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="nama">Masukan Nama Pegawai</label>
                        <select id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama">
                            @foreach ($user as $pgw)
                            <option value="{{ $pgw->id }}">{{ $pgw->name}}</option>
                            @endforeach
                          </select>  
                    </div>
                </div>
                <div class="form-group row" id="tambah">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="job">Masukan Kegiatan</label>
                        <select id="job" class="form-control @error('job') is-invalid @enderror" name="job">
                            @foreach ($job as $gawe)
                            <option value="{{ $gawe->id }}">{{ $gawe->kegiatan}}</option>
                            @endforeach
                          </select>  
                    </div>
                </div>
        
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_januari">Januari</label>
                       <input type="text" class="form-control form-control-user number-separator @error('plan_januari') is-invalid @enderror" id="plan_januari" name="plan_januari"
                            placeholder="masukan nominal" value="{{ old('plan_januari') }}">
                            @error('plan_januari') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_febuari">Febuari</label>
                        <input type="text" class="form-control form-control-user number-separator @error('plan_febuari') is-invalid @enderror" id="plan_febuari" name="plan_febuari" step="0.01"
                            placeholder="masukan nominal" value="{{ old('plan_febuari') }}">
                            @error('plan_febuari') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>
     
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_maret">Maret</label>
                        <input type="text" class="number-separator form-control form-control-user @error('plan_maret') is-invalid @enderror" id="plan_maret" name="plan_maret" step="0.01"
                            placeholder="masukan nominal" value="{{ old('plan_maret') }}">
                            @error('plan_maret') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_april">April</label>
                        <input type="text" class="number-separator form-control form-control-user @error('plan_april') is-invalid @enderror" id="plan_april" name="plan_april" step="0.01"
                            placeholder="masukan nominal" value="{{ old('plan_april') }}">
                            @error('plan_april') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_mei">Mei</label>
                        <input type="text" class="number-separator form-control form-control-user @error('plan_mei') is-invalid @enderror" id="plan_mei" name="plan_mei" step="0.01"
                            placeholder="masukan nominal" value="{{ old('plan_mei') }}">
                            @error('plan_mei') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                   
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_juni">Juni</label>
                        <input type="text" class="number-separator form-control form-control-user @error('plan_juni') is-invalid @enderror" id="plan_juni" name="plan_juni" step="0.01"
                            placeholder="masukan nominal" value="{{ old('plan_juni') }}">
                            @error('plan_juni') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_juli">Juli</label>
                        <input type="text" class="number-separator form-control form-control-user @error('plan_juli') is-invalid @enderror" id="plan_juli" name="plan_juli" step="0.01"
                            placeholder="masukan nominal" value="{{ old('plan_juli') }}">
                            @error('plan_juli') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                  
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_agustus">Agustus</label>
                        <input type="text" class="number-separator form-control form-control-user @error('plan_agustus') is-invalid @enderror" id="plan_agustus" name="plan_agustus" step="0.01"
                            placeholder="masukan nominal" value="{{ old('plan_agustus') }}">
                            @error('plan_agustus') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_september">September</label>
                        <input type="text" class="number-separator form-control form-control-user @error('plan_september') is-invalid @enderror" id="plan_september" name="plan_september" step="0.01"
                            placeholder="masukan nominal" value="{{ old('plan_september') }}">
                            @error('plan_september') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_oktober">Oktober</label>
                        <input type="text" class="number-separator form-control form-control-user @error('plan_oktober') is-invalid @enderror" id="plan_oktober" name="plan_oktober" step="0.01"
                            placeholder="masukan nominal" value="{{ old('plan_oktober') }}">
                            @error('plan_oktober') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_november">November</label>
                        <input type="text" class="number-separator form-control form-control-user @error('plan_november') is-invalid @enderror" id="plan_november" name="plan_november" step="0.01"
                            placeholder="masukan nominal" value="{{ old('plan_november') }}">
                            @error('plan_november') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="plan_desember">Desember</label>
                        <input type="text" class="form-control form-control-user @error('plan_desember') is-invalid @enderror" id="plan_desember" name="plan_desember"
                            placeholder="masukan nominal" value="{{ old('plan_desember') }}">
                            @error('plan_desember') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <h5>Data Realisasi</h5>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="januari">Januari</label>
                        <input type="text" class="number-separator form-control form-control-user @error('januari') is-invalid @enderror" id="januari" name="januari" step="0.01"
                            placeholder="masukan nominal" value="{{ old('januari') }}">
                            @error('januari') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="jan">Bukti Dukung Januari</label>
                        <input type="file" class="form-control-file @error('jan') is-invalid @enderror" id="jan" name="jan" value="{{ old('jan') }}">
                        <small>Masukan File Bukti Dukung Bulan Januari</small>
                            @error('jan') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="febuari">Febuari</label>
                        <input type="text" class="number-separator form-control form-control-user @error('febuari') is-invalid @enderror" id="febuari" name="febuari" step="0.01"
                            placeholder="masukan nominal" value="{{ old('febuari') }}">
                            @error('febuari') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="feb">Bukti Dukung Febuari</label>
                        <input type="file" class="form-control-file @error('feb') is-invalid @enderror" id="feb" name="feb" value="{{ old('feb') }}">
                        <small>Masukan File Bukti Dukung Bulan Febuari</small>
                            @error('jan') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="maret">Maret</label>
                        <input type="text" class="number-separator form-control form-control-user @error('maret') is-invalid @enderror" id="maret" name="maret" step="0.01"
                            placeholder="masukan nominal" value="{{ old('maret') }}">
                            @error('maret') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="mar">Bukti Dukung Maret</label>
                        <input type="file" class="form-control-file @error('mar') is-invalid @enderror" id="mar" name="mar" value="{{ old('mar') }}">
                        <small>Masukan File Bukti Dukung Bulan Maret</small>
                            @error('mar') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="april">April</label>
                        <input type="text" class="number-separator form-control form-control-user @error('april') is-invalid @enderror" id="april" name="april" step="0.01"
                            placeholder="masukan nominal" value="{{ old('april') }}">
                            @error('april') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="ap">Bukti Dukung April</label>
                        <input type="file" class="form-control-file @error('ap') is-invalid @enderror" id="ap" name="ap" value="{{ old('ap') }}">
                        <small>Masukan File Bukti Dukung Bulan April</small>
                            @error('jan') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="mei">Mei</label>
                        <input type="text" class="number-separator form-control form-control-user @error('mei') is-invalid @enderror" id="mei" name="mei" step="0.01"
                            placeholder="masukan nominal" value="{{ old('mei') }}">
                            @error('mei') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="may">Bukti Dukung Mei</label>
                        <input type="file" class="form-control-file @error('may') is-invalid @enderror" id="may" name="may" value="{{ old('may') }}">
                        <small>Masukan File Bukti Dukung Bulan Mei</small>
                            @error('may') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="juni">Juni</label>
                        <input type="text" class="number-separator form-control form-control-user @error('juni') is-invalid @enderror" id="juni" name="juni" step="0.01"
                            placeholder="masukan nominal" value="{{ old('juni') }}">
                            @error('juni') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="june">Bukti Dukung Juni</label>
                        <input type="file" class="form-control-file @error('june') is-invalid @enderror" id="june" name="june" value="{{ old('june') }}">
                        <small>Masukan File Bukti Dukung Bulan Juni</small>
                            @error('june') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="juli">Juli</label>
                        <input type="text" class="number-separator form-control form-control-user @error('juli') is-invalid @enderror" id="juli" name="juli" step="0.01"
                            placeholder="masukan nominal" value="{{ old('juli') }}">
                            @error('juli') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="july">Bukti Dukung Juli</label>
                        <input type="file" class="form-control-file @error('july') is-invalid @enderror" id="july" name="july" value="{{ old('july') }}">
                        <small>Masukan File Bukti Dukung Bulan Juli</small>
                            @error('july') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="agustus">Agustus</label>
                        <input type="text" class="number-separator form-control form-control-user @error('agustus') is-invalid @enderror" id="agustus" name="agustus" step="0.01"
                            placeholder="masukan nominal" value="{{ old('agustus') }}">
                            @error('agustus') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="agt">Bukti Dukung Agustus</label>
                        <input type="file" class="form-control-file @error('agt') is-invalid @enderror" id="agt" name="agt" value="{{ old('agt') }}">
                        <small>Masukan File Bukti Dukung Bulan Agustus</small>
                            @error('agt') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="september">September</label>
                        <input type="text" class="number-separator form-control form-control-user @error('september') is-invalid @enderror" id="september" name="september" step="0.01"
                            placeholder="masukan nominal" value="{{ old('september') }}">
                            @error('september') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="sep">Bukti Dukung September</label>
                        <input type="file" class="form-control-file @error('sep') is-invalid @enderror" id="sep" name="sep" value="{{ old('sep') }}">
                        <small>Masukan File Bukti Dukung Bulan September</small>
                            @error('sep') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="oktober">Oktober</label>
                        <input type="text" class="number-separator form-control form-control-user @error('oktober') is-invalid @enderror" id="oktober" name="oktober" step="0.01"
                            placeholder="masukan nominal" value="{{ old('oktober') }}">
                            @error('oktober') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="okt">Bukti Dukung Oktober</label>
                        <input type="file" class="form-control-file @error('okt') is-invalid @enderror" id="okt" name="okt" value="{{ old('okt') }}">
                        <small>Masukan File Bukti Dukung Bulan Oktober</small>
                            @error('okt') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="november">November</label>
                        <input type="text" class="number-separator form-control form-control-user @error('november') is-invalid @enderror" id="november" name="november" step="0.01"
                            placeholder="masukan nominal" value="{{ old('november') }}">
                            @error('november') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nov">Bukti Dukung November</label>
                        <input type="file" class="form-control-file @error('nov') is-invalid @enderror" id="nov" name="nov" value="{{ old('nov') }}">
                        <small>Masukan File Bukti Dukung Bulan November</small>
                            @error('nov') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="desember">Desember</label>
                        <input type="text" class="number-separator form-control form-control-user @error('desember') is-invalid @enderror" id="desember" name="desember"
                            placeholder="masukan nominal" value="{{ old('desember') }}" step="0.01">
                            @error('desember') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="des">Bukti Dukung Desember</label>
                        <input type="file" class="form-control-file @error('des') is-invalid @enderror" id="des" name="des" value="{{ old('des') }}">
                        <small>Masukan File Bukti Dukung Bulan Desember</small>
                            @error('des') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mr-4 mb-4 float-left">Tambah Data</button>
            </form>
            <a name="batal" id="batal" class="btn btn-danger" href="/data" role="button">Batal</a>
        </div>
    </div>
    
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/easy-number-separator.js') }}"></script>

@endsection