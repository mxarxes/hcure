<?php
require('model/frontend.php');


function addValues(){
  if(isset($_GET['id_client'])){
    writeData($_GET['id_client']);
  }
if(isset($_POST['prenom'], $_POST['nom'], $_POST['nb1'], $_POST['nb2'],$_SESSION['idinfirmier'])){
    addPatient($_POST['prenom'], $_POST['nom'], $_POST['nb1'], $_POST['nb2'],$_SESSION['idinfirmier']);
  }
}


function showServirForm(){
  $db = dbConnect();
  findUserFromId($_SESSION['idinfirmier']);
  require('view/backend/servirView.php');
}
function showNewPatientForm(){

  require('view/backend/addNewPatientView.php');
}

function showConnexionForm(){
  $db = dbConnect();
  if(isset($_POST['idinfirmier'],$_POST['password'])){
    connectUser($_POST['idinfirmier'], $_POST['password']);
  }
  require('view/frontend/connectView.php');
}

function showIndex(){
  $db = dbConnect();
  require('view/frontend/indexView.php');
}
