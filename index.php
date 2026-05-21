<?php
$apps = [
    [
        'name'        => 'Accounts Payable',
        'short'       => 'AP',
        'desc'        => 'Manage payables, payment vouchers, transfer memos & AP reports',
        'icon'        => 'fa-file-invoice-dollar',
        'color'       => '#00b4d8',
        'color_dim'   => 'rgba(0,180,216,.15)',
        'color_glow'  => 'rgba(0,180,216,.22)',
        'badge'       => 'Finance',
        'envs' => [
            ['label'=>'10.10.5.60', 'url'=>'http://10.10.5.60/ap',          'icon'=>'fa-server',  'cls'=>'env-local1'],
            ['label'=>'10.10.5.12', 'url'=>'http://10.10.5.12/ap',          'icon'=>'fa-server',  'cls'=>'env-local2'],
            ['label'=>'Online',     'url'=>'http://nag.ddns.net/ap',         'icon'=>'fa-globe',   'cls'=>'env-online'],
            ['label'=>'Develop',    'url'=>'http://10.10.5.49/ap_dev',       'icon'=>'fa-code',    'cls'=>'env-develop'],
        ],
    ],
    [
        'name'        => 'Accounts Receivable',
        'short'       => 'AR',
        'desc'        => 'Manage receivables, incoming payments & AR reports',
        'icon'        => 'fa-hand-holding-dollar',
        'color'       => '#10b981',
        'color_dim'   => 'rgba(16,185,129,.15)',
        'color_glow'  => 'rgba(16,185,129,.22)',
        'badge'       => 'Finance',
        'envs' => [
            ['label'=>'10.10.5.60', 'url'=>'http://10.10.5.60/ar',          'icon'=>'fa-server',  'cls'=>'env-local1'],
            ['label'=>'10.10.5.12', 'url'=>'http://10.10.5.12/ar',          'icon'=>'fa-server',  'cls'=>'env-local2'],
            ['label'=>'Online',     'url'=>'http://nag.ddns.net/ar',         'icon'=>'fa-globe',   'cls'=>'env-online'],
            ['label'=>'Develop',    'url'=>'http://10.10.5.49/ar_dev',       'icon'=>'fa-code',    'cls'=>'env-develop'],
        ],
    ],
    [
        'name'        => 'SignalBit ERP',
        'short'       => 'ERP',
        'desc'        => 'Enterprise Resource Planning — production, inventory & operations',
        'icon'        => 'fa-cubes',
        'color'       => '#a78bfa',
        'color_dim'   => 'rgba(167,139,250,.15)',
        'color_glow'  => 'rgba(167,139,250,.22)',
        'badge'       => 'Operations',
        'envs' => [
            ['label'=>'10.10.5.62', 'url'=>'http://10.10.5.62:8080/erp/',         'icon'=>'fa-server',  'cls'=>'env-local1'],
            ['label'=>'10.10.5.12', 'url'=>'http://10.10.5.12:8080/erp/',         'icon'=>'fa-server',  'cls'=>'env-local2'],
            ['label'=>'Online',     'url'=>'http://nag.ddns.net:8080/erp/',        'icon'=>'fa-globe',   'cls'=>'env-online'],
            ['label'=>'Develop',    'url'=>'http://localhost:8082/signalbit_erp/', 'icon'=>'fa-code',    'cls'=>'env-develop'],
        ],
    ],
];
$company = 'PT. Nirwana Alabare Garment';
$portal  = 'Accounting Portal';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $portal ?> — <?= $company ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
/* ── Reset ─────────────────────────────── */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}

/* ── Root ──────────────────────────────── */
:root{
  --bg:       #05080f;
  --surface:  rgba(255,255,255,.055);
  --surface-h:rgba(255,255,255,.085);
  --border:   rgba(255,255,255,.09);
  --border-h: rgba(255,255,255,.18);
  --text:     #eef2ff;
  --muted:    rgba(255,255,255,.42);
  --faint:    rgba(255,255,255,.07);
  --radius-card: 24px;
  --radius-btn:  11px;
  --font-body:'Inter',sans-serif;
  --font-display:'Plus Jakarta Sans',sans-serif;
}

html,body{
  min-height:100vh;
  font-family:var(--font-body);
  background:var(--bg);
  color:var(--text);
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
}

