<?php defined ('BASEPATH') OR exit ('No direct script acces allowed');
class Fb_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],
            ['field' => 'link',
            'label' => 'link',
            'rules' => 'required']
        ];
    }
    public function getFb()
    {
        $hasil = $this->db->get('fb');
        return $hasil->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('fb',["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->link  = $post["link"];
        $this->db->insert('fb', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->link  = $post["link"];
        $this->db->update('fb', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('fb', array("id"=>$id));
    }
}
?>