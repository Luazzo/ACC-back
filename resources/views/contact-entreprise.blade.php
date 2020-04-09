<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Contact Entreprise</title>
</head>
<body>
    <h1>Massage d'une Entreprise</h1>

    <p>Entreprise: {{ $contact['entreprise'] }}</p>

    <p>Personne de contact: {{ $contact['personne'] }}</p>
    <p>TVA:
        @if ($contact['tva'])
            {{ $contact['tva'] }}
        @else
            Non
        @endif
    </p>
    <p>Numero d'entreprise:
        @if ($contact['numero'])
            {{ $contact['numero'] }}
        @else
            Non
        @endif
    </p>
    <p>Téléphone: {{ $contact['tel'] }}</p>
    <p>Email: {{ $contact['email'] }}</p>

    <p>{{ $contact['message'] }}</p>


</body>
</html>
