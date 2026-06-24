<?php
include "Info.php";
$ca1=new Info("Paracetamol",500,"Médicament analgésique (anti-douleur) et antipyrétique (anti-fièvre) utilisé en première intention. Chez l'adulte, la posologie maximale stricte est de 1 g par prise, à respecter avec un intervalle d'au moins 4 heures, et sans dépasser 4 g par jour.","Paracetamol.JPG");
$ca2=new Info("Doliprane",5000,"Médicament à base de paracétamol utilisé pour soulager la douleur et faire baisser la fièvre. Il existe sous plusieurs dosages (100 mg, 500 mg, 1000 mg) et formes (comprimés, sachets, suppositoires). Le respect des doses maximales est indispensable pour éviter une intoxication grave du foie.","Doliprane.JPG");
$ca3=new Info("Ibuprofene", 2000,"Anti-Inflammatoire Non Stéroïdien (AINS) qui agit comme antalgique (anti-douleur), antipyrétique (réduit la fièvre) et anti-inflammatoire. Il est couramment utilisé pour traiter les maux de tête, les règles douloureuses, les courbatures, les poussées dentaires et la fièvre.","Ibuprofene.JPG");
$tabca=[$ca1,$ca2,$ca3];

$f1=new Info("Vitamine C",12000,"Nutriment essentiel que le corps ne peut pas fabriquer lui-même. Elle est indispensable pour la production de collagène, le renforcement du système immunitaire et possède un fort pouvoir antioxydant.","Vitamine C.JPG");
$f2=new Info("Multivitamines",18000,"Complément alimentaire qui combine un ensemble de vitamines et minéraux essentiels (souvent entre 10 et 30 micronutriments). Elle vise à combler les carences nutritionnelles, soutenir l'énergie, renforcer le système immunitaire et s'avère particulièrement utile en cas de besoins accrus (grossesse, seniors).","Multivitamine.JPG");
$f3=new Info("Fer Plus",15000,"Conçu pour prévenir ou traiter les carences en fer (anémie). Il combine généralement du fer pour le transport de l'oxygène, de la vitamine C pour optimiser l'absorption, et de la vitamine B9 pour la formation des globules rouges.","Ferplus.JPG");
$tabf=[$f1,$f2,$f3];

$cr1=new Info("Bepanthen",30000,"Gamme de produits dermatologiques et de médicaments à base de dexpanthénol (dérivé de la vitamine B5), principalement utilisée pour réparer, hydrater et protéger la peau abîmée, irritée ou sèche.","Bepanthen.JPG");
$cr2=new Info("Dexeryl",20000,"Dispositif médical indiqué dans le traitement des états de sécheresse cutanée (xérose) et de certaines affections dermatologiques comme l'eczéma atopique ou le psoriasis. Sa formule émolliente, composée principalement de glycérol, de vaseline et de paraffine liquide, aide à restaurer la barrière cutanée et à apaiser les irritations.","Dexeryl.JPG");
$cr3=new Info("Dermalex",72000,"Complexe anti-rides et réparateur breveté, développé par Croda Beauty. Il est principalement utilisé dans les soins de la peau et les cosmétiques pour lisser les rides et réparer la barrière cutanée.","Dermalex.JPG");
$tabcr=[$cr1,$cr2,$cr3];

