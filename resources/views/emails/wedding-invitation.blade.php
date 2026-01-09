{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ashish & Priya – Wedding Invitation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<style>
:root{
    --primary:#e91e63;
    --dark:#333;
    --muted:#777;
    --bg1:#fff1f6;
    --bg2:#ffffff;
}

*{
    box-sizing:border-box;
}

body{
    margin:0;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:radial-gradient(circle at top,var(--bg1),var(--bg2));
    font-family:'Poppins',sans-serif;
}

.invite-card{
    width:100%;
    max-width:420px;
    background:#fff;
    padding:45px 30px;
    text-align:center;
    border-radius:24px;
    box-shadow:
        0 20px 40px rgba(0,0,0,.15),
        inset 0 0 0 2px rgba(233,30,99,.15);
    position:relative;
    overflow:hidden;
}

/* soft decorative glow */
.invite-card::before{
    content:"";
    position:absolute;
    width:160px;
    height:160px;
    background:rgba(233,30,99,.12);
    border-radius:50%;
    top:-60px;
    right:-60px;
}

.title{
    font-family:'Playfair Display',serif;
    font-size:30px;
    color:var(--primary);
    font-weight:700;
    margin-bottom:6px;
}

.subtitle{
    font-size:14px;
    color:var(--muted);
    margin-bottom:30px;
}

.names{
    font-family:'Playfair Display',serif;
    font-size:42px;
    font-weight:700;
    color:var(--dark);
    line-height:1.2;
}

.names span{
    display:block;
    font-size:30px;
    margin:10px 0;
}

.heart{
    font-size:30px;
    color:var(--primary);
    margin:20px 0;
    animation:pulse 1.6s infinite;
}

@keyframes pulse{
    0%{transform:scale(1)}
    50%{transform:scale(1.15)}
    100%{transform:scale(1)}
}

.message{
    font-size:15px;
    color:#555;
    margin:20px 0 35px;
}

.btn{
    display:inline-block;
    padding:15px 42px;
    border-radius:40px;
    background:linear-gradient(135deg,#ff2e7a,#e91e63);
    color:#fff;
    font-size:16px;
    font-weight:500;
    text-decoration:none;
    transition:.35s ease;
    box-shadow:0 12px 30px rgba(233,30,99,.45);
}

.btn:hover{
    transform:translateY(-3px);
    box-shadow:0 18px 40px rgba(233,30,99,.6);
}

.footer{
    margin-top:30px;
    font-size:13px;
    color:#999;
}

/* Mobile */
@media(max-width:480px){
    .names{font-size:34px}
    .names span{font-size:26px}
}
</style>
</head>

<body>

<div class="invite-card">

    <div class="title">Wedding Invitation</div>
    <div class="subtitle">Together with their families</div>

    <div class="names">
        Ashish
        <span>&</span>
        Priya
    </div>

    <div class="heart">❤️</div>

    <div class="message">
        We invite you to celebrate our special day
    </div>

    <!-- 🔴 CTA BUTTON -->
    <a href="{{route('view.webpage')}}" class="btn">
        View Wedding Details
    </a>

    <div class="footer">
        With love & blessings 💐
    </div>

</div>

</body>
</html> --}}


