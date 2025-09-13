<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Web Satu File</title>
  <meta name="description" content="Website sederhana dalam satu file – cepat, ringan, dan responsif." />
  <style>
    :root {
      --bg: #0f172a;        /* slate-900 */
      --bg-soft: #111827;   /* gray-900 */
      --card: #111827;
      --text: #e5e7eb;      /* gray-200 */
      --muted: #9ca3af;     /* gray-400 */
      --brand: #22c55e;     /* green-500 */
      --brand-2: #3b82f6;   /* blue-500 */
      --ring: rgba(34,197,94,.35);
      --shadow: 0 10px 25px rgba(0,0,0,.3);
      --radius: 16px;
      --radius-md: 12px;
      --radius-sm: 10px;
      --maxw: 1100px;
    }
    * { box-sizing: border-box; }
    html, body { height: 100%; }
    body {
      margin: 0; font: 16px/1.6 system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji";
      color: var(--text); background: radial-gradient(1200px 600px at 80% -10%, rgba(59,130,246,.25), transparent 40%), radial-gradient(900px 500px at 10% -10%, rgba(34,197,94,.18), transparent 35%), var(--bg);
    }
    a { color: inherit; text-decoration: none; }
    .container { width: 100%; max-width: var(--maxw); margin: 0 auto; padding: 0 20px; }
    .glass { background: linear-gradient(180deg, rgba(255,255,255,.05), rgba(255,255,255,.02)); border: 1px solid rgba(255,255,255,.08); backdrop-filter: blur(8px); box-shadow: var(--shadow); }

    /* Header */
    header { position: sticky; top: 0; z-index: 50; border-bottom: 1px solid rgba(255,255,255,.06); background: rgba(15,23,42,.8); backdrop-filter: blur(8px); }
    .nav { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 14px 0; }
    .brand { display: inline-flex; align-items: center; gap: 10px; font-weight: 800; letter-spacing: .3px; }
    .logo { width: 34px; height: 34px; border-radius: 10px; background: conic-gradient(from 210deg, var(--brand), var(--brand-2)); box-shadow: 0 6px 18px rgba(59,130,246,.35); }
    nav a { opacity: .9; padding: 8px 12px; border-radius: 10px; transition: opacity .15s, background .15s, transform .05s; }
    nav a:hover { background: rgba(255,255,255,.06); opacity: 1; }
    .menu { display: flex; gap: 6px; }
    .menu-btn { display: none; padding: 8px 10px; border-radius: 10px; border: 1px solid rgba(255,255,255,.12); background: transparent; color: var(--text); }

    /* Hero */
    .hero { padding: 64px 0 28px; }
    .hero-inner { display: grid; grid-template-columns: 1.2fr 1fr; gap: 26px; align-items: center; }
    .title { font-size: clamp(28px, 4vw, 44px); line-height: 1.15; margin: 0 0 10px; font-weight: 850; }
    .subtitle { color: var(--muted); margin: 0 0 22px; }
    .actions { display: flex; gap: 12px; flex-wrap: wrap; }
    .btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 12px 16px; border-radius: 12px; border: 1px solid rgba(255,255,255,.12); font-weight: 650; cursor: pointer; transition: transform .05s ease, filter .2s ease; }
    .btn:active { transform: translateY(1px); }
    .btn-primary { background: linear-gradient(180deg, var(--brand) 0%, #16a34a 100%); color: #08210f; border-color: rgba(34,197,94,.6); box-shadow: 0 10px 18px var(--ring); }
    .btn-ghost { background: rgba(255,255,255,.04); color: var(--text); }
    .hero-card { border-radius: var(--radius); padding: 18px; }
    .stat { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin-top: 14px; }
    .stat .item { padding: 12px; border: 1px solid rgba(255,255,255,.08); border-radius: 12px; text-align: center; background: rgba(255,255,255,.03); }
    .stat .item b { display: block; font-size: 20px; }

    /* Features */
    .section { padding: 44px 0; }
    .section h2 { font-size: clamp(22px, 3vw, 30px); margin: 0 0 18px; }
    .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; }
    .card { border-radius: var(--radius-md); padding: 16px; border: 1px solid rgba(255,255,255,.08); background: rgba(255,255,255,.03); }
    .card h3 { margin: 0 0 6px; font-size: 18px; }
    .card p { color: var(--muted); margin: 0; }

    /* Showcase */
    .showcase { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }
    .shot { aspect-ratio: 16/10; border-radius: var(--radius-md); overflow: hidden; border: 1px solid rgba(255,255,255,.08); background: linear-gradient(135deg, rgba(34,197,94,.15), rgba(59,130,246,.15)); position: relative; }
    .shot::after { content: ""; position: absolute; inset: 0; mix-blend-mode: overlay; background: radial-gradient(400px 120px at 10% 10%, rgba(255,255,255,.25), transparent 45%); }

    /* Contact */
    form { display: grid; gap: 12px; max-width: 560px; }
    .field { display: grid; gap: 6px; }
    label { font-size: 14px; color: var(--muted); }
    input, textarea { background: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.12); color: var(--text); padding: 12px 12px; border-radius: 12px; outline: none; }
    input:focus, textarea:focus { border-color: var(--brand); box-shadow: 0 0 0 4px var(--ring); }
    textarea { min-height: 110px; resize: vertical; }

    /* Footer */
    footer { border-top: 1px solid rgba(255,255,255,.06); padding: 24px 0 38px; color: var(--muted); text-align: center; }

    /* Utilities */
    .kicker { display: inline-block; font-size: 12px; letter-spacing: .15em; text-transform: uppercase; color: var(--muted); background: rgba(255,255,255,.06); padding: 6px 10px; border-radius: 999px; margin-bottom: 10px; }
    .badge { font-size: 12px; padding: 6px 8px; border-radius: 999px; border: 1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.04); }

    /* Responsive */
    @media (max-width: 900px) {
      .hero-inner { grid-template-columns: 1fr; }
      .grid { grid-template-columns: 1fr; }
      .showcase { grid-template-columns: 1fr 1fr; }
      .menu { display: none; }
      .menu-btn { display: inline-flex; }
      .menu.open { display: flex; flex-direction: column; position: absolute; top: 60px; right: 20px; background: rgba(0,0,0,.6); border: 1px solid rgba(255,255,255,.12); padding: 10px; border-radius: 12px; }
    }
  </style>
