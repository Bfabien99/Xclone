<?php
    $docTitle = "S'inscrire sur X / X";
    $months = [
      "janvier","février","mars","avril","mai","juin","juillet","août","septembre"
    ]
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

      .change {
        align-self: flex-end;
        text-decoration: none;
        color: #35a4ed;
        cursor: text;
        width: fit-content;
      }

      .change:hover {
        text-decoration: underline;
      }

      .birth_box {
        margin-top: 10px;
        display: flex;
        flex-direction: column;
        gap: 1em;
      }

      .date_input {
        display: flex;
        justify-content: space-around;
        gap: 1.5em;
        width: 100%;
      }

      .birth_box p{
        color: grey;
        font-size: .9em;
      }

      .box {
        display: flex;
        flex-direction: column;
        border-radius: 5px;
        border: 1px solid #ccc;
        position: relative;
      }

      .box:hover{
        border-color: #35a4ed;
        color: #35a4ed;
      }

      .select {
        display: flex;
        width: 100%;
        overflow: hidden;
        padding: 1px;
      }

      .select i {
        padding: 5px;
      }

      .box select {
        height: 40px;
        flex-grow: 1;
        border: 1px solid #fff;
        outline: none;
        cursor: pointer;
        color: #444;
      }

      select option{
        background-color: #fff;
        top: 0;
        color: #444;
      }

      .box span{
        color: #bbb;
        padding: 5px;
      }

      .box:nth-child(1) {
        width: 50%;
      }
      .box:nth-child(2) {
        width: 25%;
      }
      .box:nth-child(3) {
        width: 25%;
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
          <h2 class="title">Créer votre compte</h2>
          <form action="" method="post">
            <div class="input_edit">
              <span class="input_edit_label_one">Nom et prénom</span>
              <input
                type="text"
                class="input_edit_input_one"
                name="fullname"
                placeholder="Nom et prénom"
              />
            </div>
            <div class="input_edit">
              <span class="input_edit_label_two">Email</span>
              <input
                type="email"
                class="input_edit_input_two"
                name="phone_email"
                placeholder="Email"
              />
            </div>
            <!--a href="#" class="change change_email">Utiliser un email</a-->
            <div class="birth_box">
              <h4>Date de naissance</h4>
              <p>
                Cette information ne sera pas affichée publiquement. Confirmez
                votre âge, même si ce compte est pour une entreprise, un animal
                de compagnie ou autre chose.
              </p>
              <div class="date_input">
                <div class="box">
                  <span>Mois</span>
                  <div class="select">
                    <select name="monthOpt" id="monthOpt" onchange="getMonthOptValue()">
                      <option value=""></option>
                    </select>
                  </div>
                </div>
                <div class="box">
                  <span>Jour</span>
                  <div class="select">
                    <select name="dayOpt" id="dayOpt" onchange="getDayOptValue()">
                      <option value=""></option>
                    </select>
                  </div>
                </div>
                <div class="box">
                  <span>Année</span>
                  <div class="select">
                    <select name="yearOpt" id="yearOpt" onchange="getYearOptValue()">
                      <option value=""></option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <a href="next/code_verification.php" type="submit" class="btn_next">Suivant</a>
          </form>
        </div>
      </section>
    </main>
  </body>
  <script>
    let edit_input_one = document.querySelector(".input_edit_input_one");
    let edit_input_two = document.querySelector(".input_edit_input_two");
    let label_one = document.querySelector(".input_edit_label_one");
    let label_two = document.querySelector(".input_edit_label_two");
    let change = document.querySelector(".change");

    edit_input_one.addEventListener("focus", () => {
      document.getElementsByName("fullname")[0].placeholder = "";
      label_one.style.color = "#35a4ed";
      edit_input_one.parentElement.style.border = "2px solid #35a4ed";
    });
    edit_input_one.addEventListener("focusout", () => {
      document.getElementsByName("fullname")[0].placeholder =
        label_one.textContent;
      label_one.style.color = "#fff";
      edit_input_one.parentElement.style.border = "2px solid #ccc";
    });

    edit_input_two.addEventListener("focus", () => {
      document.getElementsByName("phone_email")[0].placeholder = "";
      label_two.style.color = "#35a4ed";
      edit_input_two.parentElement.style.border = "2px solid #35a4ed";
    });
    edit_input_two.addEventListener("focusout", () => {
      document.getElementsByName("phone_email")[0].placeholder =
        label_two.textContent;
      label_two.style.color = "#fff";
      edit_input_two.parentElement.style.border = "2px solid #ccc";
    });

    function changeToEmail() {
      label_two.textContent = "Email";
      change.textContent = "Utiliser un téléphone";
    }

    function changeToPhone() {
      label_two.textContent = "Téléphone";
      change.textContent = "Utiliser un email";
    }

    // change.addEventListener("click", (e) => {
    //   e.preventDefault();
    //   if (change.classList.contains("change_email")) {
    //     changeToEmail();
    //     document.getElementsByName("phone_email")[0].placeholder =
    //       label_two.textContent;
    //     document.getElementsByName("phone_email")[0].type = "email";
    //     change.classList.replace("change_email", "change_phone");
    //   } else if (change.classList.contains("change_phone")) {
    //     changeToPhone();
    //     document.getElementsByName("phone_email")[0].placeholder =
    //       label_two.textContent;
    //     document.getElementsByName("phone_email")[0].type = "tel";
    //     change.classList.replace("change_phone", "change_email");
    //   }
    // });

    let months ={"janvier":31,"février":29,"mars":31,"avril":30,"mai":31,"juin":30,"juillet":31,"août":31,"septembre":30,"octobre":31,"novembre":30,"decembre":31}

    function loadMonth(){
      let select = document.getElementById('monthOpt')
      for(let key in months){
        select.innerHTML += `<option value="${key}">${key.toUpperCase()}</option>`
      }
    }
    function loadYear(){
      let select = document.getElementById('yearOpt')
      for(let i = 1924; i <= 2024; i++){
        select.innerHTML += `<option value="${i}">${i}</option>`
      }
    }
    loadMonth()
    loadYear()

    function getMonthOptValue(){
      var selectedMonth = document.getElementById('monthOpt')
      var val = selectedMonth.options[selectedMonth.selectedIndex].value
      console.log("selected month: ",val)
      return val
    }
    function getDayOptValue(){
      var selectedDay = document.getElementById('dayOpt')
      var val = selectedDay.options[selectedDay.selectedIndex].value
      console.log("selected Day: ",val)
      return val
    }
    function getYearOptValue(){
      var selectedYear = document.getElementById('yearOpt')
      var val = selectedYear.options[selectedYear.selectedIndex].value
      console.log("selected Year: ",val)
      return val
    }

    function loadDay(){
      let choosedMonth = getMonthOptValue()
      let choosedYear = getYearOptValue()
      let dayLength = 1

      if(choosedMonth == 'février' && choosedYear)
      {
        if(choosedYear%4==0){
          dayLength = 29
        }else{
          dayLength = 28
        }
      }else
      {
        dayLength = months[choosedMonth.toLowerCase()]
      }
      let select = document.getElementById('dayOpt')
      select.innerHTML = ""
      for(let i = 1; i <= dayLength; i++){
        select.innerHTML += `<option value="${i}">${i}</option>`
      }
    }

    document.getElementById('monthOpt').addEventListener('change',()=>{
      loadDay()
    })
    document.getElementById('yearOpt').addEventListener('change',()=>{
      loadDay()
    })

  </script>
</html>
