<?php
    $docTitle = "S'inscrire sur X / X";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/x-icon"
      href="https://abs.twimg.com/responsive-web/client-web/icon-ios.77d25eba.png"
    />
    <script
      src="https://kit.fontawesome.com/1f88d87af5.js"
      crossorigin="anonymous"
      defer
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
        background-color: rgb(229, 227, 227);
      }

      .modal {
        padding: 5px 40px 5px 40px;
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 600px;
        margin: auto;
        border-radius: 10px;
        background-color: rgb(255, 255, 255);
        filter: drop-shadow(0 0 20px #86858579);
        padding-bottom: 60px;
      }

      .top {
        display: flex;
        width: 100%;
        align-items: center;
        text-align: center;
      }

      .btn_close {
        text-decoration: none;
        font-size: 1.3em;
        color: #000;
        border: 1px solid #ccc;
        width: 30px;
        height: 30px;
      }

      .top .img {
        flex-grow: 1;
      }

      .section_btn {
        display: flex;
        flex-direction: column;
        gap: 1em;
        width: 100%;
        margin: auto;
        padding: 10px;
        justify-content: center;
        align-items: center;
      }

      .section_btn a {
        text-decoration: none;
      }

      .section_btn .title {
        font-size: 2em;
        align-self: flex-start;
      }

      .section_btn p{
        font-size: .9em;
        color: #bbb;
        align-self: flex-start;
      }

      form {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 1.5em;
      }

      .input_edit {
        display: flex;
        flex-direction: column;
        border: 2px solid #ccc;
        padding: 5px;
        border-radius: 5px;
      }

      .input_edit input {
        width: 100%;
        padding: 10px;
        height: 40px;
        font-size: 1.1em;
        border: none;
        outline: none;
        margin-bottom: 10px;
        color: #aeaeae;
      }

      .input_edit span {
        color: #fff;
        font-size: 0.7em;
        height: 15px;
      }

      button {
        cursor: pointer;
      }

      .btn_next {
        width: 100%;
        text-align: center;
        border-radius: 50px;
        padding: 10px;
        font-size: 1.1em;
        font-weight: bold;
        color: #fff;
        background-color: #000000;
        border: none;
        outline: none;
      }

      .btn_next:hover {
        background-color: #121212ee;
      }
    </style>
  </head>
  <body>
    <main>
      <section class="modal">
        <div class="top">
          <a href="/" class="btn_close"><i class="fas fa-times"></i></a>
          <div class="img">
            <img src="/assets/img/x.png" alt="" width="50px" />
          </div>
        </div>
        <div class="section_btn">
          <h2 class="title">Il vous faut un mot de passe</h2>
          <p>Vérifiez qu'il contient au moins 8 caractères</p>
          <form action="" method="post">
            <div class="input_edit">
              <span class="input_edit_label_one">Mot de passe</span>
              <input
                type="text"
                class="input_edit_input_one"
                name="code"
                placeholder="Mot de passe"
              />
            </div>
            <p style="margin-top:5em;">En vous inscrivant, vous acceptez les <a href="">Conditions d'utilisation</a> et la <a href="">Politique de confidentialité</a>, notamment l'<a href="">Utilisation des cookies</a>. X peut utiliser vos coordonnées, dont votre adresse email et votre numéro de téléphone, aux fins exposées dans notre politique de confidentialité, notamment pour sécuriser votre compte et personnaliser nos services, dont les publicités. <a href="">En savoir plus</a>. Les autres utilisateurs pourront vous trouver grâce à votre adresse email ou à votre numéro de téléphone lorsqu'ils sont indiqués, sauf si vous vous y opposez <a href="">ici</a>.</p>
            <a href="set_profil_img.php" type="submit" class="btn_next">Suivant</a>
          </form>
        </div>
      </section>
    </main>
  </body>
  <script>
    let edit_input_one = document.querySelector(".input_edit_input_one");
    let label_one = document.querySelector(".input_edit_label_one");

    edit_input_one.addEventListener("focus", () => {
      document.getElementsByName("code")[0].placeholder = "";
      label_one.style.color = "#35a4ed";
      edit_input_one.parentElement.style.border = "2px solid #35a4ed";
    });
    edit_input_one.addEventListener("focusout", () => {
      document.getElementsByName("code")[0].placeholder =
        label_one.textContent;
      label_one.style.color = "#fff";
      edit_input_one.parentElement.style.border = "2px solid #ccc";
    });
  </script>
</html>
