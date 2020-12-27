<?php

namespace App\Controllers;

use App\Models\SurveyModel;

class Home extends BaseController
{
	protected $surveyModel;
	public function __construct()
	{
		$this->surveyModel = new SurveyModel();
	}

	public function index()
	{
		//koneksi menghitung jumlah yang di sediakan 
		$db     = \Config\Database::connect();
		$builder = $db->table('survey');
		$builder->countAllResults();  // Produces an integer, like 25

		//menghitung jumlah pria dan wanita
		$builder->like('gender', 'laki-laki');
		$pria = $builder->countAllResults();
		$builder->like('gender', 'perempuan');
		$perempuan = $builder->countAllResults();

		//menghitung jumlah jawaban pada pertanyaan pertama
		$builder->like('p1', 'ya');
		$p1Ya = $builder->countAllResults();
		$builder->like('p1', 'tidak');
		$p1Tidak = $builder->countAllResults();

		//menghitunh jumlah jawaban pada pertanyaan kedua
		$builder->like('p2', 'ya');
		$p2Ya = $builder->countAllResults();
		$builder->like('p2', 'tidak');
		$p2Tidak = $builder->countAllResults();

		//menghitung jumlah jawaban pada pertanyaan ketiga
		$builder->like('p3', 'ya');
		$p3Ya = $builder->countAllResults();
		$builder->like('p3', 'tidak');
		$p3Tidak = $builder->countAllResults();

		//menghitung jumlah jawaban pada pertanyaan keempat
		$builder->like('p4', 'tidak pernah');
		$p4satu = $builder->countAllResults();
		$builder->like('p4', 'CodeIgniter');
		$p4dua = $builder->countAllResults();
		$builder->like('p4', 'Laravel');
		$p4tiga = $builder->countAllResults();
		$builder->like('p4', 'Keduanya');
		$p4empat = $builder->countAllResults();

		$data = [
			'title' => 'Dendi-Survey Web',
			'pria' => $pria,
			'wanita' => $perempuan,
			'p1Ya' => $p1Ya,
			'p1Tidak' => $p1Tidak,
			'p2Ya' => $p2Ya,
			'p2Tidak' => $p2Tidak,
			'p3Ya' => $p3Ya,
			'p3Tidak' => $p3Tidak,
			'p4satu' => $p4satu,
			'p4dua' => $p4dua,
			'p4tiga' => $p4tiga,
			'p4empat' => $p4empat
		];

		return view('home/index', $data);
	}

	public function survey()
	{
		//validasi input
		if (!$this->validate([
			'nim' => 'required|is_unique[survey.nim,nim]',
			'nama' => 'required',
			'gender' => 'required',
			'p1' => 'required',
			'p2' => 'required',
			'p3' => 'required',
			'p4' => 'required'
		])) {
			session()->setFlashdata('error', 'NIM sudah melakukan survey, Gunakan NIM Berbeda');

			return redirect()->to('/home')->withInput();
		}

		$this->surveyModel->save([
			'nim' => $this->request->getVar('nim'),
			'nama' => $this->request->getVar('nama'),
			'gender' => $this->request->getVar('gender'),
			'p1' => $this->request->getVar('p1'),
			'p2' => $this->request->getVar('p2'),
			'p3' => $this->request->getVar('p3'),
			'p4' => $this->request->getVar('p4')
		]);

		session()->setFlashdata('pesan', 'Anda telah berpartisipasi dalam survey. Terima Kasih');

		return redirect()->to('/home');
	}
}
