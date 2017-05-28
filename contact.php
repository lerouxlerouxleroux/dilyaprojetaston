<?php

include 'includes/header.php';
include 'includes/menu.php';  
?>
<section class="imagedefond">
 <form class="contact" method=post name="formul" onSubmit="return verif();" action="#">
		
    <div >
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="lastname" />
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" name="email" id="email" />
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message"></textarea>
    </div>
    
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
 
</form>
</section>



<?php
    include 'includes/footer.php';
?>