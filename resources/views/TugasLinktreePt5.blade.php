<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@Mykonosofficial</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&family=DM+Sans:wght@400;500&display=swap"
        rel="stylesheet" />
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: linear-gradient(160deg, #3a4a5c, #2c3a4a);
            min-height: 100vh;
            color: #f0ece4;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 48px 20px 80px;
        }

        .wrap {
            width: 100%;
            max-width: 480px;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #1a2535;
            border: 2px solid #c9a96e;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Cormorant Garamond', serif;
            font-size: 11px;
            letter-spacing: .18em;
            text-align: center;
            line-height: 1.4;
            box-shadow: 0 4px 24px rgba(201, 169, 110, .18);
            animation: fadeDown .6s ease both;
            margin-bottom: 14px
        }

        h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 22px;
            letter-spacing: .04em;
            margin-bottom: 36px;
            animation: fadeDown .6s .1s ease both
        }

        .links {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 10px
        }

        a {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 20px 14px 16px;
            border-radius: 50px;
            background: rgba(255, 255, 255, .08);
            border: 1px solid rgba(255, 255, 255, .18);
            color: #f0ece4;
            text-decoration: none;
            backdrop-filter: blur(6px);
            transition: background .22s, transform .18s, box-shadow .22s;
            animation: fadeUp .5s ease both
        }

        a:hover {
            background: rgba(255, 255, 255, .15);
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(0, 0, 0, .2)
        }

        .ico {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            flex-shrink: 0;
            background: rgba(255, 255, 255, .1);
            border: 1px solid rgba(255, 255, 255, .15);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden
        }

        .ico svg {
            width: 22px;
            height: 22px;
            fill: white
        }

        .lbl {
            flex: 1;
            font-size: 14px;
            font-weight: 500;
            text-align: center
        }

        .dot {
            color: rgba(240, 236, 228, .5);
            font-size: 18px
        }

        footer {
            margin-top: 36px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            animation: fadeUp .5s .7s ease both
        }

        .flinks {
            font-size: 11px;
            color: rgba(240, 236, 228, .5);
            display: flex;
            gap: 10px
        }

        .flinks a {
            color: inherit;
            text-decoration: none;
            background: none;
            border: none;
            padding: 0;
            animation: none;
            backdrop-filter: none
        }

        .badge {
            margin-top: 10px;
            background: rgba(255, 255, 255, .9);
            color: #333;
            border-radius: 50px;
            padding: 8px 18px;
            font-size: 13px;
            font-weight: 500
        }

        .join {
            font-size: 12px;
            color: rgba(240, 236, 228, .5);
            margin-top: 4px
        }

        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-16px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="logo">MY<br>KO<br>NOS</div>
        <h1>@Mykonosofficial</h1>
        <div class="links" id="links"></div>
        <footer>
            <div class="flinks">
                <a href="#">Cookie Preferences</a> · <a href="#">Report</a> · <a href="#">Privacy</a>
            </div>
            <div class="badge">✦ linktr.ee/you ✕</div>
            <div class="join">Join Mykonosofficial on Linktree today</div>
        </footer>
    </div>

    <script>
        // SVG icons
        const ic = {
            tiktok: `<svg viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 1 1-2.09-2.79V9.01a6.34 6.34 0 1 0 5.54 6.29V8.74a8.18 8.18 0 0 0 4.78 1.52V6.81a4.84 4.84 0 0 1-1.01-.12z"/></svg>`,
            shop: `<svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" fill="none" stroke="white" stroke-width="2"/><path d="M8 7V5a4 4 0 1 1 8 0v2" fill="none" stroke="white" stroke-width="2"/></svg>`,
            wa: `<svg viewBox="0 0 24 24"><path d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15s-.77.97-.94 1.16c-.17.2-.35.22-.64.07-.3-.15-1.26-.46-2.39-1.47-.88-.79-1.48-1.76-1.65-2.06-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.61-.92-2.21-.24-.58-.49-.5-.67-.51-.17-.01-.37-.01-.57-.01s-.52.07-.79.37c-.27.3-1.04 1.02-1.04 2.48s1.06 2.88 1.21 3.07c.15.2 2.1 3.2 5.08 4.49.71.31 1.26.49 1.69.63.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2.01-1.41.25-.69.25-1.29.17-1.41-.07-.12-.27-.2-.57-.35zm-5.42 7.4h-.004a9.87 9.87 0 0 1-5.03-1.38l-.36-.21-3.74.98 1-3.65-.24-.37A9.86 9.86 0 0 1 2.16 11.9C2.16 6.44 6.6 2 12.05 2c2.64 0 5.12 1.03 6.99 2.9a9.83 9.83 0 0 1 2.89 6.99c-.003 5.45-4.44 9.89-9.88 9.89zm8.41-18.3A11.82 11.82 0 0 0 12.05 0C5.5 0 .16 5.34.16 11.89c0 2.1.55 4.14 1.59 5.95L.06 24l6.3-1.65a11.88 11.88 0 0 0 5.68 1.45h.005c6.55 0 11.89-5.34 11.89-11.89a11.82 11.82 0 0 0-3.48-8.41z"/></svg>`,
            blibli: `<svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="18" rx="3" fill="none" stroke="white" stroke-width="2"/><path d="M7 8h4a2 2 0 0 1 0 4H7zm0 4h5a2 2 0 0 1 0 4H7z" fill="white"/></svg>`,
        };

        const links = [
            { label: "Tiktok Official Store", icon: ic.tiktok, href: "#" },
            { label: "Shopee Official Store", icon: ic.shop, href: "#" },
            { label: "Tokopedia Official Store", icon: ic.shop, href: "#" },
            { label: "Sociolla", icon: null, href: "#", sociolla: true },
            { label: "Bli Bli Official Store", icon: ic.blibli, href: "#" },
            { label: "International purchases & Inquiries (Whatsapp)", icon: ic.wa, href: "#" },
            { label: "Customer Service Admin (Whatsapp)", icon: ic.wa, href: "#" },
            { label: "Reseller Admin (Whatsapp)", icon: ic.wa, href: "#" },
        ];

        const container = document.getElementById("links");
        links.forEach(({ label, icon, href, sociolla }, i) => {
            const icoHTML = sociolla
                ? `<svg viewBox="0 0 60 20" style="width:48px"><text y="15" font-family="Georgia,serif" font-size="13" fill="#e8447a" font-weight="bold">sociolla</text></svg>`
                : icon;

            const icoStyle = sociolla ? "background:#fff;border-color:#eee" : "";

            container.innerHTML += `
    <a href="${href}" style="animation-delay:${0.15 + i * 0.07}s">
      <div class="ico" style="${icoStyle}">${icoHTML}</div>
      <span class="lbl">${label}</span>
      <span class="dot">⋮</span>
    </a>`;
        });
    </script>
</body>

</html>