{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wedding Invitation</title>

<style>
:root {
    --primary: #2d6a4f;
    --secondary: #40916c;
    --bg: #f1f8f4;
    --card: #ffffff;
    --text: #333;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: "Georgia", serif;
    background: linear-gradient(135deg, #edf7f2, #e6f4ea);
    color: var(--text);
}

/* Page Wrapper */
.invitation-page {
    min-height: 100svh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

/* Card */
.invitation-card {
    background: var(--card);
    max-width: 760px;
    width: 100%;
    padding: 32px 28px;
    border-radius: 18px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.12);
}

/* Header */
.header {
    text-align: center;
    margin-bottom: 20px;
}

.header h1 {
    font-size: 30px;
    color: var(--primary);
    margin-bottom: 6px;
}

.header h2 {
    font-size: 22px;
    color: #555;
    font-weight: normal;
}

/* Divider */
.divider {
    height: 2px;
    background: linear-gradient(to right, transparent, var(--secondary), transparent);
    margin: 24px 0;
}

/* Content */
p {
    font-size: 15px;
    line-height: 1.7;
    margin: 14px 0;
}

.highlight {
    background: var(--bg);
    padding: 18px;
    border-radius: 12px;
    margin: 20px 0;
}

.details h3 {
    color: var(--primary);
    margin-bottom: 10px;
    font-size: 18px;
}

.details p {
    margin: 6px 0;
}

/* Values List */
.values {
    margin: 18px 0;
    padding-left: 0;
}

.values li {
    list-style: none;
    padding: 8px 0;
    font-size: 15px;
}

/* Footer */
.footer {
    margin-top: 30px;
    text-align: center;
    font-size: 14px;
}

.footer strong {
    color: var(--primary);
}

/* Contact */
.contact {
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px dashed #ccc;
    font-size: 13px;
    text-align: center;
}

.socials span {
    margin: 0 6px;
    font-weight: bold;
    color: var(--secondary);
}

/* Mobile */
@media (max-width: 600px) {
    .invitation-card {
        padding: 26px 20px;
    }

    .header h1 {
        font-size: 26px;
    }

    .header h2 {
        font-size: 20px;
    }
}
</style>
</head>

<body>

<div class="invitation-page">
<div class="invitation-card">

    <div class="header">
        <h1>Dear NAME,</h1>
        <h2>You're warmly invited 💚</h2>
    </div>

    <p>
        With folded hands and joyful hearts, we are delighted to invite you to celebrate the beginning of our lifelong journey together.
    </p>

    <p>
        Marriage, for us, is not just about rituals—it is about togetherness, responsibility, respect, and giving back to society.
        As we step into this new chapter, we wish to celebrate love not only for each other, but also for nature, humanity, and future generations.
    </p>

    <div class="divider"></div>

    <div class="highlight details">
        <h3>💐 Wedding Details</h3>
        <p><strong>📅 Date:</strong> February 05, 2026</p>
        <p><strong>🕰 Time:</strong> 7:00 PM</p>
        <p><strong>📍 Venue:</strong> Jai Celebration, Beside Gyan Ganga College,<br>
           Tilwara Road, Bargi Hills, Jabalpur</p>
    </div>

    <div class="highlight">
        <h3>🌱 Our Humble Request</h3>
        <p>
            Your presence and blessings are the most precious gifts for us.
            We kindly request you to avoid material gifts.
        </p>
        <p>
            🌳 <strong>Instead of gifts, plant a tree — let our love grow into a greener tomorrow.</strong>
        </p>
    </div>

    <h3>♻️ Our Wedding, Our Values</h3>
    <ul class="values">
        <li>💧 Save Water – Every drop matters</li>
        <li>🌍 Protect the Environment</li>
        <li>🚫 No Single-Use Plastic</li>
        <li>🕊️ No Crackers</li>
        <li>🤝 No Dowry</li>
        <li>🌿 Eco-Friendly Celebration</li>
    </ul>

    <p>
        Your love, blessings, and support mean everything to us.
        We look forward to celebrating this beautiful day together—responsibly, joyfully, and meaningfully.
    </p>

    <div class="footer">
        With love and gratitude,<br>
        <strong>Ashish & Partner’s Name</strong> 💚🌿
    </div>

    <div class="contact">
        <p><strong>Ashish Patel</strong> | Software Developer</p>
        <p>Email: sdssd@gmail.com | Phone: +91-9945435702</p>
        <div class="socials">
            <span>Facebook</span> ·
            <span>Twitter</span> ·
            <span>LinkedIn</span> ·
            <span>Instagram</span>
        </div>
    </div>

</div>
</div>

</body>
</html> --}}




















