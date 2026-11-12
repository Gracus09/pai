<?php require "nav.php"; ?>

<h1>Baza Gier Komputerowych</h1>

<h2>Czy Pan Dettlaff mnie lubi?</h2>

 <a href="tak.php" class="<?= ($aktualna=="tak.php") ? 'active' : '' ?>">TAK</a>
  <a href="nie.php" class="<?= ($aktualna=="nie.php") ? 'active' : '' ?>">NIE</a>

<p>
Aplikacja umożliwia zarządzanie kolekcją gier.
Możesz dodawać, wyświetlać, edytować i usuwać gry.
</p>


<?php require "footer.php"; ?>