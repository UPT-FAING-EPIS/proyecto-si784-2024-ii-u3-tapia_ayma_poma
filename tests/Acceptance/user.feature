Feature: Gestión de Usuarios
  Como administrador
  Quiero gestionar los usuarios
  Para asegurar un control adecuado de acceso

  Scenario: Crear un nuevo usuario
    Dado que tengo los detalles del usuario "Nombre: Juan, Email: juan@ejemplo.com, Contraseña: 1234"
    Cuando envío una solicitud para crear el usuario
    Entonces el usuario debe ser creado exitosamente

  Scenario: Buscar usuario por email
    Dado que existe un usuario con el email "juan@ejemplo.com"
    Cuando busco el usuario por su email
    Entonces debo encontrar sus detalles
