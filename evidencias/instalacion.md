# Evidencia de instalación (Etapa 1)

- **Sistema operativo:** Windows 11
- **Paquete usado:** XAMPP 8.2.12
- **Versión de PHP:** 8.2.12 (salida de `php -v`)
- **Servidor web:** Apache 2.4.x
- **Base de datos:** MariaDB 10.4.32
- **Puerto del servidor web:** 80
- **Ruta de instalación:** C:\xampp
- **Problema encontrado y cómo lo resolviste:** Al ejecutar `php -v` en PowerShell me dijo que `php` no se reconocía, así que agregué `C:\xampp\php` al PATH y abrí una terminal nueva. Luego, al mover mi repositorio a `htdocs`, me dio un error de permisos por la carpeta `.git` y la copia quedó incompleta, así que volví a clonarlo directamente en `C:\xampp\htdocs`. Por último, MySQL se detuvo solo con errores de InnoDB en el log; como aún no tenía datos míos, renombré `mysql\data` y copié la carpeta `mysql\backup` en su lugar, y con eso volvió a iniciar.