</head>
<body>
  <header>
    <div class="container nav">
      <a class="brand" href="#home">
        <span class="logo" aria-hidden="true"></span>
        <span>Web Satu File</span>
      </a>
      <nav>
        <button class="menu-btn" id="menuBtn" aria-label="Buka menu">☰</button>
        <div class="menu" id="menu">
          <a href="#fitur">Fitur</a>
          <a href="#demo">Demo</a>
          <a href="#kontak">Kontak</a>
          <a class="badge" href="#" id="mode">Toggle Mode</a>
        </div>
      </nav>
    </div>
  </header>

  <main class="container">
    <!-- Hero -->
    <section id="home" class="hero">
      <div class="hero-inner">
        <div>
          <span class="kicker">Cepat • Ringan • Responsif</span>
          <h1 class="title">Website modern dalam <span style="color: var(--brand)">satu file</span>.</h1>
          <p class="subtitle">Cocok untuk landing page, tugas kuliah, demo klien, atau prototipe kilat. Tanpa framework, tanpa dependensi.</p>
          <div class="actions">
            <a class="btn btn-primary" href="#fitur">Lihat Fitur</a>
            <a class="btn btn-ghost" href="#kontak">Hubungi Kami</a>
          </div>
          <div class="stat">
            <div class="item"><b>~7 KB</b><small>CSS & JS murni</small></div>
            <div class="item"><b><span id="uptime">99.9%</span></b><small>Kesederhanaan stabil</small></div>
            <div class="item"><b>1 File</b><small>Mudah dipindah</small></div>
          </div>
        </div>
        <div class="glass hero-card">
          <div class="shot" aria-hidden="true"></div>
          <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 10px;">
            <div class="card"><h3>Tanpa Build</h3><p>Buka saja di browser—langsung jalan.</p></div>
            <div class="card"><h3>Akurat</h3><p>Tipografi rapi, kontras nyaman, siap dipakai.</p></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section id="fitur" class="section">
      <h2>Fitur Utama</h2>
      <div class="grid">
        <div class="card"><h3>Responsif</h3><p>Tampil bagus di HP, tablet, dan desktop tanpa CSS framework.</p></div>
        <div class="card"><h3>Aksesibilitas</h3><p>Kontras tinggi, fokus jelas, label formulir lengkap.</p></div>
        <div class="card"><h3>Mode Gelap/Terang</h3><p>Toggle sekali klik, tersimpan di LocalStorage.</p></div>
      </div>
    </section>

    <!-- Showcase -->
    <section id="demo" class="section">
      <h2>Demo Komponen</h2>
      <div class="showcase">
        <div class="shot"></div>
        <div class="shot"></div>
        <div class="shot"></div>
      </div>
    </section>

    <!-- Contact -->
    <section id="kontak" class="section">
      <h2>Hubungi Kami</h2>
      <form id="formKontak" novalidate>
        <div class="field">
          <label for="nama">Nama</label>
          <input id="nama" name="nama" placeholder="Nama lengkap" required />
        </div>
        <div class="field">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="nama@contoh.com" required />
        </div>
        <div class="field">
          <label for="pesan">Pesan</label>
          <textarea id="pesan" name="pesan" placeholder="Tulis pesan Anda..." required></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Kirim</button>
        <span id="status" style="margin-left:10px; color: var(--muted)"></span>
      </form>
    </section>
  </main>

  <footer>
    <div class="container">
      © <span id="year"></span> Web Satu File. Dibuat cepat, tetap elegan.
    </div>
  </footer>

  <script>
    // Toggle menu mobile
    const menuBtn = document.getElementById('menuBtn');
    const menu = document.getElementById('menu');
    menuBtn.addEventListener('click', () => menu.classList.toggle('open'));

    // Tahun footer
    document.getElementById('year').textContent = new Date().getFullYear();

    // Fake uptime (contoh dynamic)
    document.getElementById('uptime').textContent = '100%';

    // Mode terang/gelap
    const modeBtn = document.getElementById('mode');
    const LS_KEY = 'onefile_theme';
    const applyTheme = (t) => {
      const light = t === 'light';
      document.documentElement.style.setProperty('--bg', light ? '#f9fafb' : '#0f172a');
      document.documentElement.style.setProperty('--bg-soft', light ? '#ffffff' : '#111827');
      document.documentElement.style.setProperty('--card', light ? '#ffffff' : '#111827');
      document.documentElement.style.setProperty('--text', light ? '#0b1220' : '#e5e7eb');
      document.documentElement.style.setProperty('--muted', light ? '#475569' : '#9ca3af');
      document.body.style.background = light
        ? 'linear-gradient(180deg, #fff, #f3f4f6)'
        : 'radial-gradient(1200px 600px at 80% -10%, rgba(59,130,246,.25), transparent 40%), radial-gradient(900px 500px at 10% -10%, rgba(34,197,94,.18), transparent 35%), #0f172a';
    };
    const saved = localStorage.getItem(LS_KEY) || 'dark';
    applyTheme(saved);
    modeBtn.addEventListener('click', (e) => {
      e.preventDefault();
      const cur = localStorage.getItem(LS_KEY) || 'dark';
      const next = cur === 'dark' ? 'light' : 'dark';
      localStorage.setItem(LS_KEY, next);
      applyTheme(next);
    });

    // Validasi form sederhana (tanpa backend)
    const form = document.getElementById('formKontak');
    const status = document.getElementById('status');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const data = Object.fromEntries(new FormData(form).entries());
      const ok = data.nama && data.email && data.pesan;
      status.textContent = ok ? '✔ Pesan tersimpan lokal (demo).' : '⚠ Lengkapi semua field.';
      if (ok) {
        try {
          const list = JSON.parse(localStorage.getItem('pesan-demo') || '[]');
          list.push({ ...data, waktu: new Date().toISOString() });
          localStorage.setItem('pesan-demo', JSON.stringify(list));
          form.reset();
        } catch (err) {
          console.warn(err);
        }
      }
    });
  </script>
</body>
</html>