$s1=new Info("Touxcalm",30000,"Complément alimentaire sous forme de sirop couramment utilisé pour apaiser les gorges irritées et soulager la toux. Sa formule associe généralement des extraits naturels (comme le thym, le plantain et le grindélia) qui forment un film protecteur pour adoucir les muqueuses et calmer les quintes de toux.","Touxcalm.JPG");
$s2=new Info("Broncoflux",25000,"Médicament expectorant et mucolytique utilisé pour traiter les affections respiratoires associées à une production excessive de mucus épais. Il fluidifie les sécrétions bronchiques (les mucosités), facilitant ainsi leur expulsion par la toux.","Broncoflux.JPG");
$s3=new Info("Sirop Enfant",18600,"Le surdosage est fréquent, et de nombreux sirops contre la toux sont déconseillés pour les moins de 6 ans. La dose doit toujours être calculée strictement en fonction du poids de l'enfant, et non de son âge, à l'aide d'une seringue orale graduée.","Sirop.JPG");
$tabs=[$s1,$s2,$s3];
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
            <img src="Logo.PNG"  class="rounded-circle" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav dropdown menu">
                  <li class="nav-item"><a class=" text-light"  href="Accueil.php#Accueil">Accueil</a></li>
                  <li class="nav-item"><a class=" text-light"  href="Accueil.php#Produits">Produits</a></li>
                  <li class="nav-item"><a class=" text-light"  href="Accueil.php#Panier">Panier</a></li>
                  <li class="nav-item"><a class=" text-light"  href="Accueil.php#Contact">Contact</a></li>
              </ul>
          </div>
      </div>
    </nav>

<table class="table">
    <h2 class="text-center bg-success text-light">Calmant</h2>
  <thead>
        <?php foreach($tabca as $ca) { ?>
        <tr>
            <th scope="col">
                <img class="rae"; src="<?php echo ($ca->img);?>" alt="">
            </th>
            <th scope="col">
                <p>NOM:
                    <strong class="text-danger">
                        <?php echo ($ca->Nom);?>
                    </strong>
                </p>
                <p><?php echo($ca->Info);?></p>
                <p>Prix:
                    <strong  class="text-danger">
                        <?php echo ($ca->Prix."Ar");?>
                    </strong>
                </p>
            </th>
            </tr>
        <?php }?>
  </thead>
  </table>


<table class="table">
    <h2 class="text-center bg-success text-light">Fortifiant</h2>
  <thead>
         <?php foreach($tabf as $f) { ?>
         <tr>
            <th scope="col">
                <img class="rae"; src="<?php echo ($f->img);?>" alt="">
            </th>
            <th scope="col">
                <p>NOM:
                    <strong class="text-danger">
                        <?php echo ($f->Nom);?>
                    </strong>
                </p>
                <p><?php echo($f->Info);?></p>
                <p>Prix:
                    <strong  class="text-danger">
                        <?php echo ($f->Prix."Ar");?>
                    </strong>
                </p>
            </th>
        </tr>
        <?php }?>
    </thead>
    </table>

<table class="table">
    <h2 class="text-center bg-success text-light">Creme</h2>
  <thead>
      <?php foreach($tabcr as $cr) { ?>
      <tr>
            <th scope="col">
                <img class="rae"; src="<?php echo ($cr->img);?>" alt="">
            </th>
            <th scope="col">
                <p>NOM:
                    <strong class="text-danger">
                        <?php echo ($cr->Nom);?>
                    </strong>
                </p>
                <p><?php echo($cr->Info);?></p>
                <p>Prix:
                    <strong  class="text-danger">
                        <?php echo ($cr->Prix."Ar");?>
                    </strong>
                </p>
            </th>
        <tr>    
        <?php }?>
    </thead>
    </table>

<table class="table">
    <h2 class="text-center bg-success text-light">Sirop</h2>
  <thead>
      <?php foreach($tabs as $s) { ?>
      <tr>
            <th scope="col">
                <img class="rae"; src="<?php echo ($s->img);?>" alt="">
            </th>
            <th scope="col">
                <p>NOM:
                    <strong class="text-danger">
                        <?php echo ($s->Nom);?>
                    </strong>
                </p>
                <p><?php echo($s->Info);?></p>
                <p>Prix:
                    <strong  class="text-danger">
                        <?php echo ($s->Prix."Ar");?>
                    </strong>
                </p>
            </th>
        <tr>    
        <?php }?>
 </thead>
</table>

</body>
</html>