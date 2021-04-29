<?php
include('header.php');
include('nav.php');
require_once('./Process/getList.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Calzados</h2>
               <table class="table bg-light">
                    <thead class="bg-dark text-white">
                         <th>Promedio</th>
                         <th>Cantidad deportivo</th>
                         <th>Cantidad Formal</th>
                         <th>Cantidad Urbano</th>
                    </thead>
                    <tbody>
                         <?php 
                         
                              echo "<tr>";
                              echo "<td>" . $promedio ."</td>";
                              echo "<td>" . $cantidad["deportivo"] . "</td>";
                              echo "<td>" . $cantidad["formal"] . "</td>";
                              echo "<td>" . $cantidad["urbano"] . "</td>";
                              echo "<tr>";
                         
                         ?>
                    </tbody>
               </table>
               <table class="table bg-light">
                    <thead class="bg-dark text-white">
                         <th>Id</th>
                         <th>Name</th>
                         <th>Brand</th>
                         <th>Category</th>
                         <th>Price</th>
                    </thead>
                    <tbody>
                         <?php 
                         foreach($shoeList as $key => $value)
                         {
                              echo "<tr>";
                              echo "<td>" . $value->getId() ."</td>";
                              echo "<td>" .$value->getName() . "</td>";
                              echo "<td>" .$value->getBrand() . "</td>";
                              echo "<td>" .$value->getCategory() . "</td>";
                              echo "<td>" .$value->getPrice() . "</td>";
                              echo "<tr>";
                         }
                         
                         ?>
                    </tbody>
               </table>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
