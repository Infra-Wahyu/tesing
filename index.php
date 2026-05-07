<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Website</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }
        .container {
            text-align: center;
            padding: 30px;
            border-radius: 12px;
            background-color: #fff;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 { color: #2c3e50; margin-bottom: 10px; }
        p { color: #7f8c8d; }
        .time { 
            color: #e74c3c; 
            font-weight: bold; 
            margin-bottom: 20px;
            padding: 10px;
            background: #fdf2f2;
            border-radius: 8px;
        }
        /* Style untuk tombol */
        .button-group {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s ease;
        }
        .btn-view { background-color: #3498db; color: white; }
        .btn-view:hover { background-color: #2980b9; }
        
        .btn-read { background-color: #2ecc71; color: white; }
        .btn-read:hover { background-color: #27ae60; }
        
        .btn-testing { background-color: #9b59b6; color: white; }
        .btn-testing:hover { background-color: #8e44ad; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Ini adalah website testing, INFRA</h1>
        <p>konten testing</p>
        
        <div class="time">
            Waktu Realtime: <?php echo date('d-m-Y H:i:s'); ?>
        </div>

        <!-- Section Tombol Baru -->
        <div class="button-group">
                <a href="view/halamanview.php" target="_blank">
                 <button class="btn-view">View</button>
                </a>
            <button class="btn-read" onclick="alert('Read Clicked')">Read</button>
            <a href="testing/halaman_testing.php" target="_blank">
            <button class="btn-testing">Testing</button>
            
            <button class="btn-read" onclick="alert('Read Clicked')">Read</button>
            <a href="testing/halaman_testing.php" target="_blank">
            <button class="btn-testing">Testing</button>
        </a>        
    </div>

</body>
</html>