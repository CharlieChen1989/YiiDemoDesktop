<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>coveflow</title>
        <?php echo CHtml::scriptFile('/js/jquery/jquery.js') ?>
        <?php echo CHtml::scriptFile('/js/coverflow.js') ?>        
        <style>
            li{
                list-style:none;
            }
            body{
                padding:0;
                margin:0;
                height:100%;
                width:100%;
                overflow:hidden;
                background:#333;
            }
            .coveflow{
                width:1px;
                height:1px;
                position:absolute;
            }
            .coveflow *{
                margin:0;
                padding:0;
                list-style:none;
            }
            .coveflow div{
                width:100px;
                height:100px;
                position:absolute;
                -webkit-transition: -webkit-transform  300ms ease-out; 
            }
            .coveflow ul{
                -webkit-perspective: 480;
                -webkit-transform-style:flat;
            }
            .coveflow li{
                display:block;
                width:480px;
                -webkit-transition: -webkit-transform 300ms ease-out; 
                -webkit-box-reflect: below 0 -webkit-gradient(linear, 0 0, 0 100%, from(transparent), color-stop(60%, transparent), to(rgba(255,255,255,.2)));
            }
            .coveflow .turnLeft,.coveflow .turnRight{
                -webkit-transform: scale(.6);

            }
            .coveflow .turnLeft li{
                -webkit-transform: rotateY(40deg);
            }

            .coveflow .turnRight li{
                -webkit-transform: rotateY(-40deg);
            }
            .coveflow .flat{
                -webkit-transform: scale(1);
            }
            .coveflow .flat li{
                -webkit-transform: rotateY( 0deg );
            }
        </style>
    </head>

    <body>
        <div id="coveflow" class="coveflow">
            <div >
                <ul>
                    <li>
                        <img src="/images/pic/bluesky6.jpg" />
                    </li>
                </ul>
            </div>
            <div >
                <ul>
                    <li>
                        <img src="/images/pic/bluesky7.jpg" />
                    </li>
                </ul>
            </div>
            <div >
                <ul>
                    <li>
                        <img src="/images/pic/bluesky8.jpg" />
                    </li>
                </ul>
            </div>
            <div >
                <ul>
                    <li>
                        <img src="/images/pic/bluesky9.jpg" />
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <img src="/images/pic/bluesky10.jpg" />
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <img src="/images/pic/bluesky11.jpg" />
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <img src="/images/pic/bluesky12.jpg" />
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <img src="/images/pic/bluesky13.jpg" />
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <img src="/images/pic/bluesky6.jpg" />
                    </li>
                </ul>
            </div>
        </div>

        <script>
            $('#coveflow').coveflow({onIndexChanged:function(index){/*alert(index)*/}});
        </script>
    </body>
</html>