{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wedding Invitation</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500&display=swap');

:root {
    --primary: #1b5e3c;
    --secondary: #52b788;
    --accent: #95d5b2;
    --bg: #f0f7f3;
    --card: #ffffff;
    --text: #333;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    background: radial-gradient(circle at top, #edf8f2, #e3f1ea);
    font-family: 'Poppins', sans-serif;
    color: var(--text);
}

/* Page */
.invitation-page {
    min-height: 100svh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

/* Main Card */
.invitation-card {
    background: var(--card);
    max-width: 820px;
    width: 100%;
    padding: 36px 32px;
    border-radius: 24px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.15);
    position: relative;
    animation: fadeUp 0.9s ease;
}

/* Decorative top */
.invitation-card::before {
    content: "💚🌿💚";
    position: absolute;
    top: -14px;
    left: 50%;
    transform: translateX(-50%);
    background: white;
    padding: 4px 14px;
    border-radius: 20px;
    font-size: 18px;
}

/* Header */
.header {
    text-align: center;
    margin-bottom: 24px;
}

.header h1 {
    font-family: 'Playfair Display', serif;
    font-size: 34px;
    color: var(--primary);
    margin-bottom: 6px;
}

.header h2 {
    font-size: 18px;
    font-weight: 400;
    color: #555;
}

/* Divider */
.divider {
    width: 120px;
    height: 4px;
    margin: 22px auto;
    background: linear-gradient(to right, transparent, var(--secondary), transparent);
    border-radius: 4px;
}

/* Paragraphs */
p {
    font-size: 15px;
    line-height: 1.75;
    margin: 14px 0;
    text-align: center;
}

/* Section Cards */
.section {
    background: linear-gradient(135deg, #f6fbf8, #eef7f2);
    border-left: 6px solid var(--secondary);
    padding: 22px 24px;
    border-radius: 16px;
    margin: 28px 0;
}

.section h3 {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    color: var(--primary);
    margin-bottom: 12px;
    text-align: center;
}

/* Wedding details */
.details p {
    text-align: left;
    margin: 6px 0;
    font-size: 14px;
}

/* Values */
.values {
    padding-left: 0;
    margin: 10px 0 0;
}

.values li {
    list-style: none;
    padding: 8px 0;
    font-size: 14px;
}

/* Closing */
.footer {
    margin-top: 34px;
    text-align: center;
    font-size: 15px;
}

.footer strong {
    font-family: 'Playfair Display', serif;
    font-size: 18px;
    color: var(--primary);
}

/* Contact */
.contact {
    margin-top: 26px;
    padding-top: 18px;
    border-top: 1px dashed #ccc;
    text-align: center;
    font-size: 13px;
}

.socials span {
    margin: 0 8px;
    color: var(--secondary);
    font-weight: 500;
}

/* Animations */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Mobile */
@media (max-width: 600px) {
    .invitation-card {
        padding: 28px 20px;
    }

    .header h1 {
        font-size: 28px;
    }

    p {
        font-size: 14px;
    }
}
</style>
</head>

<body>

<div class="invitation-page">
<div class="invitation-card">

    <div class="header">
        <h1>Dear NAME,</h1>
        <h2>You’re warmly invited 💚</h2>
    </div>

    <div class="divider"></div>

    <p>
        With folded hands and joyful hearts, we are delighted to invite you to celebrate
        the beginning of our lifelong journey together.
    </p>

    <p>
        Marriage, for us, is not just about rituals—it is about togetherness, responsibility,
        respect, and giving back to society. As we step into this new chapter, we wish to
        celebrate love not only for each other, but also for nature, humanity, and future generations.
    </p>

    <div class="section details">
        <h3>💐 Wedding Details</h3>
        <p><strong>📅 Date:</strong> February 05, 2026</p>
        <p><strong>🕰 Time:</strong> 7:00 PM</p>
        <p><strong>📍 Venue:</strong><br>
            Jai Celebration, Beside Gyan Ganga College,<br>
            Tilwara Road, Bargi Hills, Jabalpur
        </p>
    </div>

    <div class="section">
        <h3>🌱 Our Humble Request</h3>
        <p>
            Your presence and blessings are the most precious gifts for us.
            We kindly request you to avoid material gifts.
        </p>
        <p>
            🌳 <strong>Instead of gifts, plant a tree — let our love grow into a greener tomorrow.</strong>
        </p>
    </div>

    <div class="section">
        <h3>♻️ Our Wedding, Our Values</h3>
        <ul class="values">
            <li>💧 Save Water – Every drop matters</li>
            <li>🌍 Protect the Environment</li>
            <li>🚫 No Single-Use Plastic</li>
            <li>🕊️ No Crackers</li>
            <li>🤝 No Dowry</li>
            <li>🌿 Eco-Friendly Celebration</li>
        </ul>
    </div>

    <p>
        Your love, blessings, and support mean everything to us.
        We look forward to celebrating this beautiful day together—
        responsibly, joyfully, and meaningfully.
    </p>

    <div class="footer">
        With love and gratitude,<br>
        <strong>Ashish & Partner’s Name</strong> 💚🌿
    </div>

    <div class="contact">
        <p><strong>Ashish Patel</strong> | Software Developer</p>
        <p>Email: sdssd@gmail.com | Phone: +91-9945435702</p>
        <div class="socials">
            <span>Facebook</span> ·
            <span>Twitter</span> ·
            <span>LinkedIn</span> ·
            <span>Instagram</span>
        </div>
    </div>

</div>
</div>

</body>
</html> --}}











<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wedding Invitation</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500&display=swap');

