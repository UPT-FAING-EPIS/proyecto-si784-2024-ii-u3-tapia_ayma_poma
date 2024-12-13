Feature: Gestión de Notificaciones
  Como usuario
  Quiero gestionar las notificaciones
  Para mantenerme informado

  Scenario: Crear una notificación
    Dado que tengo un ID de usuario "1" y un mensaje "Tarea por vencer"
    Cuando envío una solicitud para crear la notificación
    Entonces la notificación debe ser guardada exitosamente

  Scenario: Obtener notificaciones por usuario
    Dado que un usuario tiene el ID "1"
    Cuando solicito sus notificaciones
    Entonces debo ver una lista de notificaciones para el usuario "1"
