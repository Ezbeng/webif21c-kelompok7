<?php

namespace App\Controllers;
use App\Models\BarangModel;
class Home extends BaseController
{
    public function index()
    {
        return view('halaman-login');
    }
    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $userModel = new \App\Models\UsersModel();
        $user = $userModel->where('username', $username)->first();
        $pass = $userModel->where('password', $password)->first();
        if ($user && $pass) {
            $_SESSION['user'] = $user;
            session()->remove('error');
            return redirect()->to('dashboard-home');
        } else {
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('/');
        }
    }
    public function homepage()
    {
        $barangModel = new BarangModel();
        $data['barang'] = $barangModel->getBarang();

        return view('dashboard-home', $data);
    }
    public function datapage()
    {
        return view('data-home');
    }
    public function inventarispage()
    {
        return view('inventaris-home');
    }
    public function userpage()
    {
        $usersModel = new \App\Models\UsersModel();
        $data['users'] = $usersModel->findAll();
        return view('user-home',$data);
    }
    public function statspage()
    {
        return view('stats-home');
    }

    public function tambahdata()
    {
        // Ambil data dari form menggunakan metode POST
        $no = $this->request->getPost('no');
        $nama = $this->request->getPost('nama');
        $harga = $this->request->getPost('harga');
        $jumlah = $this->request->getPost('jumlah');
        $keterangan = $this->request->getPost('keterangan');

        // Validasi data jika diperlukan
        // ...

        // Masukkan data ke dalam database menggunakan model
        $formModel = new BarangModel();
        $data = [
            'no' => $no,
            'nama' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'keterangan' => $keterangan,
        ];
        $formModel->insert($data);
        return redirect()->to('/dashboard-home');

        // Tampilkan pesan atau lakukan tindakan lain setelah berhasil memasukkan data ke database
        // ...

        // Redirect ke halaman lain jika diperlukan
        // ...
    }
    
    public function hapusdata()
    {
        $nama = $this->request->getPost('nama');

        if (!empty($nama)) {
            $namaArr = json_decode($nama, true);
            if (is_array($namaArr)) {
                $formModel = new BarangModel();
                $formModel->whereIn('nama', $namaArr)->delete();
            }
        }

        // Redirect ke halaman lain setelah penghapusan berhasil
        return redirect()->to('/dashboard-home');
    }
    public function updatedata()
    {
        $no = $this->request->getPost('no');
        $nama = $this->request->getPost('nama');
        $harga = $this->request->getPost('harga');
        $jumlah = $this->request->getPost('jumlah');
        $keterangan = $this->request->getPost('keterangan');

        // Lakukan validasi data

        // Lakukan pembaruan data di database
        $formModel = new BarangModel();
        $data = [
            'nama' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'keterangan' => $keterangan
        ];
        $formModel->where('no', $no)->set($data)->update();

        // Redirect ke halaman lain setelah pembaruan berhasil
        return redirect()->to('/dashboard-home');
    }


}
