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

    <section class="top" id="top">
        <div class="title">Tjänster</div>
    </section>

    <section class="webbutveckling" id="webbutveckling">
        <div class="wrapper">
            <div class="box-left">
                <div class="title">Kvalité</div>
                <div class="text">Emil Developing's webbprojekt håller väldigt hög standard. Jag ser alltid till att kvaliten på projekten är av hög kvalité. Alla webbsidor är responsiva och när det kommer till backend så är säkerheten prio ett.</div>
            </div>

            <div class="box-right">
                <div class="title">Kunden har alltid rätt</div>
                <div class="text">Hos Emil Developing så är det kunden som alltid har rätt! Jag lyssnar på mina kunder och tar åt mig av feedbacken.</div>
            </div>

            <div class="box-left">
                <div class="title">Responsiv design</div>
                <div class="text">Alla webbplatser som skapas är alltid responsiva! Därför behöver du inte oroa dig för att behöva skapa en mobil app tillexempel, eftersom hemsidan kommer att vara kompitabel med alla olika typer av enheter!</div>
            </div>

            <div class="box-right">
                <div class="title">Önskemål</div>
                <div class="text">När jag planerar hur din webbplats ska fungera, och se ut, så lyssnar jag alltid på kundens önskemål och utformar min offert utifrån detta! Jag brukar även skapa skisser om hur jag tänker att det kommer se ut på ett ungefär, sedan får kunden tycka till om detta!</div>
            </div>

            <div class="faq-wrapper">
                <div class="title">Vanliga frågor</div>

                <div class="faq-box">
                    <div class="question-box" id="question-box-1">Retur & ångerrätt</div>

                    <div class="answer-box" id="answer-box-1">När du väl har mottagit filerna och betalat fakturan, så finns det ingen ångerrätt längre. Detta beror på att även fast jag ger tillbaka pengarna, så kanske du fortsätter använda mitt arbete.<br>Skulle det dock vara så att något inte fungerar, eller att något inte är som det beskrivs, så har Emil Developing såklart alltid rätten att återgärda problemet!<br>Innan den färdiga produkten levereras så har du alltid rätt att påverka slutresultatet, jag lyssnar alltid på kundens önskemål!</div>
                </div>

                <div class="faq-box">
                    <div class="question-box" id="question-box-2">Leveranstid</div>

                    <div class="answer-box" id="answer-box-2">Beroende på projektets bredd, och beroende på hur mycket jag har att göra så varierar leveranstiden av färdiga produkten ganska mycket.<br>Vid kontakt så kan jag dock såklart alltid ge en uppskattad tidsram.</div>
                </div>

                <div class="text">Har du fler frågor? <a href="contact.php" target="_blank">Kontakta mig</a>!</div>
            </div>
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