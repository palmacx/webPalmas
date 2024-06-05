<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palma's Shop</title>
  <link rel="stylesheet" href="../css/output.css">
  <style>
    /* Ocultar las categorías por defecto */
    .navbar ul > li > ul {
      display: none;
    }

    /* Mostrar las categorías cuando el elemento padre es hover */
    .navbar ul > li:hover > ul {
      display: block;
    }
    
     /* Estilos personalizados para el footer */
    .footer-links {
      display: flex;
      justify-content: space-between;
    }

    .footer-column {
      width: 45%; /* Ajusta el ancho de las columnas según sea necesario */
    }

    .footer-column ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-column ul li {
      margin-bottom: 1rem;
    }

    .footer-column ul li a {
      color: #ccc;
      transition: color 0.3s ease;
    }

    .footer-column ul li.title a {
      color: #fff; /* Cambia el color del "título" */
      pointer-events: none; /* Desactiva los eventos de puntero */
      cursor: default; /* Cambia el cursor */
    }

    .footer-column ul li a:hover {
      color: #fff; /* Cambia el color del enlace al pasar el cursor */
    }
  </style>
</head>