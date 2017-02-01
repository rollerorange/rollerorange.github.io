<?php
function compareLogin($username, $password){
      $db = new PDO('sqlite:sportschoolDatabase.db');
      if(!$db){
            echo $db->lastErrorMsg();
      } else {
            ;
      }
      $stmt = $db->prepare('SELECT * FROM KLANT WHERE username = ? AND wachtwoord = ?');
      $stmt->execute(array($username, $password));
      if($stmt->fetchAll()){
            echo '<tr><td colspan="2"><center><b style="color:red;">' . $username . ' en wachtwoord ' . $password . '</b></center></td></tr>';
            return TRUE;
      }else{
            echo '<tr><td colspan="2"><center><b style="color:red;">Verkeerd gebruikersnaam of wachtwoord </b></center></td></tr>';
            return FALSE;
      }
      $db->close();
}

function getID($username){
      $db = new PDO('sqlite:sportschoolDatabase.db');
      if(!$db){
            echo $db->lastErrorMsg();
      } else {
            ;
      }
      $stmt = $db->prepare('SELECT * FROM KLANT WHERE username = ?');
      $stmt->execute(array($username));
      foreach($stmt as $row){
            return $row['klantID'];
      }
      $db->close();
}

function getAuthLevel($username){
      $db = new PDO('sqlite:sportschoolDatabase.db');
      if(!$db){
            echo $db->lastErrorMsg();
      } else {
            ;
      }
      $stmt = $db->prepare('SELECT * FROM KLANT WHERE username = ?');
      $stmt->execute(array($username));
      foreach($stmt as $row){
            return $row['authlevel'];
      }
      $db->close();
}
?>