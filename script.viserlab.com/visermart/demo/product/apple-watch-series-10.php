<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Single Product Page UI</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Merriweather:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

  <style>
    *{margin:0;padding:0;box-sizing:border-box}
    body{
      font-family:'Inter',sans-serif;
      background:#f3f4f8;
      color:#1b2430;
      line-height:1.5;
    }
    a{text-decoration:none;color:inherit}
    img{max-width:100%;display:block}
    button,input{font:inherit}
    .container{
      width:min(1320px,calc(100% - 32px));
      margin:auto;
    }

    :root{
      --blue-900:#072c85;
      --blue-800:#0b3b9f;
      --blue-700:#124bbf;
      --blue-100:#dfe9ff;
      --green:#17a34a;
      --green-dark:#10863b;
      --red:#d83939;
      --orange:#f0a347;
      --muted:#6b7280;
      --border:#e4e7ee;
      --card:#ffffff;
      --soft:#f8f9fc;
      --shadow:0 10px 30px rgba(12,23,48,.08);
      --radius:18px;
    }

    .site-breadcrumb{
      background:#fff;
      border-bottom:1px solid var(--border);
      padding:12px 0;
      font-size:14px;
      color:#697586;
    }
    .site-breadcrumb .crumbs{
      display:flex;
      gap:8px;
      flex-wrap:wrap;
      align-items:center;
    }
    .site-breadcrumb .crumbs span.sep{opacity:.5}

    .product-hero{
      background:linear-gradient(135deg,var(--blue-900),var(--blue-800));
      padding:34px 0 34px;
      position:relative;
      overflow:hidden;
    }
    .product-hero::before{
      content:"";
      position:absolute;
      inset:auto -100px -120px auto;
      width:360px;
      height:360px;
      border-radius:50%;
      background:rgba(255,255,255,.06);
      filter:blur(8px);
    }
    .product-hero-grid{
      display:grid;
      grid-template-columns:440px minmax(0,1fr);
      gap:34px;
      align-items:start;
    }

    .media-card{
      background:#fff;
      border-radius:22px;
      padding:14px;
      box-shadow:var(--shadow);
    }
    .media-main{
      background:#f3f4f7;
      border-radius:16px;
      padding:14px;
      position:relative;
      min-height:420px;
      display:flex;
      align-items:center;
      justify-content:center;
      overflow:hidden;
    }
    .media-main img{
      max-height:360px;
      object-fit:contain;
    }
    .top-flags{
      position:absolute;
      top:14px;
      left:14px;
      display:flex;
      gap:8px;
      flex-wrap:wrap;
    }
    .flag{
      font-size:11px;
      font-weight:700;
      padding:6px 10px;
      border-radius:999px;
      color:#fff;
      box-shadow:0 6px 14px rgba(0,0,0,.08);
    }
    .flag.green{background:#1ea44a}
    .flag.lightgreen{background:#8ccf7e;color:#0e4d1e}
    .flag.red{background:#d83f3f}

    .thumb-list{
      margin-top:14px;
      display:flex;
      gap:10px;
      align-items:center;
      flex-wrap:wrap;
    }
    .thumb{
      width:62px;
      height:62px;
      border:2px solid var(--border);
      border-radius:12px;
      background:#fff;
      display:flex;
      align-items:center;
      justify-content:center;
      cursor:pointer;
      transition:.2s ease;
      overflow:hidden;
    }
    .thumb img{
      width:100%;
      height:100%;
      object-fit:cover;
    }
    .thumb.active,
    .thumb:hover{
      border-color:var(--blue-800);
      transform:translateY(-1px);
    }

    .mini-feature-row{
      margin-top:14px;
      display:grid;
      grid-template-columns:repeat(4,1fr);
      gap:10px;
    }
    .mini-feature{
      background:#fff;
      border:1px solid var(--border);
      border-radius:12px;
      padding:12px 10px;
      text-align:center;
      font-size:11px;
      color:#5f6b7a;
    }
    .mini-feature i{
      display:block;
      color:var(--blue-800);
      margin-bottom:8px;
      font-size:15px;
    }

    .info-wrap{
      color:#fff;
      padding-top:10px;
    }
    .badge-line{
      display:flex;
      gap:8px;
      flex-wrap:wrap;
      margin-bottom:14px;
    }
    .badge-pill{
      display:inline-flex;
      align-items:center;
      gap:6px;
      padding:6px 10px;
      border-radius:999px;
      font-size:11px;
      font-weight:700;
      letter-spacing:.02em;
    }
    .badge-pill.dark{
      background:rgba(255,255,255,.12);
      color:#dfe9ff;
      border:1px solid rgba(255,255,255,.15);
    }
    .badge-pill.stock{
      background:#1fa24a;
      color:#fff;
    }

    .product-title{
      font-family:'Merriweather',serif;
      font-size:42px;
      line-height:1.2;
      margin-bottom:12px;
      max-width:760px;
    }
    .meta-line{
      display:flex;
      gap:14px;
      flex-wrap:wrap;
      align-items:center;
      color:rgba(255,255,255,.85);
      font-size:14px;
      margin-bottom:18px;
    }
    .stars{
      color:#ffcf52;
      letter-spacing:2px;
      font-size:13px;
    }

    .tax-box{
      background:rgba(255,255,255,.08);
      border:1px solid rgba(255,255,255,.14);
      border-radius:14px;
      padding:16px 18px;
      color:#dfe7ff;
      margin-bottom:16px;
      max-width:760px;
      backdrop-filter:blur(10px);
    }

    .buy-panel{
      display:flex;
      flex-wrap:wrap;
      gap:12px;
      align-items:center;
      margin-bottom:10px;
    }
    .qty-box{
      display:flex;
      align-items:center;
      background:#fff;
      border-radius:10px;
      overflow:hidden;
      border:1px solid #dfe4ec;
      min-width:130px;
    }
    .qty-box button{
      width:42px;
      height:46px;
      border:none;
      background:#fff;
      color:#243142;
      font-size:18px;
      font-weight:800;
      cursor:pointer;
    }
    .qty-box input{
      width:46px;
      height:46px;
      border:none;
      outline:none;
      text-align:center;
      color:#1b2430;
      font-weight:700;
    }

    .btn{
      height:46px;
      border:none;
      border-radius:10px;
      padding:0 18px;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      gap:8px;
      font-weight:700;
      cursor:pointer;
      transition:.2s ease;
      white-space:nowrap;
    }
    .btn-cart{
      background:var(--green);
      color:#fff;
      box-shadow:0 10px 20px rgba(23,163,74,.22);
    }
    .btn-cart:hover{background:var(--green-dark)}
    .btn-quote{
      background:#f1f4fb;
      color:var(--blue-900);
    }
    .btn-quote:hover{background:#e5ebf8}
    .btn-contact{
      background:rgba(255,255,255,.08);
      color:#fff;
      border:1px solid rgba(255,255,255,.16);
    }
    .btn-contact:hover{
      background:rgba(255,255,255,.14);
    }

    .min-order{
      color:#cfdcff;
      font-size:12px;
      margin:8px 0 14px;
    }

    .contact-row{
      display:flex;
      gap:10px;
      flex-wrap:wrap;
    }

    .trust-strip{
      margin-top:-10px;
      position:relative;
      z-index:5;
    }
    .trust-strip-inner{
      display:grid;
      grid-template-columns:repeat(4,1fr);
      background:#fff;
      border:1px solid var(--border);
      border-radius:0 0 16px 16px;
      overflow:hidden;
      box-shadow:var(--shadow);
    }
    .trust-item{
      padding:18px 22px;
      display:flex;
      gap:14px;
      align-items:flex-start;
      border-right:1px solid var(--border);
    }
    .trust-item:last-child{border-right:none}
    .trust-icon{
      width:34px;
      height:34px;
      border-radius:10px;
      display:grid;
      place-items:center;
      background:#f3f6ff;
      color:var(--blue-800);
      flex-shrink:0;
    }
    .trust-item small{
      display:block;
      font-size:11px;
      color:#8a93a2;
      text-transform:uppercase;
      font-weight:700;
      margin-bottom:3px;
      letter-spacing:.04em;
    }
    .trust-item strong{
      display:block;
      font-size:15px;
      color:#1a2432;
    }

    .product-main-section{
      padding:22px 0 42px;
    }
    .content-grid{
      display:grid;
      grid-template-columns:minmax(0,2fr) 320px;
      gap:22px;
      align-items:start;
    }

    .panel{
      background:#fff;
      border:1px solid var(--border);
      border-radius:16px;
      box-shadow:var(--shadow);
    }

    .tab-head{
      display:flex;
      gap:26px;
      padding:0 22px;
      border-bottom:1px solid var(--border);
      overflow:auto;
    }
    .tab-btn{
      background:none;
      border:none;
      padding:18px 0 16px;
      font-size:13px;
      font-weight:800;
      color:#7a8493;
      text-transform:uppercase;
      position:relative;
      cursor:pointer;
      white-space:nowrap;
    }
    .tab-btn.active{
      color:#cb3d3d;
    }
    .tab-btn.active::after{
      content:"";
      position:absolute;
      left:0;
      bottom:-1px;
      width:100%;
      height:2px;
      background:#cb3d3d;
    }
    .tab-body{
      padding:24px 22px;
    }
    .tab-pane{display:none}
    .tab-pane.active{display:block}
    .desc-title{
      font-family:'Merriweather',serif;
      font-size:28px;
      margin-bottom:14px;
      color:#202938;
    }
    .desc-text{
      color:#647082;
      font-size:15px;
      margin-bottom:14px;
      max-width:72ch;
    }

    .feature-points{
      display:grid;
      grid-template-columns:repeat(2,1fr);
      gap:12px;
      margin-top:16px;
    }
    .feature-box{
      border:1px solid var(--border);
      border-radius:12px;
      padding:14px;
      background:#fafbfe;
      color:#5d6878;
      font-size:14px;
    }
    .feature-box strong{
      display:block;
      color:#202938;
      margin-bottom:4px;
    }

    .side-card{
      padding:18px;
      margin-bottom:18px;
    }
    .side-title{
      font-size:12px;
      font-weight:800;
      color:#7f8897;
      text-transform:uppercase;
      margin-bottom:14px;
    }
    .why-grid{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:10px;
    }
    .why-box{
      background:#fafbfe;
      border:1px solid var(--border);
      border-radius:12px;
      text-align:center;
      padding:14px 8px;
    }
    .why-box strong{
      display:block;
      color:#2c8a53;
      font-size:20px;
      line-height:1;
      margin-bottom:6px;
    }
    .why-box span{
      font-size:11px;
      color:#758091;
      font-weight:700;
    }
    .side-text{
      font-size:14px;
      color:#627084;
    }

    .related-wrap{
      margin-top:18px;
      padding:18px;
    }
    .section-head{
      display:flex;
      align-items:center;
      justify-content:space-between;
      margin-bottom:14px;
    }
    .section-head h3{
      font-size:15px;
      text-transform:uppercase;
      font-weight:800;
      color:#1f2736;
    }
    .section-head span{
      font-size:12px;
      color:#8b94a3;
    }

    .related-grid{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:16px;
    }
    .product-card{
      border:1px solid var(--border);
      border-radius:14px;
      background:#fff;
      padding:12px;
      transition:.2s ease;
    }
    .product-card:hover{
      transform:translateY(-3px);
      box-shadow:var(--shadow);
    }
    .product-card .img{
      border-radius:12px;
      background:#f6f7fb;
      height:155px;
      display:flex;
      align-items:center;
      justify-content:center;
      overflow:hidden;
      margin-bottom:12px;
    }
    .product-card .img img{
      max-height:130px;
      object-fit:contain;
    }
    .product-card h4{
      font-size:14px;
      line-height:1.4;
      min-height:42px;
      color:#243142;
      margin-bottom:10px;
    }
    .product-card .card-btn{
      width:100%;
      height:38px;
      border:none;
      border-radius:8px;
      background:#0d2d7e;
      color:#fff;
      font-size:13px;
      font-weight:700;
      cursor:pointer;
    }

    .spec-grid{
      display:grid;
      grid-template-columns:repeat(2,1fr);
      gap:14px;
    }
    .spec-group{
      border:1px solid var(--border);
      border-radius:14px;
      overflow:hidden;
    }
    .spec-group h4{
      background:#f7f9fd;
      padding:14px 16px;
      font-size:14px;
      color:#1d2736;
      border-bottom:1px solid var(--border);
    }
    .spec-list{
      list-style:none;
    }
    .spec-list li{
      display:flex;
      justify-content:space-between;
      gap:14px;
      padding:12px 16px;
      border-bottom:1px solid #eef1f6;
      font-size:14px;
    }
    .spec-list li:last-child{border-bottom:none}
    .spec-list li span:first-child{color:#6a7484}
    .spec-list li span:last-child{font-weight:600;color:#1d2736;text-align:right}

    @media (max-width: 1200px){
      .product-hero-grid{grid-template-columns:390px 1fr}
      .content-grid{grid-template-columns:1fr}
    }

    @media (max-width: 991px){
      .product-hero-grid{grid-template-columns:1fr}
      .mini-feature-row{grid-template-columns:repeat(2,1fr)}
      .trust-strip-inner{grid-template-columns:repeat(2,1fr)}
      .related-grid{grid-template-columns:repeat(2,1fr)}
      .spec-grid{grid-template-columns:1fr}
      .product-title{font-size:34px}
    }

    @media (max-width: 575px){
      .container{width:min(100% - 20px,1320px)}
      .product-title{font-size:28px}
      .buy-panel{flex-direction:column;align-items:stretch}
      .qty-box,.btn{width:100%}
      .contact-row .btn-contact{width:100%}
      .trust-strip-inner,
      .related-grid,
      .mini-feature-row,
      .feature-points,
      .why-grid{
        grid-template-columns:1fr;
      }
      .trust-item{
        border-right:none;
        border-bottom:1px solid var(--border);
      }
      .trust-item:last-child{border-bottom:none}
    }
  </style>
</head>
<body>

  <div class="site-breadcrumb">
    <div class="container">
      <div class="crumbs">
        <a href="#">Home</a>
        <span class="sep">/</span>
        <a href="#">Products</a>
        <span class="sep">/</span>
        <span>Single Product</span>
      </div>
    </div>
  </div>

  <section class="product-hero">
    <div class="container">
      <div class="product-hero-grid">

        <div class="media-card">
          <div class="media-main">
            <div class="top-flags">
              <span class="flag green">In Stock</span>
              <span class="flag lightgreen">Ship within 24Hrs</span>
              <span class="flag red">Best Price</span>
            </div>
            <img id="mainProductImage" src="https://images.unsplash.com/photo-1580910051074-3eb694886505?q=80&w=900&auto=format&fit=crop" alt="Product image">
          </div>

          <div class="thumb-list">
            <div class="thumb active" data-image="https://images.unsplash.com/photo-1580910051074-3eb694886505?q=80&w=900&auto=format&fit=crop">
              <img src="https://images.unsplash.com/photo-1580910051074-3eb694886505?q=80&w=200&auto=format&fit=crop" alt="">
            </div>
            <div class="thumb" data-image="https://images.unsplash.com/photo-1565035010268-a3816f98589a?q=80&w=900&auto=format&fit=crop">
              <img src="https://images.unsplash.com/photo-1565035010268-a3816f98589a?q=80&w=200&auto=format&fit=crop" alt="">
            </div>
            <div class="thumb" data-image="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=900&auto=format&fit=crop">
              <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=200&auto=format&fit=crop" alt="">
            </div>
          </div>

          <div class="mini-feature-row">
            <div class="mini-feature"><i class="fa-solid fa-certificate"></i>ISO Cert.</div>
            <div class="mini-feature"><i class="fa-solid fa-truck-fast"></i>Fast Dispatch</div>
            <div class="mini-feature"><i class="fa-solid fa-shield-halved"></i>Tested</div>
            <div class="mini-feature"><i class="fa-solid fa-circle-check"></i>Genuine</div>
          </div>
        </div>

        <div class="info-wrap">
          <div class="badge-line">
            <span class="badge-pill dark"><i class="fa-solid fa-circle"></i> New</span>
          </div>

          <h1 class="product-title">LG2 Hydroline Hydraulic Oil Level Indicator</h1>

          <div class="meta-line">
            <div class="stars">★★★★★</div>
            <div>4.8/5.0</div>
            <div>1000+ Orders</div>
            <div class="badge-pill stock">In Stock</div>
          </div>

          <div class="tax-box">+ 18.00% GST applicable</div>

          <div class="buy-panel">
            <div class="qty-box">
              <button type="button" id="minusBtn">−</button>
              <input type="number" id="qtyInput" value="1" min="1">
              <button type="button" id="plusBtn">+</button>
            </div>

            <button class="btn btn-cart">
              <i class="fa-solid fa-cart-shopping"></i>
              ADD TO CART
            </button>

            <button class="btn btn-quote">REQUEST QUOTE</button>
          </div>

          <div class="min-order">Min. Order: 1 Piece</div>

          <div class="contact-row">
            <a href="tel:+919999999999" class="btn btn-contact">
              <i class="fa-solid fa-phone"></i>
              +91 84898 81560
            </a>
            <a href="https://wa.me/919999999999" class="btn btn-contact" target="_blank" rel="noopener noreferrer">
              <i class="fa-brands fa-whatsapp"></i>
              Buy on WhatsApp
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="trust-strip">
    <div class="container">
      <div class="trust-strip-inner">
        <div class="trust-item">
          <div class="trust-icon"><i class="fa-regular fa-square-check"></i></div>
          <div>
            <small>Min. Order</small>
            <strong>1 Piece</strong>
          </div>
        </div>
        <div class="trust-item">
          <div class="trust-icon"><i class="fa-solid fa-truck-fast"></i></div>
          <div>
            <small>Delivery</small>
            <strong>3-5 Days</strong>
          </div>
        </div>
        <div class="trust-item">
          <div class="trust-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <div>
            <small>Warranty</small>
            <strong>Mfr. Terms</strong>
          </div>
        </div>
        <div class="trust-item">
          <div class="trust-icon"><i class="fa-solid fa-award"></i></div>
          <div>
            <small>Certification</small>
            <strong>ISO + IBR</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product-main-section">
    <div class="container">
      <div class="content-grid">

        <div>
          <div class="panel">
            <div class="tab-head">
              <button class="tab-btn active" data-tab="description">Description</button>
              <button class="tab-btn" data-tab="features">Features & Applications</button>
              <button class="tab-btn" data-tab="specifications">Specifications</button>
            </div>

            <div class="tab-body">
              <div class="tab-pane active" id="description">
                <h2 class="desc-title">LG2 Hydroline Hydraulic Oil Level Indicator</h2>
                <p class="desc-text">
                  The Hydroline LG2 is a reliable hydraulic oil level indicator designed to monitor and maintain the correct oil level in hydraulic reservoirs, preventing damage to hydraulic pumps and systems caused by low oil conditions.
                </p>
                <p class="desc-text">
                  It is suitable for industrial hydraulic applications where visible monitoring, compact construction, and durable sealing are important. The unit is engineered for dependable use in demanding shop-floor environments.
                </p>
              </div>

              <div class="tab-pane" id="features">
                <div class="feature-points">
                  <div class="feature-box">
                    <strong>Reliable oil monitoring</strong>
                    Tracks oil level clearly for hydraulic tanks and reservoir systems.
                  </div>
                  <div class="feature-box">
                    <strong>Industrial build</strong>
                    Suitable for rugged operating environments and repetitive use.
                  </div>
                  <div class="feature-box">
                    <strong>Compact fitment</strong>
                    Easy to install in space-constrained machine assemblies.
                  </div>
                  <div class="feature-box">
                    <strong>Application coverage</strong>
                    Used in power packs, hydraulic units, fluid control systems, and industrial machinery.
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="specifications">
                <div class="spec-grid">
                  <div class="spec-group">
                    <h4>General</h4>
                    <ul class="spec-list">
                      <li><span>Brand</span><span>Hydroline</span></li>
                      <li><span>Model</span><span>LG2</span></li>
                      <li><span>Type</span><span>Oil Level Indicator</span></li>
                      <li><span>Usage</span><span>Hydraulic Systems</span></li>
                    </ul>
                  </div>

                  <div class="spec-group">
                    <h4>Performance</h4>
                    <ul class="spec-list">
                      <li><span>Pressure</span><span>Vac Test Pressure 10 bar</span></li>
                      <li><span>Switch Option</span><span>Micro switch max 5A - 250 VAC</span></li>
                      <li><span>Temperature</span><span>Up to +85°C</span></li>
                      <li><span>Mounting</span><span>Panel / Tank Fitment</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel related-wrap">
            <div class="section-head">
              <h3>Related Products</h3>
              <span>New</span>
            </div>

            <div class="related-grid">
              <div class="product-card">
                <div class="img">
                  <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=500&auto=format&fit=crop" alt="">
                </div>
                <h4>TIF Hydraulic Filter Tank Immersed</h4>
                <button class="card-btn">View Details</button>
              </div>

              <div class="product-card">
                <div class="img">
                  <img src="https://images.unsplash.com/photo-1565035010268-a3816f98589a?q=80&w=500&auto=format&fit=crop" alt="">
                </div>
                <h4>FSB Hydraulic Tank Breather</h4>
                <button class="card-btn">View Details</button>
              </div>

              <div class="product-card">
                <div class="img">
                  <img src="https://images.unsplash.com/photo-1580910051074-3eb694886505?q=80&w=500&auto=format&fit=crop" alt="">
                </div>
                <h4>CT Hydraulic Inline Check Valve</h4>
                <button class="card-btn">View Details</button>
              </div>

              <div class="product-card">
                <div class="img">
                  <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=500&auto=format&fit=crop" alt="">
                </div>
                <h4>DRV Hydraulic Flow Control Valve</h4>
                <button class="card-btn">View Details</button>
              </div>

              <div class="product-card">
                <div class="img">
                  <img src="https://images.unsplash.com/photo-1565035010268-a3816f98589a?q=80&w=500&auto=format&fit=crop" alt="">
                </div>
                <h4>Nylon Sleeve Gear Coupling</h4>
                <button class="card-btn">View Details</button>
              </div>

              <div class="product-card">
                <div class="img">
                  <img src="https://images.unsplash.com/photo-1580910051074-3eb694886505?q=80&w=500&auto=format&fit=crop" alt="">
                </div>
                <h4>Hydraulic Aluminium Bellhousing</h4>
                <button class="card-btn">View Details</button>
              </div>
            </div>
          </div>
        </div>

        <aside>
          <div class="panel side-card">
            <div class="side-title">Why 1000+ clients trust us</div>
            <div class="why-grid">
              <div class="why-box">
                <strong>55+</strong>
                <span>Years Trust</span>
              </div>
              <div class="why-box">
                <strong>1000+</strong>
                <span>Clients</span>
              </div>
              <div class="why-box">
                <strong>100%</strong>
                <span>Genuine</span>
              </div>
            </div>
          </div>

          <div class="panel side-card">
            <div class="side-title">About this product</div>
            <p class="side-text">
              The Hydroline LG2 is a reliable hydraulic oil level indicator designed to monitor and maintain the correct oil level in hydraulic reservoirs. It helps reduce pump damage caused by low oil levels and supports safer long-term machine operation.
            </p>
          </div>
        </aside>

      </div>
    </div>
  </section>

  <script>
    const minusBtn = document.getElementById('minusBtn');
    const plusBtn = document.getElementById('plusBtn');
    const qtyInput = document.getElementById('qtyInput');

    minusBtn.addEventListener('click', () => {
      let qty = parseInt(qtyInput.value || 1, 10);
      qty = Math.max(1, qty - 1);
      qtyInput.value = qty;
    });

    plusBtn.addEventListener('click', () => {
      let qty = parseInt(qtyInput.value || 1, 10);
      qtyInput.value = qty + 1;
    });

    qtyInput.addEventListener('input', () => {
      if (qtyInput.value < 1 || qtyInput.value === '') qtyInput.value = 1;
    });

    const thumbs = document.querySelectorAll('.thumb');
    const mainImage = document.getElementById('mainProductImage');

    thumbs.forEach(thumb => {
      thumb.addEventListener('click', () => {
        thumbs.forEach(t => t.classList.remove('active'));
        thumb.classList.add('active');
        mainImage.src = thumb.dataset.image;
      });
    });

    const tabButtons = document.querySelectorAll('.tab-btn');
    const panes = document.querySelectorAll('.tab-pane');

    tabButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        tabButtons.forEach(b => b.classList.remove('active'));
        panes.forEach(p => p.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById(btn.dataset.tab).classList.add('active');
      });
    });
  </script>

</body>
</html>
