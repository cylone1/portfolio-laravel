<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Abdul Gani</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #0f172a;
            color: white;
        }

        header {
            text-align: center;
            padding: 80px 20px;
            background: linear-gradient(135deg, #0f172a, #1e293b);
        }

        header h1 {
            font-size: 48px;
            margin: 0;
            color: #38bdf8;
        }

        header p {
            font-size: 18px;
            opacity: 0.8;
        }

        section {
            padding: 50px 20px;
            max-width: 1000px;
            margin: auto;
        }

        h2 {
            color: #38bdf8;
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: #1e293b;
            padding: 20px;
            border-radius: 15px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            background: #334155;
        }

        footer {
            text-align: center;
            padding: 30px;
            background: #020617;
            font-size: 14px;
        }
    </style>
</head>

<body>

<header>
    <h1>🔥 Abdul Gani</h1>
    <p>Network Engineer | Sysadmin | Future DevOps 🚀</p>
</header>

<section>
    <h2>👨‍💻 Tentang Saya</h2>
    <div class="card">
        Saya adalah seorang IT enthusiast yang fokus pada networking, server, dan deployment.
        Saat ini saya sedang belajar DevOps dan backend development.
    </div>
</section>

<section>
    <h2>🛠️ Skill</h2>
    <div class="grid">
        <div class="card">Linux Server (Ubuntu)</div>
        <div class="card">Mikrotik & VLAN</div>
        <div class="card">Nginx Web Server</div>
        <div class="card">Git & Deployment</div>
        <div class="card">Laravel Basic</div>
    </div>
</section>

<section>
    <h2>🚀 Project</h2>
    <div class="grid">
        <div class="card">
            🔥 Lab Proxmox + VLAN <br>
            Simulasi jaringan real menggunakan VLAN
        </div>

        <div class="card">
            🌐 Web Server Nginx <br>
            Deploy Laravel di port custom 2563
        </div>

        <div class="card">
            💻 Portfolio Laravel <br>
            Website portfolio pribadi berbasis Laravel
        </div>
    </div>
</section>

<section>
    <h2>📞 Contact</h2>
    <div class="card">
        Email: gani@example.com <br>
        GitHub: github.com/cylone1
    </div>
</section>

<footer>
    © 2026 Abdul Gani | Built with Laravel 🔥
</footer>

</body>
</html>