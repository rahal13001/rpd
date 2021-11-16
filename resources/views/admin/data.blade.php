@extends('layouts.layout')

@section('judul', 'Rencana Penarikan Dana')

@section('isi')

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Rencana Penarikan Dana</h6>
    </div>
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session ('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
    </div>
    @endif
        <div class="card-body">
            <div class="row">
                
                <div class="col-sm-3" >
                        <a href="{{ route('plan_create') }}" class="btn btn-primary mt-2 mb-2">
                            Tambah Data Perencanaan
                        </a>
                    </div>
                </div>
       
            <!-- AKHIR DATE RANGE PICKER -->
            <div class="table-responsive">
           <table class="table table-bordered scroll-horizontal-vertical" id="crudTable" width="100%" cellspacing="0" id="crudtable">
                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col">+</th>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Anggaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    
                </thead>
            <tbody class="text-center">
               <tr id="realisasi"></tr>
               <tr id="perencanaan"></tr>
            </tbody>
            </table>
            </div>
    </div>
</div>

@endsection

@push('addon-script')

<style>

    td.details-control {
        background: url('../img/chevron-double-down.svg') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('../img/chevron-double-up.svg') no-repeat center center;
    }
    </style>

<script>

      
/* Formatting function for row details - modify as you need */
function template ( d ) {

    function serebu(num)
  {
    var num_parts = num.toString().split(".");
    num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return num_parts.join(".");
  }

    var januari = d.rpdreal.januari/d.job.nilai*100
    januari = januari.toFixed(2);
    
    var febuari = d.rpdreal.febuari/d.job.nilai*100
    febuari = febuari.toFixed(2);

    var maret = d.rpdreal.maret/d.job.nilai*100
    maret = maret.toFixed(2);

    var april = d.rpdreal.april/d.job.nilai*100
    april = april.toFixed(2);

    var mei = d.rpdreal.mei/d.job.nilai*100
    mei = mei.toFixed(2);

    var juni = d.rpdreal.juni/d.job.nilai*100
    juni = juni.toFixed(2);

    var juli = d.rpdreal.juli/d.job.nilai*100
    juli = juli.toFixed(2);

    var agustus = d.rpdreal.agustus/d.job.nilai*100
    agustus = agustus.toFixed(2);

    var september = d.rpdreal.september/d.job.nilai*100
    september = september.toFixed(2);

    var oktober = d.rpdreal.oktober/d.job.nilai*100
    oktober = oktober.toFixed(2);

    var november = d.rpdreal.november/d.job.nilai*100
    november = november.toFixed(2);

    var desember = d.rpdreal.desember/d.job.nilai*100
    desember = desember.toFixed(2);

    var real = parseInt(d.rpdreal.januari)+parseInt(d.rpdreal.febuari)+parseInt(d.rpdreal.maret)+parseInt(d.rpdreal.april)+parseInt(d.rpdreal.mei)+parseInt(d.rpdreal.juni)+parseInt(d.rpdreal.juli)+parseInt(d.rpdreal.agustus)+parseInt(d.rpdreal.september)+parseInt(d.rpdreal.oktober)+parseInt(d.rpdreal.november)+parseInt(d.rpdreal.desember)
        plan = parseInt(d.januari)+parseInt(d.febuari)+parseInt(d.maret)+parseInt(d.april)+parseInt(d.mei)+parseInt(d.juni)+parseInt(d.juli)+parseInt(d.agustus)+parseInt(d.september)+parseInt(d.oktober)+parseInt(d.november)+parseInt(d.desember);

    var fisik = real/plan*100
    fisik = fisik.toFixed(2);
  
    // `d` is the original data object for the row
    return '<table class="table table-bordered table-hover scroll-horizontal-vertical table-responsive">'+
        '<tr>'+
            '<td>Bulan:</td>'+
            '<td>Januari</td>'+
            '<td>Febuari</td>'+
            '<td>Maret</td>'+
            '<td>April</td>'+
            '<td>Mei</td>'+
            '<td>Juni</td>'+
            '<td>Juli</td>'+
            '<td>Agustus</td>'+
            '<td>September</td>'+
            '<td>Oktober</td>'+
            '<td>November</td>'+
            '<td>Desember</td>'+
            '<td>Total</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Perencanaan:</td>'+
            '<td>'+serebu(d.januari)+'</td>'+
            '<td>'+serebu(d.febuari)+'</td>'+
            '<td>'+serebu(d.maret)+'</td>'+
            '<td>'+serebu(d.april)+'</td>'+
            '<td>'+serebu(d.mei)+'</td>'+
            '<td>'+serebu(d.juni)+'</td>'+
            '<td>'+serebu(d.juli)+'</td>'+
            '<td>'+serebu(d.agustus)+'</td>'+
            '<td>'+serebu(d.september)+'</td>'+
            '<td>'+serebu(d.oktober)+'</td>'+
            '<td>'+serebu(d.november)+'</td>'+
            '<td>'+serebu(d.desember)+'</td>'+
            '<td>'+serebu(plan)+'</td>'+
           
        '</tr>'+
        '<tr>'+
            '<td>Realisasi</td>'+
            '<td>'+serebu(d.rpdreal.januari)+'</td>'+
            '<td>'+serebu(d.rpdreal.febuari)+'</td>'+
            '<td>'+serebu(d.rpdreal.maret)+'</td>'+
            '<td>'+serebu(d.rpdreal.april)+'</td>'+
            '<td>'+serebu(d.rpdreal.mei)+'</td>'+
            '<td>'+serebu(d.rpdreal.juni)+'</td>'+
            '<td>'+serebu(d.rpdreal.juli)+'</td>'+
            '<td>'+serebu(d.rpdreal.agustus)+'</td>'+
            '<td>'+serebu(d.rpdreal.september)+'</td>'+
            '<td>'+serebu(d.rpdreal.oktober)+'</td>'+
            '<td>'+serebu(d.rpdreal.november)+'</td>'+
            '<td>'+serebu(d.rpdreal.desember)+'</td>'+
            '<td>'+serebu(real)+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Fisik (%)</td>'+
            '<td>'+januari+' %</td>'+
            '<td>'+febuari+' %</td>'+
            '<td>'+maret+' %</td>'+
            '<td>'+april+' %</td>'+
            '<td>'+mei+' %</td>'+
            '<td>'+juni+' %</td>'+
            '<td>'+juli+' %</td>'+
            '<td>'+agustus+' %</td>'+
            '<td>'+september+' %</td>'+
            '<td>'+oktober+' %</td>'+
            '<td>'+november+' %</td>'+
            '<td>'+desember+' %</td>'+
            '<td>'+fisik+' %</td>'+
        '</tr>'+
    '</table>';
}

// var template = Handlebars.compile($("#details-template").html());
    //data table mulai
    var table = $('#crudTable').DataTable({

            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            
           columns: [
                    {
                        "className":      'details-control',
                        "orderable":      false,
                        "searchable":     false,
                        "data":           null,
                        "defaultContent": ''
                    },
           
                    { data:'id',
                      sortable: false, 
                       render: function (data, type, row, meta) {
                     return meta.row + meta.settings._iDisplayStart + 1;
                      } },


                    {data: 'user.name', name : 'user.name'},
                    {data: 'job.kegiatan', name : 'job.kegiatan'},
                    {data: 'job.nilai', name : 'job.nilai'},
                   
                    {
                        data: 'aksi',
                        name : 'aksi',
                        orderable : false,
                        searchable : false,
                        width : '15%'
                    },
            ]
           
            } );

        $('#crudTable tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( template(row.data()) ).show();
            tr.addClass('shown');
        }
    });

</script>

@endpush