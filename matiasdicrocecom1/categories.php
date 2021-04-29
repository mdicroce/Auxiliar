<?php 

require_once("config/constants.php");
include('header.php'); 

?>

<body>
    <?php include('nav.php'); ?>

    <div class="uk-container">

        <main class="uk-padding">

            <form action="">
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Nombre de la categoría">
                </div>

                <button type="submit" class="uk-button uk-button-primary">Agregar Categoría</button>
            </form>

            <hr>

            <table class="uk-table">
                <thead>
                    <tr>
                        <th width="30%">ID</th>
                        <th>Nombre</th>
                        <th width="30%">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rock</td>
                        <td>
                            Activo
                        </td>
                    </tr>
                    <?php
                         foreach($categoryList as $key => $value)
                         {
                              echo "<tr>";
                              echo "<td>" . $value->getId() ."</td>";
                              ?>
                              <td>
                                <a href="<?php ROOT_CLIENT?>/matiasdicrocecom1/modify_category.php?name=<?php echo $value->getName() ?>'"><?php echo $value->getName() ?></a>
                              </td>
                              <?php
                              if ($value->getIsActive())
                              {
                                echo "Activo";
                              }
                              else
                              {
                                  echo "No activo";
                              }
                              
                         }
                    ?>
                </tbody>
            </table>
    </main>
    </div>
</body>

<?php include('footer.php'); ?>