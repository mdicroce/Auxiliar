<?php
include('header.php');
include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <form method="get" action="./Process/addNewShoe.php">
          <div class="container">
               <h3 class="mb-3">Agregar Calzado</h3>

               <div class="bg-light p-4">
                    <div class="row">

                         <div class="col-lg-4">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control form-control-ml" required value="">
                         </div>

                         <div class="col-lg-4">
                              <label for="brand">Brand</label>
                              <select name="brand" id="brand">
                              <option value="Reebook">Reebook</option>
                              <option value="Nike">Nike</option>
                              <option value="Adidas">Adidas</option>
                              </select>
                         </div>

                         <div class="col-lg-4" >
                              <label for="">Category</label>
                              <label for="deportivo">Deportivo</label>
                              <input type="radio" name="category" id="deportivo" value="deportivo">
                              <label for="urbano">Urbano</label>
                              <input type="radio" name="category" id="urbano" value="urbano">
                              <label for="formal">Formal</label>
                              <input type="radio" name="category" id="formal" value="formal">
                         </div>                         

                         <div class="col-lg-4">
                              <label for="price">Price</label>
                              <input type="text" name="price" class="form-control form-control-ml" required value="" min="100" max="5000">
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
