<?php 
defined('BASEPATH') or exit('Direct Access Not Allowed');

    function insert_row($table, $data)
    {
        $ci =& get_instance();
        $res = new Response();
        if (!$ci->db->insert($table, $data)) {
            $res->success =false ;
            $res->data = $ci->db->error()['message'];
        } elseif ($ci->db->affected_rows()==0) {
            $res->success =false ;
            $res->data = "Failed To Insert Data";
        } else {
            $res->success =true ;
            $res->data = 'Data Insert Successfull';
        }
        return $res;
    }

    function get_rows($table, $result_in_array=false)
    {
        $ci =& get_instance();
        $res = new Response();

        if (!$query = $ci->db->get($table)) {
            $res->success=false;
            $res->data=$ci->db->error()['message'];
        } else {
            if ($result_in_array) {
                $res->success=true;
                $res->data=$query->result_array();
            } else {
                $res->success=true;
                $res->data=$query->result();
            }
        }
        return $res;
    }

    function get_row($table, $id)
    {
        $ci =& get_instance();
        $res = new Response();

        $ci->db->where('id', $id);

        if (!$query = $ci->db->get($table)) {
            $res->success =false ;
            $res->data = $ci->db->error()['message'];
        } else {
            $res->success =true ;
            $res->data = $query->row();
        }
        return $res;
    }

    function get_row_by_condition($table, $condition, $result_in_array=false)
    {
        $ci =& get_instance();
        $res = new Response();

        $ci->db->where($condition);

        if (!$query = $ci->db->get($table)) {
            $res->success =false ;
            $res->data = $ci->db->error()['message'];
        } else {
            if ($result_in_array) {
                $res->success =true ;
                $res->data = $query->result_array();
            } else {
                $res->success =true ;
                $res->data = $query->result();
            }
        }
        return $res;
    }

    function update_row($table, $id, $data)
    {
        $ci =& get_instance();
        $res = new Response();

        $ci->db->where('id', $id);

        if ($ci->db->update($table, $data)) {
            $res->success =false ;
            $res->data = $ci->db->error()['message'];
        } elseif ($ci->db->affected_rows()==0) {
            $res->success =true;
            $res->data ="No Data Changed";
        } else {
            $res->success =true ;
            $res->data ='Data Update Successfull';
        }
        return $res;
    }

    function update_row_by_condition($table, $condition, $data)
    {
        $ci =& get_instance();
        $res = new Response();

        $ci->db->where($condition);

        if ($ci->db->update($table, $data)) {
            $res->success =false ;
            $res->data =$ci->db->error()['message'];
        } elseif ($ci->db->affected_rows()==0) {
            $res->success =false ;
            $res->data = "Update Failed";
        } else {
            $res->success =true ;
            $res->data = 'Data Update Successfull';
        }
        return $res;
    }



    function replace_row($table, $id, $data)
    {
        $ci =& get_instance();
        $res = new Response();

        $ci->db->where('id', $id);

        if ($ci->db->replace($table, $data)) {
            $res->success =false ;
            $res->data = $ci->db->error()['message'];
        } elseif ($ci->db->affected_rows()==0) {
            $res->success =false ;
            $res->data = "Data Update Failed";
        } else {
            $res->success =true ;
            $res->data ='Update Successfull';
        }
        return $res;
    }

    function replace_row_by_condition($table, $condition, $data)
    {
        $ci =& get_instance();
        $res = new Response();

        $ci->db->where($condition);

        if ($ci->db->replace($table, $data)) {
            $res->success =false ;
            $res->data = $ci->db->error()['message'];
        } elseif ($ci->db->affected_rows()==0) {
            $res->success =false ;
            $res->data ="Data Update Failed";
        } else {
            $res->success =true ;
            $res->data ='Update Successfull';
        }
        return $res;
    }

    function delete_row($table, $id)
    {
        $ci =& get_instance();
        $res = new Response();

        $ci->db->where('id', $id);

        if ($ci->db->delete($table)) {
            $res->success =false ;
            $res->data =$ci->db->error()['message'];
        } elseif ($ci->db->affected_rows()==0) {
            $res->success =false ;
            $res->data = "Data Delete Failed";
        } else {
            $res->success =true ;
            $res->data ='Data Delete Successfull';
        }
        return $res;
    }

    function delete_row_by_condition($table, $condition)
    {
        $ci =& get_instance();
        $res = new Response();

        $ci->db->where($condition);

        if (!$query = $ci->db->delete($table)) {
            $res->success =false ;
            $res->data =$ci->db->error()['message'];
        } elseif ($ci->db->affected_rows()==0) {
            $res->success =false ;
            $res->data = "Data Delete Failed";
        } else {
            $res->success =true ;
            $res->data ='Data Delete Successfull';
        }
        return $res;
    }
