Feature: Inicio de sesión
  Como usuario
  Quiero iniciar sesión en el sistema
  Para acceder a mi cuenta

  Scenario: Inicio de sesión exitoso
    Given estoy en la página de login
    When ingreso "usuario@correo.com" como correo y "contraseña123" como contraseña
    And hago clic en "Iniciar Sesión"
    Then debo ser redirigido al panel de control

