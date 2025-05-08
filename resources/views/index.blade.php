<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sajjad Hoosain</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type='image/png' href='{{ asset("assets/images/new.png") }}'>
</head>
<body>
    <nav class="bar"><i class='bx bx-menu'></i><span class="title">Sajjad Hossain</span></nav>
    <div class="navContent">
        <div class="profile">
            <div class="photo"><img class="pics" src="{{ asset("assets/images/image.jpg") }}" alt="photo"></div>
            <div class="title">Md. Sajjad Hossain Shawon</div>
            <div class="position">Web Developer</div>
        </div>
        <div class="line" style="width: 300px; height: 3px; background-color: white; margin: 5px 0px;"></div>
        <div class="buttons">
            <li class="lists">
                <ul class="list">
                    <button type="submit" class="btn" id="first">
                        <i class='bx bxs-info-circle icons'></i>
                        <span class="hLine"></span>
                        <span class="docs" id="about_me">About Me</span>
                    </button>
                    <i class='bx bxs-right-arrow arrow'></i>
                </ul>
                <div class="line" style="width: 300px; height: 1px; background-color: white; margin: 5px 0px;"></div>
                <ul class="list"><button type="submit" class="btn" id="second"><i class='bx bxl-graphql icons'></i><span class="hLine"></span><span class="docs">Skills</span></button><i class='bx bxs-right-arrow arrow'></i></ul>
                <div class="line" style="width: 300px; height: 1px; background-color: white; margin: 5px 0px;"></div>
                <ul class="list"><button type="submit" class="btn" id="third"><i class='bx bxs-book-bookmark icons'></i><span class="hLine"></span><span class="docs">Projects</span></button><i class='bx bxs-right-arrow arrow'></i></ul>
                <div class="line" style="width: 300px; height: 1px; background-color: white; margin: 5px 0px;"></div>
                <ul class="list"><button type="submit" class="btn" id="fourth"><i class='bx bx-book-open icons'></i><span class="hLine"></span><span class="docs">Education</span></button><i class='bx bxs-right-arrow arrow'></i></ul>
                <div class="line" style="width: 300px; height: 1px; background-color: white; margin: 5px 0px;"></div>
                <ul class="list"><button type="submit" class="btn" id="fifth"><i class='bx bxs-chat icons'></i><span class="hLine"></span><span class="docs">Contact Me</span></button><i class='bx bxs-right-arrow arrow'></i></ul>
                <div class="line" style="width: 300px; height: 1px; background-color: white; margin: 5px 0px;"></div>
                <ul class="list"><button type="submit" class="btn" id="sixth"><i class='bx bxs-file-pdf icons'></i><span class="hLine"></span><span class="docs">Download CV</span></button><i class='bx bxs-right-arrow arrow'></i></ul>
                <div class="line" style="width: 300px; height: 1px; background-color: white; margin: 5px 0px;"></div>
            </li>
        </div>
    </div>
    <div class="content" id="container">
        <iframe src="{{ asset('assets/first.html') }}" frameborder="0"></iframe>
    </div>
</body>
<script src="{{ asset("assets/script.js") }}" type="text/javascript"></script>
</html>
