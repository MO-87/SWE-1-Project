<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nightgram</title>
    <style>
        body {
            background-color: black;
            color: white;
        }

        img {
            width: 100%;
        }

        #splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #splash-screen img {
            max-width: 100%;
            max-height: 100%;
            animation: fadeOut 3s ease forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        footer {
            position: relative;
            width: 30%;
            background-color: black;
            color: white;
            text-align: right;
            padding: 3px;
            margin-top: 50%;
        }

        .links {
            position: fixed;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .links a {
            display: block;
            margin-bottom: 60px;
            font-size: 20px;
            color: white;
            text-decoration: none;
            position: relative;
            padding-right: 20px;
            width: 20px;
        }

        .links a::after {
            content: '';
            display: block;
            width: 1px;
            height: 700%;
            background-color: gray;
            position: absolute;
            top: 0;
            right: -10px;
            z-index: -1;
        }

        .links a:hover {
            color: rgb(46, 46, 179);
        }

        .links a:hover::before {
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 18px;
        }

        .menu {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
            z-index: 1000;
        }

        .menu .item {
            display: block;
            font-size: 30px;
            text-decoration: none;
            margin-bottom: 40px;
            transition: transform 0.3s ease;
        }

        .effect1:hover {
            transform: scale(1.2);
        }

        .effect2:hover {
            transform: rotate(45deg);
        }

        .effect3:hover {
            transform: translateY(-10px);
        }

        .effect4:hover {
            transform: rotateY(180deg);
        }

        .effect5:hover {
            transform: skewX(45deg);
        }

        .effect6:hover {
            transform: rotate(-90deg);
        }

        .effect7:hover {
            transform: scale(0.8);
        }

        .effect8:hover {
            transform: rotate(-180deg);
        }

        .icons-container {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .icon {
            margin: 0 10px;
            text-align: center;
            cursor: pointer;
            position: relative;
        }

        .icon img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid white;
            padding: 5px;
            transition: transform 0.3s ease-in-out;
        }

        .icon img:hover {
            transform: scale(1.2);
        }

        .icon span {
            display: block;
            margin-top: 5px;
        }

        .additional-icons {
            text-align: right;
        }

        .additional-icon {
            display: block;
            margin-bottom: 20px;
            text-align: right;
        }

        .additional-icon img {
            width: 40px;
            height: 40px;
            border-radius: 60%;
            border: 1px solid white;
            padding: 2px;
            transition: transform 0.3s ease-in-out;
        }

        .additional-icon img:hover {
            transform: scale(1.2);
        }

        .additional-icon a {
            display: block;
            margin-top: 6px;
            color: white;
            text-decoration: none;
            text-align: right;
        }

        .additional-icon a:hover {
            color: blue;
        }

        .additional-icon span {
            display: block;
            margin-top: 5px;
            color: white;
            text-align: right;
        }

        .grid {
            color: white;
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            justify-content: center;
            align-items: center;
            display: grid;
            grid-template-columns: calc(100% / 7) calc(100% / 7) calc(100% / 7) calc(100% / 7) calc(100% / 7) calc(100% / 7) calc(100%/7);
            column-gap: 21px;
        }

        .post {
            display: flex;
            flex-direction: column;
        }

        .section {
            color: white;
            position: absolute;
            top: 168px;
            right: 147px;
            width: 667px;
        }
    </style>
    <script>
        window.onload = function () {
            setTimeout(function () {
                var splashScreen = document.getElementById('splash-screen');
                var mainContent = document.getElementById('main-content');

                splashScreen.style.display = 'none';
                mainContent.style.display = 'block';
            }, 2500);
        };
    </script>
</head>

<body>
    <div id="splash-screen">
        <img src="https://alhilal.com/imgs/teams/5736084916.png" alt="">
    </div>

    <h1 style="text-align: right;">Nightgram</h1>

    <div class="menu">
        <a href="#" class="item effect1">📷</a>
        <a href="#" class="item effect2">🏠</a>
        <a href="#" class="item effect3">🔍</a>
        <a href="#" class="item effect4">❤️</a>
        <a href="#" class="item effect5">➕</a>
        <a href="#" class="item effect6">📩</a>
        <a href="#" class="item effect7">👤</a>
        <a href="#" class="item effect8">☰</a>
    </div>

    <div class="icons-container grid">
        <div class="icon">
            <img src="https://via.placeholder.com/60" alt="">
            <span>الحساب الأول</span>
        </div>
        <div class="icon">
            <img src="https://via.placeholder.com/60" alt="">
            <span>الحساب الأول</span>
        </div>
        <div class="icon">
            <img src="https://via.placeholder.com/60" alt="">
            <span>الحساب الأول</span>
        </div>
        <div class="icon">
            <img src="https://via.placeholder.com/60" alt="">
            <span>الحساب الأول</span>
        </div>
        <div class="icon">
            <img src="https://via.placeholder.com/60" alt="">
            <span>الحساب الأول</span>
        </div>
        <div class="icon">
            <img src="https://via.placeholder.com/60" alt="">
            <span>الحساب الأول</span>
        </div>
        <div class="icon">
            <img src="https://via.placeholder.com/60" alt="">
            <span>الحساب الأول</span>
        </div>
    </div>

    <div class="additional-icons">
        <div class="additional-icon">
            <img src="https://via.placeholder.com/60" alt="">
            <a href="#" class="follow-link">متابعة</a>
            <span> اكس</span>
        </div>
        <div class="additional-icon">
            <img src="https://via.placeholder.com/60" alt="">
            <a href="#" class="follow-link">متابعة</a>
            <span> اكس</span>
        </div>
        <div class="additional-icon">
            <img src="https://via.placeholder.com/60" alt="">
            <a href="#" class="follow-link">متابعة</a>
            <span> اكس</span>
        </div>
        <div class="additional-icon">
            <img src="https://via.placeholder.com/60" alt="">
            <a href="#" class="follow-link">متابعة</a>
            <span> اكس</span>
        </div>
        <div class="additional-icon">
            <img src="https://via.placeholder.com/60" alt="">
            <a href="#" class="follow-link">متابعة</a>
            <span> اكس</span>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="profile" style="width:18%;float:right;">
                <div class="user-photo" style="width:50%; float:right;">
                    <img src="https://via.placeholder.com/60" width="60px" height="60px" style="border-radius:50%;" />
                </div>
                <div class="user-name" style="width:50%;float:right;">
                    <h3>user32</h3>
                </div>
                <div class="clr" style="clear:both" ;></div>
            </div>
            <div class="clr" style="clear:both" ;></div>
            <br>
            <div class="post floating">
                <img
                    src='https://www.google.com/url?sa=i&url=https%3A%2F%2Ftechrifle.com%2Flive-wallpapers-2023%2F&psig=AOvVaw0nOzmRYk8wtNnhWEDGW0aa&ust=1713630871841000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCJD-xdDazoUDFQAAAAAdAAAAABAK' />
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde deserunt molestias voluptates mollitia
                    modi commodi dolore, non soluta nesciunt obcaecati! </p>
            </div>

        </div>
    </div>
    </div>

    <footer>
        <p>Nightgram جميع الحقوق محفوظة &copy; 2024</p>
    </footer>
</body>

</html>