<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Užklausos būsena</title>
</head>
<body>
    <p>
        Sveiki {{ ucfirst($ticketOwner->name) }},
    </p>
    <p>
        Jūsų užklausa su ID #{{ $ticket->ticket_id }} buvo įvykdyta/išspręsta ir uždaryta.
    </p>
</body>
</html>