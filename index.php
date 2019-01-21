<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Censuratore</title>
  </head>
  <body>
    <?php
    $testo = "Lorem ipsum dolor sit amet, minim omnium et nam, homero soluta accumsan eu ius. Pri homero oporteat explicari ei, an velit maluisset est. Integre aliquam quaestio eum no, ea dicunt mollis nec. Vix ut wisi intellegat voluptaria, homero primis civibus at vel. Velit iriure argumentum his no. Eu nec tota iisque. Cum aliquid officiis ne, mei ut ridens invidunt consetetur. Debet option equidem eum in. Et quo enim quas delicatissimi, nec assum perpetua ut. Aeque tempor ex vim, quis quando audiam pro cu. Per te inani theophrastus, vero solum eam ei. Ut reque inermis sententiae mei. Mel eu volumus reprehendunt, et usu quodsi euismod molestie, eos simul tempor liberavisse an. Mei tale mucius eligendi eu, id invidunt definitiones vel, repudiare consectetuer mei ad. Ex tantas philosophia quo, porro reprimique persequeris ei eam. Id vel inimicus definitiones, propriae expetendis sit eu ipsum audire electram pro, sed vidit impedit assentior ea. Consulatu definiebas scribent";
    $cerca = array("ipsum", "homero", "pro", "tempor", "sit", "est", "perpetua");
    $sostituisci = ("***");
    echo str_replace($cerca, $sostituisci, $testo); ?>
  </body>
</html>
