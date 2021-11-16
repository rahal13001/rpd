@extends('layouts.layout')

@section('judul', 'Detail Realisasi')

@section('isi')

@php
function rupiah($angka){
   $hasil_rupiah = number_format($angka);
  return $hasil_rupiah;
  }  
@endphp

<div class="card shadow mb-4">
    <div class="card-group">
       

        <div class="card">
            <div class="card-body col-md-12 ml-3">
               <h4 class="mb-2 ml-3"> Realisasi 
                 {{ $rpdreal->job->kegiatan }}
               </h4>

                <table class="table table-borderless table-responsive mt-1 ml-3">
                    <thead>
                        <tr>
                           <th scope="row" style="width: 15%"> Nama </th>
                           <td scope="col">:</td>
                           <td scope="col">
                            {{ $rpdreal->user->name }}
                            </td>
                        </tr>
                        <tr>
                           <th scope="row" style="width: 15%"> NIP </th>
                           <td scope="col">:</td>
                           <td scope="col">
                              {{ $rpdreal->user->nip }}
                           </td>
                        </tr>
                        <tr>
                           <th scope="row" style="width: 15%"> Jabatan </th>
                           <td scope="col">:</td>
                           <td scope="col">
                             {{ $rpdreal->user->jabatan }}
                           </td>
                        </tr>
                        <tr>
                           <th scope="row" style="width: 15%"> Anggaran </th>
                           <td scope="col">:</td>
                           <td scope="col"> Rp
                            {{ rupiah($rpdreal->job->nilai) }},00
                           </td>
                        </tr>
                    </thead>
                </table>

                <table class="table table-borderless table-responsive table-hover ml-3">
                   
                   <thead>
                      <th style="width: 15%">Bulan</th>
                      <th></th>
                      <th style="width: 20%" class="text-center">Perencanaan (Rp)</th>
                      <th style="width: 20%" class="text-center">Realisasi (Rp) </th>
                      <th style="width: 20%" class="text-center">Persentase (%) </th>
                      <th style="width: 20%" class="text-center">Bukti</th>
                   </thead>
                   <tbody>
                        <tr>
                           <th scope="row"> Januari </th>
                           <td scope="col"> : </td>
                           <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->januari) }},00</td>
                           <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->januari) }},00</td>
                           <td scope="col" class="text-center"> {{ $jan }}%</td>
                           <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->januari !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                               @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                               @endif
                           </td>
                        </tr>
                        <tr>
                           <th scope="row"> Febuari </th>
                           <td scope="col">:</td>
                           <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->febuari) }},00</td>
                           <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->febuari) }},00</td>
                           <td scope="col" class="text-center"> {{ $feb }}%</td>
                           <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->febuari !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a> 
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                              @endif
                           </td>
                        </tr>
                        <tr>
                           <th scope="row"> Maret </th>
                           <td scope="col">:</td>
                           <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->maret) }},00</td>
                           <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->maret) }},00</td>
                           <td scope="col" class="text-center"> {{ $mar }}%</td>
                           <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->maret !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                              @endif
                           </td>
                        </tr>
                        <tr>
                           <th scope="row"> April </th>
                           <td scope="col">:</td>
                           <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->april) }},00</td>
                           <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->april) }},00</td>
                           <td scope="col" class="text-center"> {{ $ap }}%</td>
                           <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->april !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                              @endif
                           </td>
                        </tr>
                        <tr>
                            <th scope="row"> Mei </th>
                            <td scope="col">:</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->mei) }},00</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->mei) }},00</td>
                            <td scope="col" class="text-center"> {{ $mei }}%</td>
                            <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->mei !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                             @endif
                              </td>
                         </tr>
                         <tr>
                            <th scope="row"> Juni </th>
                            <td scope="col">:</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->juni) }},00</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->juni) }},00</td>
                            <td scope="col" class="text-center"> {{ $juni }}%</td>
                            <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->juni !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                             @endif
                              </td>
                         </tr>
                         <tr>
                            <th scope="row"> Juli </th>
                            <td scope="col">:</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->juli) }},00</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->juli) }},00</td>
                            <td scope="col" class="text-center"> {{ $juli }}%</td>
                            <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->juli !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                             @endif
                              </td>
                         </tr>
                         <tr>
                            <th scope="row"> Agustus </th>
                            <td scope="col">:</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->agustus) }},00</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->agustus) }},00</td>
                            <td scope="col" class="text-center"> {{ $agt }}%</td>
                            <td scope="col" class="d-flex justify-content-center" >
                              @if ($rpdreal->documentation->agustus !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                             @endif
                              </td>
                         </tr>
                         <tr>
                            <th scope="row"> September </th>
                            <td scope="col">:</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->septembe) }},00</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->september) }},00</td>
                            <td scope="col" class="text-center"> {{ $september }}%</td>
                            <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->september !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                             @endif
                              </td>
                         </tr>
                         <tr>
                            <th scope="row"> Oktober </th>
                            <td scope="col">:</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->oktober) }},00</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->oktober) }},00</td>
                            <td scope="col" class="text-center"> {{ $oktober }}%</td>
                            <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->oktober !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                             @endif
                              </td>
                         </tr>
                         <tr>
                            <th scope="row"> November </th>
                            <td scope="col">:</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->november) }},00</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->november) }},00</td>
                            <td scope="col" class="text-center"> {{ $november }}%</td>
                            <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->november !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                             @endif
                              </td>
                         </tr>
                         <tr>
                            <th scope="row"> Desember </th>
                            <td scope="col">:</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->rpdplan->desember) }},00</td>
                            <td scope="col" class="text-right"> Rp{{ rupiah($rpdreal->desember) }},00</td>
                            <td scope="col" class="text-center"> {{ $desember }}%</td>
                            <td scope="col" class="d-flex justify-content-center">
                              @if ($rpdreal->documentation->desember !== NULL)
                              <a href="/documentationjanuari/{{ $rpdreal->documentation->id }}/{{ $rpdreal->documentation->januari }}" class="badge badge-primary" target="_blank">Periksa data dukung</a>
                              @else
                              <a type="button" class="badge badge-danger" disabled>Tidak ada data dukung</a>
                             @endif
                              </td>
                         </tr>
                         <tr>
                           <th scope="row"> Total </th>
                           <td scope="col">:</td>
                           <td scope="col" class="text-right"> Rp{{ rupiah($totalperencanaan) }},00</td>
                           <td scope="col" class="text-right"> Rp{{ rupiah($totalrealisasi) }},00</td>
                           <td scope="col" class="text-center"> {{ $total }}%</td>
                         </tr>
                    </tbody>
                </table>
                <a name="kembali" id="kembali" class="btn btn-info mr-4 float-left !important ml-3" href="{{ route('data_index') }}" role="button">Kembali</a>
               
                <a name="ubah" id="ubah" class="btn btn-outline-secondary mr-4 float-left !important" href="{{route('data_edit',$rpdreal->id) }}" role="button">Ubah Realisasi</a>

                <a name="ubah" id="ubah" class="btn btn-outline-secondary mr-4 float-left !important" href="{{route('plan_edit',$rpdreal->rpdplan->id) }}" role="button">Ubah Perencanaan</a>

                <form action="{{route('data_delete', $rpdreal->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger d-inline">Hapus</button>
                </form> 
            </div>
            <div class="card-body col-md-8">
               
            </div>
            

        </div>

    </div>
</div>
    
@endsection