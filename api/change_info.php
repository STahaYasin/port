<?php
include '../db.php';
include '../result.php';

$info_crane = $_POST["info_crane"];
$info_captian = $_POST["info_captian"];
$info_customs = $_POST["info_customs"];
$info_whoperator = $_POST["info_whoperator"];
$info_prcoperator = $_POST["info_prcsoperator"];
$info_extra1 = $_POST["info_extra1"];
$info_extra2 = $_POST["info_extra2"];
$info_extra3 = $_POST["info_extra3"];
$info_extra4 = $_POST["info_extra4"];
$info_extra5 = $_POST["info_extra5"];
$lvlid = $_GET["LVL_ID"];

$sqlupdate_crane = "UPDATE levels SET Info_Crane='$info_crane' WHERE LVL_ID=$lvlid";
if($conn->query($sqlupdate_crane) === TRUE) {
    header('location: ../index.php#!/info/'.$lvlid.'');
  } else{
        echo 'Error while updating Crane Operator<br>';
  }

$sqlupdate_captain = "UPDATE levels SET Info_Captian='$info_captian' WHERE LVL_ID=$lvlid";
if($conn->query($sqlupdate_captain) === TRUE) {
    header('location: ../index.php#!/info/'.$lvlid.'');
  } else{
        echo 'Error while updating Ship Captain<br>';
  }

$sqlupdate_customs = "UPDATE levels SET Info_Customs='$info_customs' WHERE LVL_ID=$lvlid";
if($conn->query($sqlupdate_customs) === TRUE) {
    header('location: ../index.php#!/info/'.$lvlid.'');
  } else{
        echo 'Error while updating Ship Customs<br>';
  }

$sqlupdate_whoperator = "UPDATE levels SET Info_Whoperator='$info_whoperator' WHERE LVL_ID=$lvlid";
if($conn->query($sqlupdate_whoperator) === TRUE) {
    header('location: ../index.php#!/info/'.$lvlid.'');
  } else{
        echo 'Error while updating Warehouse Operator<br>';
  }

$sqlupdate_prcoperator = "UPDATE levels SET Info_Operator='$info_prcoperator' WHERE LVL_ID=$lvlid";
if($conn->query($sqlupdate_prcoperator) === TRUE) {
    header('location: ../index.php#!/info/'.$lvlid.'');
  } else{
        echo 'Error while updating Process Operator<br>';
  }

$sqlupdate_prcoperator = "UPDATE levels SET Extra1='$info_extra1' WHERE LVL_ID=$lvlid";
if($conn->query($sqlupdate_prcoperator) === TRUE) {
    header('location: ../index.php#!/info/'.$lvlid.'');
  } else{
        echo 'Error while updating Process Operator<br>';
  }

$sqlupdate_prcoperator = "UPDATE levels SET Extra2='$info_extra2' WHERE LVL_ID=$lvlid";
if($conn->query($sqlupdate_prcoperator) === TRUE) {
    header('location: ../index.php#!/info/'.$lvlid.'');
  } else{
        echo 'Error while updating Process Operator<br>';
  }

$sqlupdate_prcoperator = "UPDATE levels SET Extra3='$info_extra3' WHERE LVL_ID=$lvlid";
if($conn->query($sqlupdate_prcoperator) === TRUE) {
    header('location: ../index.php#!/info/'.$lvlid.'');
  } else{
        echo 'Error while updating Process Operator<br>';
  }

$sqlupdate_prcoperator = "UPDATE levels SET Extra4='$info_extra4' WHERE LVL_ID=$lvlid";
if($conn->query($sqlupdate_prcoperator) === TRUE) {
    header('location: ../index.php#!/info/'.$lvlid.'');
  } else{
        echo 'Error while updating Process Operator<br>';
  }

$sqlupdate_prcoperator = "UPDATE levels SET Extra5='$info_extra5' WHERE LVL_ID=$lvlid";
if($conn->query($sqlupdate_prcoperator) === TRUE) {
    header('location: ../index.php#!/info/'.$lvlid.'');
  } else{
        echo 'Error while updating Process Operator<br>';
  }

?>