/* ── Background canvas ──────────────────── */
.bg{
  position:fixed;inset:0;z-index:0;
  background:
    radial-gradient(ellipse 80% 60% at 10% 0%,   rgba(0,149,199,.13)  0%, transparent 60%),
    radial-gradient(ellipse 60% 50% at 90% 100%,  rgba(16,185,129,.09) 0%, transparent 60%),
    radial-gradient(ellipse 50% 70% at 50% 50%,   rgba(109,40,217,.07) 0%, transparent 55%),
    #05080f;
  overflow:hidden;
}

/* Dot grid overlay */
.bg::before{
  content:'';position:absolute;inset:0;
  background-image:radial-gradient(rgba(255,255,255,.035) 1px,transparent 1px);
  background-size:32px 32px;
}

/* Animated orbs */
.orb{position:absolute;border-radius:50%;pointer-events:none;will-change:transform;}
.o1{width:750px;height:750px;top:-250px;left:-200px;
    background:radial-gradient(circle,rgba(0,180,216,.12) 0%,transparent 65%);
    animation:float1 16s ease-in-out infinite alternate;}
.o2{width:620px;height:620px;bottom:-180px;right:-180px;
    background:radial-gradient(circle,rgba(16,185,129,.10) 0%,transparent 65%);
    animation:float2 20s ease-in-out infinite alternate;}
.o3{width:500px;height:500px;top:40%;left:42%;
    background:radial-gradient(circle,rgba(139,92,246,.08) 0%,transparent 65%);
    animation:float3 24s ease-in-out infinite alternate;}

@keyframes float1{0%{transform:translate(0,0)  scale(1);}  100%{transform:translate(70px,55px) scale(1.1);}}
@keyframes float2{0%{transform:translate(0,0)  scale(1);}  100%{transform:translate(-55px,-65px) scale(1.12);}}
@keyframes float3{0%{transform:translate(-50%,-50%) scale(1);}100%{transform:translate(-50%,-50%) scale(1.22);}}

/* Stars */
.stars{position:absolute;inset:0;pointer-events:none;}
.star{position:absolute;border-radius:50%;background:#fff;
  animation:twinkle var(--d,3s) ease-in-out var(--dl,0s) infinite alternate;opacity:0;}
@keyframes twinkle{to{opacity:var(--op,.55);}}

/* ── Page wrapper ───────────────────────── */
.page{
  position:relative;z-index:1;
  min-height:100vh;
  display:flex;flex-direction:column;align-items:center;
  padding:40px 24px 64px;
}

/* ── Top bar ────────────────────────────── */
.topbar{
  width:100%;max-width:1080px;
  display:flex;align-items:center;justify-content:space-between;
  margin-bottom:64px;
}
.brand{display:flex;align-items:center;gap:14px;}
.brand-mark{
  width:46px;height:46px;border-radius:14px;flex-shrink:0;
  background:linear-gradient(135deg,#0ea5e9,#0369a1);
  display:flex;align-items:center;justify-content:center;
  font-size:19px;color:#fff;
  box-shadow:0 0 0 1px rgba(14,165,233,.3), 0 0 24px rgba(14,165,233,.3);
}
.brand-copy{display:flex;flex-direction:column;gap:1px;}
.brand-co{font-size:11.5px;font-weight:500;color:var(--muted);letter-spacing:.4px;}
.brand-name{font-size:15px;font-weight:700;color:var(--text);font-family:var(--font-display);}

.topbar-right{display:flex;align-items:center;gap:20px;}

/* Status pill */
.status-pill{
  display:inline-flex;align-items:center;gap:7px;
  padding:6px 14px;border-radius:999px;
  background:rgba(16,185,129,.09);
  border:1px solid rgba(16,185,129,.22);
  font-size:11px;font-weight:600;letter-spacing:1.6px;
  text-transform:uppercase;color:#34d399;
}
.status-dot{
  width:7px;height:7px;border-radius:50%;background:#34d399;
  box-shadow:0 0 6px #34d399;
  animation:pulse-dot 2s ease-in-out infinite;
}
@keyframes pulse-dot{0%,100%{opacity:1;transform:scale(1);}50%{opacity:.4;transform:scale(.85);}}

/* Clock */
.clock{text-align:right;}
.clock-time{display:block;font-size:20px;font-weight:700;font-variant-numeric:tabular-nums;
  color:var(--text);font-family:var(--font-display);letter-spacing:-.3px;}
.clock-date{font-size:11.5px;color:var(--muted);margin-top:1px;}

/* ── Hero section ───────────────────────── */
.hero{text-align:center;margin-bottom:56px;max-width:560px;}
.hero-eyebrow{
  display:inline-flex;align-items:center;gap:8px;margin-bottom:20px;
  padding:6px 16px;border-radius:999px;
  background:rgba(99,102,241,.10);
  border:1px solid rgba(99,102,241,.22);
  font-size:10.5px;font-weight:700;letter-spacing:2.2px;
  text-transform:uppercase;color:#a5b4fc;
}
.hero-title{
  font-family:var(--font-display);
  font-size:clamp(30px,5vw,52px);
  font-weight:800;letter-spacing:-1.2px;line-height:1.1;
  background:linear-gradient(145deg, #ffffff 0%, #c7d2fe 55%, #93c5fd 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
  background-clip:text;margin-bottom:14px;
}
.hero-sub{
  font-size:15px;color:var(--muted);font-weight:400;line-height:1.6;
}
.hero-meta{
  display:inline-flex;align-items:center;gap:6px;
  margin-top:20px;padding:6px 14px;
  border-radius:999px;background:var(--faint);
  border:1px solid var(--border);
  font-size:12px;color:var(--muted);
}
.hero-meta strong{color:var(--text);}

/* ── Card grid ──────────────────────────── */
.grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
  gap:24px;
  width:100%;max-width:1080px;
}

/* ── App card ───────────────────────────── */
.card{
  position:relative;
  background:var(--surface);
  border:1px solid var(--border);
  border-radius:var(--radius-card);
  padding:0;
  overflow:hidden;
  backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);
  box-shadow:0 4px 24px rgba(0,0,0,.35);
  display:flex;flex-direction:column;
  transition:transform .35s cubic-bezier(.34,1.56,.64,1),
             box-shadow .35s ease,
             border-color .35s ease,
             background .35s ease;
  will-change:transform;
}

