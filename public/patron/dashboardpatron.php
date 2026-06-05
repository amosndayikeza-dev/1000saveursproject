
<!-- head debut-->
    <?php
        include("./components/headpatron.php"); 
    ?>
<!-- head fin-->
<body>
    <div class="containerAll">
        <!-- partie gauche debut ================SIDEBAR=============-->
            <?php
                include("./components/sidebarpatron.php"); 
            ?>
        <!-- partie gauche fin ================SIDEBAR=============-->
        <!-- partie centre -->
        <div class="containerCenter">
            <div class="c-center-header">
                <h2 class="tft-title1 tft-fw-600 tft-center tft-gap-10px">
                    <div class="tft-icon-carre tft-bdr-gris-1" onclick="showSidebar()">
                        <i class="fas fa-bars"></i>
                    </div>
                    Dashboard
                </h2>
                <!-- le menu header debut -->
                    <?php
                        include("./components/menuheaderpatron.php"); 
                    ?>
                <!-- le menu header fin -->
            </div>
            <div class="c-center-body">
                <div class="overview-cards">
                    <div class="overview-card tft-bg-yellow-bg">
                        <div class="icon-container tft-bdr-yellow-txt-1">
                            <div class="tft-icon-round-moyen tft-bg-yellow-bg">
                                <i class="fas fa-sitemap tft-clr-yellow-txt"></i>
                            </div>
                        </div>
                        <div class="card-info">
                            <h3 class="tft-title4">Départements</h3>
                            <p id="deptCount" class="tft-title1 tft-fw-700 tft-clr-white">0</p>
                        </div>
                    </div>
                    <div class="overview-card tft-bg-green-bg">
                        <div class="icon-container tft-bdr-green-txt-1">
                            <div class="tft-icon-round-moyen tft-bg-green-bg">
                                <i class="fas fa-users tft-clr-green-txt"></i>
                            </div>
                        </div>
                        <div class="card-info">
                            <h3 class="tft-title4">Employés</h3>
                            <p id="empCount" class="tft-title1 tft-fw-700 tft-clr-white">0</p>
                        </div>
                    </div>
                    <div class="overview-card tft-bg-blue-bg">
                        <div class="icon-container tft-bdr-blue-txt-1">
                            <div class="tft-icon-round-moyen tft-bg-blue-bg">
                                <i class="fas fa-chart-bar tft-clr-blue-txt"></i>
                            </div>
                        </div>
                        <div class="card-info">
                            <h3 class="tft-title4">Rapports</h3>
                            <p id="reportsCount" class="tft-title1 tft-fw-700 tft-clr-white">0</p>
                        </div>
                    </div>
                    <div class="overview-card tft-bg-orangesav2">
                        <div class="icon-container tft-bdr-orangesav-1">
                            <div class="tft-icon-round-moyen tft-bg-orangesav2">
                                <i class="fas fa-users tft-clr-orangesav"></i>
                            </div>
                        </div>
                        <div class="card-info">
                            <h3 class="tft-title4">Dettes</h3>
                            <p id="debtsTotal" class="tft-title1 tft-fw-700 tft-clr-white">0 fbu</p>
                        </div>
                    </div>
                    <div class="overview-card tft-bg-blue-bg">
                        <div class="icon-container tft-bdr-blue-txt-1">
                            <div class="tft-icon-round-moyen tft-bg-blue-bg">
                                <i class="fas fa-chart-bar tft-clr-blue-txt"></i>
                            </div>
                        </div>
                        <div class="card-info">
                            <h3 class="tft-title4">Revenu</h3>
                            <p id="revenuCount" class="tft-title1 tft-fw-700 tft-clr-white">0</p>
                        </div>
                    </div>
                </div>
                <div class="overview-container">
                    <div class="recent-actions">
                        <div class="single-action tft-bdr-gris-2">
                            <div class="tft-icon-round-moyen tft-bg-greensav tft-bdr-remain-white-1">
                                <i class="fas fa-user tft-clr-remain-white"></i>
                            </div>
                            <div class="actions-details">
                                <div class="action-info">
                                    <h3 class="tft-title3">Dernier employé </h3>
                                    <p id="lastEmployee" class="tft-sm-title1">...</p>
                                </div>
                                <p id="lastEmployeeDate" class="tft-title4 tft-clr-orangesav"></p>
                            </div>
                        </div>
                        <div class="single-action tft-bdr-gris-2">
                            <div class="tft-icon-round-moyen tft-bg-greensav tft-bdr-remain-white-1">
                                <i class="fas fa-chart-bar tft-clr-remain-white"></i>
                            </div>
                            <div class="actions-details">
                                <div class="action-info">
                                    <h3 class="tft-title3">Dernier rapport</h3>
                                    <p id="lastReport" class="tft-sm-title1"> ... </p>
                                </div>
                                <p id="lastReportDate" class="tft-title4 tft-clr-orangesav"></p>
                            </div>
                        </div>
                        <div class="single-action tft-bdr-gris-2">
                            <div class="tft-icon-round-moyen tft-bg-greensav tft-bdr-remain-white-1">
                                <i class="fas fa-sitemap tft-clr-remain-white"></i>
                            </div>
                            <div class="actions-details">
                                <div class="action-info">
                                    <h3 class="tft-title3">Dernier département</h3>
                                    <p id="lastDepartement" class="tft-sm-title1">...</p>
                                </div>
                                <p  id="lastDepartementDate" class="tft-title4 tft-clr-orangesav"></p>
                            </div>
                        </div>
                    </div>
                    <div class="recent-intro" id="recent-intro">
                        <h1 class="tft-clr-orangesav tft-title1">Découvrez les nouveautés dans <span class="tft-clr-orangesav">1000Saveurs</span></h1>
                        <div class="recent-pic">
                            <img src="../assets/images/icons/illuHomme (1).png" alt="">
                        </div>
                        <div class="recent-pic-fleche">
                            <img src="../assets/images/icons/illfleche.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- partie droite ajoute la classe active pour montrer debut ========PROFIL NOTIFICATIONS PARAMETRES=======-->
            <?php
                include("./components/profilpatron.php"); 
            ?>
        <!-- partie droite ajoute la classe active pour montrer fin ========PROFIL NOTIFICATIONS PARAMETRES=======-->
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
         <!-- formualire d'ajout d'infos d'un utilisateur -->
         <div class="tft-popup-modal" id="add-user-infos">
            <div class="tft-popup-container-small tft-bg-remain-black3 tft-p-relative">
                <h1 class="tft-title1 tft-mt-20 tft-clr-remain-white" id="modalTitle">Ajouter les informations personnelles</h1>
                <div class="tft-form-container">
                    <form id="user-form" class="tft-gap-10px">
                        <input type="hidden" id="user-id" name="user-id">
                        <div class="tft-form-group tft-gap-10px">
                            <label for="user-lastname" class="tft-form-label tft-clr-remain-white tft-flex tft-gap-8px tft-a-center">
                                <div class="tft-icon-round-moyen tft-bdr-orangesav-1"><i class="fas fa-user tft-clr-orangesav"></i></div>
                                Nom <span>*</span>
                            </label>
                            <input type="text" class="tft-form-control" id="user-lastname" name="userlastname" placeholder="Tapez le nom ici..." required>
                        </div>
                        <div class="tft-form-group tft-gap-10px">
                            <label for="user-firstname" class="tft-form-label tft-clr-remain-white tft-flex tft-gap-8px tft-a-center">
                                <div class="tft-icon-round-moyen tft-bdr-orangesav-1"><i class="fas fa-user tft-clr-orangesav"></i></div>
                                Prénom <span>*</span>
                            </label>
                            <input type="text" class="tft-form-control" id="user-firstname" name="userfirstname" placeholder="Tapez le prénom ici..." required>
                        </div>
                        <div class="tft-form-group tft-gap-10px">
                            <label for="user-phone" class="tft-form-label tft-clr-remain-white tft-flex tft-gap-8px tft-a-center">
                                <div class="tft-icon-round-moyen tft-bdr-orangesav-1"><i class="fas fa-edit tft-clr-orangesav"></i></div>
                                Téléphone <span>*</span>
                            </label>
                            <input type="number" class="tft-form-control" id="user-phone" name="userphone" placeholder="Tapez le numero ici..." required></input>
                        </div>
                        <div class="tft-form-group tft-gap-10px">
                            <label for="user-email" class="tft-form-label tft-clr-remain-white tft-flex tft-gap-8px tft-a-center">
                                <div class="tft-icon-round-moyen tft-bdr-orangesav-1"><i class="fas fa-edit tft-clr-orangesav"></i></div>
                                Email <span>*</span>
                            </label>
                            <input type="email" class="tft-form-control" id="user-email" name="useremail" placeholder="Tapez l'email ici..."></input>
                        </div>
                        <div class="tft-form-group tft-gap-10px">
                            <label class="tft-form-label tft-clr-remain-white tft-flex tft-gap-8px tft-a-center">
                                <div class="tft-icon-round-moyen tft-bdr-orangesav-1"><i class="fas fa-map-marker-alt tft-clr-orangesav"></i></div>
                                Genre <span>*</span>
                        </label>
                            <div class="radio-group">
                                <label class="radio">
                                    <input type="radio" class="tft-form-control" id="user-gender" name="usergender" value="masculin" checked>
                                    <span class="tft-title4 tft-clr-gris1">Homme</span>
                                </label>
                                <label class="radio">
                                    <input type="radio" class="tft-form-control" id="user-gender" name="usergender" value="feminin">
                                    <span class="tft-title4 tft-clr-gris1">Femme</span>
                                </label>
                                <label class="radio">
                                    <input type="radio" class="tft-form-control" id="user-gender" name="usergender" value="autre">
                                    <span class="tft-title4 tft-clr-gris1">Autre</span>
                                </label>
                            </div>
                        </div>
                        <div class="tft-form-group tft-gap-10px">
                            <label for="user-birthdate" class="tft-form-label tft-clr-remain-white tft-flex tft-gap-8px tft-a-center">
                                <div class="tft-icon-round-moyen tft-bdr-orangesav-1"><i class="fas fa-edit tft-clr-orangesav"></i></div>
                                 Date de naissance<span>*</span>
                            </label>
                            <input type="date" class="tft-form-control" id="user-birthdate" name="userbirthdate"></input>
                        </div>
                        <div class="tft-form-group tft-gap-10px">
                            <label for="user-address" class="tft-form-label tft-clr-remain-white tft-flex tft-gap-8px tft-a-center">
                                <div class="tft-icon-round-moyen tft-bdr-orangesav-1"><i class="fas fa-user tft-clr-orangesav"></i></div>
                                Adresse
                            </label>
                            <input type="text" class="tft-form-control" id="user-address" name="useraddress" placeholder="Tapez l'adresse ici..." required>
                        </div>
                        <div class="form-actions tft-flex tft-gap-20px tft-mt-20">
                            <button type="submit" class="tft-btn tft-bdr-orangesav-1 tft-clr-orangesav tft-hover-orangesav">
                                <i class="fas fa-save"></i> Enregistrer
                            </button>
                            <button type="button" class="tft-btn tft-bdr-gris-1 tft-clr-white tft-hover-red" onclick="closeModal()">
                                <i class="fas fa-times"></i> Annuler
                            </button>
                        </div>
                    </form>
                </div>
                <div class="tft-close-icon tft-p-absolute tft-top-5 tft-right-10 tft-hover-red" onclick="closeModal()">
                    <i class="fas fa-times tft-clr-remain-white3"></i>
                </div>
            </div>
        </div>
        <!-- formulaire d'ajout d'infos d'un utilisateur -->
    </div>
