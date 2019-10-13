<?php defined ('BASEPATH') OR exit ('No direct script acces allowed');
class Pengalaman_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'waktu_peng',
            'label' => 'waktu_peng',
            'rules' => 'required'],

            ['field' => 'nama_peng',
            'label' => 'nama_peng',
            'rules' => 'required'],

            ['field' => 'ket_peng',
            'label' => 'ket_peng',
            'rules' => 'required']
        ];
    }
    public function getPengalaman()
    {
        $hasil = $this->db->get('pengalaman');
        return $hasil->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('pengalaman',["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->waktu_peng = $post["waktu_peng"];
        $this->nama_peng  = $post["nama_peng"];
        $this->ket_peng   = $post["ket_peng"];
        $this->db->insert('pengalaman', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->waktu_peng = $post["waktu_peng"];
        $this->nama_peng  = $post["nama_peng"];
        $this->ket_peng   = $post["ket_peng"];
        $this->db->update('pengalaman', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('pengalaman', array("id"=>$id));
    }
}
?>