<?php

    if(isset($_POST['btn-send']))
    {
      $FirstName = $_POST['first-name'];
      $LastName = $_POST['last-name'];
      $Age = $_POST['age'];
      $Email = $_POST['e-mail'];
      $Discord = $_POST['discord'];
      $Pseudo = $_POST['pseudo'];
      $Twitter = $_POST['twitter'];
      $Instagram = $_POST['instagram'];
      $Role = $_POST['role'];
      $Cv = $_POST['cv'];
      $Remarques = $_POST['remarques'];

      $all = 
      "first-name: “.$FirstName.”\r".
      "last-name: “.$LastName.”\r".
      "age: “.$Age.”\r".
      "e-mail: “.$Email.”\r".
      "discord: “.$Discord.”\r".
      "pseudo: “.$Pseudo.”\r".
      "twitter: “.$Twitter.”\r".
      "instagram: “.$Instagram.”\r".
      "role: “.$Role.”\r".
      "cv: “.$Cv.”\r".
      "remarques: “.$Remarques.”\r";

      $all = '<html><body>';
      $all .= '<table rules="all" style="border-color: #0c9bdd;" cellpadding="20">';
      $all .= "<tr style='background: #eee;'><td><strong>Prénom:</strong> </td><td>" . strip_tags($_POST['first-name']) . "</td></tr>";
      $all .= "<tr><td><strong>Nom:</strong> </td><td>" . strip_tags($_POST['last-name']) . "</td></tr>";
      $all .= "<tr><td><strong>Age:</strong> </td><td>" . strip_tags($_POST['age']) . "</td></tr>";
      $all .= "<tr><td><strong>E-mail:</strong> </td><td>" . strip_tags($_POST['e-mail']) . "</td></tr>";
      $all .= "<tr><td><strong>Discord:</strong> </td><td>" . strip_tags($_POST['discord']) . "</td></tr>";
      $all .= "<tr><td><strong>Pseudo:</strong> </td><td>" . strip_tags($_POST['pseudo']) . "</td></tr>";
      $all .= "<tr><td><strong>Twitter:</strong> </td><td>" . strip_tags($_POST['twitter']) . "</td></tr>";
      $all .= "<tr><td><strong>Instagram:</strong> </td><td>" . strip_tags($_POST['instagram']) . "</td></tr>";
      $all .= "<tr><td><strong>Rôle:</strong> </td><td>" . strip_tags($_POST['role']) . "</td></tr>";
      $all .= "<tr><td><strong>CV:</strong> </td><td>" . strip_tags($_POST['cv']) . "</td></tr>";
      $all .= "<tr><td><strong>Remarques:</strong> </td><td>" . strip_tags($_POST['remarques']) . "</td></tr>";
      $all .= "</table>";
      $all .= "</body></html>";

      if(empty($FirstName) || empty($LastName) || empty($Age) || empty($Email) || empty($Discord)
      || empty($Pseudo) || empty($Twitter) || empty($Instagram) || empty($Role) || empty($Cv)
      || empty($Remarques))
      {
          header('location:https://moonaesport.fr/club/recrutement/');
      }
      else
      {   
          $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
          $to = "contact@moonaesport.fr";

          if(mail($to,$Role,$all,$headers,$Email))
          {
            header('location:https://moonaesport.fr/club/recrutement/');
          }
      }
    }



?>