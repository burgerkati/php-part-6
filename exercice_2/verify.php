 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // collect value of input field
     $surname = $_POST['surname'];
     $name = $_POST['name'];
     if (empty($name && $surname)) {
         echo "Veuillez saisir vos informations.";
     } else {
         echo htmlspecialchars('Bienvenue '. $name . ' ' . $surname);
     }
 }
 ?>
