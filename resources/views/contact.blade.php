<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <p>
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <span style="color:red;">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <span style="color:red;">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Subject:</label><br>
            <input type="text" name="subject" value="{{ old('subject') }}">
            @error('subject') <span style="color:red;">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Message:</label><br>
            <textarea name="message">{{ old('message') }}</textarea>
            @error('message') <span style="color:red;">{{ $message }}</span> @enderror
        </p>
        <button type="submit">Send</button>
    </form>
</body>
</html>
