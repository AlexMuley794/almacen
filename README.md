# 📦 Sistema de Gestión de Almacenes

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

## 🏢 Descripción del Sistema

**Sistema de Gestión de Almacenes** es una aplicación web empresarial desarrollada con Laravel que permite a las empresas gestionar de manera eficiente su inventario y productos. La plataforma ofrece una interfaz intuitiva para el control completo del almacén, incluyendo registro, actualización y seguimiento de productos en tiempo real.

### ✨ Características Principales

- 📋 **Gestión Completa de Productos**: CRUD completo para productos con nombre, cantidad y precio
- 🎯 **Dashboard Empresarial**: Panel de control centralizado para la gestión del almacén
- 🔒 **Sistema de Autenticación**: Control de acceso con roles de administrador y empleado
- 📱 **Interfaz Responsiva**: Diseño adaptable para dispositivos móviles y escritorio
- ⚡ **Rendimiento Optimizado**: Construido con las mejores prácticas de Laravel
- 🛡️ **Seguridad Empresarial**: Protección contra vulnerabilidades comunes

---

## 🔧 Requisitos del Sistema

### Requisitos Mínimos

| Componente | Versión Mínima | Recomendada |
|------------|----------------|-------------|
| **PHP** | 8.1 | 8.2+ |
| **Composer** | 2.0 | Última |
| **Node.js** | 16.x | 18.x+ |
| **NPM** | 8.x | 9.x+ |
| **MySQL** | 8.0 | 8.0+ |
| **Apache/Nginx** | - | Última |

### Extensiones PHP Requeridas
```
- BCMath
- Ctype
- Fileinfo
- JSON
- Mbstring
- OpenSSL
- PDO
- Tokenizer
- XML
```

---

## 🚀 Instalación Paso a Paso

### 1. Clonar el Repositorio
```bash
git clone https://github.com/tu-usuario/almacen.git
cd almacen
```

### 2. Instalar Dependencias de PHP
```bash
composer install
```

### 3. Instalar Dependencias de Node.js
```bash
npm install
```

### 4. Configurar Variables de Entorno
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configurar Base de Datos
Edita el archivo `.env` con tus credenciales de base de datos:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=almacen_db
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 6. Ejecutar Migraciones y Seeders
```bash
php artisan migrate
php artisan db:seed
```

### 7. Compilar Assets
```bash
npm run build
```

### 8. Iniciar el Servidor
```bash
php artisan serve
```

La aplicación estará disponible en: `http://localhost:8000`

---

## 🛠️ Comandos Útiles

### Desarrollo
```bash
# Servidor de desarrollo
php artisan serve

# Compilar assets en modo desarrollo
npm run dev

# Modo watch para desarrollo
npm run dev -- --watch
```

### Base de Datos
```bash
# Ejecutar migraciones
php artisan migrate

# Rollback de migraciones
php artisan migrate:rollback

# Refrescar base de datos con seeders
php artisan migrate:fresh --seed

# Ejecutar seeders específicos
php artisan db:seed --class=ProductoSeeder
```

### Testing
```bash
# Ejecutar todos los tests
php artisan test

# Ejecutar tests con cobertura
php artisan test --coverage

# Ejecutar tests específicos
php artisan test --filter=ProductoTest
```

### Mantenimiento
```bash
# Limpiar caché
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Optimizar aplicación para producción
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 👥 Credenciales de Prueba

### Administrador
- **Email**: `admin@almacen.com`
- **Contraseña**: `admin123`
- **Permisos**: Acceso completo al sistema

### Empleado
- **Email**: `empleado@almacen.com`
- **Contraseña**: `empleado123`
- **Permisos**: Gestión de productos, sin acceso a configuración

---

## 📁 Estructura del Proyecto

```
almacen/
├── app/
│   ├── Http/Controllers/
│   │   └── ProductoController.php
│   └── Models/
│       └── Producto.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   │   └── productos/
│   ├── css/
│   └── js/
├── routes/
│   └── web.php
└── public/
```

---

## 🔒 Seguridad

- ✅ Protección CSRF en todos los formularios
- ✅ Validación de datos de entrada
- ✅ Sanitización de salidas
- ✅ Autenticación y autorización
- ✅ Encriptación de contraseñas
- ✅ Protección contra inyección SQL

---

## 📈 Soporte Empresarial

### Características Empresariales
- 🏢 **Multi-tenant**: Soporte para múltiples empresas
- 📊 **Reportes Avanzados**: Análisis de inventario y tendencias
- 🔄 **Integraciones**: APIs para sistemas externos
- 📧 **Notificaciones**: Alertas de stock bajo y actualizaciones
- 🔐 **Auditoría**: Registro completo de actividades

### Soporte Técnico
Para soporte empresarial, contacta:
- 📧 Email: soporte@almacen.com
- 📞 Teléfono: +34 XXX XXX XXX
- 💬 Chat: Disponible en horario comercial

---

## 📄 Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).

---

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Por favor:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/nueva-funcionalidad`)
3. Commit tus cambios (`git commit -m 'Agregar nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Abre un Pull Request

---

<p align="center">
  <strong>Desarrollado con ❤️ para empresas que buscan eficiencia en la gestión de almacenes</strong>
</p>
