Feature: Gestión de Tareas
  Como usuario
  Quiero gestionar las tareas
  Para mantenerme productivo

  Scenario: Crear una nueva tarea
    Dado que tengo los detalles de la tarea "Título: Informe, Descripción: Escribir el informe"
    Cuando envío una solicitud para crear la tarea
    Entonces la tarea debe ser creada exitosamente

  Scenario: Obtener tareas por usuario
    Dado que un usuario tiene el ID "1"
    Cuando solicito sus tareas
    Entonces debo ver todas las tareas asignadas al usuario "1"
