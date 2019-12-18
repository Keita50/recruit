<?php
/*
Template Name: 私のカスタムページ
*/

get_header();
?>

<body>
    <section>
        <div　class="project-title">
            <h2>PROJECT</h2>
            <span>01</span>
            <h1>この文章はダミーです。<br>
            文字の大きさ、量、字間、行間等を<br>
            確認するために入れています。</h1>
        </div>
    </section>    
    <section>
        <div class="section-inner">
            <h3>Work</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris<br> 
                nisi ut aliquip ex ea commodo consequat. <br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cill</p>
        </div>
    </section>
    <section>
        <div class="section-inner">
            <h3>Member</h3>
            <div class="talk-pfr cf">
                <div class="prf-col">
                    <div class="img">
                        <img src="" alt="">
                    </div>
                    <div class="prf-text">
                        <div class="table">
                            <div class="table-cell">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>NAME</th>
                                            <td clas="prf-name">dummy1</td>
                                        </tr>
                                        <tr>
                                            <th>JOB</th>
                                            <td>dummmy dummy dumy</td>
                                        </tr>
                                    </tbody>
                                    <p class="pcOnly">
                                    つれづれなるまゝに、日暮らし、硯にむかひて、<br>
                                    心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）
                                    </p>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prf-col">
                    <div class="img">
                        <img src="" alt="">
                    </div>
                    <div class="prf-text">
                        <div class="table">
                            <div class="table-cell">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>NAME</th>
                                            <td clas="prf-name">dummy2</td>
                                        </tr>
                                        <tr>
                                            <th>JOB</th>
                                            <td>dummmy dummy dumy</td>
                                        </tr>
                                    </tbody>
                                    <p class="pcOnly">
                                    つれづれなるまゝに、日暮らし、硯にむかひて、<br>
                                    心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）
                                    </p>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prf-col">
                    <div class="img">
                        <img src="" alt="">
                    </div>
                    <div class="prf-text">
                        <div class="table">
                            <div class="table-cell">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>NAME</th>
                                            <td clas="prf-name">dummy3</td>
                                        </tr>
                                        <tr>
                                            <th>JOB</th>
                                            <td>dummmy dummy dumy</td>
                                        </tr>
                                    </tbody>
                                    <p class="pcOnly">
                                    つれづれなるまゝに、日暮らし、硯にむかひて、<br>
                                    心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）
                                    </p>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <h3>Story</h3>
            <div class="title-cf">
                <h2 class="fw-2">
                    <strong>
                        dummy<br>
                        dummy<br>
                        dummy
                    </strong>
                </h2>
            </div>
            <div class="article-col cf">
                <div class="col-img w6 fl">
                    <div class="img"></div>
                    <div class="mask"></div>
                </div>
                <div class="col-text w9 fr">
                    <p>
                        <strong>name1</strong>
                        つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、<br>
                        そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）
                    </p>
                    <p>
                        <strong>name2</strong>
                        つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、<br>
                        そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）
                    </p>
                    <p>
                        <strong>name3</strong>
                        つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、<br>
                        そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）
                    </p>
                </div>
                <div class="article-img"></div>
            </div>
        </div>
    </section>
    <section class="other-project">
        <div class="section-inner">
            <h3>Other Project</h3>
            <ul class="cf">
                <li>
                    <a href=""></a>
                    <img src="" alt="">
                    <p>dummy<br>
                        dummy<br>
                        dummy
                    </p>
                </li>
                <li>
                    <a href=""></a>
                    <img src="" alt="">
                    <p>dummy<br>
                        dummy<br>
                        dummy
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <section class="recruit">
        <h2>RECRUIT</h2>
        <h3>採用情報</h3>
        <div class="re-image0">
        <?php echo get_recruit(); ?>
        </div>
    </section>
</body>

<?php
get_footer();
?>