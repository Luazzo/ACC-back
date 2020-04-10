<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Contact Particulier</title>
</head>
<body>
    <h1>Message de Contact</h1>

    <p>From: {{ $contact['nom'] }}</p>

    <p>Email: {{ $contact['email'] }}</p>

    <p>GSM: {{ $contact['gsm'] }}</p>

    <p>Message: {{ $contact['message'] }}</p>


</body>
</html>
