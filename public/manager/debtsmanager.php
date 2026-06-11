<!-- head debut -->
<?php
    include("./components/headmanager.php");
?>
<!-- head fin -->
<body>
    <div class="containerAll">
        <!-- partie gauche debut ===========SIDEBAR-->
            <?php
                include("./components/sidebarmanager.php");
            ?>
        <!-- partie gauche fin ===========SIDEBAR-->
        <!-- partie centre -->
        <div class="containerCenter">
            <div class="c-center-header">
                <h2 class="tft-title1 tft-fw-600 tft-center tft-gap-10px">
                    <div class="tft-icon-carre tft-bdr-gris-1" onclick="showSidebar()">
                        <i class="fas fa-bars"></i>
                    </div>
                    Gestion des dettes</h2>
                <div class="header-aside">
                    <div class="tft-search-withIcon">
                        <input type="search" placeholder="Rechercher" class="tft-clr-white3">
                        <div class="tft-search-withIcon-icon tft-bg-greensav">
                            <i class="fas fa-search tft-clr-remain-white tft-fw-600"></i>
                        </div>
                    </div>
                    <div class="tft-icon-carre-moyen tft-bdr-greensav-1 tft-bg-black3" onclick="showContainerRightNotification()">
                        <i class="fas fa-bell tft-clr-greensav"></i>
                    </div>
                    <div class="tft-icon-carre-moyen tft-bdr-greensav-1 tft-bg-black3"  onclick="showContainerRightParametre()">
                        <i class="fas fa-cog tft-clr-greensav"></i>
                    </div>
                    <div class="tft-icon-carre-moyen tft-bg-orangesav2" id="btn-light-mode" onclick="changeMode()">
                        <i class="fas fa-moon tft-clr-white"></i>
                    </div>
                    <div class="tft-icon-carre-moyen tft-bg-orangesav2 tft-hidden" id="btn-dark-mode" onclick="changeMode()">
                        <i class="fas fa-moon tft-clr-white"></i>
                    </div>
                </div>
            </div>
            <div class="c-center-body" id="manager-page-root" data-manager-page="debts"></div>
        </div>
        <!-- partie droite ajoute la classe active pour montrer debut ===========PROFIL-->
            <?php
                include("./components/profilmanager.php");
            ?>
        <!-- partie droite ajoute la classe active pour montrer fin ===========PROFIL-->
        <div id="manager-modals-root"></div>
        <!-- popup de deconnexion -->
        <div class="tft-popup-modal tft-a-center" id="deconnection-modal">
            <div class="tft-popup-container-small tft-bg-black3 tft-p-relative">
                <div class="deconnection-actions">
                    <h3 class="tft-title1">Voulez-vous deconnecter ?</h3>
                    <div class="deconnection-options">
                        <a class="tft-btn tft-bg-red tft-clr-white" href="#" id="logoutyes" >Oui</a>
                        <btn class="tft-btn tft-bg-greensav tft-clr-white" onclick="closeModal()">Non</btn>
                    </div>
                </div>
                <div class="tft-close-icon tft-p-absolute tft-top-5 tft-right-10 tft-hover-red" onclick="closeModal()">
                    <i class="fas fa-times tft-clr-white3"></i>
                </div>
            </div>
        </div>
        <!-- popup de deconnexion -->
    </div>
</body>

<script src="../assets/js/manager-api.js"></script>
<script src="../assets/js/manager-ui.js"> </script>
<script src="../assets/js/scripts.js"> </script>
<script src="../assets/js/pagination.js"></script>

</html>