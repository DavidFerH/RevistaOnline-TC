<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Mensaje desde formulario de contacto</title>
</head>

<body>
<div class="card">
<div class="card-header">
Nuevo mensaje del formulario de contacto
</div>
<div class="card-body">
<h3 class="card-title">Datos del mensaje</h3>
<p class="card-text"><b>Email:</b> {{ $data['email'] }}.</p>
<p class="card-text"><b>Subject:</b> {{ $data['asunto'] }}.</p>
<p class="card-text"><b>Message:</b> {{ $data['message'] }}.</p>

</div>
</div>
</body>
</html>