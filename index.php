<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Личный кабинет</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link"	id="profileTab"	data-toggle="pill" href="#v-pills-profile" role="tab"	aria-controls="v-pills-profile"	aria-selected="false">Профиль</a>
                <a class="nav-link" id="messagesTab" data-toggle="pill" href="#v-pills-messages" role="tab"	aria-controls="v-pills-messages" aria-selected="false">Сообщения</a>
                <a class="nav-link"	id="settingsTab" data-toggle="pill"	href="#v-pills-settings" role="tab"	aria-controls="v-pills-settings" aria-selected="false">Настройки</a>
            </div>
          </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="profileTab">
                  <div class="row">
                    <div class="col-sm-3"><img src="/img/r2.jpg" alt=""></div>
                    <div class="col-sm-9"><h2 class="text-warning" id="userName"></h2>
                    <p>Email: <span id="userMail"></span></p>
                    <p>О себе немного</p>
                    <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, enim deleniti dignissimos nihil inventore ex quisquam doloribus cumque odio fugit incidunt exercitationem sint rerum molestias? Placeat nulla culpa esse at!</em></p>
                    
                  </div></div></div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="messagesTab">
                  <div class="row">
                    <div class="col-4">
                    <div class="row">
                        <div class="col-2"><img src="/img/r8.jpg" alt="" width = 100%></div>
                        <div class="col-10">
                          <h5>Петрова Ирина</h5>
                          <p>Нет, в пятницу не могу</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2"><img src="/img/r7.jpg" alt="" width = 100%></div>
                        <div class="col-10">
                          <h5>Сергеев Николай</h5>
                          <p>Правда смешно</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2"><img src="/img/r9.jpg" alt="" width = 100%></div>
                        <div class="col-10">
                          <h5>Игорь Григорьев</h5>
                          <p>Рибалка это здорово! Я с вами )</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2"><img src="/img/r10.jpg" alt="" width = 100%></div>
                        <div class="col-10">
                          <h5>Иванова Марина</h5>
                          <p>Поехали в пятницу на шашлыки?</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="row">
                        <div class="col-2"><img src="/img/r12.jpg" alt="" width = 100%></div>
                        <div class="col-10">
                          <h5>Николаев Иван</h5>
                          <p>Поехали в пятницу на рыбалку?</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2"><img src="/img/r2.jpg" alt="" width = 100%></div>
                        <div class="col-10">
                          <h5>Василий Васильев</h5>
                          <p>Да, давай! Удочки брать?</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-8">
                          <textarea cols="30" rows="2" placeholder="Сообщение вводить тут"></textarea>
                        </div>
                        <div class="col-4">
                          <button class="btn btn-warning">Отправить сообщение</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="settingsTab">
                  <h2>Настройки личного кабинета</h2>
                  <div class="row mt-5">
                    <div class="col-12">
                      <p>Имя: <span>Василий </span><span> [Изменить]</span></p>
                      <p>Фамилия: <span>Васильев </span><span> [Изменить]</span></p>
                    </div>
                  </div>
                  <h2 class="mt-5 text-success">Список друзей</h2>
                  <div class="row">
                    <div class="col-12">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Имя</th>
                          <th scope="col">Фамилия</th>
                          <th scope="col">E-mail</th>
                        </tr>
                      </thead>
                      <tbody id="userListTable">
                        
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script>
      let pathname = location.pathname.split("/")[2];
      let user;
      async function getUser() {
        let responce = await fetch("/getUser");
        return await responce.json();
      }
      async function getUsers() {
        let responce = await fetch("/getUsers");
        return await responce.json();
      }

      addEventListener("popstate", (event) => {
        let path = location.pathname.split("/")[2];
        if (path == "profile") {
          $("#profileTab").tab("show");
        } else if (path == "messages") {
          $("#messagesTab").tab("show");
        } else if (path == "settings") {
          $("#settingsTab").tab("show");
        }
      });
      if (pathname == "profile") {
        $("#v-pills-profile").tab("show");
        getUser().then((user)=> {
          userName.innerText = `${user.name} ${user.lastname}`;
          userMail.innerText = `${user.email}`;
        })
      } else if (pathname == "messages") {
        $("#v-pills-messages").tab("show");
      } else if (pathname == "settings") {
        $("#v-pills-settings").tab("show");
        getUsers().then(users=> {
          for(let i = 0; i < users.length; i++) {
          userListTable.insertAdjacentHTML("beforeend", `
            <tr>
            <th scope="row">${users[i].id}</th>
            <td>${users[i].name}</td>
            <td>${users[i].lastname}</td>
            <td>${users[i].email}</td>
          </tr>
          `);
          }
        })
      } else {
      location.href = location.protocol + "//" + location.host;
      }
      document.getElementById(pathname + "Tab").classList.add("active");
      let navLinks = document.querySelectorAll(".nav-link");
      for (let i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener("click", () => {
          let page = navLinks[i].getAttribute("aria-controls").split("v-pills-")[1];
          history.pushState("", "", page);
        });
      }
    </script>
  </body>
</html>