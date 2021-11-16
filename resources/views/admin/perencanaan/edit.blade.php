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
            Perencanaan Kegiatan 
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
            <form class="user" method="post" action="{{ route('plan_update', $rpdplan->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                
                
                <div class="form-group row" id="tambah">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="nama">Masukan Nama Pegawai</label>
                        <select id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama">
                            <option value="{{ $rpdplan->user_id }}" selected>Penanggung Jawab : {{ $rpdplan->user->name }}</option>
                            @foreach ($user as $pgw)
                            <option value="{{ $pgw->id }}">{{ $pgw->name}}</option>
                            @endforeach
                          </select>  
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="januari">Januari</label>
                        <input type="text" class="number-separator form-control form-control-user @error('januari') is-invalid @enderror" id="januari" name="januari" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdplan->januari) }}">
                            @error('januari') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="febuari">Febuari</label>
                        <input type="text" class="number-separator form-control form-control-user @error('febuari') is-invalid @enderror" id="febuari" name="febuari" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdplan->febuari) }}">
                            @error('febuari') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                  
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="maret">Maret</label>
                        <input type="text" class="number-separator form-control form-control-user @error('maret') is-invalid @enderror" id="maret" name="maret" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdplan->maret) }}">
                            @error('maret') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="april">April</label>
                        <input type="text" class="number-separator form-control form-control-user @error('april') is-invalid @enderror" id="april" name="april" step="0.01"
                            placeholder="masukan nominal" value="{{rupiah($rpdplan->april)}}">
                            @error('april') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="mei">Mei</label>
                        <input type="text" class="number-separator form-control form-control-user @error('mei') is-invalid @enderror" id="mei" name="mei" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdplan->mei) }}">
                            @error('mei') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="juni">Juni</label>
                        <input type="text" class="number-separator form-control form-control-user @error('juni') is-invalid @enderror" id="juni" name="juni" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdplan->juni) }}">
                            @error('juni') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="juli">Juli</label>
                        <input type="text" class="number-separator form-control form-control-user @error('juli') is-invalid @enderror" id="juli" name="juli" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdplan->juli) }}">
                            @error('juli') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="agustus">Agustus</label>
                        <input type="text" class="number-separator form-control form-control-user @error('agustus') is-invalid @enderror" id="agustus" name="agustus" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdplan->agustus) }}">
                            @error('agustus') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="september">September</label>
                        <input type="text" class="number-separator form-control form-control-user @error('september') is-invalid @enderror" id="september" name="september" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdplan->september) }}">
                            @error('september') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="oktober">Oktober</label>
                        <input type="text" class="number-separator form-control form-control-user @error('oktober') is-invalid @enderror" id="oktober" name="oktober" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdplan->oktober) }}">
                            @error('oktober') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="november">November</label>
                        <input type="text" class="number-separator form-control form-control-user @error('november') is-invalid @enderror" id="november" name="november" step="0.01"
                            placeholder="masukan nominal" value="{{ rupiah($rpdplan->november) }}">
                            @error('november') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="desember">Desember</label>
                        <input type="text" class="number-separator form-control form-control-user @error('desember') is-invalid @enderror" id="desember" name="desember" step="0.01" placeholder="Masukan nominal" value="{{ rupiah($rpdplan->desember) }}">
                            @error('desember') <div class="invalid-feedback"> {{ $message }} </div> @enderror
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