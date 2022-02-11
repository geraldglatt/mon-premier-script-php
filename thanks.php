<?php
session_start();
?>

<p>
Merci {<?=$_POST['user_surname']?>} {<?=$_POST['user_name']?>} de nous avoir contacté à propos de “{<?=$_POST['language']?>}”.
Un de nos conseiller vous contactera soit à l’adresse {<?=$_POST['user_email']?>} ou par téléphone au {<?=$_POST['user_phone']?>} dans les plus brefs délais pour traiter votre demande : 
{<?=$_POST['user_message']?>}
</p>


<?php
session_destroy();
?>