<?php defined ('BASEPATH') OR exit ('No direct script acces allowed');
class Biodata_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'resume',
            'label' => 'resume',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'jk',
            'label' => 'jk',
            'rules' => 'required'],

            ['field' => 'ttl',
            'label' => 'ttl',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'agama',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],

            ['field' => 'wa',
            'label' => 'wa',
            'rules' => 'required'],
            
            ['field' => 'foto',
            'label' => 'foto',
            'rules' => 'required']
        ];
    }
    public function getBiodata()
    {
        $hasil = $this->db->get('biodata');
        return $hasil->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('biodata',["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->resume  = $post["resume"];
        $this->nama  = $post["nama"];
        $this->jk  = $post["jk"];
        $this->ttl  = $post["ttl"];
        $this->alamat  = $post["alamat"];
        $this->agama  = $post["agama"];
        $this->email  = $post["email"];
        $this->wa  = $post["wa"];
        $this->foto  = $post["foto"];
        $this->db->insert('biodata', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->resume  = $post["resume"];
        $this->nama  = $post["nama"];
        $this->jk  = $post["jk"];
        $this->ttl  = $post["ttl"];
        $this->alamat  = $post["alamat"];
        $this->agama  = $post["agama"];
        $this->email  = $post["email"];
        $this->wa  = $post["wa"];
        $this->foto  = $post["foto"];
        $this->db->update('biodata', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('biodata', array("id"=>$id));
    }
}
?>