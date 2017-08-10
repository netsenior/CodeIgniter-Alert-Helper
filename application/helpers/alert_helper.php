<?php

function setMsgAlert($mensagem = "Nenhum mensagem salva") {
    $CI = & get_instance();
    $CI->load->library('session');
    $CI->session->set_userdata(array('msg' => $mensagem));
}

function getMsgAlert() {
    $CI = & get_instance();
    $CI->load->library('session');
    $msg = $CI->session->userdata('msg');
    $CI->session->set_userdata(array('msg' => ''));
    return $msg;
}

/*
 * INCLUIR NA VIEW 
 * 
  <!-- Alerta -->
  <?php
  $msg = getMsgAlert();

  if (empty($msg) && !empty($message))
    $msg = $message;

  if (empty($msg))
    $msg = $this->session->flashdata('message');

  if (!empty($msg)) {
    ?>
    <div class="alert alert-warning" role="alert"><?= $msg ?></div><?php
    }
  ?>
  <!-- Alerta -->
 */
?>