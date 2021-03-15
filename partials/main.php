<!-- INCLUDO LA PAGINA MAIN   -->
<?php require_once 'Employee.php'; ?>

<!-- MAIN -->
<main>

    <!-- CONTAINER INFO SECONDARIE  -->
    <div class="container info-secondarie">
        
        <h2>Dati User</h2>
        
        <!-- BOX INFO  -->
        <div class="box info-secondarie">

            <!-- PRIMO USER  -->
            <div class="primoUser">
                <h3><?php echo $primoUserInfoSecondarie->getSesso() . ' ' . $primoUserInfoSecondarie->nome ?></h3>
                <p>ID Utente: <?php echo $primoUserInfoPrimarie->id?></p>
                <p>Nome: <?php echo $primoUserInfoSecondarie->nome?></p>
                <p>Cognome: <?php echo $primoUserInfoSecondarie->cognome?></p>
                <p>Nazione: <?php echo $primoUserInfoSecondarie->nazione?></p>
            </div>
            <!--END PRIMO USER  -->

            <!-- SECONDO USER  -->
            <div class="secondoUser">
                <h3><?php echo $secondoUserInfoSecondarie->getSesso() . ' ' . $secondoUserInfoSecondarie->nome ?></h3>
                <p>ID Utente: <?php echo $secondoUserInfoPrimarie->id?></p>
                <p>Nome: <?php echo $secondoUserInfoSecondarie->nome?></p>
                <p>Cognome: <?php echo $secondoUserInfoSecondarie->cognome?></p>
                <p>Nazione: <?php echo $secondoUserInfoSecondarie->nazione?></p>
            </div>
            <!--END SECONDO USER  -->

            <!-- TERZO USER  -->
            <div class="terzoUser">
                <h3><?php echo $terzoUserInfoSecondarie->getSesso() . ' ' . $terzoUserInfoSecondarie->nome ?></h3>
                <p>ID Utente: <?php echo $terzoUserInfoPrimarie->id?></p>
                <p>Nome: <?php echo $terzoUserInfoSecondarie->nome?></p>
                <p>Cognome: <?php echo $terzoUserInfoSecondarie->cognome?></p>
                <p>Nazione: <?php echo $terzoUserInfoSecondarie->nazione?></p>
            </div>
            <!-- END TERZO USER  -->

        </div>
        <!--END BOX INFO  -->

    </div>
    <!--END CONTAINER INFO SECONDARIE  -->


    <!-- CONTAINER INFO PRIMARIE  -->
    <div class="container info-primarie">
        
        <h2>Info User</h2>
        
        <!-- BOX INFO  -->
        <div class="box info-primarie">
            <!-- PRIMO USER  -->
            <div class="primoUser">
                <p>ID: <?php echo $primoUserInfoPrimarie->id?></p>
                <p>Nome Utente: <?php echo $primoUserInfoPrimarie->utente?></p>
                <p>Email: <?php echo $primoUserInfoPrimarie->email?></p>
            </div>
            <!-- END PRIMO USER  -->

            <!-- SECONDO USER  -->
            <div class="secondoUser">
                <p>ID: <?php echo $secondoUserInfoPrimarie->id?></p>
                <p>Nome Utente: <?php echo $primoUserInfoPrimarie->utente?></p>
                <p>Email: <?php echo $secondoUserInfoPrimarie->email?></p>
            </div>
            <!-- END SECONDO USER  -->

            <!-- TERZO USER  -->
            <div class="terzoUser">
                <p>ID: <?php echo $terzoUserInfoPrimarie->id?></p>
                <p>Nome Utente: <?php echo $terzoUserInfoPrimarie->utente?></p>
                <p>Email: <?php echo $terzoUserInfoPrimarie->email?></p>
            </div>
            <!-- END TERZO USER  -->

        </div>
        <!--END BOX INFO  -->
        
    </div>
    <!--END CONTAINER INFO PRIMARIE  -->

</main>
<!--END MAIN