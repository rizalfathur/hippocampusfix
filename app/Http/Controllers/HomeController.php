<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = auth()->user()->role;
        if ($role == 'admin') {

            return view('admin.home_admin');
        }
        if ($role == 'user') {

            return view('home');
        }
    }

    public function ujian()
    {
        $ujian = DB::table('ujian')->where('status','belum')->get();
        $ujianOg = DB::table('ujian')->where('status','selesai')->get();
        return view('ujian', ['ujian' => $ujian, 'ujianOg' => $ujianOg]);
    }

    public function tryOut()
    {
        $ujian = DB::table('ujian')->where('id','4')->get();
        return view('try_out', ['ujian' => $ujian]);
    }

    public function tryOut2()
    {
        $ujian = DB::table('ujian')->where('id','4')->get();
        return view('try_out2', ['ujian' => $ujian]);
    }

    public function hasilPg()
    {
        $user = DB::table('users')->where('role', 'user')->get();
        return view('hasilPg', ['user'=>$user]);
    }

    public function materi()
    {
        $materi = DB::table('materi')->get();
        return view('materi', ['materi' => $materi]);
    }

    public function bso()
    {
        $bank_soal = DB::table('bank_soal')->get();
        return view('bso', ['bank_soal' => $bank_soal]);
    }
    
    public function video()
    {
        $video = DB::table('video')->get();
        return view('video', ['video' => $video]);
    }

    public function vdet()
    {
        return view('vdet');
    }

    public function editprof(Request $request)
    {
        return view('editprof', ['users' => $request->user()]);
    }
    
    public function updateprof(Request $request)
    {
        $user = auth()->user();
        $user->update([
            'name'=> $request->name,
            'role'=> $request->role,
            'email' => $request->email,
            // 'password' => $request->password
        ]);

        return redirect()->route('editprof');
    }

    // ADMIN-CONTROLLER
    // READ DATA
    
    public function homeAdmin()
    {
        return view('admin.home_admin');
    }
    
    public function adminUjian()
    {
        $ujian = DB::table('ujian')->get();
        return view('admin.admin_ujian', ['ujian'=>$ujian]);
    }
    
    public function adminHu()
    {
        $user = DB::table('users')->where('role', 'user')->get();
        return view('admin.admin_hu', ['user'=>$user]);
    }
    
    public function materiAdmin()
    {
        $materi = DB::table('materi')->get();
        return view('admin.admin_materi', ['materi' => $materi]);

    }

    public function adminBso()
    {
        $bank_soal = DB::table('bank_soal')->get();
        return view('admin.admin_bso', ['bank_soal' => $bank_soal]);
    }

    public function adminVideo()
    {
        $video = DB::table('video')->get();
        return view('admin.admin_video', ['video' => $video]);
    }

    public function manageUser()
    {
        $users = DB::table('users')->get();
        return view('admin.managemen_user', ['users' => $users]);
    }

// MATERI
// CREATE

    public function showAddMateri()
    {
        return view('admin.add_materi');
    }
    
    public function addMateri(Request $request)
    {
        DB::table('materi')->insert([
            'nama'=> $request->nama,
            'kategori'=>$request->kategori,
            'tahun' =>$request->tahun,
            'url' => $request->url,
        ]);

        return redirect()->route('materiAdmin');
    }

    // DELETE
    public function deleteMateri($id)
    {
        DB::table('materi')->where('id', $id)->delete();
        return redirect()->route('materiAdmin');
    }
    
    public function deleteSoal($id)
    {
        DB::table('bank_soal')->where('id', $id)->delete();
        return redirect()->route('bsoAdmin');
    }

    public function deleteUser($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('manageUser');
    }

    public function deleteVideo($id)
    {
        DB::table('video')->where('id', $id)->delete();
        return redirect()->route('videoAdmin');
    }

    public function deleteUJian($id)
    {
        DB::table('ujian')->where('id', $id)->delete();
        return redirect()->route('ujianAdmin');
    }


    // VIDEO
    // CREATE
    public function showAddVideo()
    {
        return view('admin.add_video');
    }
    
    public function addVideo(Request $request)
    {
        DB::table('video')->insert([
            'judul'=> $request->judul,
            'description'=>$request->description,
            'url' => $request->url,
        ]);

        return redirect()->route('videoAdmin');
    }

    // BANK SOAL
    // CREATE
    public function showAddbso()
    {
        return view('admin.add_bso');
    }
    
    public function addBso(Request $request)
    {
        DB::table('bank_soal')->insert([
            'nama'=> $request->nama,
            'tahun'=>$request->tahun,
            'jumlah_soal'=>$request->jumlah_soal,
            'url' => $request->url,
        ]);

        return redirect()->route('bsoAdmin');
    }

    public function showAddujian()
    {
        return view('admin.add_ujian');
    }

    public function addUjian(Request $request)
    {
        DB::table('ujian')->insert([
            'judul'=> $request->judul,
            'waktu'=>$request->waktu,
            'jumlah_soal'=>$request->jumlah_soal,
            'url' => $request->url,
            'tanggal_ujian' => $request->tanggal_ujian,
            'status' => $request->status,
        ]);

        return redirect()->route('ujianAdmin');
    }

    // UPDATE
    public function editMateri($id)
    {
       $materi = DB::table('materi')->where('id',$id)->first();
       return view('admin.edit_materi', ['materi' => $materi]);
    }

    public function updateMateri(Request $request)
    {
        
        DB::table('materi')->where('id', $request->id)->update([
            'nama'=> $request->nama,
            'kategori'=> $request->kategori,
            'tahun'=> $request->tahun,
            'url' => $request->url,
        ]);

        return redirect()->route('materiAdmin');
    }

    public function editUjian($id)
    {
       $ujian = DB::table('ujian')->where('id',$id)->first();
       return view('admin.edit_ujian', ['ujian' => $ujian]);
    }

    public function updateUjian(Request $request)
    {
        
        DB::table('ujian')->where('id', $request->id)->update([
            'judul'=> $request->judul,
            'waktu'=> $request->waktu,
            'jumlah_soal'=> $request->jumlah_soal,
            'tanggal_ujian'=> $request->tanggal_ujian,
            'url' => $request->url,
            'status' => $request->status,
        ]);

        return redirect()->route('ujianAdmin');
    }


    public function editSoal($id)
    {
       $bank_soal = DB::table('bank_soal')->where('id',$id)->first();
       return view('admin.edit_bso', ['bank_soal' => $bank_soal]);
    }

    public function updateSoal(Request $request)
    {
        
        DB::table('bank_soal')->where('id', $request->id)->update([
            'nama'=> $request->nama,
            'tahun'=> $request->tahun,
            'jumlah_soal'=> $request->jumlah_soal,
            'url' => $request->url,
        ]);

        return redirect()->route('bsoAdmin');
    }

    public function editUser($id)
    {
       $user = DB::table('users')->where('id',$id)->first();
       return view('admin.edit_user', ['users' => $user]);
    }

    public function updateUser(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'name'=> $request->name,
            'role'=> $request->role,
            'email'=> $request->email,
        ]);

        return redirect()->route('manageUser');
    }

    public function editVideo($id)
    {
       $video = DB::table('video')->where('id',$id)->first();
       return view('admin.edit_video', ['video' => $video]);
    }

    public function updateVideo(Request $request)
    {
        
        DB::table('video')->where('id', $request->id)->update([
            'judul'=> $request->judul,
            'description'=> $request->description,
            'url'=> $request->url,
        ]);

        return redirect()->route('videoAdmin');
    }
}
