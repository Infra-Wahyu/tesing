<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Testing - INFRA</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #ebedef; /* Warna background sedikit berbeda */
        }
        .container-testing {
            text-align: center;
            padding: 40px;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            border-top: 5px solid #9b59b6; /* Aksen warna ungu sesuai tombol testing */
            max-width: 500px;
            width: 90%;
        }
        .badge {
            background-color: #9b59b6;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        h1 { color: #2c3e50; margin-top: 15px; }
        p { color: #576574; line-height: 1.6; }
        
        .back-link {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            transition: 0.3s;
        }
        .back-link:hover {
            color: #2980b9;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container-testing">
        <span class="badge">Mode Testing</span>
        <h1>Ini adalah Halaman Testing</h1>
        <p>
            Anda telah berhasil diarahkan ke halaman pengujian sistem <strong>INFRA</strong>.<br>
            Halaman ini digunakan untuk memvalidasi fungsi tombol dan navigasi antar file.
        </p>
        
        <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
        
        <p style="font-size: 0.9em; color: #95a5a6;">
            ID Session: <?php echo uniqid('TEST-'); ?><br>
            Status: <span style="color: #27ae60;">Active</span>
        </p>

        <!-- Perhatikan tanda ../ di depan index.php -->
        <a href="../index.php" class="back-link">&larr; Kembali ke Dashboard</a>
    </div>

</body>
</html>