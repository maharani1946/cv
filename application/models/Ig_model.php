<?php defined ('BASEPATH') OR exit ('No direct script acces allowed');
class Ig_model extends CI_Model
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
    public function getIg()
    {
        $hasil = $this->db->get('ig');
        return $hasil->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('ig',["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->link  = $post["link"];
        $this->db->insert('ig', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->link  = $post["link"];
        $this->db->update('ig', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('ig', array("id"=>$id));
    }
}
?>