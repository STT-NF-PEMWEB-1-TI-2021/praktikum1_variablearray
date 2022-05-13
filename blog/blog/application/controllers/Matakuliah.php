<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Matakuliah extends CI_Controller {
        public function index(){
            $this->load->model('Matakuliah_model','pkn1');
            $this->pkn1->nama='Salsabila Elsa Rahmadina';
            $this->pkn1->sks='3';
            $this->pkn1->kode='110';

            $this->load->model('Matakuliah_model','pkn2');

            $this->pkn2->nama='Kayla';
            $this->pkn2->sks='2';
            $this->pkn2->kode='125';

            $this->load->model('Matakuliah_model','pkn3');

            $this->pkn3->nama='Fayza';
            $this->pkn3->sks='3';
            $this->pkn3->kode='104';

            
            $list_pkn = [$this->pkn1, $this->pkn2, $this->pkn3];
            $data['list_pkn']=$list_pkn;
            $this->load->view('matakuliah/index', $data);
        }
    }
?>