<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Užklausos informacija</title>
</head>
<body>
    <p>
        Dėkojame, kad susisiekėte su mūsų sistemos palaikymo komanda. Jūsų užklausa buvo sėkmingai pridėta.
        Apie atsakymą į pateiktą užklausą ir kitas susijusias naujienas būsite informuoti el.paštu.
        Jūsų užklausos detalės pateikiamos apačioje::
    </p>

    <p>Pavadinimas: {{ $ticket->title }}</p>
    <p>Prioritetas: {{ $ticket->priority }}</p>
    <p>Būsena: {{ $ticket->status }}</p>

    <p>
        Galite peržvelgti savo užklausą bet kuriuo metu adresu: {{ url('tickets/'. $ticket->ticket_id) }}
    </p>

</body>
</html>