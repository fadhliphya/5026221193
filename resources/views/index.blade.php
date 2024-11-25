<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas</title>

    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #846C5B;
        }

        .container {
            max-width: 400px;
            margin-top: 50px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
        }

        .task-list {
            background-color: #DDD8B8;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .task-item {
            background-color: #fff;
            margin-bottom: 15px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .task-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .task-item a {
            display: block;
            padding: 15px;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            font-size: 14px;
            text-align: center

        }

        .task-item a:hover {
            background-color: #F3D3BD;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Daftar Tugas</h1>

        <!-- Daftar Tugas -->
        <div class="task-list">
            <div class="task-item">
                <a href="/tugas/pertemuan1">Pertemuan 1</a>
            </div>
            <div class="task-item">
                <a href="/tugas/pertemuan2">Pertemuan 2</a>
            </div>
            <div class="task-item">
                <a href="/tugas/pertemuan3">Pertemuan 3</a>
            </div>
            <div class="task-item">
                <a href="/tugas/pertemuan5">Pertemuan 5</a>
            </div>
            <div class="task-item">
                <a href="/tugas/pertemuan7">Pertemuan 7</a>
            </div>
            <div class="task-item">
                <a href="/tugas/tugas1">Tugas 1</a>
            </div>
        </div>
    </div>

    <!-- Link ke Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
