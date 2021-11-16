<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Support\Facades\DB;
use App\Models\Rpdplan;
use App\Models\Rpdreal;
use App\Models\Documentation;
use App\Models\User;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;
use Yajra\DataTables\Facades\DataTables;
// use Illuminate\Support\Facades\File;

class RpdrealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */


    public function index()
    {


        if (request()->ajax()) {
            $query = Rpdplan::with(['job', 'user', 'rpdreal'])->get();


            return DataTables::of($query)
                ->addColumn('aksi', function ($item) {

                    return '
                    <div class="dropdown">
                                <button class="btn btn-sm btn-info dropdown-toggle mr-1 mb-1 float-left" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    
                                    <a class="dropdown-item" href="' . route('data_show', $item->rpdreal->id) . '">
                                        Detail
                                    </a>
                                    <a class="dropdown-item" href="' . route('plan_edit', $item->id) . '">
                                        Sunting Perencanaan
                                    </a>
                                    <a class="dropdown-item" href="' . route('data_edit', $item->rpdreal->id) . '">
                                    Sunting Realisasi
                                    </a>
                                </div>

                    </div>
                    <form action="' . route('data_delete', $item->rpdreal->id) . '" method="POST">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>';
                })->rawColumns(['aksi'])->make(true);
        }

        return view('admin.data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rpdreal  $rpdreal
     * @return \Illuminate\Http\Response
     */
    public function show(Rpdreal $rpdreal, Rpdplan $rpdplan)
    {
        $jan = number_format($rpdreal->januari / $rpdreal->job->nilai * 100, 2);
        $feb = number_format($rpdreal->febuari / $rpdreal->job->nilai * 100, 2);
        $mar = number_format($rpdreal->maret / $rpdreal->job->nilai * 100, 2);
        $ap = number_format($rpdreal->april / $rpdreal->job->nilai * 100, 2);
        $mei = number_format($rpdreal->mei / $rpdreal->job->nilai * 100, 2);
        $juni = number_format($rpdreal->juni / $rpdreal->job->nilai * 100, 2);
        $juli = number_format($rpdreal->juli / $rpdreal->job->nilai * 100, 2);
        $agt = number_format($rpdreal->agustus / $rpdreal->job->nilai * 100, 2);
        $september = number_format($rpdreal->septembert / $rpdreal->job->nilai * 100, 2);
        $oktober = number_format($rpdreal->oktober / $rpdreal->job->nilai * 100, 2);
        $november = number_format($rpdreal->november / $rpdreal->job->nilai * 100, 2);
        $desember = number_format($rpdreal->desember / $rpdreal->job->nilai * 100, 2);

        $totalrealisasi = $rpdreal->januari + $rpdreal->febuari + $rpdreal->maret + $rpdreal->april + $rpdreal->mei + $rpdreal->juni + $rpdreal->juli + $rpdreal->agustus + $rpdreal->september + $rpdreal->oktober + $rpdreal->november + $rpdreal->desember;

        $totalperencanaan = $rpdreal->rpdplan->januari + $rpdreal->rpdplan->febuari + $rpdreal->rpdplan->maret + $rpdreal->rpdplan->april + $rpdreal->rpdplan->mei + $rpdreal->rpdplan->juni + $rpdreal->rpdplan->juli + $rpdreal->rpdplan->agustus + $rpdreal->rpdplan->september + $rpdreal->rpdplan->oktober + $rpdreal->rpdplan->november + $rpdreal->rpdplan->desember;


        $total = $jan + $feb + $mar + $ap + $mei + $juni + $juli + $agt + $september + $oktober + $november + $desember;
        return view('admin.realisasi.detail', compact('rpdreal', 'jan', 'feb', 'mar', 'ap', 'mei', 'juni', 'juli', 'agt', 'september', 'oktober', 'november', 'desember', 'total', 'totalrealisasi', 'totalperencanaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rpdreal  $rpdreal
     * @return \Illuminate\Http\Response
     */
    public function edit(Rpdreal $rpdreal)
    {
        $item = Rpdreal::with('job', 'user', 'rpdplan', 'documentation')->where('id', $rpdreal->id)->get();

        foreach ($item as $a) {
            $docjan = $a->documentation->januari;
            $docfeb = $a->documentation->febuari;
            $docmar = $a->documentation->maret;
            $docap = $a->documentation->april;
            $docmei = $a->documentation->mei;
            $docjun = $a->documentation->juni;
            $docjul = $a->documentation->juli;
            $docagus = $a->documentation->agustus;
            $docsep = $a->documentation->september;
            $docokt = $a->documentation->oktober;
            $docnov = $a->documentation->november;
            $docdes = $a->documentation->desember;
        }
        return view('admin.realisasi.edit', compact('rpdreal', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rpdreal  $rpdreal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rpdreal $rpdreal, Documentation $documentation)
    {

        $request->all();
        $documentation = Documentation::with('rpdreal')->where('rpdreal_id', $rpdreal->id)->get();
        foreach ($documentation as $a) {
            $ajan = $a->januari;
            $afeb = $a->febuari;
            $amar = $a->maret;
            $aap = $a->april;
            $amay = $a->mei;
            $ajun = $a->juni;
            $ajul = $a->juli;
            $agus = $a->agustus;
            $asep = $a->september;
            $aokt = $a->oktober;
            $anov = $a->november;
            $ades = $a->desember;
        }

        Rpdreal::where('id', $rpdreal->id)
            ->update([

                'januari' => str_replace(',', '', $request->januari),
                'febuari' => str_replace(',', '', $request->febuari),
                'maret' => str_replace(',', '', $request->maret),
                'mei' => str_replace(',', '', $request->mei),
                'juni' => str_replace(',', '', $request->juni),
                'juli' => str_replace(',', '', $request->juli),
                'agustus' => str_replace(',', '', $request->agustus),
                'september' => str_replace(',', '', $request->september),
                'oktober' => str_replace(',', '', $request->oktober),
                'november' => str_replace(',', '', $request->november),
                'desember' => str_replace(',', '', $request->desember),
            ]);

        if ($request->file('jan')) {
            $jan = $request->file('jan');
            $jan2 = "Januari" . "_" . time() . "_" . $jan->getClientOriginalName();
            $jan->storeAs('januari', $jan2, 'public');
            // $file = 'public/januari/' . $documentation->januari;
            Storage::disk('public')->delete(['januari/' . $ajan]);
        } else {
            $jan2 = $ajan;
        }
        if ($request->file('feb')) {

            $feb = $request->file('feb');
            $feb2 = "Febuari" . "_" . time() . "_" . $feb->getClientOriginalName();
            $feb->storeAs('febuari', $feb2, 'public');

            Storage::disk('public')->delete(['febuari/' . $afeb]);
        } else {
            $feb2 = $afeb;
        }

        if ($request->file('mar')) {

            $mar = $request->file('mar');
            $mar2 = "Maret" . "_" . time() . "_" . $mar->getClientOriginalName();
            $mar->storeAs('maret', $mar2, 'public');

            Storage::disk('public')->delete(['maret/' . $amar]);
        } else {
            $mar2 = $amar;
        }
        if ($request->file('ap')) {

            $ap = $request->file('ap');
            $ap2 = "April" . "_" . time() . "_" . $ap->getClientOriginalName();
            $ap->storeAs('april', $ap2, 'public');

            Storage::disk('public')->delete(['april/' . $aap]);
        } else {
            $ap2 = $aap;
        }
        if ($request->file('may')) {

            $may = $request->file('may');
            $may2 = "Mei" . "_" . time() . "_" . $may->getClientOriginalName();
            $may->storeAs('mei', $may2, 'public');

            Storage::disk('public')->delete(['mei/' . $amay]);
        } else {
            $may2 = $amay;
        }
        if ($request->file('june')) {

            $june = $request->file('june');
            $june2 = "Juni" . "_" . time() . "_" . $june->getClientOriginalName();
            $june->storeAs('juni', $june2, 'public');

            Storage::disk('public')->delete(['juni/' . $ajun]);
        } else {
            $june2 = $ajun;
        }

        if ($request->file('july')) {

            $july = $request->file('july');
            $july2 = "Juli" . "_" . time() . "_" . $july->getClientOriginalName();
            $july->storeAs('juli', $july2, 'public');

            Storage::disk('public')->delete(['juli/' . $ajul]);
        } else {
            $july2 = $ajul;
        }

        if ($request->file('agt')) {

            $agt = $request->file('agt');
            $agt2 = "Agustus" . "_" . time() . "_" . $agt->getClientOriginalName();
            $agt->storeAs('public\agustus', $agt2, 'public');

            Storage::disk('public')->delete(['agustus/' . $agus]);
        } else {
            $agt2 = $agus;
        }
        if ($request->file('sep')) {

            $sep = $request->file('sep');
            $sep2 = "September" . "_" . time() . "_" . $sep->getClientOriginalName();
            $sep->storeAs('september', $sep2, 'public');

            Storage::disk('public')->delete(['september/' . $asep]);
        } else {
            $sep2 = $asep;
        }
        if ($request->file('okt')) {

            $okt = $request->file('okt');
            $okt2 = "Oktober" . "_" . time() . "_" . $okt->getClientOriginalName();
            $okt->storeAs('oktober', $okt2, 'public');

            Storage::disk('public')->delete(['oktober/' . $aokt]);
        } else {
            $okt2 = $aokt;
        }
        if ($request->file('nov')) {

            $nov = $request->file('nov');
            $nov2 = "November" . "_" . time() . "_" . $nov->getClientOriginalName();
            $nov->storeAs('november', $nov2, 'public');

            Storage::disk('public')->delete(['november/' . $anov]);
        } else {
            $nov2 = $anov;
        }
        if ($request->file('des')) {

            $des = $request->file('des');
            $des2 = "Desember" . "_" . time() . "_" . $des->getClientOriginalName();
            $des->storeAs('desember', $des2, 'public');

            Storage::disk('public')->delete(['desember/' . $ades]);
        } else {
            $des2 = $ades;
        }


        Documentation::where('rpdreal_id', $rpdreal->id)->update(
            [
                'januari' => $jan2,
                'febuari' => $feb2,
                'maret' => $mar2,
                'april' => $ap2,
                'mei' => $may2,
                'juni' => $june2,
                'juli' => $july2,
                'agustus' => $agt2,
                'september' => $sep2,
                'oktober' => $okt2,
                'november' => $nov2,
                'desember' => $des2
            ]
        );


        return redirect()->route('data_index');
    }

    /**
     * RestoreAs the specified resource from storage.
     *
     * @param  \App\Models\Rpdreal  $rpdreal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rpdreal $rpdreal, Rpdplan $rpdplan, Documentation $documentation)
    {
        $data = Rpdreal::where('id', $rpdreal->id)->get();
        foreach ($data as $plans) {
            $plan = $plans->rpdplan_id;
        }

        $documentation = Documentation::with('rpdreal')->where('rpdreal_id', $rpdreal->id)->get();
        foreach ($documentation as $a) {
            $doc = $a->rpdreal_id;
            $ajan = $a->januari;
            $afeb = $a->febuari;
            $amar = $a->maret;
            $aap = $a->april;
            $amay = $a->mei;
            $ajun = $a->juni;
            $ajul = $a->juli;
            $agus = $a->agustus;
            $asep = $a->september;
            $aokt = $a->oktober;
            $anov = $a->november;
            $ades = $a->desember;
        }

        Storage::disk('public')->delete(['januari/' . $ajan]);
        Storage::disk('public')->delete(['febuari/' . $afeb]);
        Storage::disk('public')->delete(['maret/' . $amar]);
        Storage::disk('public')->delete(['april/' . $aap]);
        Storage::disk('public')->delete(['mei/' . $amay]);
        Storage::disk('public')->delete(['juni/' . $ajun]);
        Storage::disk('public')->delete(['juli/' . $ajul]);
        Storage::disk('public')->delete(['agustus/' . $agus]);
        Storage::disk('public')->delete(['september/' . $asep]);
        Storage::disk('public')->delete(['oktober/' . $aokt]);
        Storage::disk('public')->delete(['november/' . $anov]);
        Storage::disk('public')->delete(['desember/' . $ades]);

        Rpdplan::destroy($plan);
        Rpdreal::destroy($rpdreal->id);
        Documentation::destroy($rpdreal->rpdreal_id);

        return redirect()->route('data_index')->with('status', 'Data Berhasil Dihapus');
    }
}
