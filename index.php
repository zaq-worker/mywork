<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>My Work - Portfolio</title>
    </head>

    <body>
        <header id="header">
            <h1 class="site-title"><a href="index.html"><img src="img/logo.svg" alt="My Work"></a></h1>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#works">Works</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li>
                    <a href="https://www.instagram.com/" target="_blank">
                        <img class="icon" src="./img/icon-instagram.png" alt="instagram">
                    </a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <!-- メインビジュアル -->
            <div id="mainvisual">
                <picture>
                    <source media="(max-width: 600px)" srcset="img/mainvisual-sp.jpg">
                    <img src="img/mainvisual-pc.jpg" alt="mainvisual">
                </picture>
            </div>

            <!-- Aboutセクション -->
            <section id="about" class="wrapper">
                <h2 class="sec-title">About</h2>
                <ul>
                    <li>Xxxxx Ashley</li>
                    <li>2th Floor xxxxx Building x-x-x Nishiazabu, Minato-ku, Tokyo 106-0031 Japan</li>
                    <li>tel: 000-0000-0000</li>
                    <li>url: www.xxxxxx.jp</li>
                    <li>mail: xxx@xxxxxx.jp</li>
                </ul>
                <p>
                    プロフィールテキストテキストテキストテキストテキストテキストテキストテキストテキストスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </section>

            <!-- Worksセクション -->
            <section id="works" class="wrapper">
                <h2 class="sec-title">Works</h2>
                <ul>
                    <li><img src="img/works1.jpg" alt="works1"></li>
                    <li><img src="img/works2.jpg" alt="works2"></li>
                    <li><img src="img/works3.jpg" alt="works3"></li>
                    <li><img src="img/works4.jpg" alt="works4"></li>
                    <li><img src="img/works5.jpg" alt="works5"></li>
                    <li><img src="img/works6.jpg" alt="works6"></li>
                </ul>
            </section>

            <!-- Newsセクション -->
            <section id="news" class="wrapper">
                <h2 class="sec-title">News</h2>
                <dl>
                    <dt>2020.XX.XX</dt>
                    <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.11』に掲載していただきました。</dd>
                    <dt>2020.XX.XX</dt>
                    <dd>ＸＸ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。</dd>
                    <dt>2019.XX.XX</dt>
                    <dd>【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
                    <dt>2019.XX.XX</dt>
                    <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.10』に掲載していただきました。</dd>
                    <dt>2019.XX.XX</dt>
                    <dd>【個展開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
                </dl>
            </section>

            <!-- Contactセクション -->
            <section id="contact" class="wrapper">
                <h2 class="sec-title">Contact</h2>
                <form action="#" method="post">
                    <dl>
                        <dt><label for="name">NAME</label></dt>
                        <dd><input type="text" id="name" name="your-name"></dd>
                        <dt><label for="email">E-mail</label></dt>
                        <dd><input type="email" id="email" name="your-email"></dd>
                        <dt><label for="message">MESSAGE</label></dt>
                        <dd><textarea id="message" name="your-message"></textarea></dd>
                    </dl>
                    <div class="button"><input type="submit" value="送信"></div>
                </form>
            </section>
        </main>

        <footer id="footer">
            <p>&copy; <?php echo date('Y') ?> My Work</p>
        </footer>
    </body>
</html>