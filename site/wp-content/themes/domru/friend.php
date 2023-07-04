<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Получаем значения полей формы
  $fio = $_POST['fio'];
  $fiofriend = $_POST['fiofriend'];
  $phone_number = $_POST['phone_number'];
  $messengers = $_POST['Messengers'];
  $recommendations = $_POST['Recommendations'];

  // Загрузка файла резюме
  $target_directory = get_template_directory() . '/uploads/'; // Путь к папке "uploads" в вашей теме
  $target_file = $target_directory . basename($_FILES['file']['name']);
  move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

  // Создаем сообщение электронной почты
  $to = 'youremail@example.com'; // Замените на свой адрес электронной почты
  $subject = 'Приглашение друга на работу';
  $message = "ФИО (Ваши): $fio\n\n";
  $message .= "ФИО (Друга): $fiofriend\n\n";
  $message .= "Контактный телефон для связи: $phone_number\n\n";
  $message .= "Мессенджеры: $messengers\n\n";
  $message .= "Рекомендации: $recommendations\n\n";

  // Определяем заголовки письма
  $headers = "From: yourname@example.com"; // Замените на свой адрес электронной почты
  $headers .= "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-Type: text/plain; charset=utf-8" . "\r\n";

  // Создаем границы для разделения сообщения и файла
  $boundary = md5(time());

  // Добавляем заголовки для прикрепленного файла
  $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"" . "\r\n";

  // Создаем текстовую часть письма
  $body = "--{$boundary}\r\n";
  $body .= "Content-Type: text/plain; charset=utf-8\r\n";
  $body .= "Content-Disposition: inline\r\n";
  $body .= "\r\n";
  $body .= $message . "\r\n";

  // Добавляем прикрепленный файл
  if (file_exists($target_file)) {
    $file_data = file_get_contents($target_file);
    $body .= "--{$boundary}\r\n";
    $body .= "Content-Type: application/octet-stream; name=\"" . basename($target_file) . "\"\r\n";
    $body .= "Content-Disposition: attachment; filename=\"" . basename($target_file) . "\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "\r\n";
    $body .= chunk_split(base64_encode($file_data)) . "\r\n";
  }

  // Добавляем завершающий разделитель
  $body .= "--{$boundary}--\r\n";

  // Отправляем письмо
  if (mail($to, $subject, $body, $headers)) {
    // Если письмо успешно отправлено
    echo "Ваша форма отправлена. Спасибо!";
  } else {
    // Если возникла ошибка при отправке письма
    echo "Произошла ошибка при отправке формы. Пожалуйста, попробуйте еще раз.";
  }
}
?>