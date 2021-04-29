<?php
 include('header.php');
  ?>

     <main class="d-flex align-items-center justify-content-center height-100" >
          <div class="content">
               <header class="text-center">
                    <h2>Primer Parcial - 2020</h2>
               </header>

               <form action="./Process/loginProcess.php" method="post" class="login-form bg-dark-alpha p-5 bg-light">
                    <div class="form-group">
                         <label for="">Usuario</label>
                         <input type="text" name="email" class="form-control form-control-lg" placeholder="Ingresar usuario">
                    </div>
                    <div class="form-group">
                         <label for="">Contraseña</label>
                         <input type="password" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña">
                    </div>
                    <button class="btn btn-primary btn-block btn-lg" type="submit">Iniciar Sesión</button>
               </form>
               <?php 
                    if(!empty($_GET))
                    {
                         echo $mensaje;
                    }


               ?>
          </div>
     </main>

<?php
 include('footer.php')
?>
