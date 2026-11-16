<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ongkir2422500013_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('Ongkir2422500013_model');
    }

    public function index() {
        $data['list_ongkir'] = $this->Ongkir2422500013_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/Ongkir2422500013/index',$data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_ongkir() {
        $data['title'] = 'Tambah Ongkir';
        $this->form_validation->set_rules('nama_ekspedisi013', 'Nama Ekspedisi', 'required');
            if ($this->form_validation->run() !== FALSE) {
                $this->_simpan_ongkir();
            } 

            else {
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/Ongkir2422500013/tambah_ongkir');
                $this->load->view('administrator/templates/footer');
            }
    }

    private function _simpan_ongkir() {
        $data = [
            'nama_ekspedisi013' => ($this->input->post('nama_ekspedisi013')),
            'jenis_layanan013' => ($this->input->post('jenis_layanan013')),
            'tarif_per_kg013' => ($this->input->post('tarif_per_kg013')),
            'status013' => ($this->input->post('status013'))
        ];

        $simpan = $this->Ongkir2422500013_model->tambah($data);
            if ($simpan) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <div>
                        Berhasil Tambah Ongkir-!
                    </div>
                </div>
                ');
            } 

            else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                    <div>
                        Gagal Tambah Ongkir-!
                    </div>
                </div>
                ');
            }

        redirect('admin/Ongkir2422500013');
    }

    public function hapus_ongkir($id) {
        $ongkir2422500013 = $this->Ongkir2422500013_model->get_by_id($id);
        if ($ongkir2422500013) {
            $hapus = $this->Ongkir2422500013_model->hapus($id);
                if ($hapus) {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            Berhasil Hapus Ongkir-!
                        </div>
                    </div>
                    ');
                } 

                else {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            Gagal Hapus Ongkir-!
                        </div>
                    </div>
                    ');
                }
                    redirect('admin/Ongkir2422500013');

        } 

        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    Ongkir Tidak Ditemukan-!
                </div>
            </div>
            ');

            redirect('admin/Ongkir2422500013');
        }
    }

    public function ubah_ongkir($id) {
        $ongkir2422500013 = $this->Ongkir2422500013_model->get_by_id($id);
        if ($ongkir2422500013) {
            $this->form_validation->set_rules('nama_ekspedisi013', 'Nama Ekspedisi', 'required');
                if ($this->form_validation->run() !== FALSE) {
                    $this->_ubah_ongkir($id);
                } 

                else {
                    $data['title'] = 'Ubah Ongkir';
                    $data['ongkir2422500013'] = $ongkir2422500013;
                    $this->load->view('administrator/templates/header', $data);
                    $this->load->view('administrator/templates/sidebar');
                    $this->load->view('administrator/Ongkir2422500013/ubah_ongkir', $data);
                    $this->load->view('administrator/templates/footer');
                }
        } 

        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    Ongkir Tidak Ditemukan-!
                </div>
            </div>
            ');
            redirect('admin/Ongkir2422500013');
        }
    }

    private function _ubah_ongkir($id) {
        $data = [
            'nama_ekspedisi013' => ($this->input->post('nama_ekspedisi013')),
            'jenis_layanan013' => ($this->input->post('jenis_layanan013')),
            'tarif_per_kg013' => ($this->input->post('tarif_per_kg013')),
            'status013' => ($this->input->post('status013'))
        ];

        $ubah = $this->Ongkir2422500013_model->ubah($id, $data); 
        if ($ubah) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Ubah Ongkir-!
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal Ubah Ongkir-!
            </div>
            ');
        }

        redirect('admin/Ongkir2422500013');
    }
}

