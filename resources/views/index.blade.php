<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background: #f5f5f5
        }

        h1 {
            margin: 30px 0;
            color: #93bbe0;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 100px;
            flex-wrap: wrap;
            padding: 100px;
        }

        .member {
            text-align: center;
        }

        .member img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #555;
            cursor: pointer;
            transition: transform 0.3s, border-color 0.3s;
        }

        .member img:hover {
            transform: scale(1.1);
            border-color: #610909;
        }

        .header {
            background: linear-gradient(to bottom, #610909, #8b0a0b);
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        .footer {
            background: linear-gradient(to bottom, #610909, #8b0a0b);
            color: #fff;
            padding: 1em;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }


    </style>
</head>
<body>
    <header class="header">
        <h1>WELCOME TO OUR GROUP PORTFOLIO</h1>
      </header>
    
    <div class="container">
        <div class="member">
            <a href="https://notyenoh22.github.io/portfolio-honeymae/" target="_blank">
                <img src="{{ asset(path: 'images/hny.jpg') }}" alt="Member 1">
            </a>
        </div>
        <div class="member">
            <a href="https://alloyjessa-bot.github.io/profile/" target="_blank">
                <img src="{{ asset(path: 'images/jss.jpg') }}" alt="Member 2">
            </a>
        </div>
        <div class="member">
            <a href="https://malara337.github.io/MY-Profile/" target="_blank">
                <img src="{{ asset(path: 'images/myr.jpg') }}" alt="Member 3">
            </a>
        </div>
        <!-- Add more members here -->
    </div>
    <footer class="footer">
        <p>&copy; 2025 EA Girls</p>
    </footer>
</body>
</html>
