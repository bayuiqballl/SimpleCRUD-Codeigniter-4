<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelmahasiswa;

class Mahasiswa extends Controller
{


    public function index()
    {
        $mhs = new Modelmahasiswa();
        $data = [
            'tampildata' => $mhs->tampilData()->getResult()
        ];
        echo View('viewtampilmahasiswa', $data);
    }

    public function formtambah()
    {
        helper('form');
        echo View('viewformtambah');
    }

    public function simpandata()
    {
        $data =  [
            'nama' => $this->request->getpost('nama'),
            'nrp' => $this->request->getpost('nrp'),
            'email' => $this->request->getpost('email'),
            'jurusan' => $this->request->getpost('jurusan')
        ];

        $mhs = new Modelmahasiswa();
        $simpan = $mhs->simpan($data);

        if ($simpan) {
            return redirect()->to('/mahasiswa/index');
        }
    }

    function hapus()
    {
        $uri = service('uri');
        $id = $uri->getSegment('3');

        $mhs = new Modelmahasiswa();
        $mhs->hapusdata($id);
        return redirect()->to('/mahasiswa/index');
    }

    function formedit()
    {
        helper('form');
        $uri = service('uri');
        $id = $uri->getSegment('3');
        $mhs = new Modelmahasiswa();
        $ambildata = $mhs->ambildata($id);

        if (count($ambildata->getResult()) > 0) {
            $row = $ambildata->getRow();
            $data = [
                'id' => $id,
                'nama' => $row->nama,
                'nrp' => $row->nrp,
                'email' => $row->email,
                'jurusan' => $row->jurusan
            ];

            echo View('viewformedit', $data);
        }
    }

    public function updatedata()
    {
        $mhs = new Modelmahasiswa();
        $id =  $this->request->getpost('id');
        $data =  [
            'nama' => $this->request->getpost('nama'),
            'nrp' => $this->request->getpost('nrp'),
            'email' => $this->request->getpost('email'),
            'jurusan' => $this->request->getpost('jurusan')
        ];


        $update = $mhs->editdata($data, $id);

        if ($update) {
            return redirect()->to('/mahasiswa/index');
        }
    }
}
