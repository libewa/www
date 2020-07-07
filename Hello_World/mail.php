$to = "##mail##";
$title = "Dein Account wurde erstellt";
$from = "Absender: linus.warnatz@icloud.com";
$text = "Hallo ##name##, \n dein Account wurde erfolgreich erstellt"
mail($to, $title, $text, $from);