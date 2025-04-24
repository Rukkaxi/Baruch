<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #1a3c61;
        }
        .info {
            margin-bottom: 20px;
        }
        .info p {
            margin: 5px 0;
        }
        .message {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nuevo mensaje de contacto</h1>
        <div class="info">
            <p><strong>Nombre:</strong> {{ $contactData['name'] }}</p>
            <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
            <p><strong>Teléfono:</strong> {{ $contactData['phone'] ?? 'No proporcionado' }}</p>
            <p><strong>Servicio de interés:</strong> {{ $contactData['service'] ?? 'No seleccionado' }}</p>
        </div>
        <div class="message">
            <h3>Mensaje:</h3>
            <p>{{ $contactData['message'] }}</p>
        </div>
    </div>
</body>
</html>