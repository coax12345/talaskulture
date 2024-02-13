<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Provera da li je zahtev poslat metodom POST
    // Ova linija proverava da li je forma poslata klikom na dugme "Rezerviši"
    
    // Preuzimanje podataka iz forme
    $pozoriste = $_POST["pozoriste"];
    $predstava = $_POST["predstava"];
    $broj_karata = $_POST["broj_karata"];
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $gmail = $_POST["gmail"];
    $telefon = $_POST["telefon"];
    // Preuzimanje vrednosti polja iz HTML forme pomocu $_POST superglobalne asocijativne niz
    
    // Adresa na koju šaljemo e-mail
    $to = "andrejalic0099@gmail.com";
    // Adresa na koju će biti poslat e-mail
    
    // Naslov e-maila
    $subject = "Rezervacija karata za pozorište";
    // Naslov e-mail poruke
    
    // Poruka e-maila
    $message = "Nova rezervacija:\n";
    $message .= "Pozorište: " . $pozoriste . "\n";
    $message .= "Predstava: " . $predstava . "\n";
    $message .= "Broj karata: " . $broj_karata . "\n";
    $message .= "Ime: " . $ime . "\n";
    $message .= "Prezime: " . $prezime . "\n";
    $message .= "Gmail: " . $gmail . "\n";
    $message .= "Broj telefona: " . $telefon;
    // Poruka koja će biti poslata e-mailom. Sadrži informacije koje je korisnik uneo u formu.
    
    // Dodatne opcije za e-mail
    $headers = "From: webmaster@example.com" . "\r\n" .
               "Reply-To: " . $gmail . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    // Dodatne opcije za e-mail, kao što su adresa pošiljaoca i adresa za odgovor
    
    // Slanje e-maila
    if (mail($to, $subject, $message, $headers)) {
        // Slanje e-mail poruke
        echo "Rezervacija je uspešno poslata. Hvala!";
        // Ako je e-mail uspešno poslat, prikaži poruku korisniku
    } else {
        echo "Došlo je do greške prilikom slanja rezervacije.";
        // Ako je došlo do greške prilikom slanja e-maila, prikaži poruku korisniku
    }
}
?>