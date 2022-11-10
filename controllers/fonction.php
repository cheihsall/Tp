<?php





/* function Pop()
{
  require_once('../views/tp.php');

  if (isset($_GET['pop'])) {

    include('../views/pop.php');
  }
} */


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
