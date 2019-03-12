<!DOCTYPE html>
<html>
<head>
    <title>Registracijos laiškas</title>
</head>

<body>
<h2>Sveikiname prisijungus, {{$user['name']}}!</h2>
<br/>
Jūsų registracijos el-paštas: {{$user['email']}} , prašome paspausti žemiau esančia nuorodą
savo paskyros aktyvavimui ir el-pašto patvirtinimui.
<br/>
<a href="{{url('user/verify', $user->verifyUser->token)}}">Patvirtinti</a>
</body>

</html>