<?php defined ('BASEPATH') OR exit ('No direct script acces allowed');
class Pendidikan_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'waktu_pen',
            'label' => 'waktu_pen',
            'rules' => 'required'],

            ['field' => 'ket_pen',
            'label' => 'ket_pen',
            'rules' => 'required'],

            ['field' => 'nama_pen',
            'label' => 'nama_pen',
            'rules' => 'required']
        ];
    }
    public function getPendidikan()
    {
        $hasil = $this->db->get('pendidikan');
        return $hasil->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('pendidikan',["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->waktu_pen  = $post["waktu_pen"];
        $this->ket_pen  = $post["ket_pen"];
        $this->nama_pen  = $post["nama_pen"];
        $this->db->insert('pendidikan', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->waktu_pen = $post["waktu_pen"];
        $this->ket_pen   = $post["ket_pen"];
        $this->nama_pen  = $post["nama_pen"];
        $this->db->update('pendidikan', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('pendidikan', array("id"=>$id));
    }
}
?>