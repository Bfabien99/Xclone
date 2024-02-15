<?php
    $docTitle = "X. C'est ce qu'il se passe / X";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="https://abs.twimg.com/responsive-web/client-web/icon-ios.77d25eba.png">
    <script
      src="https://kit.fontawesome.com/1f88d87af5.js"
      crossorigin="anonymous"
    ></script>
    <title><?= $docTitle; ?></title>
    <style>
      @import url("https://fonts.cdnfonts.com/css/verdana-pro-cond");
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body {
        display: flex;
        flex-direction: column;
        width: 100%;
        min-height: 100vh;
        overflow-x: hidden;
        background-color: #fff;
      }

      main {
        flex-grow: 1;
        display: flex;
        padding: 20px;
        font-family: "Verdana Pro", sans-serif;
      }

      main a {
        text-decoration: none;
      }

      .section_x {
        width: 100%;
        max-width: 600px;
      }

      .section_x img {
        width: 100%;
      }

      .section_connect {
        display: flex;
        flex-direction: column;
        gap: 1.5em;
        padding: 10px;
        max-width: 700px;
      }

      .section_connect > .title {
        font-size: 4.2em;
      }

      .section_connect > .title::first-letter{
        text-transform: capitalize;
      }

      .section_btn {
        display: flex;
        flex-direction: column;
        gap: 1em;
      }

      .section_btn .title {
        font-size: 2em;
      }

      .btn_google,
      .btn_apple {
        display: flex;
        gap: 0.5em;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 300px;
        border: 1px solid #ccc;
        text-align: center;
        border-radius: 50px;
        padding: 10px;
        color: #000;
        font-size: 1.1em;
        font-weight: 500;
      }
      .btn_apple {
        font-weight: bold;
      }

      .fa-google{
        color: rgb(238, 56, 56);
      }

      .btn_google:hover{
        border: 1px solid #9cd6fdc2;
        background-color: #a8dcfe1f;
      }
      .btn_apple:hover{
        background-color: #eeeeeeb8;
      }

      .lines {
        width: 100%;
        display: flex;
        align-items: center;
        gap: 1em;
        max-width: 300px;
      }

      .line {
        flex-grow: 1;
        height: 1px;
        background-color: #eee;
      }

      .btn_signup {
        width: 100%;
        max-width: 300px;
        text-align: center;
        border-radius: 50px;
        padding: 10px;
        font-size: 1.1em;
        font-weight: bold;
        color: #fff;
        background-color: #35a4ed;
      }

      .btn_signup:hover{
        background-color: #1f91de;
      }

      .policy{
        font-size: .7em;
        width: 100%;
        max-width: 300px;
        color: #646464;
      }

      .policy a{
        color: #35a4ed;
      }

      .policy a:hover{
        text-decoration: underline;
      }

      .section_login{
        display: flex;
        flex-direction: column;
        gap: 1.3em;
      }

      .btn_login{
        width: 100%;
        max-width: 300px;
        text-align: center;
        border-radius: 50px;
        padding: 10px;
        color: #000;
        font-size: 1.1em;
        font-weight: bold;
        border: 1px solid #ccc;
        color: #35a4ed;
      }

      .btn_login:hover{
        background-color: #a8dcfe1f;
      }

      footer{
        padding: 20px;
        text-align: center;
        display: flex;
        gap: 1em;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        font-family: "Verdana Pro", sans-serif;
      }

      footer a{
        text-decoration: none;
        color: #646464;
        font-weight: 100;
        font-size: .8em;
      }

      footer a::first-letter{
        text-transform: capitalize;
      }

      footer a:hover{
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <main>
      <section class="section_x">
        <img src="/assets/img/x.png" alt="" />
      </section>
      <section class="section_connect">
        <h2 class="title">ça se passe maintenant</h2>
        <div class="section_btn">
          <h3 class="title">Inscrivez-vous.</h3>
          <a href="" class="btn_google"
            ><i class="fab fa-google"></i> S'inscrire avec Google</a
          >
          <a href="" class="btn_apple"
            ><i class="fab fa-apple"></i>S'inscrire avec Apple</a
          >
          <div class="lines">
            <span class="line"></span>
            <span>ou</span>
            <span class="line"></span>
          </div>
          <a href="signup.php" class="btn_signup">Créer un compte</a>
          <div class="policy">
            <p>
              En vous inscrivant, vous acceptez les
              <a href="">Conditions d'utilisation</a> et la
              <a href="">Politique de confidentialité</a>, notamment l'<a
                href=""
                >Utilisation des cookies</a
              >
            </p>
          </div>
        </div>
        <div class="section_login">
          <h3>Vous avez déjà un compte ?</h3>
          <a href="modal_login.php" class="btn_login">Se connecter</a>
        </div>
      </section>
    </main>
    <footer>
      <a target="_blank" href="https://about.twitter.com/fr">à propos</a>
      <a target="_blank" href="https://help.twitter.com/en/using-x/download-the-x-app">Téléchargez l'application X</a>
      <a target="_blank" href="https://help.twitter.com/fr">Centre d'assistance</a>
      <a target="_blank" href="https://twitter.com/fr/tos">Conditions d’utilisation</a>
      <a target="_blank" href="https://twitter.com/fr/privacy">Politique de Confidentialité</a>
      <a target="_blank" href="https://help.twitter.com/fr/rules-and-policies/x-cookies">Politique relative aux cookies</a>
      <a target="_blank" href="https://help.twitter.com/fr/resources/accessibility">Accessibilité</a>
      <a target="_blank" href="https://business.twitter.com/en/help/troubleshooting/how-twitter-ads-work.html?ref=web-twc-ao-gbl-adsinfo&utm_source=twc&utm_medium=web&utm_campaign=ao&utm_content=adsinfo">Informations sur les publicités</a>
      <a target="_blank" href="https://blog.twitter.com">Blog</a>
      <a target="_blank" href="https://status.twitterstat.us">Statut</a>
      <a target="_blank" href="https://careers.twitter.com/en">Carrières</a>
      <a target="_blank" href="https://about.twitter.com/fr/company/brand-resources">Ressources de la marque</a>
      <a target="_blank" href="https://ads.twitter.com/?ref=gl-tw-tw-twitter-advertise">Publicité</a>
      <a target="_blank" href="https://marketing.twitter.com/fr">Marketing</a>
      <a target="_blank" href="https://business.twitter.com/?ref=web-twc-ao-gbl-twitterforbusiness&utm_source=twc&utm_medium=web&utm_campaign=ao&utm_content=twitterforbusiness">X pour les professionnels</a>
      <a target="_blank" href="https://developer.twitter.com/en">Développeurs</a>
      <a target="_blank" href="https://twitter.com/i/directory/profiles">Répertoire</a>
      <a target="_blank" href="https://twitter.com/settings">Paramètres</a>
      <a target="_blank" href="">© 2024 X Corp.</a>
    </footer>
  </body>
</html>
