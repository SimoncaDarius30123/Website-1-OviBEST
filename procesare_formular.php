<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $product = $_POST["product"];
    $details = $_POST["details"];

    // Înlocuiește adresa de e-mail cu "simonca.darius48@yahoo.com"
    $to = "designsticla@ovibest.ro";
    $subject = "Mesaj nou de la $name";
    $message = "Nume: $name\n";
    $message .= "E-mail: $email\n";
    $message .= "Număr de telefon: $phone\n";
    $message .= "Oraș: $city\n";
    $message .= "Produs: $product\n";
    $message .= "Detalii:\n$details";

    mail($to, $subject, $message);

    // Redirectare către o pagină de confirmare sau altă acțiune după trimiterea e-mailului
    header("Location: Finish.html");
    exit;
}
?>