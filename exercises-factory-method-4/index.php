<?php
require 'vendor/autoload.php';

    use Patterns\Creational\Entities\HeroShip;
    use Patterns\Creational\Factories\DirectorBoatFactory;


if(isset($_POST['remainingPointsHeroShip']) && !empty($_POST['remainingPointsHeroShip'])) {

        $heroShipPoints = $_POST['remainingPointsHeroShip'];

}else{
    $heroShipPoints = 200;
}
$hero = new HeroShip($heroShipPoints);



if(isset($_POST['ship'])){
        $dFactory = new DirectorBoatFactory($_POST['ship']);
        $factory = $dFactory->createFactory();
        $boat = $factory->createBoat();
        $life = $boat->sendDamage($hero);
}
    
    
?>
<html>
    <head>
        <title>ShipWar</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" placeholder="Choose your ship, E/R/U/B" autofocus name="ship" />
            <input type="hidden" name="remainingPointsHeroShip" value="<?= $hero->getLife() ?>"/>
            <button type="submit">Envoyer</button>
        </form>
        <p><?php if(isset($_POST['ship'])): ?>
            You've been hit by
            <?= $boat->getDescription() ?>
        <?php endif; ?>
        </p>
        <p>
           <?php 
            if(intval($hero->getLife()) > 0){
                echo 'You still have' .$hero->getLife();
            }else{
                unset($hero);
                echo 'You\'re Dead';
            } 
             ?>
        </p>
    </body>
</html>
