<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use App\Models\Job;
use App\Models\Rpdplan;
use App\Models\Rpdreal;
use App\Models\User;
use Illuminate\Http\Request;

class RpdplansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::get();
        $job = Job::get();

        return view('admin.perencanaan.tambah', compact('user', 'job'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $rpdplan = new Rpdplan();
        $rpdplan->user_id = $data['nama'];
        $rpdplan->job_id = $data['job'];
        $rpdplan->januari = str_replace(',', '', $data['plan_januari']);
        $rpdplan->febuari = str_replace(',', '', $data['plan_febuari']);
        $rpdplan->maret = str_replace(',', '', $data['plan_maret']);
        $rpdplan->april = str_replace(',', '', $data['plan_april']);
        $rpdplan->mei = str_replace(',', '', $data['plan_mei']);
        $rpdplan->juni = str_replace(',', '', $data['plan_juni']);
        $rpdplan->juli = str_replace(',', '', $data['plan_juli']);
        $rpdplan->agustus = str_replace(',', '', $data['plan_agustus']);
        $rpdplan->september = str_replace(',', '', $data['plan_september']);
        $rpdplan->oktober = str_replace(',', '', $data['plan_oktober']);
        $rpdplan->november = str_replace(',', '', $data['plan_november']);
        $rpdplan->desember = str_replace(',', '', $data['plan_desember']);
        $rpdplan->save();

        $rpdreal = new Rpdreal();
        $rpdreal->rpdplan_id = $rpdplan->id;
        $rpdreal->januari = str_replace(',', '', $data['januari']);
        $rpdreal->febuari = str_replace(',', '', $data['febuari']);
        $rpdreal->maret = str_replace(',', '', $data['maret']);
        $rpdreal->april = str_replace(',', '', $data['april']);
        $rpdreal->mei = str_replace(',', '', $data['mei']);
        $rpdreal->juni = str_replace(',', '', $data['juni']);
        $rpdreal->juli = str_replace(',', '', $data['juli']);
        $rpdreal->agustus = str_replace(',', '', $data['agustus']);
        $rpdreal->september = str_replace(',', '', $data['september']);
        $rpdreal->oktober = str_replace(',', '', $data['oktober']);
        $rpdreal->november = str_replace(',', '', $data['november']);
        $rpdreal->desember = str_replace(',', '', $data['desember']);
        $rpdreal->save();

        if (strlen($request->file('jan') > 0)) {
            $jan = $request->file('jan');
            $jan2 = "Januari" . "_" . time() . "_" . $jan->getClientOriginalName();
            $jan->storeAs('januari', $jan2, 'public');
            // $simpanjan = $request->file('jan')->storeAs('jan', $jan2, 'public');
        } else {
            $jan2 = null;
        }
        if (strlen($request->file('feb') > 0)) {
            $feb = $request->file('feb');
            $feb2 = "Febuari" . "_" . time() . "_" . $feb->getClientOriginalName();
            $feb->storeAs('febuari', $feb2, 'public');
            // $simpanfeb = $request->file('feb')->storeAs('feb', $feb2, 'public');
        } else {
            $feb2 = null;
        }
        if (strlen($request->file('mar') > 0)) {

            $mar = $request->file('mar');
            $mar2 = "Maret" . "_" . time() . "_" . $mar->getClientOriginalName();
            $mar->storeAs('maret', $mar2, 'public');
            // $simpanmar = $request->file('mar')->storeAs('mar', $mar2, 'public');
        } else {
            $mar2 = null;
        }
        if (strlen($request->file('ap') > 0)) {

            $ap = $request->file('ap');
            $ap2 = "April" . "_" . time() . "_" . $ap->getClientOriginalName();
            $ap->storeAs('april', $ap2, 'public');
            // $simpanap = $request->file('ap')->storeAs('ap', $ap2, 'public');
        } else {
            $ap2 = null;
        }
        if (strlen($request->file('may') > 0)) {
            $may = $request->file('may');
            $may2 = "Mei" . "_" . time() . "_" . $may->getClientOriginalName();
            $may->storeAs('mei', $may2, 'public');
            // $simpanmay = $request->file('may')->storeAs('may', $may2, 'public');
        } else {
            $may2 = null;
        }
        if (strlen($request->file('june') > 0)) {
            $june = $request->file('june');
            $june2 = "Juni" . "_" . time() . "_" . $june->getClientOriginalName();
            $june->storeAs('juni', $june2, 'public');
            // $simpanjune = $request->file('june')->storeAs('june', $jun2, 'public');
        } else {
            $june2 = null;
        }
        if (strlen($request->file('july') > 0)) {
            $july = $request->file('july');
            $july2 = "July" . "_" . time() . "_" . $july->getClientOriginalName();
            $july->storeAs('juli', $july2, 'public');
            // $simpanjuly = $request->file('july')->storeAs('july', $july2, 'public');
        } else {
            $july2 = null;
        }
        if (strlen($request->file('agt') > 0)) {
            $agt = $request->file('agt');
            $agt2 = "Agustus" . "_" . time() . "_" . $agt->getClientOriginalName();
            $agt->storeAs('agustus', $agt2, 'public');
            // $simpanagt = $request->file('agt')->storeAs('agt', $agt2, 'public');
        } else {
            $agt2 = null;
        }
        if (strlen($request->file('sep') > 0)) {
            $sep = $request->file('sep');
            $sep2 = "September" . "_" . time() . "_" . $sep->getClientOriginalName();
            $sep->storeAs('september', $sep2, 'public');
            // $simpansep = $request->file('sep')->storeAs('sep', $sep2, 'public');
        } else {
            $sep2 = null;
        }
        if (strlen($request->file('okt') > 0)) {
            $okt = $request->file('okt');
            $okt2 = "Oktober" . "_" . time() . "_" . $okt->getClientOriginalName();
            $okt->storeAs('oktober', $okt2, 'public');
            // $simpanokt = $request->file('okt')->storeAs('okt', $okt2, 'public');
        } else {
            $okt2 = null;
        }
        if (strlen($request->file('nov') > 0)) {
            $nov = $request->file('nov');
            $nov2 = "November" . "_" . time() . "_" . $nov->getClientOriginalName();
            $nov->storeAs('november', $nov2, 'public');
            // $simpannov = $request->file('nov')->storeAs('nov', $nov2, 'public');
        } else {
            $nov2 = null;
        }
        if (strlen($request->file('des') > 0)) {
            $des = $request->file('des');
            $des2 = "Desember" . "_" . time() . "_" . $des->getClientOriginalName();
            $des->storeAs('desember', $des2, 'public');
        } else {
            $des2 = null;
        }

        $documentation = new Documentation();
        $documentation->rpdreal_id = $rpdreal->id;
        $documentation->januari = $jan2;
        $documentation->febuari = $feb2;
        $documentation->maret = $mar2;
        $documentation->april = $ap2;
        $documentation->mei = $may2;
        $documentation->juni = $june2;
        $documentation->juli = $july2;
        $documentation->agustus = $agt2;
        $documentation->september = $sep2;
        $documentation->oktober = $okt2;
        $documentation->november = $nov2;
        $documentation->desember = $des2;
        $documentation->save();

        return redirect()->route('data_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rpdplan  $rpdplan
     * @return \Illuminate\Http\Response
     */
    public function show(rpdplan $rpdplan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rpdplan  $rpdplan
     * @return \Illuminate\Http\Response
     */
    public function edit(rpdplan $rpdplan)
    {
        $user = User::get();
        $job = Job::get();
        $item = Rpdplan::with('job', 'user', 'rpdreal')->where('id', $rpdplan->id)->get();
        return view('admin.perencanaan.edit', compact('rpdplan', 'item', 'job', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rpdplan  $rpdplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rpdplan $rpdplan)
    {
        Rpdplan::where('id', $rpdplan->id)
            ->update([
                'user_id' => $request->nama,
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

        return view('admin.data');
    }


    /**
     * RestoreAs the specified resource from storage.
     *
     * @param  \App\Models\rpdplan  $rpdplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(rpdplan $rpdplan)
    {
        //
    }
}
