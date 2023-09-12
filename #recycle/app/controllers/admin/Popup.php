<?php
class Popup extends CI_Controller {
  public function showPopup() {
    // Check if the current time is 8:00 pm
    $now = date('Y-m-d H:i:s');
    $popup_time = date('Y-m-d 14:37:00');
    if ($now == $popup_time) {
      // Load the view containing the popup modal HTML code
      $this->load->view('popup_close_register');
    }
  }
}
?>