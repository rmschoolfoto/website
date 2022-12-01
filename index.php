<?php include "includes/header.inc.php";?>
<?php include "includes/hoofd.inc.php";?>
<div class="tussenkop">
    <h1><span>Wat </span>hebben wij te bieden?</h1>
</div>
<section>
<div class="container-grid">
    <h2>ontwapenende portretfoto's, speelse groepsfoto's en spontane vrije posefoto's
            <a class="btn1" href="portfolio.php">Lees verder</a></h2>
        <div class="klassiek openModalBox" data-modal="modal3">
            <p>De Klassieke Portretfoto....</p>
            <img src="images/portretfoto.png" alt="portretfoto">
            <i class="fa fa-search-plus"></i>
        </div>
        <div class="eigentijds openModalBox" data-modal="modal2">
            <p>Wat vrijer poseren kan ook...</p><img src="images/collage.png" alt="collage">
             <i class="fa fa-search-plus"></i>
        </div>
        <div class="bzfoto openModalBox" data-modal="modal4">
            <p>
                Schattig, die broertje en zusjes....
            </p><img src="images/broerzusfoto.jpg" alt="bzfoto">
             <i class="fa fa-search-plus"></i>
        </div>
        <div class="groep openModalBox" data-modal="modal1">
            <p>
                Gezellig met de hele klas op de foto....
            </p><img src="images/GroepsfotoCollage.jpg" alt="groepsfoto">
             <i class="fa fa-search-plus"></i>
        </div>
        <h2>Topkwaliteit schoolfoto's voor een bescheiden prijs
            <a class="btn1" href="info.php">Lees verder</a></h2>
</div>
</section>
<div class="tussenkop">
    <h1><span>Interessant </span>voor school</h1>
</div>
<section>
    
    <div class="container-grid">
    <h2><span class="small">
    Veel gratis extra's voor school, zoals een afscheidsfoto of portrettenkaart voor groep 8, gratis foto's voor het personeel en begeleidende OR-leden, gratis contactafdrukken van alle leerlingen.</span></h2>
        <div class="service2 openModalBox" data-modal="modal">
            <p>
                Moest net die ene collega eerder naar huis....
            </p><img src="images/montageklein.png" alt="teamfoto">
             <i class="fa fa-search-plus"></i>
        </div>
        <div class="service openModalBox" data-modal="modal5">
            <p>
                Foto's voor de leerlingadministratie...
            </p><img src="images/parnassys.jpg" alt="parnassys">
             <i class="fa fa-search-plus"></i>
        </div>

         <h2>Wat kunt u nog meer vinden op deze website? <span class="small">
         Een overzicht van mogelijke <a class="btn1" href ="info.php">schoolfotopakketten</a>
         <ul>
                <li>Bekijk ook de mogelijkheden voor allerlei <a href="familiefoto.html">BroerZus foto's</a>.</li>
                <li>Of bekijk de mogelijkheden om de kinderen eens <a href="andersposeren.html">ongedwongen te laten
                        poseren</a>, als een echt fotomodel</li>
                <li>Keuze uit tal van <a class="btn1" href="achtergronden.html">achtergronden</a> voor de
                    portretfoto's.</li>
                <li>Dankzij allerlei hulpmiddelen uit de digitale technologie
                    kunnen we u nog beter van dienst zijn. Bijvoorbeeld door:
                    <ol>
                        <li><a href="achtergronden.html">verwerking van
                                het schoollogo in de groepsfoto's</a></li>
                        <li><a href="fotoretouche.html">het
                                retoucheren van foto's</a></li>
                        <li><a href="fotomontage.html">het maken van
                                fotomontages</a></li>
                    </ol>
                </li>
            </ul>
         </span></h2>
               
          <div>
            <h2>Nieuw! DVD als afscheidscadeau voor de leerlingen van groep 8</h2>
            <p>
                Aan de hand van een aantal vragen komen alle leerlingen van groep 8 aan het woord over hun jaren op de
                basisschool. Ze vertellen over de leuke en minder leuke dingen op school, hun hobbies, hun plannen en
                verwachtingen voor de toekomst enz.
                Kortom, een uniek document op film en een prachtig cadeau als afsluiting van de jaren op de basisschool!
            </p>
            <h3>Bekijk het voorbeeldfimpje.</h3>
            <video src= "images/GOPR0228.mp4" controls poster="images/16.jpg" width="320px">
                
            </video>
    </div>
    
    </div>
