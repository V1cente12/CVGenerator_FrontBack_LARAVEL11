<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .header {
            text-align: center;
            color: #333;
        }
        .header h1 {
            font-size: 28px;
        }
        .header h2 {
            font-size: 18px;
            color: #666;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 22px;
            color: #444;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .section ul {
            list-style-type: none;
            padding: 0;
        }
        .section ul li {
            margin: 5px 0;
            color: #333;
        }
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .contact-item {
            flex: 1;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Vicente Calderón Vega</h1>
            <h2>Desarrollador de Software</h2>
            <p>Apasionado por el desarrollo web con experiencia en PHP, Laravel y Angular.</p>
        </div>

        <div class="section">
            <h2>Contacto</h2>
            <div class="contact-info">
                @foreach ($contacts as $contact)
                    <div class="contact-item">
                        <strong>{{ $contact->type }}:</strong> {{ $contact->value }}
                    </div>
                @endforeach
            </div>
        </div>

        <div class="section">
            <h2>Habilidades</h2>
            <ul>
                @foreach ($skills as $skill)
                    <li>{{ $skill->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="section">
            <h2>Experiencia</h2>
            @foreach ($experiences as $experience)
                <div style="margin-bottom: 15px;">
                    <strong>{{ $experience->role }}</strong> en <em>{{ $experience->company_name }}</em><br>
                    <small>{{ $experience->duration }}</small>
                    <p>{{ $experience->description }}</p>
                </div>
            @endforeach
        </div>

        <div class="section">
            <h2>Idiomas</h2>
            <ul>
                @foreach ($languages as $language)
                    <li>{{ $language->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="section">
            <h2>Formación</h2>
            @foreach ($education as $edu)
                <div style="margin-bottom: 15px;">
                    <strong>{{ $edu->degree }}</strong><br>
                    <small>{{ $edu->duration }}</small><br>
                    <p>{{ $edu->institution }}</p>
                </div>
            @endforeach
        </div>

        <div class="section">
            <h2>Información Adicional</h2>
            <ul>
                @foreach ($additionalInformation as $info)
                    <li>{{ $info->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
