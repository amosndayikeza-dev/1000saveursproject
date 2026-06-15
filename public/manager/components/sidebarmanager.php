<div class="containerLeft" id="container-left">
    <div class="tft-icon-round-petit tft-p-absolute tft-top-5 tft-right-10 tft-bg-black3" onclick="hideSidebar()" id="icon-sidebar">
        <i class="fas fa-arrow-right"></i>
    </div>
    <div class="c-left-header">
        <a href="./dashboardmanager.php">
            <div class="tft-logo-avatar tft-bdr-greensav-1">
                <img src="../assets/images/icons/1000SLogo.png" alt="">
            </div>
        </a>
        <div class="app-title">
            <h1 class="app-name">1000<span>Saveurs</span></h1>
            <p class="tft-title3">Nom du departement</p>
        </div>
    </div>
    <div class="menu">
        <div class="c-left-menu">
            <a href="./dashboardmanager.php">
                <div class="c-left-option">
                    <div class="tft-icon-round-moyen" onclick="showSidebar()">
                        <i class="fas fa-home"></i>
                    </div>
                    <p class="option-name">Dashboard</p>
                </div>
            </a>
            <a href="./salesmanager.php">
                <div class="c-left-option">
                    <div class="tft-icon-round-moyen">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <p class="option-name">Ventes</p>
                </div>
            </a>
            <a href="./employeesmanager.php">
                <div class="c-left-option">
                    <div class="tft-icon-round-moyen">
                        <i class="fas fa-users"></i>
                    </div>
                    <p class="option-name">Employés</p>
                </div>
            </a>
            <a href="./productsmanager.php">
                <div class="c-left-option">
                    <div class="tft-icon-round-moyen">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <p class="option-name">Produits</p>
                </div>
            </a>
            <a href="./stockmanager.php">
                <div class="c-left-option">
                    <div class="tft-icon-round-moyen">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <p class="option-name">Stock</p>
                </div>
            </a>
            <a href="./debtsmanager.php">
                <div class="c-left-option">
                    <div class="tft-icon-round-moyen">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <p class="option-name">Dettes</p>
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
                    <p id="userRole" class="tft-sm-title1">Manager</p>
                </div>
                <div class="tft-icon-carre-moyen tft-bg-black3 tft-transition" onclick="deconnectionModal()">
                    <i class="fe fe-log-out tft-clr-red"></i>
                </div>
            </div>
        </div>
    </div>
</div>