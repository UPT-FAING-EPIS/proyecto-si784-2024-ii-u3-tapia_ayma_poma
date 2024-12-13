Feature: Gestión de Categorías
  Como usuario
  Quiero gestionar las categorías
  Para poder organizar las tareas de manera eficaz

  Scenario: Crear una nueva categoría
    Dado que tengo un nombre de categoría "Trabajo"
    Cuando envío una solicitud para crear la categoría
    Entonces la categoría "Trabajo" debe ser creada exitosamente

  Scenario: Obtener todas las categorías
    Cuando solicito la lista de categorías
    Entonces debo ver todas las categorías disponibles
