<?php
function Modif()
{
  require_once('../views/admin.php');

  if (isset($_GET['modifid'])) {

    include('../modeles/modif.php');
  }
}


function UserEstConnecte()
{
  if (!isset($_SESSION['User']))
    return false;
  else
    return true;
}


function AdminEstConnecte()
{
  if (!isset($_SESSION['Administrateur']))
    return false;
  else
    return true;
}



function AFFICHEtab()
{





  if (UserEstConnecte()) {
    include('../views/actifsimple.php');
  }
  if (AdminEstConnecte()) {
    if (isset($_GET['lister'])) {

      include('../views/archive.php');
    } else if (isset($_GET['montrer'])) {

      include('../views/actifs.php');
    } else {

      include('../views/actifs.php');
    }
  }
}
