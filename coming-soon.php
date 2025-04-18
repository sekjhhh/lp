<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MR SKK - Splash Screen</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

  <!-- Fireworks Animation Library -->
  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>

  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('https://res.cloudinary.com/dnmzuj4rn/image/upload/v1744978748/Lazarus_aqnkxi.png') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
      color: lime;
      overflow: hidden;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      z-index: 1;
    }

    .container {
      text-align: center;
      position: relative;
      z-index: 2;
    }

    .logo {
      font-family: 'Bangers', cursive;
      font-size: 120px;
      color: lime;
      text-shadow: 2px 2px 10px rgba(0, 255, 0, 0.5);
      margin-bottom: 20px;
    }

    .quote {
      font-size: 20px;
      font-style: italic;
      margin-bottom: 40px;
      color: lime;
      opacity: 0.9;
    }

    #console {
      margin-top: 40px;
      font-family: 'Courier New', monospace;
      font-size: 16px;
      line-height: 1.5;
      text-align: left;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      padding: 20px;
      background: rgba(0, 0, 0, 0.8);
      border: 2px solid lime;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 255, 0, 0.5);
      color: lime;
    }

    #console .prefix {
      color: lime;
    }

    #console .keyword {
      color: lime;
    }

    .running-text {
      margin-top: 20px;
      font-family: 'Courier New', monospace;
      font-size: 16px;
      white-space: nowrap;
      overflow: hidden;
      width: 100%;
      color: lime;
    }

    .running-text span {
      display: inline-block;
      animation: typing 10s steps(100, end) infinite;
    }

    @keyframes typing {
      from { width: 0; }
      to { width: 100%; }
    }

    canvas {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }
  </style>
</head>

<body>
  <canvas id="fireworks"></canvas>
  <div class="overlay"></div>

  <div class="container">
    <div class="logo">MR SKK</div>

    <div class="quote">
      "Kebaikan adalah kunci kebahagiaan. Jangan pernah berhenti belajar dan berbagi."
    </div>

    <div class="running-text">
      <span>| Official SKK Grup | Raizo | k3nzou | mr.skk | Urdick | D0LL404 | P3tet | Mr.4cil | </span>
    </div>

    <div id="console">
      <span class="prefix">root@Acces~Danied:</span><span class="keyword"> INODONESIA</span><br>
      <span class="prefix">root@Acces~Danied:</span><span class="keyword"> KAPAN RAKYAT SEJAHTRA</span><br>

      <span class="prefix">Greetz:</span><span class="keyword"> SKK GRUP 2025-02-01 TERLAHIR NYA KAMI</span><br><br>


      <span class="prefix">E<br>N<br>D</span>
    </div>
  </div>

  <script>
    const canvas = document.getElementById('fireworks');
    const confettiSettings = {
      particleCount: 100,
      spread: 160,
      angle: 60,
      origin: { y: 0.5 },
      colors: ['#e00910', '#e00910', '#7CFC00', '#e00910', '#e00910'],
    };

    function launchFireworks() {
      confetti(confettiSettings);
    }

    setInterval(launchFireworks, 1500);

    const consoleText = `
      root@Acces~Danied: HALLO PAK
      root@Acces~Danied: KAMI AKAN BERHENTI PAK
      root@Acces~Danied: MELAKUKAN SEPERTI INI
      root@Acces~Danied: JIKA UMR KAMI SUDAH MENCAPAY 1RB$
      root@Acces~Danied: PERTIMBANGKEN PAK
      root@Acces~Danied: MR SKK kalaw gaji kecil kejahatan akan terus bertambah


      Kami Kuat Karena Kami Bersatu
      Indonesia MERDEKA !!!!!

      E
      N
      D
    `;

    const consoleElement = document.getElementById('console');
    let index = 0;

    function typeWriter() {
      if (index < consoleText.length) {
        consoleElement.innerHTML += consoleText.charAt(index);
        index++;
        setTimeout(typeWriter, 50);
      }
    }

    typeWriter();
  </script>
</body>
</html>
