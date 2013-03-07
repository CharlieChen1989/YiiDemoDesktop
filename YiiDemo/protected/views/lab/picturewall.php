<head>
    <title>jquery+css3实现的波浪式图片查看插件</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <?php echo CHtml::cssFile('/css/jquery-ui-1.8.16.custom.css'); ?>  
    <?php echo CHtml::cssFile('/css/picturewall.css'); ?>  
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
    <script id="fullscreenTmpl" type="text/x-jquery-tmpl">
    <div id="wd-overlay" class="wd-overlay">
        <div class="wd-element">
            <span class="wd-close">x close</span>
            <div class="wd-nav">
                <span class="wd-nav-next">Next</span>
                <span class="wd-nav-prev">Previous</span>
            </div>
            <img src="${source}" />
            <div class="wd-info">
                <div class="wd-info-title">
                    {{html title}}
                </div>
                <div class="wd-info-desc">
                    {{html description}}
                </div>
            </div>
        </div>
    </div>
</script>
</head>
<div class="container">
    <div id="wd-wrapper" class="wd-wrapper">
        <div class="wd-slider"></div>
        <div class="wd-scroll-wrapper">
            <div class="wd-container">
                <div class="wd-element">
                    <img src="/images/pictureWall/1.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Beautiful Serendipity</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/2.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Lovely Scenery</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/3.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Lucid Dream</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/4.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Unconditional Love</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/5.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Great Design</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/6.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Wicket Decision</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/7.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Unknown Future</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/8.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Flying Horses</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/9.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Winds of Change</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/10.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Blue Monday</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/11.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Warm Ocean</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/12.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>White Snow</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/13.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Incredible Greatness</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/14.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Unlimited Wisdom</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/15.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Free Ride</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/16.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Nightingale</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/17.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Red Storm</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/18.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Strong Hope</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/19.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Touching Words</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/20.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Everlasting Truth</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/21.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Sinful Touch</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/22.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Black Day</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/23.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Lasting Friendship</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/24.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>True Trust</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/25.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Silent Dawn</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/26.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Green Sunset</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/27.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Nice Shot</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/28.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Lovely Rain</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/29.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Romantic Scent</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/30.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Beautiful Serendipity</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/1.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Beautiful Serendipity</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/2.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Lovely Scenery</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/3.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Lucid Dream</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/4.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Unconditional Love</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/5.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Great Design</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/6.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Wicket Decision</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/7.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Unknown Future</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/8.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Flying Horses</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/9.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Winds of Change</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/10.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Blue Monday</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/11.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Warm Ocean</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/12.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>White Snow</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        </div>
                    </div>
                </div>
                <div class="wd-element">
                    <img src="/images/pictureWall/13.jpg" />
                    <div class="wd-info">
                        <div class="wd-info-title">
                            <h2>Incredible Greatness</h2>
                        </div>
                        <div class="wd-info-desc">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="../js/picturewall/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="../js/picturewall/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="../js/picturewall/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/picturewall/jquery.sinusoid.js"></script>
<script type="text/javascript">
    $(function() {
			
        $('#wd-wrapper').sinusoid();
			
    });
</script>