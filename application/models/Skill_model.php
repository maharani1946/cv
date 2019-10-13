<?php defined ('BASEPATH') OR exit ('No direct script acces allowed');
class Skill_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'nama_skill',
            'label' => 'nama_skill',
            'rules' => 'required'],

            ['field' => 'ket_skill',
            'label' => 'ket_skill',
            'rules' => 'required'],

            ['field' => 'persen',
            'label' => 'persen',
            'rules' => 'required']
        ];
    }
    public function getSkill()
    {
        $hasil = $this->db->get('skill');
        return $hasil->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('skill',["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama_skill  = $post["nama_skill"];
        $this->ket_skill  = $post["ket_skill"];
        $this->persen  = $post["persen"];
        $this->db->insert('skill', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->nama_skill  = $post["nama_skill"];
        $this->ket_skill  = $post["ket_skill"];
        $this->persen  = $post["persen"];
        $this->db->update('skill', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('skill', array("id"=>$id));
    }
}
?>