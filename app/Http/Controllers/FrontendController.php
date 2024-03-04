<?php

namespace App\Http\Controllers;

use App\Models\BahasaPemograman;
use App\Models\Biodata;
use App\Models\Contact;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function index($username)
    {
        $data = User::where('username', $username)->first();
        if (!$data) {
            abort(404);
        }
        $biodata = Biodata::where('user_id', $data->id)->first();
        $skill = Skill::where('user_id', $data->id)->limit(3)->get();
        return view('portofolio', [
            'data' => $data,
            'biodata' => $biodata,
            'skill' => $skill,
        ]);
    }
    public function resume($username)
    {
        $data = User::where('username', $username)->first();
        if (!$data) {
            abort(404);
        }
        $biodata = Biodata::where('user_id', $data->id)->first();
        $pengalaman = Pengalaman::where('user_id', $data->id)->orderBy('tahun_mulai', 'desc')->get();
        $pendidikan = Pendidikan::where('user_id', $data->id)->orderBy('tahun_mulai', 'desc')->get();
        $skill = Skill::where('user_id', $data->id)->orderBy('skill', 'asc')->get();
        $pemograman = BahasaPemograman::where('user_id', $data->id)->orderBy('bahasa_pemograman', 'asc')->get();
        return view('resume', [
            'data' => $data,
            'biodata' => $biodata,
            'skill' => $skill,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'pemograman' => $pemograman,
        ]);
    }
    public function project($username)
    {
        $data = User::where('username', $username)->first();
        if (!$data) {
            abort(404);
        }
        $biodata = Biodata::where('user_id', $data->id)->first();
        $project = Project::where('user_id', $data->id)->orderby('id', 'desc')->get();
        return view('project', [
            'data' => $data,
            'biodata' => $biodata,
            'project' => $project,
        ]);
    }
    public function contact($username)
    {
        $data = User::where('username', $username)->first();
        if (!$data) {
            abort(404);
        }
        $biodata = Biodata::where('user_id', $data->id)->first();
        return view('contact', [
            'data' => $data,
            'biodata' => $biodata,
        ]);
    }
    public function contactStore(Request $request, $username)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|between:1,200',
            'phone' => 'required|between:8,15'
        ]);
        $data = User::where('username', $username)->first();
        Contact::create([
            'user_id' => $data->id,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone,
        ]);

        return redirect()->route('portofolio.contact', $username)->with(['success' => 'Berhasil Mengirim Pesan']);
    }
}
