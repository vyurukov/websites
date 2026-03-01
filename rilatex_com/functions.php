<?php
/**
 * Created by PhpStorm.
 * User: Sasho
 * Date: 4/8/2016
 * Time: 11:30 AM
 */

//this class is for resizing images
class SimpleImage {

  var $image;
  var $image_type;

  function load($filename) {
    $image_info = getimagesize($filename);
    $this->image_type = $image_info[2];
    if( $this->image_type == IMAGETYPE_JPEG ) {
      $this->image = imagecreatefromjpeg($filename);
    } elseif( $this->image_type == IMAGETYPE_GIF ) {
      $this->image = imagecreatefromgif($filename);
    } elseif( $this->image_type == IMAGETYPE_PNG ) {
      $this->image = imagecreatefrompng($filename);
    }
  }
  function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {
    if( $image_type == IMAGETYPE_JPEG ) {
      imagejpeg($this->image,$filename,$compression);
    } elseif( $image_type == IMAGETYPE_GIF ) {
      imagegif($this->image,$filename);
    } elseif( $image_type == IMAGETYPE_PNG ) {
      imagepng($this->image,$filename);
    }
    if( $permissions != null) {
      chmod($filename,$permissions);
    }
  }
  function output($image_type=IMAGETYPE_JPEG) {
    if( $image_type == IMAGETYPE_JPEG ) {
      imagejpeg($this->image);
    } elseif( $image_type == IMAGETYPE_GIF ) {
      imagegif($this->image);
    } elseif( $image_type == IMAGETYPE_PNG ) {
      imagepng($this->image);
    }
  }
  function getWidth() {
    return imagesx($this->image);
  }
  function getHeight() {
    return imagesy($this->image);
  }
  function resizeToHeight($height) {
    $ratio = $height / $this->getHeight();
    $width = $this->getWidth() * $ratio;
    $this->resize($width,$height);
  }
  function resizeToWidth($width) {
    $ratio = $width / $this->getWidth();
    $height = $this->getheight() * $ratio;
    $this->resize($width,$height);
  }
  function scale($scale) {
    $width = $this->getWidth() * $scale/100;
    $height = $this->getheight() * $scale/100;
    $this->resize($width,$height);
  }
  function resize($width,$height) {
    $new_image = imagecreatetruecolor($width, $height);
    imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
    $this->image = $new_image;
  }
}

//get the name of the php file
function get_filename($page){
  $split = explode('/', $page);
  $page = end($split);
  return $page;
}

//filter strings of POST and GET vars
function filter_str($str){
  $str = trim($str);

  return $str;
}

//digits only, no dots
function is_decimal($element) {
  return !preg_match('/^\d+(\.\d+)?$/', $element);
}

//get current time in MYSQL format
function get_time(){
  $now = date('Y-m-d H:i:s');
  $currentDate = new DateTime($now);
  // $currentDate->modify('-1 hour');
  $now = $currentDate->format('Y-m-d H:i:s');
  return $now;
}

//format date with words
function format_date($date){
  $split = explode('-',$date);
  $y = $split[0];
  $m = ltrim($split[1], '0');
  $d = $split[2];

  switch($m){
    case '1': $m_text = "Януари"; break;
    case '2': $m_text = "Февруари"; break;
    case '3': $m_text = "Март"; break;
    case '4': $m_text = "Април"; break;
    case '5': $m_text = "Май"; break;
    case '6': $m_text = "Юни"; break;
    case '7': $m_text = "Юли"; break;
    case '8': $m_text = "Август"; break;
    case '9': $m_text = "Септември"; break;
    case '10': $m_text = "Октомври"; break;
    case '11': $m_text = "Ноември"; break;
    case '12': $m_text = "Декември"; break;
  }

  $date_fromated = $d." ".$m_text." ".$y;
  return $date_fromated;
}

//check if the user has access to the admin panel
function has_access(){
  require "conf.php";
  if(isset($_SESSION['userid'])) {
    $sql = "SELECT COUNT(*) AS `ctr` FROM `users` WHERE `id`='".$_SESSION['userid']."' AND `is_admin`='1' ";
    $res = $mysqli->query($sql);
    $obj = $res->fetch_object();
    if($obj->ctr != 1){return false;}
    else{ return true; }
  }
  else{return false;}
}


?>