/* Top accent bar */
.card-accent{
  height:3px;width:100%;
  background:linear-gradient(90deg, var(--c), transparent 80%);
  flex-shrink:0;
}

/* Shimmer on hover */
.card::before{
  content:'';position:absolute;inset:0;border-radius:var(--radius-card);
  background:linear-gradient(135deg,rgba(255,255,255,.06) 0%,transparent 50%);
  pointer-events:none;
}

/* Large watermark short-code */
.card-watermark{
  position:absolute;right:-10px;top:-12px;
  font-family:var(--font-display);
  font-size:90px;font-weight:800;
  color:var(--c);opacity:.055;
  letter-spacing:-4px;line-height:1;
  pointer-events:none;user-select:none;
  transition:opacity .35s ease;
}
.card:hover .card-watermark{opacity:.09;}

.card:hover{
  transform:translateY(-8px);
  background:var(--surface-h);
  border-color:var(--border-h);
  box-shadow:
    0 20px 60px rgba(0,0,0,.5),
    0 0 0 1px rgba(255,255,255,.06),
    0 0 50px var(--cg);
}

/* Card body */
.card-body{
  padding:26px 26px 0;
  flex:1;display:flex;flex-direction:column;gap:14px;
}

/* Icon + badge row */
.card-head{display:flex;align-items:flex-start;justify-content:space-between;}
.card-icon{
  width:54px;height:54px;border-radius:15px;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  font-size:22px;color:#fff;
  background:linear-gradient(145deg,var(--c),color-mix(in srgb,var(--c) 50%,#000));
  box-shadow:0 4px 16px var(--cd);
  transition:transform .3s ease,box-shadow .3s ease;
}
.card:hover .card-icon{
  transform:rotate(-6deg) scale(1.1);
  box-shadow:0 6px 24px var(--cg);
}
.card-badge{
  font-size:9.5px;font-weight:700;letter-spacing:1.4px;
  text-transform:uppercase;padding:4px 11px;border-radius:999px;
  background:var(--faint);border:1px solid var(--border);
  color:var(--muted);
}

/* Short + name */
.card-short{
  font-family:var(--font-display);
  font-size:38px;font-weight:800;letter-spacing:-1.5px;line-height:1;
  color:var(--c);margin-top:2px;
}
.card-name{font-size:17px;font-weight:600;color:var(--text);line-height:1.3;margin-top:2px;}
.card-desc{font-size:12.5px;color:var(--muted);line-height:1.7;flex:1;}

/* ── Environment buttons ─────────────────── */
.card-footer{padding:20px 26px 24px;}
.env-label{
  font-size:9.5px;font-weight:700;letter-spacing:1.8px;
  text-transform:uppercase;color:var(--muted);
  margin-bottom:10px;
}
.env-row{display:flex;flex-wrap:wrap;gap:8px;}
.env-btn{
  flex:1 1 calc(50% - 4px);min-width:0;
  display:flex;flex-direction:column;align-items:center;
  gap:5px;padding:10px 8px;border-radius:var(--radius-btn);
  text-decoration:none;color:var(--text);
  background:var(--faint);
  border:1px solid var(--border);
  font-size:11px;font-weight:600;
  transition:background .22s,border-color .22s,transform .22s,box-shadow .22s;
  position:relative;overflow:hidden;
}
/* 3-button row: all on one line */
.env-row:has(.env-btn:nth-child(3):last-child) .env-btn{flex:1 1 0;}
.env-btn::before{
  content:'';position:absolute;inset:0;border-radius:var(--radius-btn);
  background:var(--btn-color,rgba(255,255,255,.06));
  opacity:0;transition:opacity .22s;
}
.env-btn:hover::before{opacity:1;}
.env-btn:hover{
  border-color:var(--btn-border,rgba(255,255,255,.25));
  box-shadow:0 0 16px var(--btn-glow,rgba(255,255,255,.1));
  transform:translateY(-2px);
  color:#fff;
}
.env-btn:active{transform:translateY(0);}
.env-btn i{font-size:13px;color:var(--btn-icon,var(--muted));transition:color .22s;}
.env-btn:hover i{color:#fff;}
.env-local1 {--btn-color:rgba(14,165,233,.18);  --btn-border:rgba(14,165,233,.45);  --btn-glow:rgba(14,165,233,.25);  --btn-icon:#38bdf8;}
.env-local2 {--btn-color:rgba(99,102,241,.18);   --btn-border:rgba(99,102,241,.45);   --btn-glow:rgba(99,102,241,.25);   --btn-icon:#a5b4fc;}
.env-online {--btn-color:rgba(16,185,129,.18);   --btn-border:rgba(16,185,129,.45);   --btn-glow:rgba(16,185,129,.25);   --btn-icon:#34d399;}
.env-develop{--btn-color:rgba(245,158,11,.16);   --btn-border:rgba(245,158,11,.42);   --btn-glow:rgba(245,158,11,.22);   --btn-icon:#fbbf24;}

/* divider between card-body and footer */
.card-sep{
  height:1px;background:linear-gradient(90deg,transparent,var(--border) 20%,var(--border) 80%,transparent);
  margin:0 26px;flex-shrink:0;
}

/* ── Bottom bar ─────────────────────────── */
.bottom{
  width:100%;max-width:1080px;
  display:flex;align-items:center;justify-content:space-between;
  margin-top:48px;padding-top:24px;
  border-top:1px solid rgba(255,255,255,.06);
}
.bottom-copy{font-size:12px;color:rgba(255,255,255,.2);letter-spacing:.3px;}
.bottom-pills{display:flex;gap:8px;}
.env-legend{
  display:flex;align-items:center;gap:6px;
  font-size:11px;color:var(--muted);
  padding:4px 10px;border-radius:999px;
  background:var(--faint);border:1px solid var(--border);
}
.env-legend span{width:6px;height:6px;border-radius:50%;display:inline-block;}

/* ── Responsive ─────────────────────────── */
@media(max-width:640px){
  .topbar{flex-direction:column;gap:16px;align-items:flex-start;}
  .topbar-right{width:100%;justify-content:space-between;}
  .clock{text-align:left;}
  .hero-title{font-size:28px;}
  .grid{grid-template-columns:1fr;}
  .bottom{flex-direction:column;gap:14px;align-items:flex-start;}
}
</style>
</head>
<body>

<!-- Background -->
<div class="bg">
  <div class="orb o1"></div>
  <div class="orb o2"></div>
  <div class="orb o3"></div>
  <div class="stars" id="stars"></div>
</div>

<div class="page">

  <!-- Top bar -->
  <header class="topbar">
    <div class="brand">
      <div class="brand-mark"><i class="fa-solid fa-building-columns"></i></div>
      <div class="brand-copy">
        <span class="brand-co"><?= htmlspecialchars($company) ?></span>
        <span class="brand-name"><?= htmlspecialchars($portal) ?></span>
      </div>
    </div>
    <div class="topbar-right">
      <div class="status-pill">
        <div class="status-dot"></div>
        All Systems Operational
      </div>
      <div class="clock">
        <span class="clock-time" id="clk-t">00:00:00</span>
        <div  class="clock-date"  id="clk-d"></div>
      </div>
    </div>
  </header>

  <!-- Hero -->
  <div class="hero">
    <div class="hero-eyebrow">
      <i class="fa-solid fa-grid-2" style="font-size:9px;"></i>
      Application Portal
    </div>
    <h1 class="hero-title">Your Business<br>Apps, One Place</h1>
    <p class="hero-sub">
      Select an application and choose your preferred environment to get started.
    </p>
    <div class="hero-meta">
      <strong><?= count($apps) ?></strong>&nbsp;Applications &nbsp;·&nbsp;
      <strong>3</strong>&nbsp;Environments each
    </div>
  </div>

  <!-- Cards -->
  <div class="grid">
    <?php foreach ($apps as $app): ?>
    <div class="card" style="
      --c:  <?= $app['color'] ?>;
      --cd: <?= $app['color_dim'] ?>;
      --cg: <?= $app['color_glow'] ?>;
    ">
      <div class="card-accent"></div>
      <div class="card-watermark"><?= htmlspecialchars($app['short']) ?></div>

      <div class="card-body">
        <div class="card-head">
          <div class="card-icon">
            <i class="fa-solid <?= $app['icon'] ?>"></i>
          </div>
          <span class="card-badge"><?= htmlspecialchars($app['badge']) ?></span>
        </div>
        <div>
          <div class="card-short"><?= htmlspecialchars($app['short']) ?></div>
          <div class="card-name"><?= htmlspecialchars($app['name']) ?></div>
        </div>
        <p class="card-desc"><?= htmlspecialchars($app['desc']) ?></p>
      </div>

      <div class="card-sep"></div>

      <div class="card-footer">
        <div class="env-label">Open in</div>
        <div class="env-row">
          <?php foreach ($app['envs'] as $i => $env): ?>
          <a href="<?= htmlspecialchars($env['url']) ?>" target="_blank"
             class="env-btn <?= $env['cls'] ?>"
             title="<?= htmlspecialchars($env['url']) ?>">
            <i class="fa-solid <?= $env['icon'] ?>"></i>
            <?= htmlspecialchars($env['label']) ?>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- Bottom bar -->
  <div class="bottom">
    <span class="bottom-copy">
      &copy; <?= date('Y') ?> <?= htmlspecialchars($company) ?>
    </span>
    <div class="bottom-pills">
      <div class="env-legend"><span style="background:#38bdf8;"></span> Local (60)</div>
      <div class="env-legend"><span style="background:#a5b4fc;"></span> Local (12)</div>
      <div class="env-legend"><span style="background:#34d399;"></span> Online</div>
      <div class="env-legend"><span style="background:#fbbf24;"></span> Develop</div>
    </div>
  </div>

</div>

<script>
// ── Clock ──────────────────────────────────────────
(function(){
  var D=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
  var M=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
  function p(n){return n<10?'0'+n:n;}
  function tick(){
    var d=new Date();
    document.getElementById('clk-t').textContent=
      p(d.getHours())+':'+p(d.getMinutes())+':'+p(d.getSeconds());
    document.getElementById('clk-d').textContent=
      D[d.getDay()]+', '+p(d.getDate())+' '+M[d.getMonth()]+' '+d.getFullYear();
  }
  tick(); setInterval(tick,1000);
})();

// ── Stars ───────────────────────────────────────────
(function(){
  var c=document.getElementById('stars'),f=document.createDocumentFragment();
  for(var i=0;i<140;i++){
    var s=document.createElement('div'); s.className='star';
    var z=(Math.random()*2.3+0.4).toFixed(1);
    s.style.cssText='width:'+z+'px;height:'+z+'px;'
      +'top:'+(Math.random()*100)+'%;left:'+(Math.random()*100)+'%;'
      +'--d:'+(Math.random()*5+1.8).toFixed(1)+'s;'
      +'--dl:'+(Math.random()*8).toFixed(1)+'s;'
      +'--op:'+(Math.random()*.5+.1).toFixed(2)+';';
    f.appendChild(s);
  }
  c.appendChild(f);
})();
</script>
</body>
</html>
