<?php
    $docTitle = "Se connecter à X / X";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="https://abs.twimg.com/responsive-web/client-web/icon-ios.77d25eba.png" />
    <script
      src="https://kit.fontawesome.com/1f88d87af5.js"
      crossorigin="anonymous"
     defer></script>
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
      }

      .top .img {
        flex-grow: 1;
      }

      .section_btn {
        display: flex;
        flex-direction: column;
        gap: 1em;
        max-width: 400px;
        margin: auto;
        padding: 10px;
        justify-content: center;
        align-items: center;
      }

      .section_btn a{
        text-decoration: none;
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

      form{
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 1.5em;
        max-width: 300px;
      }

      .input_edit{
        display: flex;
        flex-direction: column;
        border: 2px solid #ccc;
        padding: 5px;
        border-radius: 5px;
      }

      .input_edit input{
        width: 100%;
        padding: 10px;
        height: 40px;
        font-size: 1.1em;
        border: none;
        outline: none;
        margin-bottom: 10px;
        color: #aeaeae;
      }

      .input_edit span{
        text-align: center;
        color: #fff;
        font-size: .7em;
        height: 15px;
      }

      button{
        cursor: pointer;
      }

      .btn_next {
        width: 100%;
        max-width: 300px;
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

      .btn_forgot {
        width: 100%;
        max-width: 300px;
        text-align: center;
        border-radius: 50px;
        padding: 10px;
        color: #000;
        font-size: 1.1em;
        font-weight: bold;
        background-color: #ffffff;
        border: 1px solid #ccc;
      }

      .btn_next:hover{
        background-color:#121212ee;
      }

      .btn_forgot:hover{
        background-color: #eeeeeeb8;
      }

      .signup{
        color: #929191;
        font-size: .9em;
        margin-top: 10px;
      }

      .signup a{
        color: #35a4ed;
        text-decoration: none;
      }

      .signup a:hover{
        text-decoration: underline;
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
          <h3 class="title">Connectez-vous à X</h3>
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

          <form action="" method="post">
            <div class="input_edit">
              <span class="input_edit_label">Numéro de téléphone, adresse email ou nom d'utilisateur</span>
              <input type="text" class="input_edit_input" name="username" placeholder="Numéro de téléphone, adresse email ou nom d'utilisateur">
            </div>
            <button type="submit" class="btn_next">Suivant</button>
          </form>

          <a href="" class="btn_forgot">mot de passe oublié ?</a>

          <p class="signup">Vous n'avez pas de compte ? <a href="signup.php">Inscrivez-vous</a></p>
        </div>
      </section>
    </main>
  </body>
  <script>
    let edit_input = document.querySelector('.input_edit_input');
    let label = document.querySelector('.input_edit_label');

    edit_input.addEventListener('focus', ()=>{
      document.getElementsByName('username')[0].placeholder="";
      label.style.color="#35a4ed";
      edit_input.parentElement.style.border = "2px solid #35a4ed"
    })
    edit_input.addEventListener('focusout', ()=>{
      document.getElementsByName('username')[0].placeholder="Numéro de téléphone, adresse email ou nom d'utilisateur";
      label.style.color="#fff";
      edit_input.parentElement.style.border = "2px solid #ccc"
    })
  </script>
</html>
