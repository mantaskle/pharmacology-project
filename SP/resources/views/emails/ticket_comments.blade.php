<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Užklausa</title>
</head>
<body>
    <p>
        {{ $comment->comment }}
    </p>

    ---
    <p>Atsakyta nuo: {{ $user->name }}</p>

    <p>Pavadinimas: {{ $ticket->title }}</p>
    <p>ID: {{ $ticket->ticket_id }}</p>
    <p>Būsena: {{ $ticket->status }}</p>

    <p>
        Galite peržiūrėti užklausą bet kuriuo metu šiuo adresu {{ url('tickets/'. $ticket->ticket_id) }}
    </p>

</body>
</html>