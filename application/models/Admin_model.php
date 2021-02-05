<?php

class Admin_model extends CI_model
{
    public function getAllRoleById()
    {
        return $this->db->get('user_role')->result_array();
    }

    public function hapusDataRole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
    }

    public function getRoleByno_bp($role_id)
    {
        return $this->db->get_where('user_role', ['id' => $role_id])->row_array();
    }

    public function ubahDataRole()
    {
        $data = [
            "role" => $this->input->post('role', true),
        ];
        $this->db->where('role', $this->input->post('role'));
        $this->db->update('user_role', $data);
    }
}
