<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {
	var $hak_akses='admin';
	var $link='diagnosa';
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		if(empty($this->session->userdata('username'))){
			redirect('auth');
		}
	}

	public function form($id)
	{

			$this->data['judul_tab']='Form Diagnosa';
			$this->data['title']='Diagnosa';
			

			$this->data['diagnosa']=$this->M_Diagnosa->getID($id);
			$this->data['rekap_medis']=$this->M_Rekap_Medis->getID($id);

			$this->data['penyakit']=$this->M_Penyakit->getAll();
			$this->data['isi'] = $this->load->view($this->link.'/form',$this->data,TRUE);

		$this->load->view('template/v_layout_utama',$this->data);
	}
	public function input()
	{

		$id_rekap_medis	= $this->input->post('id_rekap_medis');
		$halaman	= $this->input->post('halaman');
		$id_penyakit	= $this->input->post('id_penyakit');
		$penyakit_terkonfirmasi	= $this->input->post('penyakit_terkonfirmasi');
			
		$data = array(
				'id_penyakit'=>$id_penyakit,
				'penyakit_terkonfirmasi'=>$penyakit_terkonfirmasi,
				'id_rekap_medis'=>$id_rekap_medis
				);

		if ($this->M_Diagnosa->insert($data)) {// success
				$this->session->set_flashdata('message', 'Berhasil Simpan Data');
				redirect($this->hak_akses.'/'.$this->link.'/form/'.$id_rekap_medis.'?h='.$halaman);
			}
			
	}
	public function hapus($id,$id_rekap_medis)
	{
		// $this->M_Barang->hapus_gambar($id);
		$this->M_Diagnosa->delete($id);
		redirect($this->hak_akses.'/'.$this->link.'/form/'.$id_rekap_medis);
	}

}