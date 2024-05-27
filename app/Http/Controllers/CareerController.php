<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\CareerLink;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = \App\Models\Career::all();
        $careerLinks = \App\Models\CareerLink::all();
        return view('admin.career.allCareer', compact('careers', 'careerLinks'));
    }

    public function create()
    {
        $perusahaan = \App\Models\Perusahaan::all();
        return view('admin.career.create', compact('perusahaan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'perusahaan_id' => 'required|exists:perusahaan,id',
            'jabatan' => 'required|string|max:255',
            'description' => 'required|string',
            'gaji' => 'required|string', // Validasi sebagai string karena inputan awalnya berformat Rp
            'jenis_karyawan' => 'required|string',
            'batas_waktu' => 'required|date'
        ]);

        $career = new \App\Models\Career([
            'perusahaan_id' => $request->perusahaan_id,
            'jabatan' => $request->jabatan,
            'description' => $request->description,
            'gaji' => $this->parseGaji($request->gaji),
            'jenis_karyawan' => $request->jenis_karyawan,
            'batas_waktu' => $request->batas_waktu
        ]);

        $career->save();

        return redirect()->route('admin.career')->with('success', 'Data karir berhasil disimpan.');
    }

    private function parseGaji($gaji)
    {
        return preg_replace('/[Rp. ,]/', '', $gaji);
    }

    public function delete($id)
    {
        $career = \App\Models\Career::find($id);
        if (!$career) {
            return redirect()->route('admin.career')->with('error', 'Karir tidak ditemukan.');
        }

        $career->delete();
        return redirect()->route('admin.career')->with('success', 'Karir berhasil dihapus.');
    }

    //career link
    public function createLink()
    {
        $perusahaan = \App\Models\Perusahaan::orderBy('nama_perusahaan', 'asc')->get();
        return view('admin.career.link', compact('perusahaan'));
    }

    public function storeLink(Request $request)
    {
        $this->validateRequest($request);

        $careerLink = $this->createCareerLink($request);

        $careerLink->save();

        return redirect()->route('admin.career')->with('success', 'Link karir berhasil dibuat.');
    }

    private function validateRequest($request)
    {
        $request->validate([
            'perusahaan_id' => 'required|exists:perusahaan,id',
            'jabatan' => 'required|string|max:255',
            'description' => 'required|string',
            'gaji' => 'required|numeric',
            'jenis_karyawan' => 'required|string',
            'apply_url' => 'required|url',
            'batas_waktu' => 'nullable|date'
        ]);
    }

    private function createCareerLink($request)
    {
        return new CareerLink([
            'perusahaan_id' => $request->perusahaan_id,
            'jabatan' => $request->jabatan,
            'description' => $request->description,
            'gaji' => $request->gaji,
            'jenis_karyawan' => $request->jenis_karyawan,
            'apply_url' => $request->apply_url,
            'batas_waktu' => $request->batas_waktu ? $request->batas_waktu : null  // Memastikan nilai null jika tidak ada data
        ]);
    }

    public function deleteLink($id)
    {
        $careerLink = \App\Models\CareerLink::find($id);
        if (!$careerLink) {
            return redirect()->route('admin.career')->with('error', 'Link karir tidak ditemukan.');
        }

        try {
            $careerLink->delete();
            return redirect()->route('admin.career')->with('success', 'Link karir berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.career')->with('error', 'Gagal menghapus link karir.');
        }
    }

    public function indexPerusahaan()
    {
        $perusahaan = \App\Models\Perusahaan::all();
        return view('admin.career.perusahaan', compact('perusahaan'));
    }

    public function storePerusahaan(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|numeric',
            'email' => 'required|email',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $perusahaan = new \App\Models\Perusahaan([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/career');
            $perusahaan->logo = $logoPath;
        }

        if ($request->hasFile('gallery')) {
            $galleryPaths = $request->file('gallery')->store('public/career');
            $perusahaan->gallery = $galleryPaths;
        }

        $perusahaan->save();

        if ($perusahaan->save()) {
            return redirect()->route('perusahaan')->with('success', 'Perusahaan berhasil ditambahkan.');
        } else {
            return redirect()->route('perusahaan')->with('error', 'Gagal menambahkan perusahaan.');
        }
    }

    public function deletePerusahaan($id)
    {
        $perusahaan = \App\Models\Perusahaan::find($id);
        if (!$perusahaan) {
            return redirect()->route('admin.career.perusahaan')->with('error', 'Perusahaan tidak ditemukan.');
        }

        if ($perusahaan->logo) {
            \Illuminate\Support\Facades\Storage::delete($perusahaan->logo);
        }

        if ($perusahaan->gallery) {
            \Illuminate\Support\Facades\Storage::delete($perusahaan->gallery);
        }

        $perusahaan->delete();

        return redirect()->route('perusahaan')->with('success', 'Perusahaan berhasil dihapus.');
    }

    //career seleksi
    public function indexSeleksi()
    {
        $seleksis = \App\Models\CareerProses::all();
        return view('admin.career.seleksi', compact('seleksis'));
    }
     public function editSeleksi($id)
    {
        $seleksi = \App\Models\CareerProses::find($id);
        if (!$seleksi) {
            return redirect()->route('admin.career.seleksi')->with('error', 'Seleksi karir tidak ditemukan.');
        }
        return view('admin.career.seleksiEdit', compact('seleksi'));
    }

    public function updateSeleksi(Request $request, $id)
    {
        $seleksi = \App\Models\CareerProses::find($id);
        if (!$seleksi) {
            return redirect()->route('admin.career.seleksi')->with('error', 'Seleksi karir tidak ditemukan.');
        }

        $seleksi->update([
            'hasil_administrasi' => $request->hasil_administrasi,
            'psikotes' => $request->psikotes,
            'interview_hrd' => $request->interview_hrd,
            'interview_user' => $request->interview_user,
            'tes_kesehatan' => $request->tes_kesehatan,
            'hasil_akhir' => $request->hasil_akhir,
        ]);

        return redirect()->route('admin.career.seleksi')->with('success', 'Seleksi karir berhasil diperbarui.');
    }

    public function deleteSeleksi($id)
    {
        $seleksi = \App\Models\CareerProses::find($id);
        if (!$seleksi) {
            return redirect()->route('admin.career.seleksi')->with('error', 'Seleksi karir tidak ditemukan.');
        }
        $seleksi->delete();
        
        $biodatauserid = \App\Models\BiodataUser::where('id', $id)->first();
        if ($biodatauserid) {
            $nama_lengkap = $biodatauserid->nama_lengkap;
            $files = \Illuminate\Support\Facades\Storage::files("public/career/{$nama_lengkap}");
            \Illuminate\Support\Facades\Storage::delete($files);
            $biodatauserid->delete();
        }
        return redirect()->route('admin.career.seleksi')->with('success', 'Seleksi karir berhasil dihapus.');
    }
}
