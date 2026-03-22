# Sistema de Gestión de Estadías (PHP)

Proyecto académico refactorizado desde un sistema legacy desarrollado en PHP.

## 🔧 Funcionalidades

- Registro de usuarios
- Inicio de sesión con roles (admin / usuario)
- Panel de administración (CRUD de usuarios)
- Subida de documentos (archivos, constancias, actas)
- Navegación modular con includes
- Sistema de sesiones

## 🧱 Tecnologías

- PHP
- MySQL
- HTML
- CSS
- JavaScript

## 📁 Estructura

- `/assets` → CSS, JS, imágenes
- `/config` → conexión a base de datos
- `/includes` → navbar, auth
- `/uploads` → archivos subidos
- `/admin` (implícito en consultas)
- `/user` (proceso de documentos)

## 🚀 Cómo ejecutar

1. Clonar el repositorio
2. Colocar en `/var/www/html/`
3. Crear base de datos `estadias`
4. Importar tablas necesarias
5. Ejecutar en:
   http://localhost/utsoe-estadias

## 👨‍💻 Autor

Proyecto refactorizado como parte de reconstrucción de portafolio.
