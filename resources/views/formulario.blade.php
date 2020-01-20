<html>
  <head>
    <link rel="stylesheet" href="bootrap/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Jacques Francois Shadow' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo asset('css/formulario estilos1.css')?>" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="error">
        <ul>
          @foreach ($errors->All() as $error)
          <li>
          {{ $error }}

          </li>

          @endforeach
        </ul>

      </div>


    <div class="col-xs-12 col-sm-8 col-md-6 col-lg-12">
    <form action="/formulario" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <legend class="regis">Registro</legend>
      <label for="nomu">Nombre de Usuario</label><br/>

      <input type="text" name="nomu" class="area" value="">
    <br/>
    <br/>
        <label for="fecha">Fecha de Nacimiento</label><br/>

        <input type="date" name="fecha" class="area2" value="">
  <br/>
  <br/>
        <label for="email">Correo-E</label><br/>

        <input type="email" name="email" class="area" value="">
  <br/>
  <br/>
        <label for="gene">Genero</label><br/>

          <span>Seleccione un genero</span><br>
        <label for="gene">Varon</label>
        <input type="radio" name="gene" value="1" class="area">
        <label for="gene">Mujer</label>
        <input type="radio"name="gene" value="2" class="area">
        <label for="gene">Personalizado</label>
        <input type="radio" name="gene" value="3" class="area">
  <br/>
  <br/>
        <Label for = "archivo">Seleccione una foto de perfil</label><br/>
        <input type="file" name ="foto">
  <br/>
  <br/>
          <label for="clave">Contraseña</label><br/>

          <input type="password" name="clave" class="area">
      <br/>
      <br/>
      <label for="confirmarc">Confirmar Contraseña</label><br/>

      <input type="password" name="confirmarc" class="area">
      <br/>
      <br/>

        <input class="neon" type="submit" name="submit" value="Registrarse">
        <span></span>
        <span></span>
        <span></span>
        <span></span>



    </form>

      <br/>
      <a href="onpoint" class="neon">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
       Inicio
    </a>



        <a href="faq" class="neon">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
               faq
        </a>

        </div>


        <script src="bootstrap/js/bootstrap.min.js"></script>
         <script src="bootstrap/js/jquery.js"></script>
      </body>
      </html>
