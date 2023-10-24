<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $recipient = "wiktoria.grubizna.praca@gmail.com"; // Adres e-mail odbiorcy
      $subject = $_POST["temat"];
      $sender = $_POST["email"];
      $message = $_POST["wiadomosc"];
      $name = $_POST["nazwa"];
    
      // Utwórz nagłówki e-maila
      $headers = "From: $name <$sender>\r\n";
      $headers .= "Reply-To: $sender\r\n";
      $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
      // Wysłanie e-maila
      if (mail($recipient, $subject, $message, $headers)) {
        // E-mail został wysłany pomyślnie
        echo "Wiadomość została wysłana.";
      } else {
        // Wystąpił błąd podczas wysyłania e-maila
        echo "Błąd podczas wysyłania wiadomości. Spróbuj ponownie później.";
      }
    }
    ?>