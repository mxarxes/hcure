<?php $title = 'hCure - Accueil';
ob_start(); ?>
 <div class="jumbotron ml-0">
   <h1 class="display-1"> HCare </h1>
   <p class="lead"> Un nouveau sytème médical révolutionnaire </p>
   <hr class="my-4" />
   <p> <h4> Hcure est un projet open source</h4> <br /> Vous pouvez accéder au code source sur <a href="https://www.github.com/mxarxes/hcure/" title="Le projet hcure sur GitHub">GitHub.</a></p>
 </div>
 <?php $content = ob_get_clean();
 require('template.php'); ?>
