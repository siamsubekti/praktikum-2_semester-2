<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {

	public function index()
	{
		$this->load->model('pasien_model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='010001';
        $this->pasien1->nama='Faiz Fikri';
        $this->pasien1->tmp_lahir='Banyumas';
        $this->pasien1->tgl_lahir='20 Sept 1998';
        $this->pasien1->gender='L';

        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->kode='020001';
        $this->pasien2->nama='Pandan Wangi';
        $this->pasien2->tmp_lahir='Banyumas';
        $this->pasien2->tgl_lahir='20 Jan 1997';
        $this->pasien2->gender='P';

        $this->load->model('pasien_model','pasien3');
        $this->pasien3->id=3;
        $this->pasien3->kode='030001';
        $this->pasien3->nama='Ali Lan Ila';
        $this->pasien3->tmp_lahir='Banyumas';
        $this->pasien3->tgl_lahir='20 Des 1996';
        $this->pasien3->gender='L';
        
        $this->load->model('bmi_model','bmi1');
        $this->bmi1->tinggi=179;
        $this->bmi1->berat=70;

        $this->load->model('bmi_model','bmi2');
        $this->bmi2->tinggi=169;
        $this->bmi2->berat=60;

        $this->load->model('bmi_model','bmi3');
        $this->bmi3->tinggi=159;
        $this->bmi3->berat=50;

        $this->load->model('bmipasien_model','bmipasien1');
        $this->bmipasien1->id=1;
        $this->bmipasien1->tanggal='20-02-2021';
        $this->bmipasien1->pasien=$this->pasien1;
        $this->bmipasien1->bmi=$this->bmi1;

        $this->load->model('bmipasien_model','bmipasien2');
        $this->bmipasien2->id=2;
        $this->bmipasien2->tanggal='23-06-2021';
        $this->bmipasien2->pasien=$this->pasien2;
        $this->bmipasien2->bmi=$this->bmi2;

        $this->load->model('bmipasien_model','bmipasien3');
        $this->bmipasien3->id=3;
        $this->bmipasien3->tanggal='10-02-2021';
        $this->bmipasien3->pasien=$this->pasien3;
        $this->bmipasien3->bmi=$this->bmi3;

        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $data_pasien['list_pasien']=$list_pasien;

        $list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3];
        $data_bmi['list_bmi']=$list_bmi;

        $data_bmipasien = [
                           $this->bmipasien1,
                           $this->bmipasien2,
                           $this->bmipasien3,
                        ];
        $data['data_bmipasien']=$data_bmipasien;
        
        $this->load->view('header');
        $this->load->view('bmi/index', $data);
        $this->load->view('footer');
	}
}
