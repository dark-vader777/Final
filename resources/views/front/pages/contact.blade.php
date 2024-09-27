<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/front/css/contact.css')}}">
{{--    <link rel="stylesheet" href="{{asset('assets/front/css/about.css')}}">--}}
    <title>Contact</title>
</head>

<body>
<div class="contact-container">
    <h1>SEND US A MESSAGE</h1>
    <p>Have a question, suggestion or just want to learn more about our innovative AI-powered hiring solutions? Get
        in tuch!</p>
    <form>
        <div class="form-group">
            <label for="Email">Email Address:</label><br>
            <input type="email" id="mail" name="mail" placeholder="example@example.com" required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" placeholder="John Doe" required>
        </div>
        <div class="form-group">
            <label for="MESSAGE">Massage:</label><br>
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit">SUBMIT</button>
    </form>
</div>
</body>

</html>
