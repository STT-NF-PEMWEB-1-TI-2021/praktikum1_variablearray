<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Dosen extends CI_Controller {
        public function index(){
            $this->load->model('Dosen_model','dsn1');
            $this->dsn1->nidn='0110221153';
            $this->dsn1->pendidikan='S3 Bisnis digital';

            $this->load->model('Dosen_model','dsn2');
            $this->dsn2->nidn='0110336643';
            $this->dsn2->pendidikan='S1 Teknik Informatika';
            
            $this->load->model('Dosen_model','dsn3');
            $this->dsn3->nidn='011077405';
            $this->dsn3->pendidikan='S3 Akuntansi';
            
            $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
            $data['list_dsn']=$list_dsn;
            $this->load->view('dosen/index',$data);
        }
    }
?>