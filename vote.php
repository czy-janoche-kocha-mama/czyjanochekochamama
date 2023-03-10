<?php
// Pobierz wartość z pola wyboru
if (isset($_POST['answer'])) {
  $answer = $_POST['answer'];
  
  // Zapisz wartość do pliku tekstowego
  $file = fopen("votes.txt", "a");
  fwrite($file, $answer . "\n");
  fclose($file);
  
  // Wyświetl komunikat o powodzeniu
  echo "<p>Dziękujemy za oddanie głosu!</p>";
} else {
  // Wyświetl komunikat o błędzie
  echo "<p>Wystąpił błąd. Spróbuj ponownie.</p>";
}
?>
