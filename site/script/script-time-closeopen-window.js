// объект с информацией о городах и их смещении относительно UTC в часах
const cities = {
  altay: 7,
  bashkortostan: 5,
  bryansk: 3,
  buryatia: 8,
  volgograd: 4,
  voronezh: 3,
  irkutsk: 8,
  kirov: 3,
  kurgan: 5,
  krasnoyarsk: 7,
  mound: 5,
  kursk: 3,
  lipetsk: 3,
  mariel: 3,
  moscow: 3,
  nizhnynovgorod: 3,
  omsk: 6,
  orenburg: 5,
  penza: 3,
  perm: 5,
  rostov: 3,
  ryazan: 3,
  samara: 4,
  saintpetersburg: 3,
  saratov: 4,
  sverdlovsk: 5,
  tambov: 3,
  tatarstan: 3,
  tver: 3,
  tomsk: 7,
  tula: 3,
  tyumen: 6,
  udmurtia: 4,
  ulyanovsk: 4,
  chelyabinsk: 5,
  chuvashia: 3,
  yaroslavl: 3,
};

// Функция для получения текущего времени в заданном городе с учетом смещения
function getTime(city, offset) {
  const now = new Date();
  const totalOffset = now.getTimezoneOffset() + offset * 60;
  const localTime = now.getTime() + totalOffset * 60 * 1000;
  const localDate = new Date(localTime);
  return localDate.toLocaleTimeString('ru-RU', { hour: '2-digit', minute: '2-digit' });
}

// Функция для отображения списка городов и установки времени в них
function showCities() {
  const spans = document.querySelectorAll('#cities span');
  const citiesDiv = document.getElementById('cities');
  const timeDiv = document.getElementById('time');

  if (citiesDiv.style.display === 'block') {
    citiesDiv.style.display = 'none';
  } else {
    citiesDiv.style.display = 'block';
  }

  spans.forEach((span) => {
    const city = span.id.split('-')[1];
    const offset = cities[city];
    const time = getTime(city, offset);
    span.textContent = time;
  });
}

// Обработчик открытия окна
function handleOpenWindow() {
  overlay.style.display = 'block';
}

// Обработчик закрытия окна
function handleCloseButton() {
  overlay.style.display = 'none';
}

// Обработчик открытия модального окна
function handleOpenWindowModal() {
  overlayModal.style.display = 'block';
}

// Обработчик закрытия модального окна
function handleCloseButtonModal() {
  overlayModal.style.display = 'none';
}

// Функция для выполнения асинхронного запроса на чтение файла
function readFile(file, callback) {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      callback(xhr.responseText);
    }
  };
  xhr.open("GET", file, true);
  xhr.send();
}

// Инициализация приложения при загрузке страницы
window.onload = function () {
  const timeDiv = document.getElementById('time');
  timeDiv.textContent = getTime('moscow', cities['moscow']);
  timeDiv.addEventListener('click', showCities);

  setInterval(() => {
    timeDiv.textContent = getTime('moscow', cities['moscow']);
  }, 5000);

  const openWindow = document.getElementById('openWindow');
  const closeButton = document.getElementById('closeButton');
  const overlay = document.getElementById('overlay');

  openWindow.addEventListener('click', handleOpenWindow);
  closeButton.addEventListener('click', handleCloseButton);

  const openWindowModal = document.getElementById('openWindowModal');
  const closeButtonModal = document.getElementById('closeButtonModal');
  const overlayModal = document.getElementById('overlayModal');

  openWindowModal.addEventListener('click', handleOpenWindowModal);
  closeButtonModal.addEventListener('click', handleCloseButtonModal);
};