</body>

<script>
    function closeModal() {
        document.getElementById('deconnection-modal').style.display = 'none';
    }
    function deconnectionModal() {
        document.getElementById('deconnection-modal').style.display = 'flex';
    }

    async function loadDashboardData() {
        try {
            const response = await fetch('/1000saveursproject/api/dashboard.php');
            if (!response.ok) throw new Error('Erreur chargement dashboard');
            const result = await response.json();
            if (!result.success) throw new Error(result.message || 'Erreur API dashboard');
            const data = result.data || {};
            console.log(data);
            document.getElementById('deptCount').innerText = data.totalDepartments || 0;
            document.getElementById('empCount').innerText = data.totalEmployees || 0;
            document.getElementById('debtsTotal').innerHTML = (data.totalDebtsAmount || 0).toLocaleString() + ' fbu';
            document.getElementById('reportsCount').innerText = data.totalReports || 0;
            document.getElementById('revenuCount').innerText = data.dailyRevenue || 0;

            if (data.latestEmployee) {
                const fullName = `${data.latestEmployee.first_name || ''} ${data.latestEmployee.last_name || ''}`.trim();
                document.getElementById('lastEmployee').innerText = fullName || 'Aucun employé';
                document.getElementById('lastEmployeeDate').innerText = data.latestEmployee.hired_at || '';
            }
            if (data.latestReport) {
                document.getElementById('lastReport').innerText = data.latestReport.name || '—';
                document.getElementById('lastReportDate').innerText = data.latestReport.submited_at || data.latestReport.created_at || '';
            }
            if (data.latestDepartement) {
                document.getElementById('lastDepartement').innerText = data.latestDepartement.name || '—';
                document.getElementById('lastDepartementDate').innerText = data.latestDepartement.created_at || '';
            }
        } catch (error) {
            console.error('Erreur chargement dashboard :', error);
        }
    }

    async function loadUserInfo() {
        try {
            const response = await fetch('/1000saveursproject/api/auth.php?action=me');
            if (!response.ok) return;
            const result = await response.json();
            const user = result.user || {};
            document.getElementById('userName').innerText = `${user.first_name || ''} ${user.last_name || ''}`.trim() || 'Utilisateur';
            document.getElementById('userRole').innerText = (user.role === 'patron') ? 'Patron' : 'Utilisateur';
        } catch (error) {
            console.error('Erreur chargement utilisateur :', error);
        }
    }

    const logoutButton = document.getElementById('logoutyes');
    if (logoutButton) {
        logoutButton.addEventListener('click', async (e) => {
            e.preventDefault();
            await fetch('/1000saveursproject/api/auth.php?action=logout', { method: 'POST' });
            window.location.href = '/1000saveursproject/public/login.php';
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        loadDashboardData();
        loadUserInfo();
    });
</script>

<script src="../assets/js/scripts.js"></script>

</html>