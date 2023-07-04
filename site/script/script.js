document.getElementById("add").addEventListener("click", function() {
  var fio = document.getElementById("fio").value;
  var fiofriend = document.getElementById("fiofriend").value;
  var phone_number = document.getElementById("phone_number").value;
  var messengers = document.getElementById("Messengers").value;
  var recommendations = document.getElementById("Recommendations").value;
  var file = document.getElementById("file").files[0];

  // Создаем объект FormData и добавляем значения полей формы
  var formData = new FormData();
  formData.append("fio", fio);
  formData.append("fiofriend", fiofriend);
  formData.append("phone_number", phone_number);
  formData.append("messengers", messengers);
  formData.append("recommendations", recommendations);
  formData.append("file", file);

  // Создаем объект XMLHttpRequest
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../save-form.php", true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Форма успешно сохранена
        console.log("Форма успешно сохранена.");
      } else {
        // Возникла ошибка при сохранении формы
        console.error("Ошибка при сохранении формы.");
      }
    }
  };

  // Отправляем данные формы на сервер
  xhr.send(formData);
});