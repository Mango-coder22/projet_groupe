<?php
include("header.php")
;?>
    <title>Inscription</title>
  <body class="body">
    <main class="page">
      <div class="contenue_inscription">
        <form action="register.php" method="post" class="inscription-formulaire">
          <fieldset class="inscription-interieur">
            <legend class="inscription-legende">Inscrivez-vous</legend>
            <table class="inscription-table">
              <tr class="inscription-tr">
                <td class="inscription-td">Pseudo</td>
                <td>
                  <!-- <input class="saisie" type="text" name="text" id="text" placeholder="votre-pseudo"> -->
                  <input type="text" id="pseudo" name="pseudo" pattern="[A-Za-z0-9\u00c0-\u00ff]{5,20}" class="form-control" required>
                </td>
              </tr>
              <tr class="inscription-tr">
                <td class="inscription-td">Email</td>
                <td>
                  <!-- <input class="saisie" type="email" name="email" id="email" placeholder="votre-email"> -->
                  <input type="email" class="saisie" id="mail" name="mail" placeholder="votre-email" required>
                </td>
              </tr>
              <tr class="inscription-tr">
                <td class="inscription-td">Mot de passe</td>
                <td>
                  <!-- <input class="saisie" type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="votre-mot de passe"> -->
                  <input type="password" class="saisie" id="pass1" name="pass" pattern="[A-Za-z0-9_$]{8,}" required>
                </td>
              </tr>
              <td class="inscription-boutton-lignes">
              <!-- <input type="submit" class="button" value="Inscription" id="register" class="inscription-boutton"> -->
              <input type="submit" value="S'inscrire" class="btn btn-primary">
                <input class="inscription-boutton" type="reset" value="Réinitialiser">
                <!-- <input class="inscription-boutton" type="submit" value="Envoyer"> -->
                   
                <input class="inscription-boutton" type="submit" value="Annuler">
              </td>
            </table>
          </fieldset>
        </form>
      </div>
    </main>
    <?php
include("footer.php")
;?>