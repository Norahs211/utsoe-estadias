# 🎓 Sistema de Gestión de Estadías (PHP)

Sistema web desarrollado en PHP para la gestión de usuarios y documentación académica (estadías), refactorizado a partir de un proyecto legacy universitario.

---

## 🚀 Demo local

```bash
http://localhost/utsoe-estadias
````

---

## 🧠 Descripción

Este proyecto comenzó como un sistema académico básico desarrollado en PHP con múltiples problemas de estructura, rutas rotas y código duplicado.

Fue **recuperado, depurado y refactorizado completamente**, convirtiéndolo en un sistema funcional con:

* Autenticación de usuarios
* Roles (administrador / usuario)
* Panel de administración (CRUD)
* Subida de archivos
* Navegación modular
* Estructura organizada

---

## ✨ Funcionalidades

### 🔐 Autenticación

* Inicio de sesión
* Registro de usuarios
* Control de sesiones
* Separación de roles

### 👨‍💼 Administrador

* Ver usuarios
* Editar usuarios
* Eliminar usuarios
* Panel administrativo (`consulta.php`)

### 👤 Usuario

* Acceso a proceso de estadías
* Subida de documentos:

  * Archivos
  * Constancias
  * Actas

### 📁 Gestión de archivos

* Validación de tipo de archivo
* Límite de tamaño
* Almacenamiento organizado en `/uploads`

---

## 🧱 Tecnologías utilizadas

* PHP (procedural)
* MySQL / MariaDB
* HTML5
* CSS3
* JavaScript (básico)
* Apache (Linux)

---

## 🗂️ Estructura del proyecto

```
utsoe-estadias/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── img/
│
├── config/
│   └── db.php
│
├── includes/
│   ├── navbar.php
│   └── auth.php
│
├── uploads/
│   ├── archivos/
│   ├── constancias/
│   └── actas/
│
├── Login.php
├── registro.php
├── validar.php
├── consulta.php
├── proceso.php
└── ...
```

---

## 🔧 Instalación

1. Clonar el repositorio:

```bash
git clone https://github.com/TU-USUARIO/utsoe-estadias.git
```

2. Mover a servidor local:

```bash
/var/www/html/
```

3. Crear base de datos:

```sql
CREATE DATABASE estadias;
```

4. Crear tablas necesarias (`usuarios`, `registro`)

5. Configurar conexión en:

```php
config/db.php
```

6. Ejecutar en navegador:

```bash
http://localhost/utsoe-estadias
```

---

## 🔒 Notas de seguridad

Este proyecto es académico. Algunas mejoras pendientes:

* Encriptación de contraseñas (`password_hash`)
* Uso de prepared statements
* Validación avanzada de inputs
* Protección CSRF

---

## 🧹 Refactor realizado

* ✔ Corrección de rutas `.html` → `.php`
* ✔ Eliminación de código duplicado
* ✔ Modularización (`includes/`)
* ✔ Sistema de autenticación centralizado
* ✔ Reorganización de assets
* ✔ Separación de archivos subidos
* ✔ Limpieza de estructura general

---

## 👨‍💻 Autor

Norash
Proyecto refactorizado como parte de reconstrucción de portafolio y práctica de mantenimiento de código legacy en PHP.

---

## 📌 Estado del proyecto

🟢 Funcional
🟡 Mejorable (seguridad, arquitectura MVC, UI)

---

## 🚀 Futuras mejoras

* Migración a MVC
* Diseño UI moderno
* Sistema de roles más avanzado
* Panel de administración completo
* Deploy en servidor remoto

````
