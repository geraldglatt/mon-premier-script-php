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
                <input type="text"  id="name"  name="user_name">
            </div>
            <div>
                <label for="surname">Prenom :</label>
                <input type="text"  id="surname"  name="user_surname">
            </div>
            <div>
                <label for="tel">Tel :</label>
                <input type="tel"  id="name"  name="user_phone">
            </div>
            <div>
                <label  for="email">Email :</label>
                <input  type="email"  id="email"  name="user_email">
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
</body>
</html>