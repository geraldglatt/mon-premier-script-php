<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>le formulaire</h2>
    <form  action="thanks.php" method="POST">
        <fieldset>
            <legend>Language of programmation</legend>
            <div>
                <label for="name">Nom :</label>
                <input type="text"  id="name"  name="user_name" required>
            </div>
            <div>
                <label for="surname">Prenom :</label>
                <input type="text"  id="surname"  name="user_surname" required>
            </div>
            <div>
                <label for="tel">Tel :</label>
                <input type="tel"  id="name"  name="user_phone"  required>
            </div>
            <div>
                <label  for="email">Email :</label>
                <input  type="email"  id="email"  name="user_email"  required>
            </div>
            <div>
                <label for="language">Sujet :</label>
                    <select name="language" id="language">
                        <option value="PHP"></option>
                        <option value="PHP">PHP</option>
                        <option value="Javascript">Javascript</option>
                        <option value="Angular">Angular</option>
                        <option value="Symfony">Symfony</option>
                        <option value="SQL">SQL</option>
                    </select>
                </div>
            <div>
                <label  for="message">Message :</label>
                <textarea  id="message"  name="user_message"></textarea>
            </div>
            <div  class="button">
            <button  type="submit">Envoyer votre message</button>
            </div>
        </fieldset>
  </form>
  <?php
    //we check if the form has been sent
    if(!empty($_POST)){
    //the form has been sent
    //we check that all the required fields are filled  
        if(isset($_POST['user_email']) && !empty($_POST['user_email']) &&
        isset($_POST['user_surname']) && !empty($_POST['user_surname']) &&
        isset($_POST['user_name']) && !empty($_POST['user_name']) && 
        isset($_POST['language']) && !empty($_POST['language']) && 
        isset($_POST['user_phone']) && !empty($_POST['user_phone']) &&
        isset($_POST['user_message']) && !empty($_POST['user_message'])) 
        {
        //the form is complete 
        //we recover the data by protecting it
        $nom = strip_tags($_POST['user_name']);
        if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
            die("L'asresse e_mail est incoreccte !!!");
        }
        

        }else{
        //the form is not complete
        die("Le formulaire est incomplet !!!");
        }

    }
   


?>  
</body>
</html>