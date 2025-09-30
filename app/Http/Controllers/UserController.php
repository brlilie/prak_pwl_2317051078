<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;



class UserController extends Controller
{
    public $userModel;
    public $kelasModel;
    
    public function create(){
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $data =[
            'title'=>'Create User',
            'kelas'=>$kelas,
        ];
        return view('create_user', $data);
    }

    public function __construct(){
        $this->UserModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function store (Request $request){
        $this->userModel->create([
            'nama'=>$request->input('nama'),
            'nim'=>$request->input('npm'),
            'kelas_id'=>$request->input('kelas_id'),
        ]);
        return redirect()->to('/user');
    }

    public function getUser(){
        return $this->join('kelas', 'kelas.id','=','user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }

    public function index(){
        $data =[
        'title'=>'List User',
        'users'=> $this->UserModel->getUser(),
        ];
        return view('list_user', $data);
        
    }
}
