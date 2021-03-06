<?php
/**
 * Vue : accueil
 */
?>

<style>
    <?php include "css/css_accueil.css";
    ?>
</style>


<?php foreach ($maisons as $element) { ?>

    <div class="boitePrincipale">
        <div id="accueil-header">
            <?php echo $element['nom']; ?>
            <?php echo $element['location']; ?>
        </div>

        <div class="flex-container">

            <?php foreach ($element['machines'] as $machine) { ?>

                <div class="boite">

                    <div class="cafetiere-header">
                        <?php echo $machine['name']; ?>
                    </div>

                    <div style="text-align: center;">
                        <button>
                            INSTANT COFFEE
                        </button>
                    </div>

                    <table class="Recap" width=100%>
                        <tr>
                            <th>  Machine state :</th>
                            <td><?php 
                            
                            if ($machine['etat']==1){
                                echo 'Fonctionnelle';
                            } else{
                                echo 'Non Fonctionnelle';
                            }
                            ?></td>
                        </tr>

                        <tr>
                            <th> Time of use : </th>
                            <td> <?php echo $machine['tempsUtilisation']; ?> </td>
                        </tr>

                        <tr>
                            <th> Machine working : </th>
                            <td>
                            <?php 

                            if ($machine['isDispo']==1){
                                echo 'Disponible';
                            } else{
                                echo 'Non Disponible';
                            }
                            
                            ?>
                            </td>
                        </tr>

                        <tr>
                            <th> Remaining Capsules : </th>
                            <td> 52 </td>
                        </tr>

                    </table>
                </div>
            <?php } ?>



        </div>
    </div>

<?php } ?>