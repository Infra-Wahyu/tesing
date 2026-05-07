<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data - INFRA</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .view-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 800px;
        }
        h2 { color: #2c3e50; border-left: 5px solid #3498db; padding-left: 15px; }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #3498db;
            color: white;
        }
        table tr:hover { background-color: #f1f1f1; }

        .status-active {
            color: #27ae60;
            font-weight: bold;
            background: #eafaf1;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #34495e;
            padding: 10px 20px;
            border-radius: 5px;
            transition: 0.3s;
        }
        .back-btn:hover { background-color: #2c3e50; }
    </style>
</head>
<body>

    <div class="view-container">
        <h2>Data Testing INFRA</h2>
        <p>Menampilkan data statis untuk keperluan testing antarmuka.</p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Modul</th>
                    <th>Kategori</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Authentication System</td>
                    <td>Infra-Core</td>
                    <td><span class="status-active">Online</span></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Database Bridge</td>
                    <td>Backend</td>
                    <td><span class="status-active">Online</span></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>API Gateway</td>
                    <td>Security</td>
                    <td><span class="status-active">Online</span></td>
                </tr>
            </tbody>
        </table>

       <!-- Perhatikan tanda ../ di depan index.php -->
        <a href="../index.php" class="back-link">&larr; Kembali ke Dashboard</a>
    </div>

</body>
</html>