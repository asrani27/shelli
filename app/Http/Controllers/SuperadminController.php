<?php

namespace App\Http\Controllers;

use App\Gaji;
use App\Role;
use App\User;
use App\Hakim;
use App\Jaksa;
use App\Bidang;
use App\Pidana;
use App\Sidang;
use App\Jabatan;
use App\Pangkat;
use App\Pegawai;
use App\Perkara;
use App\Golongan;
use App\Panitera;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class SuperadminController extends Controller
{
    public function beranda()
    {
        return view('superadmin.beranda');
    }

    public function hakim()
    {
        $data = Hakim::orderBy('id', 'DESC')->get();
        return view('superadmin.hakim.index', compact('data'));
    }
    public function hakimcreate()
    {
        $golongan = Golongan::get();
        $jabatan = Jabatan::get();
        return view('superadmin.hakim.create', compact('golongan', 'jabatan'));
    }
    public function hakimstore(Request $req)
    {
        $attr = $req->all();

        Hakim::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/umum/hakim');
    }
    public function hakimedit($id)
    {
        $data = Hakim::find($id);
        $golongan = Golongan::get();
        $jabatan = Jabatan::get();
        return view('superadmin.hakim.edit', compact('data', 'golongan', 'jabatan'));
    }
    public function hakimupdate(Request $req, $id)
    {
        $attr = $req->all();
        Hakim::find($id)->update($attr);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/umum/hakim');
    }
    public function hakimdelete($id)
    {
        Hakim::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function jaksa()
    {
        $data = Jaksa::with('jabatan', 'golongan')->get();
        return view('superadmin.jaksa.index', compact('data'));
    }

    public function jaksacreate()
    {
        $golongan = Golongan::get();
        $jabatan = Jabatan::get();
        return view('superadmin.jaksa.create', compact('golongan', 'jabatan'));
    }
    public function jaksastore(Request $req)
    {
        $attr = $req->all();

        Jaksa::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/umum/jaksa');
    }
    public function jaksaedit($id)
    {
        $data = Jaksa::find($id);
        $golongan = Golongan::get();
        $jabatan = Jabatan::get();
        return view('superadmin.jaksa.edit', compact('data', 'golongan', 'jabatan'));
    }
    public function jaksaupdate(Request $req, $id)
    {
        $attr = $req->all();
        Jaksa::find($id)->update($attr);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/umum/jaksa');
    }
    public function jaksadelete($id)
    {
        Jaksa::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function panitera()
    {
        $data = Panitera::with('jabatan', 'golongan')->get();
        return view('superadmin.panitera.index', compact('data'));
    }

    public function paniteracreate()
    {
        $golongan = Golongan::get();
        $jabatan = Jabatan::get();
        return view('superadmin.panitera.create', compact('golongan', 'jabatan'));
    }
    public function paniterastore(Request $req)
    {
        $attr = $req->all();

        Panitera::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/umum/panitera');
    }
    public function paniteraedit($id)
    {
        $data = Panitera::find($id);
        $golongan = Golongan::get();
        $jabatan = Jabatan::get();
        return view('superadmin.panitera.edit', compact('data', 'golongan', 'jabatan'));
    }
    public function paniteraupdate(Request $req, $id)
    {
        $attr = $req->all();
        Panitera::find($id)->update($attr);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/umum/panitera');
    }
    public function paniteradelete($id)
    {
        Panitera::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function pidana()
    {
        $data = Perkara::where('jenis_perkara', 1)->get();
        return view('superadmin.pidana.index', compact('data'));
    }

    public function pidanahjp($id)
    {
        $data = Perkara::find($id);
        $hakim = Hakim::get();
        $jaksa = Jaksa::get();
        $panitera = Panitera::get();
        return view('superadmin.pidana.hjp', compact('data', 'hakim', 'jaksa', 'panitera'));
    }

    public function updatepidanahjp(Request $req, $id)
    {
        $u = Perkara::find($id);
        $u->hakim_id = $req->hakim_id;
        $u->jaksa_id = $req->jaksa_id;
        $u->panitera_id = $req->panitera_id;
        $u->save();
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/perkara/pidana');
    }

    public function pidanadelete($id)
    {
        if (Perkara::find($id)->sidang == null) {
            Perkara::find($id)->delete();
            toastr()->success('Berhasil dihapus');
            return back();
        } else {
            toastr()->error('Tidak Bisa Di Hapus,karena sudah masuk ke sidang');
            return back();
        }
    }


    public function lanjutsidang($id)
    {
        $data = Perkara::find($id);

        if ($data->jenis_perkara == 1) {
            $menu = 'Pidana';
        } elseif ($data->jenis_perkara == 2) {
            $menu = 'Perdata';
        } elseif ($data->jenis_perkara == 3) {
            $menu = 'Tipikor';
        } elseif ($data->jenis_perkara == 4) {
            $menu = 'PHI';
        }
        if (Sidang::where('perkara_id', $id)->first() == null) {
            $s = new Sidang;
            $s->perkara_id = $id;
            $s->jenis_perkara = $data->jenis_perkara;
            $s->save();
            toastr()->success('Berhasil Di Lanjutkan ke sidang ' . $menu);
            return back();
        } else {
            toastr()->info('Data Ini sudah ada di sidang ' . $menu);
            return back();
        }
    }


    public function perdata()
    {
        $data = Perkara::where('jenis_perkara', 2)->get();
        return view('superadmin.perdata.index', compact('data'));
    }

    public function perdatahjp($id)
    {
        $data = Perkara::find($id);
        $hakim = Hakim::get();
        $jaksa = Jaksa::get();
        $panitera = Panitera::get();
        return view('superadmin.perdata.hjp', compact('data', 'hakim', 'jaksa', 'panitera'));
    }

    public function updateperdatahjp(Request $req, $id)
    {
        $u = Perkara::find($id);
        $u->hakim_id = $req->hakim_id;
        $u->jaksa_id = $req->jaksa_id;
        $u->panitera_id = $req->panitera_id;
        $u->save();
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/perkara/perdata');
    }

    public function perdatadelete($id)
    {
        if (Perkara::find($id)->sidang == null) {
            Perkara::find($id)->delete();
            toastr()->success('Berhasil dihapus');
            return back();
        } else {
            toastr()->error('Tidak Bisa Di Hapus,karena sudah masuk ke sidang');
            return back();
        }
    }

    public function tipikor()
    {
        $data = Perkara::where('jenis_perkara', 3)->get();
        return view('superadmin.tipikor.index', compact('data'));
    }

    public function tipikorhjp($id)
    {
        $data = Perkara::find($id);
        $hakim = Hakim::get();
        $jaksa = Jaksa::get();
        $panitera = Panitera::get();
        return view('superadmin.tipikor.hjp', compact('data', 'hakim', 'jaksa', 'panitera'));
    }

    public function updatetipikorhjp(Request $req, $id)
    {
        $u = Perkara::find($id);
        $u->hakim_id = $req->hakim_id;
        $u->jaksa_id = $req->jaksa_id;
        $u->panitera_id = $req->panitera_id;
        $u->save();
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/perkara/tipikor');
    }

    public function tipikordelete($id)
    {
        if (Perkara::find($id)->sidang == null) {
            Perkara::find($id)->delete();
            toastr()->success('Berhasil dihapus');
            return back();
        } else {
            toastr()->error('Tidak Bisa Di Hapus,karena sudah masuk ke sidang');
            return back();
        }
    }

    public function phi()
    {
        $data = Perkara::where('jenis_perkara', 4)->get();
        return view('superadmin.phi.index', compact('data'));
    }

    public function phihjp($id)
    {
        $data = Perkara::find($id);
        $hakim = Hakim::get();
        $jaksa = Jaksa::get();
        $panitera = Panitera::get();
        return view('superadmin.phi.hjp', compact('data', 'hakim', 'jaksa', 'panitera'));
    }

    public function updatephihjp(Request $req, $id)
    {
        $u = Perkara::find($id);
        $u->hakim_id = $req->hakim_id;
        $u->jaksa_id = $req->jaksa_id;
        $u->panitera_id = $req->panitera_id;
        $u->save();
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/perkara/phi');
    }

    public function phidelete($id)
    {
        if (Perkara::find($id)->sidang == null) {
            Perkara::find($id)->delete();
            toastr()->success('Berhasil dihapus');
            return back();
        } else {
            toastr()->error('Tidak Bisa Di Hapus,karena sudah masuk ke sidang');
            return back();
        }
    }

    public function sidangpdn()
    {
        $data = Sidang::where('jenis_perkara', 1)->get();
        return view('superadmin.sidang.pidana', compact('data'));
    }

    public function sidangpdndelete($id)
    {
        $data = Sidang::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }
    public function sidangpdnedit(Request $req, $id)
    {
        $data = Sidang::find($id);
        return view('superadmin.sidang.trk', compact('data'));
    }

    public function update_trk(Request $req, $id)
    {
        $attr = $req->all();
        $u = Sidang::find($id);
        $u->tanggal_sidang = $req->tanggal_sidang;
        $u->ruangan = $req->ruangan;
        $u->keputusan = $req->keputusan;
        $u->save();

        toastr()->success('Berhasil diupdate');
        if ($req->jenis_perkara == 1) {
            return redirect('/superadmin/sidang/pdn');
        } elseif ($req->jenis_perkara == 2) {
            return redirect('/superadmin/sidang/pdt');
        } elseif ($req->jenis_perkara == 3) {
            return redirect('/superadmin/sidang/tpk');
        } elseif ($req->jenis_perkara == 4) {
            return redirect('/superadmin/sidang/pehai');
        }
        return back();
        dd($attr);
        $data = Sidang::find($id)->update($attr);
    }

    public function sidangpdt()
    {
        $data = Sidang::where('jenis_perkara', 2)->get();
        return view('superadmin.sidang.perdata', compact('data'));
    }

    public function sidangpdtdelete($id)
    {
        $data = Sidang::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }
    public function sidangpdtedit(Request $req, $id)
    {
        $data = Sidang::find($id);
        return view('superadmin.sidang.trk', compact('data'));
    }

    public function sidangtpk()
    {
        $data = Sidang::where('jenis_perkara', 3)->get();
        return view('superadmin.sidang.tipikor', compact('data'));
    }
    public function sidangtpkdelete($id)
    {
        $data = Sidang::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }
    public function sidangtpkedit(Request $req, $id)
    {
        $data = Sidang::find($id);
        return view('superadmin.sidang.trk', compact('data'));
    }

    public function sidangpehai()
    {
        $data = Sidang::where('jenis_perkara', 4)->get();
        return view('superadmin.sidang.phi', compact('data'));
    }
    public function sidangpehaidelete($id)
    {
        $data = Sidang::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }
    public function sidangpehaiedit(Request $req, $id)
    {
        $data = Sidang::find($id);
        return view('superadmin.sidang.trk', compact('data'));
    }

    //Function 
    public function golongan()
    {
        $data = Golongan::orderBy('id', 'DESC')->get();
        return view('superadmin.golongan.index', compact('data'));
    }
    public function golongancreate()
    {
        return view('superadmin.golongan.create');
    }
    public function golonganstore(Request $req)
    {
        $attr = $req->all();
        Golongan::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/umum/golongan');
    }
    public function golonganedit($id)
    {
        $data = Golongan::find($id);
        return view('superadmin.golongan.edit', compact('data'));
    }
    public function golonganupdate(Request $req, $id)
    {
        $attr = $req->all();
        Golongan::find($id)->update($attr);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/umum/golongan');
    }
    public function golongandelete($id)
    {
        Golongan::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function jabatan()
    {
        $data = Jabatan::get();
        return view('superadmin.jabatan.index', compact('data'));
    }
    public function jabatancreate()
    {
        return view('superadmin.jabatan.create');
    }
    public function jabatanstore(Request $req)
    {
        $attr = $req->all();
        Jabatan::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/umum/jabatan');
    }
    public function jabatanedit($id)
    {
        $data = Jabatan::find($id);
        return view('superadmin.jabatan.edit', compact('data'));
    }
    public function jabatanupdate(Request $req, $id)
    {
        $attr = $req->all();
        Jabatan::find($id)->update($attr);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/umum/jabatan');
    }
    public function jabatandelete($id)
    {
        Jabatan::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function daftarPerkara()
    {
        return view('superadmin.perkara.create');
    }

    public function storeDaftarPerkara(Request $req)
    {
        $attr = $req->all();
        Perkara::create($attr);
        if ($req->jenis_perkara == 1) {
            $menu = 'Pidana';
        } elseif ($req->jenis_perkara == 2) {
            $menu = 'Perdata';
        } elseif ($req->jenis_perkara == 3) {
            $menu = 'Tipikor';
        } elseif ($req->jenis_perkara == 4) {
            $menu = 'PHI';
        }
        toastr()->success('Berhasil disimpan, Silahkan ke menu ' . $menu);
        return back();
    }

    public function laporan()
    {
        return view('superadmin.laporan.index');
    }

    public function cetakHakim()
    {
        $data = Hakim::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_hakim', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function cetakJaksa()
    {
        $data = Jaksa::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_jaksa', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function cetakPanitera()
    {
        $data = Panitera::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_panitera', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function cetakDataPidana()
    {
        $data = Perkara::where('jenis_perkara', 1)->get();
        $pdf = PDF::loadView('superadmin.laporan.pidana', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function cetakDataPerdata()
    {
        $data = Perkara::where('jenis_perkara', 2)->get();
        $pdf = PDF::loadView('superadmin.laporan.perdata', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function cetakDataTipikor()
    {
        $data = Perkara::where('jenis_perkara', 3)->get();
        $pdf = PDF::loadView('superadmin.laporan.tipikor', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function cetakDataPhi()
    {
        $data = Perkara::where('jenis_perkara', 4)->get();
        $pdf = PDF::loadView('superadmin.laporan.phi', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }


    public function cetaksidangPidana()
    {
        $data = Sidang::where('jenis_perkara', 1)->get();
        $pdf = PDF::loadView('superadmin.laporan.sidang_pidana', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function cetaksidangPerdata()
    {
        $data = Sidang::where('jenis_perkara', 2)->get();
        $pdf = PDF::loadView('superadmin.laporan.sidang_perdata', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function cetaksidangTipikor()
    {
        $data = Sidang::where('jenis_perkara', 3)->get();
        $pdf = PDF::loadView('superadmin.laporan.sidang_tipikor', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
    public function cetaksidangPhi()
    {
        $data = Sidang::where('jenis_perkara', 4)->get();
        $pdf = PDF::loadView('superadmin.laporan.sidang_phi', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
}
