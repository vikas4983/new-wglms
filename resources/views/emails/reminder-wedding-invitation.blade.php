<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Reminder</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --red: #8b0000;
            --mehroon: #5a0f1b;
            --gold: #d4af37;
            --bg: #fff6f4;
            --text: #3a1a1a;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at top, #fff0eb, #fbe2dd);
            color: var(--text);
        }

        .invitation-page {
            min-height: 100svh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .invitation-card {
            background: linear-gradient(180deg, #fffefe, #fff7f5);
            max-width: 820px;
            width: 100%;
            padding: 38px 32px;
            border-radius: 26px;
            box-shadow: 0 30px 70px rgba(90, 15, 27, 0.25);
            border: 3px solid rgba(212, 175, 55, 0.35);
            position: relative;
        }

        .invitation-card::before {
            content: "❁ ॐ ❁";
            position: absolute;
            top: -18px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, var(--red), var(--mehroon));
            color: var(--gold);
            padding: 6px 22px;
            border-radius: 22px;
            font-size: 18px;
            letter-spacing: 2px;
        }

        .reminder-badge {
            background: linear-gradient(135deg, var(--red), var(--mehroon));
            color: var(--gold);
            padding: 8px 24px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            width: fit-content;
            margin: 0 auto 18px;
        }

        .header {
            text-align: center;
        }

        .header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            color: var(--mehroon);
            margin-bottom: 4px;
        }

        .header h2 {
            font-size: 16px;
            color: #7a2a2a;
            margin: 0;
        }

        .couple-names {
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 42px;
            color: var(--mehroon);
            margin: 18px 0;
        }

        .couple-names span {
            display: block;
            font-size: 28px;
            color: var(--gold);
        }

        .countdown-wrapper {
            text-align: center;
            margin: 20px 0 30px;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .countdown div {
            background: #fff;
            padding: 10px 14px;
            border-radius: 12px;
            min-width: 70px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .countdown span {
            display: block;
            font-size: 20px;
            font-weight: 700;
            color: var(--red);
        }

        .countdown small {
            font-size: 11px;
        }

        .section {
            background: linear-gradient(135deg, #fff4f2, #fff1ef);
            border-left: 6px solid var(--mehroon);
            padding: 22px 26px;
            border-radius: 18px;
            margin: 28px 0;
        }

        .section h3 {
            font-family: 'Playfair Display', serif;
            text-align: center;
            color: var(--mehroon);
            margin-bottom: 12px;
        }

        .section p {
            line-height: 1.7;
            margin: 10px 0;
            font-size: 14px;
        }

        .center-text {
            text-align: center;
        }

        .highlight-names {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            color: var(--mehroon);
            display: block;
            margin: 8px 0;
        }

        .cta-wrapper {
            text-align: center;
            margin: 32px 0;
        }

        .wedding-btn {
            background: linear-gradient(135deg, var(--red), var(--mehroon));
            color: #fff;
            padding: 14px 34px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 16px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 16px;
        }

        .footer strong {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            color: var(--mehroon);
        }

        @media (max-width: 600px) {
            .couple-names {
                font-size: 32px;
            }

            .highlight-names {
                font-size: 22px;
            }

            .wedding-btn {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>

    <div class="invitation-page">
        <div class="invitation-card">

            <div class="reminder-badge">⏰ Wedding Reminder</div>

            <div class="header">
                <h1>Dear {{ $name ?? 'Hi' }},</h1>
                <h2>We can’t wait to celebrate with you ❤️</h2>
            </div>

            <div class="couple-names">
                Ashish <span>&</span> Kalyani
            </div>

            <div class="countdown-wrapper">
                <div id="countdown" class="countdown"></div>
            </div>

            <div class="section">
                <h3>💐 Wedding Details</h3>
                <p><strong>Date:</strong> February 05, 2026</p>
                <p><strong>Time:</strong> 7:00 PM</p>
                <p><strong>Venue:</strong> Jai Celebration, Tilwara Road, Jabalpur</p>
            </div>

            <div class="section">
                <h3>💖 A Message from Our Hearts</h3>

                <p><strong>Dear Family & Friends,</strong></p>

                <p>
                    With hearts full of love and gratitude,
                    we invite you to be part of the most beautiful chapter of our lives.
                </p>
                <h3>🌿 A Celebration with a Purpose</h3>

                <p>
                    🩸 Promote Blood Donation<br>
                    🌱 Plant a Tree<br>
                    🍽 Stop Food Wastage<br>
                    💧 Save Water<br>
                    ♻ Say No to Single-Use Plastic<br>
                    🎆 No Crackers, No Pollution<br>
                    🐾 No Animal Abuse<br>
                    💚 No Dowry
                </p>

                <p>
                    Let’s celebrate love responsibly and joyfully 🌍<br>
                    <strong>Your presence is the greatest gift we could ask for.</strong>
                </p>


            </div>

            <div class="cta-wrapper">
                <a href="{{ route('/') }}" class="wedding-btn">View Full Invitation 💌</a>
            </div>

            <div class="footer">
                With love,<br>
                <strong>Ashish & Kalyani</strong>
            </div>

        </div>
    </div>

    <script>
        const weddingDate = new Date(2026, 1, 5, 19, 0, 0).getTime();

        setInterval(() => {
            const now = new Date().getTime();
            const diff = weddingDate - now;

            if (diff <= 0) {
                document.getElementById("countdown").innerHTML = "🎉 The wedding has started!";
                return;
            }

            const d = Math.floor(diff / (1000 * 60 * 60 * 24));
            const h = Math.floor((diff / (1000 * 60 * 60)) % 24);
            const m = Math.floor((diff / (1000 * 60)) % 60);
            const s = Math.floor((diff / 1000) % 60);

            document.getElementById("countdown").innerHTML = `
            <div><span>${d}</span><small>Days</small></div>
            <div><span>${h}</span><small>Hours</small></div>
            <div><span>${m}</span><small>Minutes</small></div>
            <div><span>${s}</span><small>Seconds</small></div>
        `;
        }, 1000);
    </script>

</body>

</html>
