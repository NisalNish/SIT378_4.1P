<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Bugbox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #0f0f0f;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            width: 100%;
            background-color: #ffffff;
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .logo {
            font-size: 1.5rem;
            color: #ff5c1c;
            font-weight: 700;
        }

        main {
            flex: 1;
            width: 100%;
            max-width: 600px;
            padding: 2rem;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #ff5c1c;
        }

        p.success {
            color: #00ffcc;
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.4rem;
            font-weight: 600;
        }

        input, textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.2rem;
            border: none;
            border-radius: 8px;
            background-color: #1e1e1e;
            color: #ffffff;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .error {
            color: #ff4d4d;
            font-size: 0.85rem;
            margin-top: -1rem;
            margin-bottom: 1rem;
        }

        button {
            background-color: #ff5c1c;
            color: #ffffff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e65218;
        }

        footer {
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            color: #999;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">BUGBOX</div>
    </header>

    <main>
        <h1>Contact Us</h1>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <form method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <div>
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @error('name') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
                @error('email') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div>
                <label>Subject</label>
                <input type="text" name="subject" value="{{ old('subject') }}">
                @error('subject') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div>
                <label>Message</label>
                <textarea name="message">{{ old('message') }}</textarea>
                @error('message') <div class="error">{{ $message }}</div> @enderror
            </div>

            <button type="submit">Send Message</button>
        </form>
    </main>

    <footer>
        &copy; {{ date('Y') }} Bugbox. All rights reserved.
    </footer>

</body>
</html>
