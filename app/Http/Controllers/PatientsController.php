<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index(){
        //menampilkan data pasien dari data base
        $patients = Patients::all();

        $data = [
            'message' => 'Get All Resource',
            'data' => $patients
        ];

        return response()->json($data, 200);

        $patients = Patients::empty();

        $data = [
            'message' => 'Data is empty',
            'data' => $patients
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request) {
        // menangkap data request
        $input = [
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ];

        // menggunakan model patients untuk insert data
        $patients = Patients::create($input);

        $data = [
            'message' => 'Resource is added successfully',
            'data' => $patients,
        ];

        // mengembalikan data (json) dan kode 201
        return response()->json($data, 201);
    }

    public function show(){
        //menampilkan data pasien dari data base
        $patients = Patients::all();

        $data = [
            'message' => 'Get Detail Resource',
            'data' => $patients
        ];

        return response()->json($data, 200);

        $patients = Patients::all();

        $data = [
            'message' => 'Resource Not Found',
            'data' => $patients
        ];

        return response()->json($data, 404);

    }

    public function update($id){
        echo "menampilkan single resource yang di-update id $id";
    }

    public function destroy($id){
        echo "menampilkan data yang terhapus id $id";
    }

    public function search(){
        echo "menampilkan semua resource yang berhasil dicari";
    }

    public function positive(){
        echo "menampilkan total resource yang positif";
        echo "menampilkan semua resource yang positif";
    }

    public function recovered(){
        echo "menampilkan total resource yang sembuh";
        echo "menampilkan semua resource yang sembuh";
    }

    public function dead(){
        echo "menampilkan total resource yang meninggal";
        echo "menampilkan semua resource yang meninggal";
    }
}

