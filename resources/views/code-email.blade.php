<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <p>Abra este enlace para acceder a su código: <a href="{{ Storage::disk('spaces')->url($code) }}" download="Prueba.txt">{{ Storage::disk('spaces')->url($code) }}</a></p>
                                         <!-- <a href="download/acme-doc-2.0.1.txt" download="Acme Documentation (ver. 2.0.1).txt">Download Text</a> -->
    <b><p>No comparte este enlace o código con nadie</p></b>
</body>
</html>