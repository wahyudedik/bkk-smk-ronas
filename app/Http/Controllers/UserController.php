<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Career;
use App\Models\CareerLink;
use App\Models\Perusahaan;
use App\Models\BiodataUser;
use App\Models\CareerProses;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $careers = Career::with('perusahaan')->get()->keyBy('id');
        $careerLinks = CareerLink::with('perusahaan')->get()->keyBy('id');

        return view('user.career', compact('careers', 'careerLinks'));
    }

    public function showCareerDetail($id)
    {
        $userId = auth()->id();
        $careerProses = CareerProses::where('biodata_user_id', $userId)->get();

        $career = Career::with([
            'perusahaan' => function ($query) {
                $query->select('id', 'nama_perusahaan');
            },
        ])->findOrFail($id);

        $isExpired = Carbon::now()->greaterThan(Carbon::parse($career->batas_waktu));
        $userApplied = CareerProses::where('career_id', $id)
            ->where('biodata_user_id', $userId)
            ->exists();

        if ($userApplied) {
            return redirect()->back()->with('error', 'Anda sudah melamar pekerjaan ini sebelumnya.');
        }

        return view('user.career-details', compact('career', 'isExpired', 'userApplied'));
    }

    public function showBiodataForm($career_id)
    {
        $user = auth()->user();
        $career = Career::findOrFail($career_id);
        $userApplied = CareerProses::where('career_id', $career_id)->where('biodata_user_id', $user->id)->exists();

        return view('user.biodata', compact('user', 'career', 'userApplied'))->with('error', 'Nama Anda Sudah Terdaftar di Pekerjaan ini');
    }
    public function storeBiodata(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:biodata_users,email',
            'nomor_telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'status_alumni' => 'required|string|max:255',
            'pendidikan_terakhir' => 'required|string|max:255',
            'career_id' => 'required|exists:careers,id',
            'pengalaman_kerja' => 'required|string|max:255',
            'pengalaman_organisasi' => 'required|string|max:255',
        ]); 

        $validatedData = $this->handleFileUploads($request, $validatedData);

        $biodata = BiodataUser::create($validatedData);
        $careerProses = CareerProses::create([
            'user_id' => $validatedData['user_id'],
            'biodata_user_id' => $biodata->id,
            'career_id' => $validatedData['career_id'],
            'hasil_administrasi' => 'proses_seleksi',
            'psikotes' => 'proses_seleksi',
            'interview_hrd' => 'proses_seleksi',
            'interview_user' => 'proses_seleksi',
            'tes_kesehatan' => 'proses_seleksi',
            'hasil_akhir' => 'proses_seleksi',
        ]);

        $successMessage = 'Biodata berhasil disimpan.';
        $errorMessage = 'Gagal menyimpan biodata. Silakan coba lagi.';

        return $this->redirectWithFeedback($biodata->wasRecentlyCreated, $successMessage, $errorMessage);
    }

    private function handleFileUploads($request, $validatedData)
    {
        $fileKeys = [
            'cv_pdf',
            'ijazah_pdf',
            'transkrip_nilai_pdf',
            'ktp_pdf',
            'kk_pdf',
            'surat_sehat_pdf',
            'foto_pdf',
            'surat_pengalaman_kerja_pdf',
            'sertifikat_pdf',
            'image',
        ];

        foreach ($fileKeys as $fileKey) {
            if ($request->hasFile($fileKey)) {
                $validatedData[$fileKey] = $request->file($fileKey)->store("public/career/{$validatedData['nama_lengkap']}/{$fileKey}");
            }
        }

        return $validatedData;
    }

    private function redirectWithFeedback($wasRecentlyCreated, $successMessage, $errorMessage)
    {
        $feedback = $wasRecentlyCreated ? 'success' : 'error';
        $toast = true;

        return redirect()->route('career.index')->with([
            'success' => $successMessage,
            'status' => $feedback,
            'toast' => $toast,
        ]);
    }

    public function showCareerLinkDetail($career, $user_id)
    {
        $careerLink = CareerLink::with(['perusahaan' => function ($query) {
            $query->select('id', 'nama_perusahaan');
        }])->findOrFail($career);
        $isExpired = Carbon::now()->greaterThan(Carbon::parse($careerLink->batas_waktu));
        return view('user.careerlink-details', compact('careerLink', 'isExpired'));
    }

    public function faq()
    {
        return view('user.faq');
    }
 
    public function userReport()
    {
        $careerProseses = CareerProses::with('biodataUser', 'career')->get();
        return view('user.report', compact('careerProseses'));
    }

}



