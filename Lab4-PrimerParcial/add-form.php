<?php
include('header.php');
include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <form method="get" action="./Process/addBook.php">
          <div class="container">
               <h3 class="mb-3">Agregar Libro</h3>

               <div class="bg-light p-4">
                    <div class="row">
                             

                         <div class="col-lg-4">
                              <label for="title">Titulo</label>
                              <input type="text" name="title" class="form-control form-control-ml" requiredvalue="">
                         </div>

                         <div class="col-lg-4">
                              <label for="author">Autor</label>
                              <input type="tex" name="author" class="form-control form-control-ml" required value="">
                         </div>

                         <div class="col-lg-4" >
                              <label for="genre">Genero</label>

                              <div class="form-group">
                                   <select name="genre" id="genre"  class="custom-select" required>
                                        <option>Informática</option>
                                        <option>Novela</option>
                                        <option>Historia</option>
                                   </select>
                              </div>                              
                         </div>                         

                         <div class="col-lg-4">
                              <label for="">Formato</label>
                              <input type="radio" name="format" id="papel" value="papel">
                              <label for="papel">Papel</label>
                              <input type="radio" name="format" id="digital" value="digital">
                              <label for="digital">Digital</label>
                              <input type="radio" name="format" id="ambos" value="ambos">
                              <label for="ambos">Ambos</label>
                         </div>

                         <div class="col-lg-4">
                              <span>&nbsp;</span>
                              <button type="submit" name="" class="btn btn-primary ml-auto d-block">Agregar</button>
                         </div>

                    </div>                    
               </div>
          </div>
          </form>
     </section>
</main>

<?php include('footer.php') ?>
