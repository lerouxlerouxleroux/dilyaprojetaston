<?php session_start();?>
<?php
  $menus = [
        ['href' => 'espacemembre.php', 'label' => 'Espace Membre'],
        ['href' => 'informationspratiques.php', 'label' => 'Informations Pratiques'],
        ['href' => 'blog.php', 'label' => 'Notre Blog'],
        ['href' => 'facebook.php', 'label' => 'Nous rejoindre sur Facebook'], 
         



    ];
?>
<nav class=sitemap>
    <ul class="list-inline sitemap">
        <?php foreach ($menus as $menu): ?>
                <li>
                    <a href="<?php echo $menu['href']; ?>">
                        <?php echo $menu['label']; ?>
                        
                    </a>
                </li>
        <?php endforeach ?>
    </ul>


 <script src="js/script.js"></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

</body>
</html>