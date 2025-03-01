<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saran</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Raleway', sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }

        header {
            background-color: #f74c4c;
            color: white;
            padding: 3px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 28px;
            margin-top: 20px;
        }

        p {
            line-height: 1.6;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input, textarea {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            padding: 10px;
            background-color: #f74c4c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #f74c4c;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #f74c4c;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Saran</h1>
    <p>Berikan Saran Agar Kami Bisa Memberikan Yang Terbaik.</p>
</header>

<div class="container">
    <h2>Formulir Saran</h2>
    <form action="#" method="post">
        <input type="text" name="name" placeholder="Nama Anda" required>
        <input type="interger" name="nomer handhphonr" placeholder="Masukkan No Telepon Anda" required>
        <input type="text" name="subject" placeholder="Subjek" required>
        <textarea name="message" rows="5" placeholder="Pesan Anda" required></textarea>
        <button type="submit">Kirim Pesan</button>
    
</div>

<footer>
    <p>&copy; UKL 2024/2025.</p>
</footer>

</body>
</html>