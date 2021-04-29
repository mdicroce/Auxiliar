<?php
include('header.php');
include('nav.php');
require_once('./Process/listBook.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Libros</h2>

               <table class="table bg-light">
                    <thead class="bg-dark text-white">
                         <th>Id</th>
                         <th>Titulo</th>
                         <th>Autor</th>
                         <th>Genero</th>
                         <th>Formato</th>
                    </thead>
                    <tbody>
                         <?php 
                         foreach($bookList as $key => $value)
                         {
                              echo "<tr>";
                              echo "<td>" . $value->getId() ."</td>";
                              echo "<td>" .$value->getTitle() . "</td>";
                              echo "<td>" .$value->getAuthor() . "</td>";
                              echo "<td>" .$value->getGenre() . "</td>";
                              echo "<td>" .$value->getFormat() . "</td>";
                              echo "<tr>";
                         }
                         
                         ?>                     
                    </tbody>
               </table>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
