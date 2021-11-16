<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentationsController extends Controller
{
    public function showjanuari(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $ajan = $a->januari;
        }
        $periksajanuari   =  Storage::mimeType('public/januari/' . $ajan);
        if ($documentation->januari == true) {
            return view('admin.dokumentasi.januari', compact('periksajanuari', 'ajan'));
        }

        return back();
    }

    public function showfebuari(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->febuari;
        }
        $mime   =  Storage::mimeType('public/febuari/' . $dokumentasi);
        if ($documentation->febuari == true) {
            return view('admin.dokumentasi.febuari', compact('mime', 'dokumentasi'));
        }
        return back();
    }

    public function showmaret(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->maret;
        }
        $mime   =  Storage::mimeType('public/maret/' . $dokumentasi);
        if ($documentation->maret == true) {
            return view('admin.dokumentasi.maret', compact('mime', 'dokumentasi'));
        }
        return back();
    }
    public function showapril(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->april;
        }
        $mime   =  Storage::mimeType('public/april/' . $dokumentasi);
        if ($documentation->april == true) {
            return view('admin.dokumentasi.april', compact('mime', 'dokumentasi'));
        }
        return back();
    }
    public function showmei(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->mei;
        }
        $mime   =  Storage::mimeType('public/mei/' . $dokumentasi);
        if ($documentation->mei == true) {
            return view('admin.dokumentasi.mei', compact('mime', 'dokumentasi'));
        }
        return back();
    }

    public function showjuni(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->juni;
        }
        $mime   =  Storage::mimeType('public/juni/' . $dokumentasi);
        if ($documentation->juni == true) {
            return view('admin.dokumentasi.juni', compact('mime', 'dokumentasi'));
        }
        return back();
    }
    public function showjuli(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->juli;
        }
        $mime   =  Storage::mimeType('public/juli/' . $dokumentasi);
        if ($documentation->juli == true) {
            return view('admin.dokumentasi.juli', compact('mime', 'dokumentasi'));
        }
        return back();
    }
    public function showagustus(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->agustus;
        }
        $mime   =  Storage::mimeType('public/agustus/' . $dokumentasi);
        if ($documentation->agustus == true) {
            return view('admin.dokumentasi.agustus', compact('mime', 'dokumentasi'));
        }
        return back();
    }
    public function showseptember(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->september;
        }
        $mime   =  Storage::mimeType('public/september/' . $dokumentasi);
        if ($documentation->september == true) {
            return view('admin.dokumentasi.september', compact('mime', 'dokumentasi'));
        }
        return back();
    }
    public function showoktober(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->oktober;
        }
        $mime   =  Storage::mimeType('public/oktober/' . $dokumentasi);
        if ($documentation->oktober == true) {
            return view('admin.dokumentasi.oktober', compact('mime', 'dokumentasi'));
        }
        return back();
    }
    public function shownovember(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->november;
        }
        $mime   =  Storage::mimeType('public/november/' . $dokumentasi);
        if ($documentation->november == true) {
            return view('admin.dokumentasi.november', compact('mime', 'dokumentasi'));
        }
        return back();
    }
    public function showdesember(Documentation $documentation)
    {
        $periksa = Documentation::where('id', $documentation->id)->get();
        foreach ($periksa as $a) {
            $dokumentasi = $a->desember;
        }
        $mime   =  Storage::mimeType('public/desember/' . $dokumentasi);
        if ($documentation->desember == true) {
            return view('admin.dokumentasi.desember', compact('mime', 'dokumentasi'));
        }
        return back();
    }
}
