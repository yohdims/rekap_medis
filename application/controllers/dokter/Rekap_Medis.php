<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap_Medis extends CI_Controller {
	var $hak_akses='dokter';
	var $link='rekap_medis';
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		if(empty($this->session->userdata('username'))){
			redirect('auth');
		}
	}

	public function index()
	{
		// $data['barang']= $this->Model_Barang->getAllBarang();
		$this->data['judul_tab']='Data Rekap Medis';
		$this->data['title']='Data Rekap Medis';
		$this->data['pasien']=$this->M_Pasien->getAll();
		$this->data['isi'] = $this->load->view($this->link.'/index',$this->data,TRUE);

		$this->load->view('template/v_layout_utama',$this->data);
	}
	public function lihat($id)
	{
		$status='Periksa';
		$rekap_medis=$this->M_Rekap_Medis->getID($id);
	
			$this->data['judul_tab']='Form Rekap Medis';
			$this->data['title']='Rekap Medis';
			$this->data['halaman']='lihat';
			

			$this->data['rekap_medis_pasien']=$this->M_Pendaftaran->getPasien($rekap_medis->id_pasien);
			$this->data['rekap_medis']=$rekap_medis;
			$this->data['resep_obat']=$this->M_Resep_Obat->getID($id);
			$this->data['diagnosa']=$this->M_Diagnosa->getID($id);
			$this->data['file']=$this->M_Penunjang->getAll($id);
			
			$this->data['isi'] = $this->load->view($this->link.'/lihat',$this->data,TRUE);

		$this->load->view('template/v_layout_utama',$this->data);
	}
	public function periksa($id)
	{
		$status='Periksa';
		$rekap_medis=$this->M_Rekap_Medis->getID($id);
		
		$data = array('id_pendaftaran' => $rekap_medis->id_pendaftaran, 'status'=>$status);
			$this->M_Pendaftaran->update($data);
	
			$this->data['judul_tab']='Form Rekap Medis';
			$this->data['title']='Rekap Medis';
			
			$this->data['rekap_medis_pasien']=$this->M_Pendaftaran->getPasien($rekap_medis->id_pasien);
			$this->data['rekap_medis']=$rekap_medis;
			$this->data['halaman']='periksa';
			$this->data['resep_obat']=$this->M_Resep_Obat->getID($id);
			$this->data['diagnosa']=$this->M_Diagnosa->getID($id);
			$this->data['file']=$this->M_Penunjang->getAll($id);
			
			$this->data['isi'] = $this->load->view($this->link.'/periksa_dokter',$this->data,TRUE);

		$this->load->view('template/v_layout_utama',$this->data);
	}
	public function pasien($id)
	{

			$this->data['judul_tab']='Form Rekap Medis';
			$this->data['title']='Rekap Medis';
			
			
			$this->data['rekap_medis']=$this->M_Rekap_Medis->getPasien($id);
			$this->data['pasien']=$this->M_Pasien->getID($id);
			$this->data['tahun']=$this->M_Rekap_Medis->getGroupByTahun($id);
			$this->data['isi'] = $this->load->view($this->link.'/rekap_pasien',$this->data,TRUE);

		$this->load->view('template/v_layout_utama',$this->data);
	}
	public function input()
	{
		$halaman	= $this->input->post('halaman');

		$id_rekap_medis	= $this->input->post('id_rekap_medis');
		$anamnesis	= $this->input->post('anamnesis');
		$keluhan	= $this->input->post('keluhan');
		$terapi	= $this->input->post('terapi');
		$id_user	= $this->session->userdata('id_user');
			
		$data = array(
				'anamnesis'=>$anamnesis,
				'keluhan'=>$keluhan,
				'terapi'=>$terapi,
				'id_user'=>$id_user,
				'id_rekap_medis'=>$id_rekap_medis
				);

		if ($this->M_Rekap_Medis->update($data)) {// success
				$this->session->set_flashdata('message', 'Berhasil Edit data');
				redirect($this->hak_akses.'/rekap_medis/'.$halaman.'/'.$id_rekap_medis);
			}
			
	}
	public function hapus($id)
	{
		// $this->M_Barang->hapus_gambar($id);
		$this->M_Rekap_Medis->delete($id);
		redirect($this->hak_akses.'/'.$this->link);
	}
	public function hapus_penunjang($id,$halaman)
	{
		$data=$this->M_Penunjang->getID($id);
		$this->M_Penunjang->delete($id);
		redirect($this->hak_akses.'/rekap_medis/'.$halaman.'/'.$data->id_rekap_medis);
	}
	public function tampil_file($id)
	{
		$data=$this->M_Penunjang->getID($id);
		header('Content-Type:application/pdf');
		echo '<html><head><title>'.$data->file_name.'</title></head>';
		print base64_decode($data->file);
	}
	public function upload_file()
	{
		$id_rekap_medis	= $this->input->post('id_rekap_medis');
		$halaman	= $this->input->post('halaman');
		$filename = $_FILES['file']['tmp_name'];
		$nama_file = $_FILES['file']['name'];
		
		$tipe_file =array('application/pdf');
		// Content type
		if($filename){
			//Seleksi Tipe File
			if(!in_array($_FILES['file']['type'], $tipe_file)){
				$this->session->set_flashdata('message2', 'File Bukan Gambar');
					redirect($this->hak_akses.'/rekap_medis/lihat/'.$id_rekap_medis);
			}

			//Seleksi Ukuran
			if($_FILES['file']['size']>500000){	
				$this->session->set_flashdata('message2', 'File Terlalu Besar Max 500 KB');
				redirect($this->hak_akses.'/rekap_medis/lihat/'.$id_rekap_medis);
			}
			$file=base64_encode(file_get_contents($filename));
			// $file=base64_encode($filename);
				
			
			$data = array(
			'id_rekap_medis'=>$id_rekap_medis,
			'file_name'=>$nama_file,
			'file'=>$file);

			if ($this->M_Penunjang->insert($data)) {// success
					$this->session->set_flashdata('message', 'Berhasil Edit data');
					redirect($this->hak_akses.'/rekap_medis/'.$halaman.'/'.$id_rekap_medis);
				}
		}
		

	}

}