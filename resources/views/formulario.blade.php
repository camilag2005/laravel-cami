<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0"
    />
    <link rel="stylesheet" href="css/estilos.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="favicones/favicon-16x16.png">
    <title>citas dentista </title>
  </head>
  <body>
    <form action="" class="formulario">
      <img src="logo-1.png" class="imgLogo" />
      <h1 class="formulario__titulo">Cgsmile</h1>
      <h3 class="formulario__subtitulo">Reservas de citas</h3>
      
      <label for="cliente" class="formulario__label">¿Cuál es tu nombre?</label>
      <input
        id="cliente"
        type="text"
        class="formulario__input"
        placeholder="Indica cuál es tu nombre"
      />
      <label for="cliente" class="formulario__label">¿Cuál es tu apellido?</label>
      <input
        id="cliente"
        type="text"
        class="formulario__input"
        placeholder="Indica cuál es tu apellido"
      />
      
      <label for="empleado" class="formulario__label"
      >Doctor/a de preferencia</label
    >
      <select id="empleado" name="listaempleados" class="formulario__input">
        <option>Elige:</option>
        <option>Nicole Espinal</option>
        <option>Natalia Almanzar</option>
      </select>
      <label for="servicio" class="formulario__label"
        >¿Cuál es el servicio que se desea realizar?</label
      >
      <select id="servicio" name="listaservicios" class="formulario__input">
        <option>Elige el servicio:</option>
        <option>Chequeo general</option>
        <option>Ortodoncia</option>
        <option>Endodoncia</option>
        <option>Implantes</option>
        <option>Odontopediatra</option>
      </select>
      <label for="fecha" class="formulario__label"
      >Indica la fecha de tu reserva</label> 
      <input
        id="fecha"
        type="date"
        class="formulario__input"
        pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"
      />
      <label for="hora" class="formulario__label"
        >Indica la hora de tu reserva</label
      >
      <input id="hora" type="time" class="formulario__input" />
     
      
      <div id="respuesta"></div>
      <button id="submit" class="formulario__submit"><a href="inicio.html">Agendar</a></button>
    </form>
  
  </body>
</html>