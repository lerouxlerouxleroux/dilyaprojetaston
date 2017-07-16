<?php
include_once 'includes/access.inc.php';
  $menus = [
        ['href' => 'index.php', 'label' => 'Accueil'],
        ['href' => 'boutique.php', 'label' => 'Boutique en ligne'],
        ['href' => 'contact.php', 'label' => 'Nous contacter']
         



    ];
?>
<nav class="menu">
<li id="logo"><img src = "img/logo.png"></li>

    <ul class="list-inline menu">

        <?php foreach ($menus as $menu): ?>
                <li>
                    <a href="<?php echo $menu['href']; ?>">
                        <?php echo $menu['label']; ?>
                        
                    </a>
                </li>
        <?php endforeach ?>
       

    </ul>
</nav>
 