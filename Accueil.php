<?php
include "Produits.php";

$ca1=new Produits("Paracetamol",500,1,"Paracetamol.JPG");
$ca2=new Produits("Doliprane",5000,1,"Doliprane.JPG");
$ca3=new Produits("Ibuprofene", 2000,1,"Ibuprofene.JPG");
$tabca=[$ca1,$ca2,$ca3];

$f1=new Produits("Vitamine C",12000,1,"Vitamine C.JPG");
$f2=new Produits("Multivitamines",18000,1,"Multivitamine.JPG");
$f3=new Produits("Fer Plus",15000,1,"Ferplus.JPG");
$tabf=[$f1,$f2,$f3];

$cr1=new Produits("Bepanthen",30000,1,"Bepanthen.JPG");
$cr2=new Produits("Dexeryl",20000,1,"Dexeryl.JPG");
$cr3=new Produits("Dermalex",72000,1,"Dermalex.JPG");
$tabcr=[$cr1,$cr2,$cr3];

$s1=new Produits("Touxcalm",30000,1,"Touxcalm.JPG");
$s2=new Produits("Broncoflux",25000,1,"Broncoflux.JPG");
$s3=new Produits("Sirop Enfant",18600,1,"Sirop.JPG");
$tabs=[$s1,$s2,$s3];

session_start();
 if(isset($_POST["Pharmacie"]) && !isset($_SESSION["Pharmacie"]))
    {
    $_SESSION["Pharmacie"]=[];
    }
    if (isset($_POST['supp_session'])) {
    session_unset();
    session_destroy();
    header("Location: #Panier"); 
    exit;
}         

if(isset($_POST["Pharmacie"])!=null)
    {
        $n=$_POST["nom"];
        $x=$_POST["prix"];    
        $p=(int)$_POST["Pharmacie"];
         $total=0;
        if($p>0)
            {
                $_SESSION["Pharmacie"][]=["nom"=>$n,
                                        "prix"=>$x,
                                        "quantite"=>$p,
                                        "PT"=>$x*$p,
                                      ];
            header("location:#Panier");
            exit();        
            }
    }  
if(isset($_GET["remove"])) 
    {
        $Pharmacie=$_GET["remove"];
        unset($_SESSION["Pharmacie"][$Pharmacie]);
        $_SESSION["Pharmacie"]= array_values($_SESSION["Pharmacie"]);
        header("Location: Accueil.php#Panier");
    } 
