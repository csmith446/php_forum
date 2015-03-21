 <!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'
'http://www.w3.org/TR/html4/loose.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <script src='/php_forum/jquery/jquery-2.1.1.min.js'></script>
        <script src='/php_forum/bootstrap/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='/php_forum/bootstrap/css/bootstrap.min.css'>
        <style type='text/css'>
        .header {
            height: 200px;
            background-color:#28A4C9;
        }

        .footer {
                height: 40px;
            }

        .container {
            padding: 10px 10px 10px 10px;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .alt {
            background-color:#d4edff;
        }

        .forum-name-top {
            font-weight:bold;
            font-size:small;
        }

        .smaller {
            font-size:smaller;
        }

        @media screen and (max-width: 767px) {
            .hide-header {
                display:none;
            }

            .mobile-view {
                width:50%;
                float:left;
            }

            .timestamp {
                text-align:right;
                margin-right:0px;
            }

            .row {
                padding-top:5px;
                padding-bottom:5px;
            }
        }

        @media screen and (min-width: 768px) {
            .forum-header {
                background-color:inherit;
                color:#245580;
                font-weight:bold;
                border-bottom: 2px solid black;
                font-size:medium;
            }

            .container {
                padding: 10px 25px 15px 25px;
                margin-top:40px;
                margin-left:auto;
                margin-right:auto;
                border: 1px solid #245580;
                max-width:1200px;
            }

            .center {
                text-align:center;
            }

            .middle {
               margin: 8px 0px 0px 0px;
            }

            .pad {
                padding: 8px 8px 8px 8px;
            }

            .pad-header {
                padding: 8px 8px 0px 8px;
            }

            .forum-row-border {
                border-bottom: 1px solid #245580;
            }
        }
        </style>

        <script>
            $(document).ready(function() {
                $("#container #row:last-child").removeClass("forum-row-border");
                $("#row:nth-child(odd)").addClass("alt");
            });
        </script>
    </head>
    <body>
        <div class='header'>

        </div>

        <div class='container' id="container">
            <div class='row forum-header hide-header' id="forum-header">
                <div class='col-sm-5 pad-header'>Forum name</div>
                <div class='col-sm-2 pad-header center'>Threads</div>
                <div class='col-sm-2 pad-header center'>Posts</div>
                <div class='col-sm-3 pad-header'>Last post</div>
            </div>
            <div class='row forum-row-border' id='row'>
                <div class='col-sm-5 pad mobile-view'>
                    <span class='forum-name-top'><u>News &amp; Announcements</u></span><br />
                    <span class='smaller'>Latest updates and forum news</span>
                </div>
                <div class='col-sm-2 pad center middle hide-header'>75</div>
                <div class='col-sm-2 pad center middle hide-header'>151</div>
                <div class='col-sm-3 pad mobile-view timestamp'>
                    <span class='smaller'>by csmith34</span><br />
                    <span class='smaller'>Tue Feb 4, 2014 10:58 am</span>
                </div>
            </div>
            <div class='row forum-row-border' id='row'>
                <div class='col-sm-5 pad mobile-view'>
                    <span class='forum-name-top'><u>Gaming News &amp; Headlines</u></span><br />
                    <span class='smaller'>Discuss your gaming news in here</span>
                </div>
                <div class='col-sm-2 pad center middle hide-header'>301</div>
                <div class='col-sm-2 pad center middle hide-header'>1511</div>
                <div class='col-sm-3 pad mobile-view timestamp'>
                    <span class='smaller'>by j_anderson</span><br />
                    <span class='smaller'>Wed Feb 5, 2014 6:06 am</span>
                </div>
            </div>
            <div class='row forum-row-border' id='row'>
                <div class='col-sm-5 pad mobile-view'>
                    <span class='forum-name-top'><u>Member Introductions</u></span><br />
                    <span class='smaller'>Introduce yourself to everyone</span>
                </div>
                <div class='col-sm-2 pad center middle hide-header'>622</div>
                <div class='col-sm-2 pad center middle hide-header'>6511</div>
                <div class='col-sm-3 pad mobile-view timestamp'>
                    <span class='smaller'>by csmith34</span><br />
                    <span class='smaller'>Mon Jan 5, 2014 4:23 pm</span>
                </div>
            </div>
        </div>


        <div class='container' id="container">
            <div class='row forum-header hide-header'>
                <div class='col-sm-5 pad-header'>Forum name</div>
                <div class='col-sm-2 pad-header center'>Threads</div>
                <div class='col-sm-2 pad-header center'>Posts</div>
                <div class='col-sm-3 pad-header'>Last post</div>
            </div>
            <?php
                $items = array(
                    ['title' => 'News &amp; Announcements',
                     'desc' => 'Latest updates and forum news',
                     'threads' => 66,
                     'posts' => 432,
                     'user' => 'csmith34',
                     'time' => 'Tue Feb 4, 2014 10:58 am'],
                     ['title' => 'Gaming News &amp; Headlines',
                      'desc' => 'Discuess your gaming news here',
                      'threads' => 235,
                      'posts' => 566,
                      'user' => 'j_anderson',
                      'time' => 'Wed Feb 5, 2014 6:06 am'],
                     ['title' => 'Member Introductions',
                      'desc' => 'Introduce yourself to everyone',
                      'threads' => 634,
                      'posts' => 1234,
                      'user' => 'rcoley',
                      'time' => 'Mon Jan 5, 2014 4:23 pm']
                );

                foreach($items as $item) {
                    echo '<div class=\'row forum-row-border\' id=\'row\'><div class=\'col-sm-5 pad mobile-view\'>';
                    echo '<span class=\'forum-name-top\'><u>', $item['title'], '</u></span><br />';
                    echo '<span class=\'smaller\'>', $item['desc'], '</span></div>';
                    echo '<div class=\'col-sm-2 pad center middle hide-header\'>', $item['threads'], '</div>';
                    echo '<div class=\'col-sm-2 pad center middle hide-header\'>', $item['posts'], '</div>';
                    echo '<div class=\'col-sm-3 pad  mobile-view timestamp\'>';
                    echo '<span class=\'smaller\'>by ', $item['user'], '</span><br />';
                    echo '<span class=\'smaller\'>', $item['time'], '</span></div></div>';
                }
            ?>
        </div>

        <div class='container' id="container">
            <div class='row forum-header hide-header'>
                <div class='col-sm-5 pad-header'>Forum name</div>
                <div class='col-sm-2 pad-header center'>Threads</div>
                <div class='col-sm-2 pad-header center'>Posts</div>
                <div class='col-sm-3 pad-header'>Last post</div>
            </div>
            <?php
                $db = new SQLite3('./db/db.sqlite');
                $result = $db->query('SELECT * FROM forum');
                while($row = $result->fetchArray())
                {
                    echo '<div class=\'row forum-row-border\' id=\'row\'><div class=\'col-sm-5 pad mobile-view\'>';
                    echo '<span class=\'forum-name-top\'><u>', $row['name'], '</u></span><br />';
                    echo '<span class=\'smaller\'>', $row['desc'], '</span></div>';
                    echo '<div class=\'col-sm-2 pad center middle hide-header\'>', $row['threads'], '</div>';
                    echo '<div class=\'col-sm-2 pad center middle hide-header\'>', $row['posts'], '</div>';
                    echo '<div class=\'col-sm-3 pad mobile-view timestamp\'>';
                    echo '<span class=\'smaller\'>by ', $row['user'], '</span><br />';
                    echo '<span class=\'smaller\'>', $row['time'], '</span></div></div>';
                }
            ?>
        </div>
        <div class="footer">

        </div>
    </body>
</html>
