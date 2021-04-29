<HTML>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modifier</title>

        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <img src="C:\Users\Sejir\Desktop\theme\startbootstrap-sb-admin-gh-pages\src\assets\img\logo.png" alt="" height="150" width="150" href="index.html" >
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Livraison
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="ajout livraison.html">Livraison</a>
                                    <a class="nav-link" href="ajout livreurs.html">Livreur</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Promotions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts1">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne1" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static-user.html">client</a>
                                    <a class="nav-link" href="layout-sidenav-light-user.html">vendeur</a>
                                </nav>
                            </div>

                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Evenement
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Panier
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Statistique
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                DataViewer
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Code Brewers
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Les Livreurs</li>
                        </ol>
                   <div class="content-wrapper">
<?PHP
include_once "C:/wamp64/www/Artlogic/entities/livreur.php";
include_once "C:/wamp64/www/Artlogic/core/livreurC.php";
if (isset($_GET['cin'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererlivreur($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
    $prenom=$row['prenom'];
		$secteur=$row['secteur'];
    $mail=$row['mail'];}}
?>
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h2> <center> MODIFIER UN LIVREUR </center> </h2>
       <br>
    </div>
    <div class="panel-body">
        <form action="mod-liv.php" method="POST">
                  <center>
                    <table>

                        <tr>
                            <td>
                               <label >Saisir lid</label>
                           </td>
                           <td>
                               <input type="number" class="form-control" id="success" name="cin" value="<?PHP echo $cin ?>"/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label>Saisir le nom</label>
                           </td>
                           <td>
                               <input type="text" class="form-control" id="warning" name="nom" value="<?PHP echo $nom ?>"/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label>Saisir la matricule</label>
                           </td>
                           <td>
                               <input type="text" class="form-control" id="error" name="prenom" value="<?PHP echo $prenom ?>"/>
				            </td>
                        </tr>    
                        <tr>
                            <td>
                               <label >Choisir un secteur</label>
                           </td>
                           <td>
                               <select id="secteur" name="secteur" type="text" >
                                  <option><?PHP echo $secteur ?></option>
                                      <option>Ariana</option>
                                      <option>Béja</option>
                                      <option>Ben Arous</option>
                                      <option>Bizerte</option>
                                      <option>Gabes</option>
                                      <option>Gafsa</option>
                                      <option>Jendouba</option>
                                      <option>Kairouan</option>
                                      <option>Kasserine</option>
                                      <option>Kebili</option>
                                      <option>La Manouba</option>
                                      <option>Le Kef</option>
                                      <option>Mahdia</option>
                                      <option>Médenine</option>
                                      <option>Monastir</option>
                                      <option>Nabeul</option>
                                      <option>Sfax</option>
                                      <option>Sidi Bouzid</option>
                                      <option>Siliana</option>
                                      <option>Sousse</option>
                                      <option>Tataouine</option>
                                      <option>Tozeur</option>
                                      <option>Tunis</option>
                                      <option>Zaghouan</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            <td>
                               <label>Saisir le num</label>
                           </td>
                           <td>
                               <input type="text" class="form-control" id="mail" name="mail" value="<?PHP echo $prenom ?>"/>
                           </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="modifier" value="modifier" class="boutton">
                                <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>">
                            </td>
                        </tr>
                    </table>
                    </center>
                </form>



</body>
</html>