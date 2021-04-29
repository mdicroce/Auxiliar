<?php 

require_once("config/constants.php");
include('header.php'); 
require_once("./process/band/listar_bandas.php");

?>

<body>
    <?php include('nav.php'); ?>

    <div class="uk-container">

        <main class="uk-padding">

            <form action="./process/band/add_band.php" method="get">
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Nombre de la banda" name="name">
                </div>
                <div class="uk-margin">
                    <textarea class="uk-textarea" rows="5" placeholder="Biografía de la banda" name="bio"></textarea>
                </div>
                <button type="submit" class="uk-button uk-button-primary">Agregar banda</button>
            </form>

            <hr>

            <table class="uk-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th width="30%">Banda</th>
                        <th>Bio</th>
                        <th width="30%">Integrantes</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                         foreach($bandList as $key => $value)
                         {
                              echo "<tr>";
                              echo "<td>" . $value->getId() ."</td>";
                              ?>
                              <td>
                                <a href="<?php ROOT_CLIENT?>/matiasdicrocecom1/modify_band.php?name=<?php echo $value->getName() ?>'"><?php echo $value->getName() ?></a>
                              
                              </td>
                              <?php
                              echo "<td>" .$value->getBio() . "</td>";
                              echo "<td> <ul>";
                              foreach($value->getMembers() as $key => $bandMembers)
                              {
                                    echo "<li>" . $bandMembers->getName() . "</li>";
                              }
                              echo "</ul> </td> ";
                              ?>
                                <td><form action="./process/band/remove.php" method="get">
                                    <input type="hidden" value=<?php echo"\"".$value->getName()."\"";?> name="name">
                                    <button type="submit">Eliminar</button>
                                </form></td>
                            <?php
                              echo "<tr>";
                         }
                    ?>
                </tbody>
            </table>
    </main>
    </div>
</body>

<?php include('footer.php'); ?>