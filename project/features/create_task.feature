Feature: Crear Nueva Tarea
  Como usuario autenticado
  Quiero poder crear nuevas tareas
  Para organizar mejor mi trabajo

  Background:
    And hago clic en "Crear Nueva Tarea"

  Scenario: Crear tarea con datos válidos
    When hago clic en "Crear Nueva Tarea"
    And ingreso "Título de tarea" como título
    And ingreso "Descripción detallada de la tarea" como descripción
    And selecciono la categoría "Trabajo"
    And ingreso "2024-12-20" como fecha de vencimiento
    And hago clic en "Crear Tarea"
    Then debo ver un mensaje "Tarea creada exitosamente"
    And debo ser redirigido al Dashboard

  Scenario: Intentar crear tarea con campos vacíos
    When ingreso "" como título
    And ingreso "" como descripción
    And hago clic en "Crear Tarea"
    Then debo ver un mensaje de error "El título es obligatorio"

  Scenario: Crear tarea sin seleccionar categoría
    When ingreso "Título sin categoría" como título
    And ingreso "Descripción sin categoría" como descripción
    And no selecciono ninguna categoría
    And ingreso "2024-12-20" como fecha de vencimiento
    And hago clic en "Crear Tarea"
    Then debo ver un mensaje de error "Debe seleccionar una categoría"

  Scenario: Fecha de vencimiento en el pasado
    When ingreso "Título tarea pasada" como título
    And ingreso "Descripción tarea pasada" como descripción
    And selecciono la categoría "Personal"
    And ingreso "2023-01-01" como fecha de vencimiento
    And hago clic en "Crear Tarea"
    Then debo ver un mensaje de error "La fecha de vencimiento no puede ser en el pasado"
