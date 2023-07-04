<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Пригласить друга на работу:</title>
  <link rel="stylesheet" href="style/style.css">
  
</head>
<body>
  <div class="row-1">
    <div class="form-group">
      <h2>Пригласить друга на работу:</h2>
      <div class="well col-sm-12">

        <div class="form-group">
          <label for="fio" class="col-lg-12 control-label">ФИО (Ваши):</label>
          <div class="col-lg-12">
              <input type="text" class="form-control" id="fio" placeholder="Петров Пётр Петрович">
          </div>
      </div>
      <br>
      <br>
      <br>
          <div class="form-group">
              <label for="fiofriend" class="col-lg-12 control-label">ФИО (Друга):</label>
              <div class="col-lg-12">
                  <input type="text" class="form-control" id="fiofriend" placeholder="Иванов Иван Иванович">
              </div>
          </div>
          <br>
          <div class="form-group">
              <label for="phone_number" class="col-lg-12 control-label">Контактный телефон для связи:</label>
              <div class="col-lg-12">
                  <input type="text" class="form-control" id="phone_number" placeholder="+78002500333">
              </div>
          </div>
          <br>
          <div class="form-group">
              <label for="Messengers" class="col-lg-12 control-label">Мессенджеры (WhatsApp, Telegram, Viber, Skype):</label>
              <div class="col-lg-12">
                  <input type="text" class="form-control" id="Messengers" placeholder="Укажите Мессенджер и/или номер телефона">
              </div>
          </div>
          <br>
          <div class="form-group">
            <label for="Recommendations" class="col-lg-12 control-label">Рекомендации:</label>
            <div class="col-lg-12">
                <input type="text" class="form-control" id="Recommendations" placeholder="Комментарий">
            </div>
        </div>
          <br>
          <br>
          <br>
          <div class="form-group">
              <label for="age" class="col-lg-12 control-label">Резюме:</label>
              <div class="col-lg-12">
                  <input type="file" class="btn btn-default" title="Приложить файл" id="file">
              </div>
          </div>
          <br>
          <div class="col-lg-12">
              <input type="button" class="btn btn-primary" id="add" data-loading-text="Отправляем..." value="Пригласить">
              <br>
          </div>
          <script src="/script/script.js"></script>
      </div>
  </div>
</div>
  <div class="invite-friend">
    <img src="background/photo_2023-06-22_16-46-02.jpg" width="95%" height="95%" alt=""> 
  </div>
  <div id="time" onclick="handleTimeDiv()"></div>
<div id="cities">
  <ul>
    <li>Алтайский край: <span id="time-altay"></span></li>
		<li>Башкортостан Республика: <span id="time-bashkortostan"></span></li>
		<li>Брянская область: <span id="time-bryansk"></span></li>
		<li>Бурятия Республика: <span id="time-buryatia"></span></li>
		<li>Волгоградская область: <span id="time-volgograd"></span></li>
		<li>Воронежская область: <span id="time-voronezh"></span></li>
		<li>Иркутская область: <span id="time-irkutsk"></span></li>
		<li>Кировская область: <span id="time-kirov"></span></li>
		<li>Красноярский край: <span id="time-krasnoyarsk"></span></li>
		<li>Курганская область: <span id="time-kurgan"></span></li>
		<li>Курская область: <span id="time-kursk"></span></li>
		<li>Липецкая область: <span id="time-lipetsk"></span></li>
		<li>Марий Эл Республика: <span id="time-mariel"></span></li>
		<li>Москва: <span id="time-moscow"></span></li>
		<li>Нижегородская область: <span id="time-nizhnynovgorod"></span></li>
		<li>Омская область: <span id="time-omsk"></span></li>
		<li>Оренбургская область: <span id="time-orenburg"></span></li>
		<li>Пензенская область: <span id="time-penza"></span></li>
		<li>Пермский край: <span id="time-perm"></span></li>
		<li>Ростовская область: <span id="time-rostov"></span></li>
		<li>Рязанская область: <span id="time-ryazan"></span></li>
		<li>Самарская область: <span id="time-samara"></span></li>
		<li>Санкт-Петербург: <span id="time-saintpetersburg"></span></li>
		<li>Саратовская область: <span id="time-saratov"></span></li>
		<li>Свердловская область: <span id="time-sverdlovsk"></span></li>
		<li>Тамбовская область: <span id="time-tambov"></span></li>
		<li>Татарстан Республика: <span id="time-tatarstan"></span></li>
		<li>Тверская область: <span id="time-tver"></span></li>
		<li>Томская область: <span id="time-tomsk"></span></li>
		<li>Тульская область: <span id="time-tula"></span></li>
		<li>Тюменская область: <span id="time-tyumen"></span></li>
		<li>Удмуртская Республика: <span id="time-udmurtia"></span></li>
		<li>Ульяновская область: <span id="time-ulyanovsk"></span></li>
		<li>Челябинская область: <span id="time-chelyabinsk"></span></li>
		<li>Чувашская Республика: <span id="time-chuvashia"></span></li>
		<li>Ярославская область: <span id="time-yaroslavl"></span></li>
  </ul>
</div>
<script src="/script/script-time-closeopen-window.js"></script>
</body>
</html>
