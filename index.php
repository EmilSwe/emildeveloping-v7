<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emil Developing</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <meta property="og:site_name" content="Emil Developing">
    <meta property="og:url" content="https://emildeveloping.se">
    <meta property="og:image" content="https://emildeveloping.se/assets/img/logo.png">
    <meta name="description" content="IT Support | Webbutveckling | IT Konsult">
    <meta name="og:title" property="og:title" content="Emil Developing">
    <meta name="og:description" property="og:description" content="IT Support | Webbutveckling | IT Konsult">
    <meta property="og:type" content="website"/>
</head>
<body>

    <!-- Mobile -->
    <div class="mobile-nav">
        <img src="assets/img/logo.png" alt="Emil Developing" class="mobile-logo">
        <button type="button" id="nav-btn" class="main-btn"><i class="fas fa-bars"></i></button>
    </div>

    <!-- Computer -->
    <nav class="nav" id="nav">
        <img src="assets/img/logo.png" alt="Emil Developing" class="logo">
        <ul class="mobile-ul" id="mobile-ul">
            <a href="index.php"><li>Hem</li></a>
            <a href="case.php"><li>Case</li></a>
            <a href="tjanster.php"><li>Tjänster</li></a>
            <a href="contact.php"><li>Kontakt</li></a>
        </ul>
    </nav>

    <section class="home" id="home">
        <div class="info">
            <div class="title">Emil <b>Developing</b></div>
            <div class="text">Trött på allt krångel med tekniken? Eller behöver du eller din verksamhet en ny hemsida? Låt Emil Developing sköta det!</div>
            <div class="button-group">
                <a href="#about"><button type="button" class="main-btn">Läs mer</button></a>
                <a href="contact.php"><button type="button" class="main-btn secondary">Kontakt</button></a>
            </div>
        </div>

        <div class="social">
            <a href="https://www.facebook.com/emildeveloping"><i class="fab fa-facebook-square"></i></a>
            <a href="https://discord.gg/Z3wd2zj"><i class="fab fa-discord"></i></a>
            <a href="https://github.com/EmilSwe"><i class="fab fa-github-square"></i></a>
            <a href="https://www.instagram.com/emildeveloping/"><i class="fab fa-instagram"></i></a>
        </div>
    </section>

    <section class="sponsors" id="sponsors">
       <img src="assets/img/fivemsverige.png" alt="FiveM Sverige" class="fivemsverige">
       <img src="assets/img/ipnordic.png" alt="IP-Nordic" class="ipnordic">
    </section>

    <section class="about" id="about">
        <img src="assets/img/emil.jpg" alt="Emil" class="emil">

        <div class="text">
            Emil Developing grundades sent 2018 av Emil Holmstedt, bosatt i Stockholm.
            <br><br>
            Tanken med Emil Developing var att bygga en portfolio hemsida att visa upp för framtida arbetsgivare. Men det växte till något större.
            <br>
            Det startade med ett discord community där man kunde hjälpas åt med programmering, framförallt webbutveckling. Men detta växte till en verksamhet som säljer handgjorda webbplatser och andra webbsystem.
            <br>
            <br>
            Idag erbjuder Emil Developing flera olika IT tjänster som bland annat webbutveckling, teknisk hårdvare-support, företagslösningar och andra IT lösningar.
            <br>
            Emil Developing har idag över <a href="https://se.trustpilot.com/review/emildeveloping.com" target="_blanK">30+ nöjda kunder</a> och flera för varje dag.
        </div>
    </section>

    <footer class="footer" id="footer">
        <div class="info-wrapper">
            <div class="box">
                <div class="title">Kontakt</div>
                <ul>
                    <li><i class="fas fa-at"></i>&nbsp;&nbsp;emil@emildeveloping.tech</li>
                    <li><i class="fas fa-phone"></i>&nbsp;&nbsp;08 121 52 718</li>
                    <li><a href="https://discord.gg/Z3wd2zj" target="_blank"><i class="fab fa-discord"></i>&nbsp;&nbsp;https://discord.gg/Z3wd2zj</a></li>
                </ul>
            </div>

            <div class="box">
                <div class="title">Om Emil Developing</div>
                <div class="text">Emil Developing grundades i slutet av 2018 av då 16 åriga Emil Holmstedt från Stockholm.<br>Emil Developing erbjuder tjänster som webbutveckling, tekniksupport, företagslösningar och mycket mer.</div>
            </div>

            <div class="box">
                <div class="title">Socialt</div>
                <ul>
                    <li><a href="https://discord.gg/Z3wd2zj" class="social" target="_blank"><i class="fab fa-discord"></i>&nbsp;&nbsp;Discord</a></li>
                    <li><a href="https://github.com/EmilSwe" class="social" target="_blank"><i class="fab fa-github-square"></i>&nbsp;&nbsp;Github</a></li>
                    <li><a href="https://www.facebook.com/emildeveloping" class="social" target="_blank"><i class="fab fa-facebook-square"></i>&nbsp;&nbsp;Facebook</a></li>
                    <li><a href="https://www.instagram.com/emildeveloping/" class="social" target="_blank"><i class="fab fa-instagram"></i>&nbsp;&nbsp;Instagram</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="footer-end">
            <div class="trustpilot-widget" data-locale="sv-SE" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="5cdbbb8a334459000156b9b6" data-style-height="24px" data-style-width="100%" data-theme="dark">
                <a href="https://se.trustpilot.com/review/emildeveloping.com" target="_blank" rel="noopener">Trustpilot</a>
            </div>
            
            <a class="villkor" href="https://emildeveloping.tech/Vid_kop_av_Emil_Developing_1.pdf">Villkor vid köp</a>
            <div class="copyright">&copy; 2018-2023 | Emil Developing</div>
        </div>
    </footer>
</body>
</html>