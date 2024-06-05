fetch('js/data.json')
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.error('Error al cargar el archivo:', error));
