# Algoritmos de Búsqueda en PHP

Proyecto académico sobre algoritmos de búsqueda aplicados a arreglos unidimensionales y bidimensionales.

## Contenido

- `unidimensional/busqueda_secuencial.php`: búsqueda elemento por elemento.
- `unidimensional/busqueda_binaria.php`: búsqueda por mitades en un arreglo ordenado.
- `bidimensional/busqueda_matriz.php`: búsqueda recorriendo filas y columnas.
- `README.md`: instrucciones del proyecto.

## Requisitos

- PHP 8.0 o superior.
- Un editor de código, por ejemplo Visual Studio Code.
- Opcionalmente XAMPP si se desea ejecutar desde un servidor local.

## Ejecución desde la terminal

1. Descargar o clonar el repositorio.
2. Abrir una terminal dentro de la carpeta del proyecto.
3. Ejecutar cualquiera de los archivos, por ejemplo:

```bash
php unidimensional/busqueda_secuencial.php
php unidimensional/busqueda_binaria.php
php bidimensional/busqueda_matriz.php
```

También se puede iniciar el servidor integrado de PHP:

```bash
php -S localhost:8000
```

Luego abrir `http://localhost:8000`.

## ¿Cómo funciona?

### Búsqueda secuencial
Revisa los elementos desde el primero hasta encontrar el valor buscado. No necesita que el arreglo esté ordenado.

### Búsqueda binaria
Busca en la mitad del arreglo y elimina la mitad que no puede contener el elemento. Requiere que el arreglo esté ordenado.

### Búsqueda bidimensional
Recorre una matriz mediante dos posiciones: fila y columna. En este proyecto se usa búsqueda secuencial.

## Ejemplo

Si el arreglo es:

```text
[10, 20, 30, 40, 50]
```

y buscamos `40`, la búsqueda secuencial revisa:

```text
10 -> 20 -> 30 -> 40
```

y devuelve la posición donde fue encontrado.

## Autor

Samantha Moreno
