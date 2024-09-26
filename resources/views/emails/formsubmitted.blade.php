<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Proyek Baru</title>
</head>

<body>
    <h1>Pengajuan Proyek Baru</h1>

    <p><strong>Nama:</strong> {{ $formData['fname'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Nomor Telepon:</strong> {{ $formData['phone'] }}</p>
    <p><strong>Instansi:</strong> {{ $formData['instansi'] }}</p>
    <p><strong>Jenis Proyek:</strong> {{ $formData['project_type'] ?? $formData['other_project'] }}</p>
    <p><strong>Deskripsi Proyek:</strong> {{ $formData['project_desc'] }}</p>
    <p><strong>Expektasi Biaya:</strong> Rp{{ number_format($formData['cost'], 0, ',', '.') }}</p>
    <p><strong>Deadline:</strong> {{ \Carbon\Carbon::parse($formData['deadline'])->format('d/m/Y') }}</p>
    <p><strong>Status Proyek:</strong> {{ $formData['project_status'] }}</p>

    <p>Terima kasih,</p>
    <p>{{ config('app.name') }}</p>
</body>

</html>