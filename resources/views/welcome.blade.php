<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Georgia', serif;
        }

        /* Page wrapper (NOT body) */
        .invitation-page {
            min-height: 100svh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            background: linear-gradient(135deg, #fff1e6, #fde2e4);
        }

        /* Card */
        .invitation-card {
            background: white;
            width: 100%;
            max-width: 380px;
            padding: 22px 22px;
            text-align: center;
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            animation: fadeIn 1.2s ease;
        }

        .mandap {
            font-size: 25px;
            margin-bottom: 10px;
        }

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

        .message {
            font-size: 14px;
            margin: 16px 0;
            color: #555;
            line-height: 1.6;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        .wedding-btn {
            margin-top: 18px;
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #c08457, #b85c38);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 8px 18px rgba(184, 92, 56, 0.35);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .wedding-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 26px rgba(184, 92, 56, 0.45);
        }

        .success-message.premium {
            margin: 18px 0;
            padding: 18px 20px;
            background: linear-gradient(135deg, #fff7f9, #fdecef);
            border-radius: 14px;
            border: 1px solid rgba(184, 92, 56, 0.25);
            color: #7a1f3d;
            font-size: 14px;
            line-height: 1.6;
            box-shadow: 0 10px 25px rgba(184, 92, 56, 0.18);
            animation: fadeInUp 0.6s ease;
        }

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

        @media (max-width: 480px) {
            .invitation-card {
                padding: 32px 20px;
                max-width: 95%;
            }

            input {
                font-size: 15px;
                padding: 14px;
            }

            .wedding-btn {
                font-size: 17px;
            }
        }
    </style>
</head>

<body>

    <div class="invitation-page">

        <div class="invitation-card">
            <div class="mandap">~ Wedding Ceremony ~</div>

            <h2>Ashish weds Kalyani</h2>

            <p class="message">
                With the blessings of our families,
                we invite you to celebrate our wedding.
            </p>

            @if (session('success'))
                <div class="success-message premium">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('invitation.submit') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="tel" name="phone" placeholder="Enter your mobile number" maxlength="10" required>
                <button class="wedding-btn" type="submit">Submit</button>
            </form>
        </div>

    </div>

</body>

</html>