if(isset($POST['supp_session'])) 
    {
        unset($_SESSION['panier']);
        header("Location: Accueil.php");
        exit();
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacie</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.css">
     <link rel="stylesheet" href="CSS.css">
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>


<body>

    <nav class="navbar navbar-expand-lg bg-body-primary dropdown cf"   id="primary-nav" >
      <div class="container-fluid bg-success text-light">
            <img src="Logo.PNG"  class="rounded-circle" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">Pharmacie
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav dropdown menu">
                  <li class="nav-item"><a class=" text-light"  href="#Accueil">Accueil</a></li>
                  <li class="nav-item"><a class=" text-light"  href="#Produits">Produits</a></li>
                  <li class="nav-item"><a class=" text-light"  href="#Panier">Panier</a></li>
                  <li class="nav-item"><a class=" text-light"  href="#Contact">Contact</a></li>
              </ul>
          </div>
      </div>
    </nav>

    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Pharmacie</h2>
                        <span>"Être au plus près des besoins des patients."</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-places" id="Produits">
        <div class="container-fluid">
                    <div class="section-heading">
                        <span>Produits</span>
                        <h2>CATEGORIES</h2>
                    </div>  
                        <h2 class="text-center bg-success text-light">Calmant</h2>
                        <div class="terrain">  
                            <?php foreach($tabca as $ca) { ?>
                            <div class="trade">
                                <img class="raer"; src="<?php echo ($ca->img);?>" alt="">
                                    <p >NOM:
                                        <strong class="text-danger">
                                            <?php echo ($ca->Nom);?>
                                        </strong>
                                    </p>
                                    <p>Prix:
                                        <strong  class="text-danger">
                                            <?php echo ($ca->Prix."Ar");?>
                                        </strong>
                                    </p>
                                      <form method="POST">
                                        Quantite:<input type="number"  name="Pharmacie">
                                        <input type="hidden" name="nom" value="<?php echo $ca->Nom?>">
                                        <input type="hidden" name="prix" value="<?php echo $ca->Prix?>">

                                        <button type="submit" class="btn btn-outline-success ">Acheter</button> 
                                    </form>
                                </div>
                            </a>    
                            <?php } ?>
                        </div>
                            
                            <h2 class="text-center bg-success text-light">Fortifiant</h2>
                            <div class="terrain">  
                            <?php foreach($tabf as $f) { ?>
                            <div class="trade">
                                <img class="raer"; src="<?php echo ($f->img);?>" alt="">
                                    <p>NOM:
                                        <strong  class="text-danger">
                                            <?php echo ($f->Nom);?>
                                        </strong>
                                    </p>
                                    <p>Prix:
                                        <strong  class="text-danger">
                                            <?php echo ($f->Prix."Ar");?>
                                        </strong>
                                    </p>
                                    <form method="POST">
                                        Quantite:<input type="number"  name="Pharmacie">
                                        <input type="hidden" name="nom" value="<?php echo $f->Nom?>">
                                        <input type="hidden" name="prix" value="<?php echo $f->Prix?>">

                                        <button type="submit" class="btn btn-outline-success ">Acheter</button> 
                                    </form>
                                </div>
                            </a>    
                            <?php } ?>
                        </div>
                           
                            <h2 class="text-center bg-success text-light">Creme</h2>
                            <div class="terrain">  
                            <?php foreach($tabcr as $cr) { ?>
                            <div class="trade">
                                <img class="raer"; src="<?php echo ($cr->img);?>" alt="">
                                    <p>NOM:
                                        <strong  class="text-danger">
                                            <?php echo ($cr->Nom);?>
                                        </strong>
                                    </p>
                                    <p>Prix: 
                                        <strong  class="text-danger">
                                            <?php echo ($cr->Prix."Ar");?>
                                        </strong>
                                    </p>
                                    <form method="POST">
                                        Quantite:<input type="number"  name="Pharmacie">
                                        <input type="hidden" name="nom" value="<?php echo $cr->Nom?>">
                                        <input type="hidden" name="prix" value="<?php echo $cr->Prix?>">

                                        <button type="submit" class="btn btn-outline-success ">Acheter</button> 
                                    </form>
                                </div>
                            </a>    
                            <?php } ?>
                        </div> 

                        <h2 class="text-center bg-success text-light">Sirop</h2>
                            <div class="terrain">  
                            <?php foreach($tabs as $s) { ?>
                            <div class="trade">
                                <img class="raer"; src="<?php echo ($s->img);?>" alt="">
                                    <p>NOM:
                                        <strong  class="text-danger">
                                            <?php echo ($s->Nom);?>
                                        </strong>
                                    </p>
                                    <p>Prix: 
                                        <strong  class="text-danger">
                                            <?php echo ($s->Prix."Ar");?>
                                        </strong>
                                    </p>
                                    <form method="POST">
                                        Quantite:<input type="number"  name="Pharmacie">
                                        <input type="hidden" name="nom" value="<?php echo $s->Nom?>">
                                        <input type="hidden" name="prix" value="<?php echo $s->Prix?>">

                                        <button type="submit" class="btn btn-outline-success ">Acheter</button> 
                                    </form>
                                </div>
                            </a>    
                            <?php } ?>
                        </div>
            <br>
                <div class="d-md-flex justify-content-md-end">
                    <a href="Detail.php">En Savoir plus >></a> 
                </div>        
        </div>
    </section>  
          
    <section class="popular-places" id="Panier">
        <div class="container-fluid">
                    <div class="section-heading">
                        <span>Panier</span>
                        <h2>Recu du client</h2>
                    </div> 
        </div>
    <table class="table">
        <thead>
            <tr class="table-light">
                <th scope="col" class="text-success">Designation</th>
                <th scope="col" class="text-success">Quantite</th>
                <th scope="col" class="text-success">Prix Unitaire</th>
                <th scope="col" class="text-success">Prix Total</th>
                <th scope="col" class="text-success">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total=0;
            foreach(($_SESSION["Pharmacie"] ?? []) as $Pharmacie=>$ph) {  $total+=(float)$ph["PT"] ;   ?>
                <tr>
                <th scope="row" class="table-light"><?php echo $ph["nom"] ?></th>
                    <td class="table-light"><?php echo $ph["quantite"]?></td>
                    <td class="table-light"><?php echo $ph["prix"] ?></td>
                    <td class="table-light"><?php echo $ph["PT"] ?></td>
                    <td class="table-light"><a href="?remove=<?php echo $Pharmacie;?>"><button type="button" class="btn btn-outline-danger ">Supprimer</button></td>
                </tr>
            <?php }?>
                <tr>
                    <th scope="row" class="table-light"></th>
                    <td class="table-light"></td>
                    <td class="table-light text-success"><strong>Net=</strong> </td>
                    <td class="table-light"><?php echo $total?></td>
                    <td class="table-light"></td>
                </tr>
        </tbody>
    </table>
        <div class="d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-outline-success" id="btnConfirmer" onclick=redirectionLogin()>Confirmer</button>

        <script>
            const bouton = document.getElementById('btnConfirmer');
        bouton.addEventListener('click',()=>
            {
                let reponse = confirm("Voulez-vous vraiment confirmer cet achat ?");
                if(reponse == true)
                {
                    window.location.href="login.php";
                    formSupprimer.submit();
                }
                if(reponse == false)
                {
                    alert("Achat annule.")
                }
            });
        </script>

    <form action="#Panier" method="POST">
    <button type="submit" name="supp_session" class=" btn-delete btn btn-outline-danger ">Supprimer</button>

        </div>
    </section>

     <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <span>Pharmacie</span>
                <h2>"Bien plus qu'une officine, un partenaire de santé."</h2>
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="highway-loop.mp4" type="video/mp4" />
        </video>
    </section>

    <section class="contact" id="Contact">
        <div class="section-heading">
                      <span>Localisation</span>
        </div>              
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.721360494536!2d47.523325975201026!3d-18.899438582269166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f080ab6e9d0f99%3A0xedc4b79bfb6e6d1f!2s0!5e0!3m2!1sfr!2smg!4v1782289227067!5m2!1sfr!2smg" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
         <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="wrapper">
                  <div class="section-heading">
                      <h2>Adresse : N2 - Arabe Lénine, Ankadifotsy, Antananarivo</h2>
                      <h2>Téléphones : 020 22 222 07 ou 034 22 222 07 (autres contacts disponibles : 033 85 991 20 / 032 24 705 51)</h2>
                </div>    
            </div>
        </div>
    </section> 

    <br>
    <br>

    <nav class="navbar navbar-expand-lg bg-body-primary dropdown cf"   id="primary-nav" >
      <div class="container-fluid bg-success text-light">
            <img src="Logo.PNG"  class="rounded-circle" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">Pharmacie
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav dropdown menu">
                    <li class="nav-item">Nathan Iothy Ramakavelo</li>
                  <li class="nav-item">Antananarivo</li>
                </ul>
            </div>
      </div>
    </nav>

</body>
</html>