:root {
    --red: #8b0000;
    --mehroon: #5a0f1b;
    --green: #2d6a4f;
    --gold: #d4af37;
    --bg: #fff6f4;
    --card: #ffffff;
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

/* Page wrapper */
.invitation-page {
    min-height: 100svh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

/* Main card */
.invitation-card {
    background: linear-gradient(180deg, #fffefe, #fff7f5);
    max-width: 820px;
    width: 100%;
    padding: 38px 32px;
    border-radius: 26px;
    box-shadow: 0 30px 70px rgba(90, 15, 27, 0.25);
    position: relative;
    border: 3px solid rgba(212, 175, 55, 0.35);
}

/* Top mandala */
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

/* Header */
.header {
    text-align: center;
    margin-bottom: 26px;
}

.header h1 {
    font-family: 'Playfair Display', serif;
    font-size: 36px;
    color: var(--mehroon);
    margin-bottom: 6px;
}

.header h2 {
    font-size: 18px;
    font-weight: 400;
    color: #7a2a2a;
}

/* Divider */
.divider {
    width: 140px;
    height: 4px;
    margin: 26px auto;
    background: linear-gradient(to right, transparent, var(--gold), transparent);
    border-radius: 6px;
}

/* Paragraphs */
p {
    font-size: 15px;
    line-height: 1.8;
    margin: 14px 0;
    text-align: center;
}

/* Sections */
.section {
    background: linear-gradient(135deg, #fff4f2, #fff1ef);
    border-left: 6px solid var(--mehroon);
    padding: 22px 26px;
    border-radius: 18px;
    margin: 30px 0;
    box-shadow: inset 0 0 0 1px rgba(212, 175, 55, 0.2);
}

.section h3 {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    color: var(--mehroon);
    margin-bottom: 12px;
    text-align: center;
}

/* Details */
.details p {
    text-align: left;
    font-size: 14px;
    margin: 8px 0;
}

/* Highlight lines */
.highlight-green {
    color: var(--green);
    font-weight: 600;
}

.highlight-red {
    color: var(--mehroon);
    font-weight: 600;
}

/* CTA Button */
.cta-wrapper {
    text-align: center;
    margin: 32px 0 10px;
}

.wedding-btn {
    display: inline-block;
    padding: 14px 34px;
    border-radius: 30px;
    background: linear-gradient(135deg, var(--red), var(--mehroon));
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
    box-shadow: 0 10px 25px rgba(90, 15, 27, 0.4);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.wedding-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(90, 15, 27, 0.55);
}

/* Footer */
.footer {
    margin-top: 34px;
    text-align: center;
    font-size: 16px;
}

.footer strong {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    color: var(--mehroon);
}

/* Mobile */
@media (max-width: 600px) {
    .invitation-card {
        padding: 30px 20px;
    }

    .header h1 {
        font-size: 30px;
    }

    .section h3 {
        font-size: 20px;
    }

    .wedding-btn {
        width: 100%;
        padding: 14px;
    }
}
</style>
</head>

<body>

<div class="invitation-page">
<div class="invitation-card">

    <div class="header">
        <h1>{{ $name ?? 'Hi' }},</h1>
        <h2>You’re cordially invited ❤️</h2>
    </div>

    <div class="divider"></div>

    <p>
        With folded hands and joyful hearts, we are delighted to invite you
        to celebrate the sacred union that marks the beginning of our
        lifelong journey together.
    </p>

    <p>
        Marriage, for us, is not just about rituals—it is about togetherness,
        responsibility, respect, and giving back to society.
    </p>

    <div class="section details">
        <h3>💐 Wedding Details</h3>
        <p><strong>📅 Date:</strong> February 05, 2026</p>
        <p><strong>🕰 Time:</strong> 7:00 PM</p>
        <p><strong>📍 Venue:</strong><br>
            Jai Celebration, Beside Gyan Ganga College,<br>
            Tilwara Road, Bargi Hills, Jabalpur
        </p>
    </div>

    <div class="section">
        <h3>🌿 Our Humble Request</h3>
        <p class="highlight-green">
            🌳 Instead of gifts, planting a tree is a beautiful way to celebrate love and life.
        </p>
        <p class="highlight-red">
            🩸 Blood donation is a noble act — everyone should donate blood whenever possible.
        </p>
    </div>

    <!-- CTA BUTTON -->
    <div class="cta-wrapper">
        <a href="{{ route('view.webpage') }}" class="wedding-btn">
            View Wedding Invitation 💌
        </a>
    </div>

    <div class="footer">
        With love and respect,<br>
        <strong>Ashish &amp; Kalyani</strong> 🌺
    </div>

</div>
</div>

</body>
</html>

