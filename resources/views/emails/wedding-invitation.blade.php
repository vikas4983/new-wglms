
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
        <strong>Saurabh &amp; Vaishnavi</strong> 🌺
    </div>

</div>
</div>

</body>
</html>

