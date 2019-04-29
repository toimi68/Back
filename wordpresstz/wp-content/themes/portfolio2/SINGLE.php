<?php
get_header()?><!--fonction wordpress permet d'inclure le haut du site 
je prends le header php et je le colle là-->
NOUS SOMMES SUR LE TEMPLATE ARTICLE
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!--la condit° if permet de verifier si des articles ont été posté si oui la boucle while les passe en revue-->

 <h2 class="display-4 text-center mt-3"><a href="<?php the_permalink(); ?>"class="text-dark"><?php the_title(); ?></a></h2>


<!-- Affiche la Date. -->
 

<!--affiche le corps de l'article ds un bloc-->

<div class="container">
<small><?php the_time('F jS, Y'); ?></small>
<?php the_content();?>
</div>

<?php endwhile;else:?>
<p>contenu non trouvé</p>
<?php endif;?>




<?php get_footer()?> 
<!--fonction wordpress permet d'inclure le bas du site 
je prends le footer php et je le colle là-->
