<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Response
{
    public $success;
    public $data;
}



function ajax_response($success, $data="")
{
    echo json_encode(array('success'=>$success,'data'=>$data));
}

function showflash()
{
    $ci = &get_instance();
    if ($ci->session->flashdata('success')) {
        echo <<<DM
       <p class="alert alert-success alert-dismissible">
   
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   
       <strong>Success!</strong> {$ci->session->flashdata('success')}
   
       </p>
   
DM;
    }

    if ($ci->session->flashdata('error')) {
        echo <<<DM
    <p class="alert alert-danger alert-dismissible">

    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

    <strong>Error!</strong> {$ci->session->flashdata('error')}

    </p>

DM;
    }

    if ($ci->session->flashdata('warning')) {
        echo <<<DM
    <p class="alert alert-warning alert-dismissible">

    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

    <strong>Warning!</strong> {$ci->session->flashdata('warning')}

    </p>

DM;
    }
}

function pr($array, $exit=false)
{
    echo "<pre>";

    print_r($array);

    echo "</pre>";

    if ($exit) {
        exit;
    }
}
