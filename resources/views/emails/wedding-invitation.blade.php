<!DOCTYPE html>
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
</html>
