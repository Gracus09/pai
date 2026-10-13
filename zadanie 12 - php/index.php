<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Formularz rejestracyjni</h2>
    <form action="./" method="post"> 
        Login:
        <input type="text" name = "Login" required>
        <br><br>
        E-mail:
        <input type="text" name = "E-mail" required>
        <br><br>
        Hasło:
        <input type = "text" name = "Hasło" required>
        <br><br>
        Wiek:
        <input type = "text" name = "Wiek" required>
        <br><br>
        <input type = "checkbox"
        name = "regulamin" value="tak">
        Akceptuje regulamin
        <br><br>

        <button type="submit"
        name="rejestruj">
        Zarejestruj się
</button>
        
        
    </form>
    <?php 
    if (isset($_POST['rejestruj'])){
        $login = trim($_POST['login']);
        $email = trim($_POST['email']);
        $haslo = $_POST['haslo'];
        $wiek = (int) $_POST['wiek'];
    }
    
    ?>
</body>
</html>