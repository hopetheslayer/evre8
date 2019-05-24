<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Randevu Durumu</title>
</head>
<body>
<p>
    Merhaba Sayın {{ ucfirst($randevuowner->name) }},
</p>
<p>
      {{ $randevu->start_time }} ve {{ $randevu->finish_time }} zamanlı randevunuz sistem tarafından iptal edilmiştir.
</p>
</body>
</html>