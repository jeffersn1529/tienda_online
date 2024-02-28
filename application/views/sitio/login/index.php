<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="CodePel">
      <title> Login Usuario </title>
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php echo base_url() . 'assets/templates/dashboard/css/style.css'?>">
      <!-- Demo CSS (No need to include it into your project) -->
      <link rel="stylesheet" href="./css/demo.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   </head>
   <body>
<div class="container">
<div class="row m-5 no-gutters shadow-lg">
<div class="col-md-6 d-none d-md-block">
<img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" />
</div>
<div class="col-md-6 bg-white p-5">
<br>
<br>

<h3 class="pb-3">Login Usuario</h3>
<br>
<div class="form-style">
<form action="<?php echo base_url() . 'index.php/iniciar-sesion/validar-inicio-sesion'; ?>" class="user" method="post">
  <div class="form-group pb-3">    
    <input type="email" placeholder="Correo electrónico" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp">   
  </div>
  <div class="form-group pb-3">   
    <input type="password" placeholder="Contraseña" class="form-control" name="contraseña" id="exampleInputPassword1">
  </div>
  <div class="d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span class="pl-2 font-weight-bold"> &nbsp Remember Me</span></div>
<div></a></div>
</div>
   <div class="pb-2">
  <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Iniciar sesión</button>
   </div>
</form>
<div class="sideline">OR</div>
  <div class="pt-4 text-center">
  Si no tienes cuenta. <a href="registrarse">Regístrate</a>
  </div>
  <div class="pt-4 text-center">
  ¿Quieres ir a la pagina principal?. <a href="inicio">Pagina principal</a>
  </div>
</div>

</div>
</div>
</div>
         <!-- END EDMO HTML (Happy Coding!)-->
      </main>
      <!-- Script JS -->
      <script src="<?php echo base_url() . 'assets/templates/dashboard/js/script.js'?>"></script>
      <!--$%analytics%$-->
   </body>
</html>