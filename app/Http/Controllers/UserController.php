<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    /**
     * Form create user
     */
    public function create()
    {
        $kelas = $this->kelasModel->all();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    /**
     * Simpan user baru
     */
    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user');
    }

    /**
     * Tampilkan list user dengan relasi kelas
     */
    public function index()
    {
        $users = $this->userModel->with('kelas')->get();

        $data = [
            'title' => 'List User',
            'users' => $users,
        ];

        return view('list_user', $data);
    }
}
