<?php
     class Siswa extends CI_Controller{
          function __construct(){
               parent:: __construct();
               $data = array();
          }

          function index(){
               $siswa = $this->db->get("datapasien");

               $data["query"] = $siswa;
               $data["content"] = "pages/siswa_index";
               $this->load->view("template", $data);
          }

          function tambah(){
               $data["query"]= NULL;
               $data["content"]= "pages/siswa_form";
               $this->load->view("template", $data);
          }

          function hapus($id){
               $this->db->where(array('pasien_id' => $id))->delete('datapasien');
               redirect ('siswa', 'refresh');

          }

          function edit($id){
               $siswa = $this->db->get_where("datapasien",array('pasien_id' => $id));

               $data["query"] = $siswa;
               $data["content"] = "pages/siswa_edit";
               $this->load->view("template", $data);
          }

          function update($id){
               $data = array              
                    (
                         'tanggal_pasien' => $this->input->post('tanggal_pasien'),
                         'nama_pasien' => $this->input->post('nama_pasien'),
                         'kelas_pasien' => $this->input->post('kelas_pasien'),
                         'keluhan_pasien' => $this->input->post('keluhan_pasien'),
                         


                    );

               
               $this->db->where(array('pasien_id'=>$id))->update('datapasien',$data);
               redirect ('siswa', 'refresh');

          }

          function simpan(){
               $data = array              
                    (
                         'tanggal_pasien' => $this->input->post('tanggal_pasien'),
                         'nama_pasien' => $this->input->post('nama_pasien'),
                         'kelas_pasien' => $this->input->post('kelas_pasien'),
                         'keluhan_pasien' => $this->input->post('keluhan_pasien'),

                    );

               
               $this->db->insert('datapasien' , $data);
               redirect ('siswa', 'refresh');



          }
     }
?>
