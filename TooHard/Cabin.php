<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09f51cc1c0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/footer.css">
    <link rel="stylesheet" href="/assets/Tab.css">
    <link rel="stylesheet" href="/assets/header.css">
    <link rel="stylesheet" href="/assets/indexconfig.css">
    <link rel="shortcut icon" href="Images/KIK.ico">
    <title>Личный Кабинет</title>
    <style>
        body {
            background-color: #14181bee;
            overflow-x:hidden;
        }
        .imgcol {
            padding: 5rem;
            margin-bottom: 5rem;
        }
        .textcol {
            margin-top: 5rem;
            width: 500px;
            font-size: 14pt;
            font-weight: bold;
        }
        .userimg {
            width: 100%;
            height: 500px;
            background: url(/Images/User.jpg);
            background-repeat: no-repeat;
            background-size: contain;

        }
        .mail1 {
            color: rgb(255, 253, 253);
        }
        .block1 {
            display: block;
            padding: 15px 0px;
        }
        .nav-link1 {
            color: rgb(106,78,156);
            text-decoration: none;
        }
        .nav-link1:hover {
            color: rgb(255, 253, 253);
        }
        .colheight1 {
            height: 650px;
        }
        .changeicon {
            background-color: #363b41;
            border-radius: 3px 0px 0px 3px;
            -moz-border-radius: 3px 0px 0px 3px;
            -webkit-border-radius: 3px 0px 0px 3px;
            color: #606468;
            display: block;
            float: right;
            height: 50px;
            line-height: 50px;
            text-align: center;
            width: 50px;
        }
        .changeicon:hover {background-color: rgb(65, 48, 95);}
        .changeicon:active {color: white;}
        .changeicon {
            margin-left: 1rem;
        }
    </style>
  </head>
  <body>

    <!-- Начало Хеддера -->
    <?php require_once("components/header.php")?>
    <!-- Конец Хеддера -->

    <!-- Начало Таб -->
    <h2 class="justify_center Headline">
      <div class="Absolute">
          <i class="fa-solid fa-square-caret-left point" onclick="history.back()"></i>
      </div>
      <div>Личный Кабинет</div>
    </h2>
    <!-- Конец Таб -->
   
    <div class="row">
        <div name="ClassChange" class="col-md-5 colheight1 imgcol">
            <a class="newcarimg d-block userimg"></a>
        </div>
        <div name="ClassChange" class="col-md-3 colheight1 textcol">
            <div class="mt-4 mail1"><h4>Email: <?php echo $_SESSION["email"];?></h4></div>
            <div class="mt-4 pricecolor">
                <h3>Никнейм: 
                    <span><?php echo $_SESSION["login"];?></span>
                    <span id="save" hidden>
                        <i class="changeicon point fa-solid fa-floppy-disk"></i>
                    </span>
                    <span id="edit">
                        <i class="changeicon point fa-solid fa-pen"></i>
                    </span>
                </h3>
            </div>
            <div class="mt-5">
                <div class="block1"><a class="nav-link1" href="#">Корзина</a></div>
                <div class="block1"><a class="nav-link1" href="#">Кошелёк</a></div>
                <div class="block1"><a class="nav-link1" href="#">Сообщения</a></div>
                <div class="block1"><a class="nav-link1" href="#">Друзья</a></div>
                <div class="block1"><a class="nav-link1" href="#">Сообщества</a></div>
            </div>
        </div>
    </div>

    <!-- Начало Футера -->
    <?php require_once("components/footer.php");?>
    <!-- Конец Футера -->

    <script>
        let edit = document.querySelector('#edit');
        let save = document.querySelector('#save');

        edit.addEventListener("click", ()=>{
            let inputValue = save.previousElementSibling.innerText;
            save.previousElementSibling.innerHTML = `<input id="yesiam" type="text" value="${inputValue}">`;
            save.hidden = false;
            edit.hidden = true;
        })
        save.addEventListener("click", async ()=>{
            let newInputValue = yesiam.value;
            save.previousElementSibling.innerText = newInputValue;

            let formData = new FormData();
            formData.append("value", newInputValue);

            let response = await fetch('Server/Cabinbase.php',{
                method: 'POST',
                body: formData
            })
            save.hidden = true;
            edit.hidden = false;

            let result = await response.text();
            if(result == "entered") {
              alert("Успешно");
            } else if(result == "error") {
              alert("Не удалось подключиться к базе данных");
            }
            else { alert("Неизвестная ошибка"); }
        })
    </script>
    <script src="/assets/HeaderButton.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>