</section>
<!-- modals -->
<div class="modalBox" id="modal1">
    <div class="modal">
        <h1 class="titel">Speelse Groepsfoto's<button class="close">&times;</button></h1>
        <div class="modal-body">
        <?php
    $dir="images/modalfoto/groepsfoto/";
    $foto = scandir($dir);
    // print_r( $foto);
        foreach ($foto as $f){
            if($f !=='..' && $f !== '.' && $f !== '.DS_Store'){?>
    <div class="imageContainer"><img src="<?=$dir.$f?>" alt="<?=$f?>">
      
    </div>
       <?php }
    }
    
?>
    <p>Hierboven ziet u een selectie uit onze serie groepsfoto's.</p>
        </div>
    </div>
</div>
<div class="modalBox" id="modal2">
    <div class="modal">
        <h1 class="titel">Eigentijdse Vrije Posefoto's <button class="close">&times;</button></h1>
        <div class="modal-body">
        <?php
    $dir="images/modalfoto/posefoto/";
    $foto = scandir($dir);
    // print_r( $foto);
        foreach ($foto as $f){
            if($f !=='..' && $f !== '.' && $f !== '.DS_Store'){?>
    <div class="imageContainer"><img src="<?=$dir.$f?>" alt="<?=$f?>">
      
    </div>
       <?php }
    }
?>
  <p>Laat ze eens als echte fotomodellen poseren...</p>
        </div>
    </div>
</div>
<div class="modalBox" id="modal3">
    <div class="modal">
        <h1 class="titel">Portretfoto <button class="close">&times;</button></h1>
        <div class="modal-body">
        <?php
    $dir="images/modalfoto/portretfoto/";
    $foto = scandir($dir);
    // print_r( $foto);
        foreach ($foto as $f){
            if($f !=='..' && $f !== '.' && $f !== '.DS_Store'){?>
    <div class="imageContainer"><img src="<?=$dir.$f?>" alt="<?=$f?>">
      
    </div>
       <?php }
    }
    
?>
            <p>Hierboven ziet u een selectie van een portretfoto met verschillende achtergronden.</p>
        </div>
    </div>
</div>
<div class="modalBox" id="modal4">
    <div class="modal">
        <h1 class="titel">Broerzusfoto's<button class="close">&times;</button></h1>
        <div class="modal-body">
        <?php
    $dir="images/modalfoto/broerzusfoto/";
    $foto = scandir($dir);
    // print_r( $foto);
        foreach ($foto as $f){
            if($f !=='..' && $f !== '.' && $f !== '.DS_Store'){?>
    <div class="imageContainer"><img src="<?=$dir.$f?>" alt="<?=$f?>">
    </div>
       <?php }
    }
    
?>
            <p>Broertjes en zusjes samen op de foto in allerlei leuke poses</p>
        </div>
    </div>
</div>
<!-- einde modals1 -->
<!-- modals2 -->
<div class="modalBox" id="modal">
    <div class="modal">
        <h1 class="titel">Gratis voor School <button class="close">&times;</button></h1>
        <div class="modal-body">
            <img src="images/modalfoto/aldenhaag.jpg" alt="">
            <p>Hoe vaak komt het niet voor dat teamleden niet op tijd voor de personeelsfoto kunnen zijn, of eerder weg
                moeten. Ook dat is voor ons geen enkel probleem en lossen we op. We monteren uw collega met even veel
                gemak naadloos in de teamfoto alsof ze er daadwerkelijk is bijgeweest.</p>
            <img src="images/modalfoto/klepper.jpg" alt="">
        </div>
    </div>
</div>
<div class="modalBox" id="modal5">
    <div class="modal">
        <h1 class="titel">Foto's voor leerlingvolgsysteem<button class="close">&times;</button></h1>
        <div class="modal-body">
            <img src="images/parnassys.jpg" alt="">
            <p>Wij bieden u de mogelijkheid om de leerlingen op volgorde van leerlingnummers (bijv. Parnassys) te
                fotograferen. De leerlingnummers koppelen we aan de fotobestanden, die u dan als zipbestand krijgt
                aangeleverd en kunt uploaden in Parnassys. Daarmee hebt u voor het hele schooljaar een aktueel beeld van
                uw leerlingen.</p>
        </div>
    </div>
</div>
<!-- einde modals2 -->
<?php
// echo $_SERVER['REMOTE_ADDR'];
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
 include "includes/footer.inc.php";
 ?>