<div class="containerLeft" id="container-left">
    <div class="tft-icon-round-moyen -petit tft-p-absolute tft-top-5 tft-right-10 tft-bg-black3" onclick="hideSidebar()" id="icon-sidebar">
        <i class="fas fa-arrow-right"></i>
    </div>
    <div class="c-left-header">
        <a href="./dashboardpatron.php">
            <div class="tft-logo-avatar tft-bdr-greensav-1">
                <img src="../assets/images/icons/abonnes.png" alt="">
            </div>
        </a>
        <div class="app-title">
            <h1 class="app-name">1000<span>Saveurs</span></h1>
        </div>
    </div>
    <div class="menu">
        <div class="c-left-menu">
            <a href="./dashboardpatron.php">
                <div class="c-left-option">
                    <div class="tft-icon-round-moyen" onclick="showSidebar()">
                        <i class="fas fa-home"></i>
                    </div>
                    <p class="option-name">Dashboard</p>
                </div>
            </a>
            <a href="./departementspatron.php">
                <div class="c-left-option">
                    <div class="tft-icon-round-moyen">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <p class="option-name">Départements</p>
                </div>
            </a>
            <div class="repport">
                <div class="c-left-option tft-br-5-5-0-0 tft-p-relative">
                    <div class="tft-icon-round-moyen ">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <p class="option-name">Rapports</p>
                    <div class="tft-chevron-icon tft-p-absolute tft-top-15 tft-right-5" onclick="showRepportOptions()">
                        <i class="fas fa-chevron-down tft-clr-gris1"></i>
                    </div>
                </div>
                <div class="repport-options" id="repport-options">
                    <a href="./salesrepport.php" class="repport-title">
                        <div class="tft-icon-round-petit tft-bdr-greensav-1">
                            <i class="fas fa-chart-bar tft-clr-greensav"></i>
                        </div>
                        <p class="tft-title4">Ventes</p>
                    </a>
                    <a href="./repportdebtspatron.php" class="repport-title">
                        <div class="tft-icon-round-petit tft-bdr-greensav-1">
                            <i class="fas fa-chart-bar tft-clr-greensav"></i>
                        </div>
                        <p class="tft-title4">Dettes</p>
                    </a>
                    <a href="./repportsalarypatron.php" class="repport-title">
                        <div class="tft-icon-round-petit tft-bdr-greensav-1">
                            <i class="fas fa-chart-bar tft-clr-greensav"></i>
                        </div>
                        <p class="tft-title4">Salaires</p>
                    </a>
                </div>
            </div>
            <a href="./employespatron.php">
                <div class="c-left-option">
                    <div class="tft-icon-round-moyen">
                        <i class="fas fa-users"></i>
                    </div>
                    <p class="option-name">Employés</p>
                </div>
            </a>
            <a href="./stockpatron.php">
                <div class="c-left-option">
                    <div class="tft-icon-round-moyen">
                        <i class="fas fa-users"></i>
                    </div>
                    <p class="option-name">Stock</p>
                </div>
            </a>
        </div>
        <div class="user-option">
            <div class="tft-avatar-profil-petit tft-bdr-orangesav-2 tft-cursor-pointer" onclick="showContainerRight()">
                <img src="../assets/images/icons/femme.jpg" alt="">
            </div>
            <div class="user-infos">
                <div class="user-name">
                    <h2 id="userName" class="tft-title4 tft-fw-600"> Chargement</h2>
                    <p id="userRole" class="tft-sm-title1">Patronne</p>
                </div>
                <div class="tft-icon-carre-moyen tft-bg-black3 tft-transition" onclick="deconnectionModal()">
                    <i class="fe fe-log-out tft-clr-red"></i>
                </div>
            </div>
        </div>
    </div>
</div>