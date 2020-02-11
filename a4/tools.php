<?php
  session_start();

// Put your PHP functions and modules here

//return array as either the original data format or as a string
  function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
      return $ret;
    else 
      echo $ret; 
  }

//echo out the code with line numbers
  function printMyCode() {
    $lines = file($_SERVER['SCRIPT_FILENAME']);
    echo "<pre id='mycode'><ol>";
    foreach ($lines as $line)
      echo '<li>'.rtrim(htmlentities($line)).'</li>';
    echo '</ol></pre>';
  }

  //convert php array to js object
  function php2js( $arr, $arrName ) {
    echo "<script>\n";
    echo "/* Generated with A4's php2js() function */";
    echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
    echo "</script>\n\n";
  }

  //reset the form / session
  if (isset($_POST['session-reset'])) {
    foreach($_SESSION as $something => &$whatever) {
      unset($whatever);
    }
  }

?>