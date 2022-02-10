<?php
if(isset($_POST['user_email']) && !empty($_POST['user_email']) &&
    isset($_POST['user_surname']) && !empty($_POST['user_surname']) &&
    isset($_POST['user_name']) && !empty($_POST['user_name']) && 
    isset($_POST['language']) && !empty($_POST['language']) && 
    isset($_POST['user_phone']) && !empty($_POST['user_phone']) &&
    isset($_POST['user_message']) && !empty($_POST['user_message'])) 
    {
?>
<p>
Merci {<?=$_POST['user_surname']?>} {<?=$_POST['user_name']?>} de nous avoir contacté à propos de “{<?=$_POST['language']?>}”.
Un de nos conseiller vous contactera soit à l’adresse {<?=$_POST['user_email']?>} ou par téléphone au {<?=$_POST['user_phone']?>} dans les plus brefs délais pour traiter votre demande : 
{<?=$_POST['user_message']?>}
<?php }; ?>
</p>
