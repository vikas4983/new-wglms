<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Wedding Invitation</title>
    <link rel="stylesheet" href="style.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #fff1e6, #fde2e4);
            font-family: 'Georgia', serif;

            margin: 0;
            display: flex;
            min-height: 100svh;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }

        /* Card */
        .invitation-card {
            background: white;
            width: 100%;
            max-width: 380px;
            padding: 28px 22px;
            text-align: center;
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            animation: fadeIn 1.2s ease;
        }

        /* Mandap Icon */
        .mandap {
            font-size: 25px;
            margin-bottom: 10px;
        }

        /* Headings */
        h1 {
            font-size: 24px;
            color: #b85c38;
            margin-bottom: 4px;
        }

        h2 {
            font-size: 22px;
            color: #6a040f;
            margin-top: 0;
        }

        /* Message */
        .message {
            font-size: 14px;
            margin: 16px 0;
            color: #555;
            line-height: 1.6;
        }

        /* Inputs */
        input {
            width: 100%;
            padding: 12px;
            margin-top: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        /* Button */
        button {
            margin-top: 18px;
            width: 100%;
            padding: 13px;
            background: #b85c38;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.3s, background 0.3s;
        }

        button:hover {
            background: #9c3d25;
            transform: scale(1.05);
        }

        /* Success Message */
        #successMsg {
            display: none;
            margin-top: 15px;
            color: green;
            animation: pop 0.6s ease;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pop {
            0% {
                transform: scale(0.7);
            }

            100% {
                transform: scale(1);
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 20px;
            }
        }

        /* 📱 Mobile Optimization */
        @media (max-width: 480px) {
            .invitation-card {
                padding: 32px 20px;
                max-width: 95%;
            }

            input {
                font-size: 15px;
                padding: 14px;
            }

            button {
                padding: 15px;
                font-size: 17px;
            }
        }

        .success-message.premium {
            margin: 18px 0 22px;
            padding: 18px 20px;
            background: linear-gradient(135deg, #fff7f9, #fdecef);
            border-radius: 14px;
            border: 1px solid rgba(184, 92, 56, 0.25);
            color: #7a1f3d;
            font-size: 14px;
            line-height: 1.6;
            text-align: center;
            box-shadow: 0 10px 25px rgba(184, 92, 56, 0.18);
            animation: fadeInUp 0.6s ease;
            white-space: normal;
            line-height: 1.6;
        }

        .success-message .icon {
            display: block;
            font-size: 22px;
            margin-bottom: 6px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .wedding-btn {
            background: linear-gradient(135deg, #c08457, #b85c38);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            box-shadow: 0 8px 18px rgba(184, 92, 56, 0.35);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .wedding-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 26px rgba(184, 92, 56, 0.45);
        }

        .error-message {
            margin-bottom: 16px;
            padding: 14px 16px;
            background: linear-gradient(135deg, #fff1f2, #ffe4e6);
            border-left: 4px solid #c9184a;
            border-right: 4px solid #c9184a;
            color: #7a1f3d;
            font-size: 14px;
            border-radius: 10px;
            animation: fadeIn 0.4s ease;
        }
    </style>
</head>

<body>

    <div class="invitation-card">
        <div class="mandap">~ Wedding Ceremony ~</div>


        <h1>You're Invited</h1>
        <h2>Ashish & Priya</h2>

        <p class="message">
            With the blessings of our families,
            we invite you to celebrate our wedding.
        </p>
        @if (session('success'))
            <div class="success-message premium">
                {{ session('success') }}
            </div>
        @endif
        
        
        <form action="{{ route('invitation.submit') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="tel" name="phone" placeholder="Enter your mobile number" maxlength="10"
                inputmode="numeric" pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
            <button class="wedding-btn" type="submit">Submit</button>
        </form>

        <p id="successMsg">✨ Thank you! Invitation accepted ✨</p>
    </div>

    <script src="script.js"></script>
</body>

</html>
