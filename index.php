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
        <link rel='stylesheet' href='/php_forum/index.css'>

        <script>
            $(document).ready(function() {
                $("div.forum-container > div.forum-row:last-child").removeClass("row-bottom-border");
                $("div.forum-container > div.forum-row:last-child").addClass("row-bottom-radius");
                $("div.sidebar-container > div:last-child").addClass("hidden");

                $( "#search-btn" ).click(function() {
                    if ($("form.navbar-form").hasClass("hidden")) {
                        $("form.navbar-form").removeClass("hidden");
                    }
                    else {
                        $("form.navbar-form").addClass("hidden");
                    }
                });

                $( "#close-btn" ).click(function() {
                        $("form.navbar-form").addClass("hidden");
                });
            });
        </script>
    </head>
    <body>
        <div class='header'></div>
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Forum<span class="sr-only">(current)</span></a></li>
                    <li><a href="#search" id="search-btn">Search</a></li>
                </ul>
                <form class="navbar-form navbar-left hidden" id="navbar-form" role="search" action="index.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" name="query" placeholder="Enter Search Query">
                    </div>
                    <button type="submit" id='submit-btn' class="btn btn-orange">Submit</button>
                    <button type="button" id='close-btn' class="btn btn-danger">Close</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-expanded="false">Memebers<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main-container">

            <div class="sidebar-container container hide-content">
<?php
    $count = 0;
    while ($count < 6) {
        echo '<div class="row sidebar-title">' . PHP_EOL;
        echo '    <div class="col-sm-12"><u>Forum Information</u></div>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
        echo '<div class="row sidebar-row">' . PHP_EOL;
        echo '    <div class="col-sm-12 navbar-item">' . PHP_EOL;
        echo '        <span class="orange-text"><u>Forum Members:</u></span> 5236' . PHP_EOL;
        echo '    </div>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
        echo '<div class="row sidebar-row">' . PHP_EOL;
        echo '    <div class="col-sm-12 navbar-item">' . PHP_EOL;
        echo '        <span class="orange-text"><u>Total Threads:</u></span> 13,325' . PHP_EOL;
        echo '    </div>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
        echo '<div class="row sidebar-row row-bottom-radius">' . PHP_EOL;
        echo '    <div class="col-sm-12 navbar-item">' . PHP_EOL;
        echo '        <span class="orange-text"><u>Total Posts:</u></span> 512,325' . PHP_EOL;
        echo '    </div>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
        echo '<div class="sidebreak"></div>' . PHP_EOL;
        $count += 1;
    }
?>
            </div>

            <div class="content-container">
<?php
    $db = new SQLite3("./db/db.sqlite");
    $sql = 'SELECT * FROM Category';
    $res = $db->query($sql);

    $ids = [];
    while($row = $res->fetchArray()) {
        $ids[$row['id']] = $row['name'];
    }

    foreach($ids as $id => $name) {
        echo '<div class=\'container forum-container\'>' . PHP_EOL;
        echo '    <div class=\'row forum-title\' id=\'forum-title\'>' . PHP_EOL;
        echo '        <div class=\'col-sm-12\'><u>', $name, '</u></div>' . PHP_EOL;
        echo '    </div>' . PHP_EOL;
        echo '    <div class=\'row forum-header hide-content\'>'  . PHP_EOL;
        echo '        <div class=\'col-sm-5 pad-title\'>Forum name</div>' . PHP_EOL;
        echo '        <div class=\'col-sm-2 pad-title center\'>Threads</div>' . PHP_EOL;
        echo '        <div class=\'col-sm-2 pad-title center\'>Posts</div>' . PHP_EOL;
        echo '        <div class=\'col-sm-3 pad-title\'>Last post</div>'  . PHP_EOL;
        echo '    </div>' . PHP_EOL;

        $db = new SQLite3('./db/db.sqlite');
        $sql = 'SELECT * FROM Forum WHERE cat_id = \'' . $id . '\'';
        $result = $db->query($sql);
        while($row = $result->fetchArray())
        {
            echo '    <div class=\'row forum-row row-bottom-border\'>' . PHP_EOL;
            echo '        <div class=\'col-sm-5 pad mobile-view\'>' . PHP_EOL;
            echo '            <span class=\'forum-name-top\'>' . PHP_EOL;
            echo '                <u><a href=\'#\'>', $row['name'], '</a></u></span><br />' . PHP_EOL;
            echo '            <span class=\'smaller\'>', $row['desc'], '</span>' . PHP_EOL;
            echo '        </div>' . PHP_EOL;
            echo '        <div class=\'col-sm-2 pad center middle hide-content\'>', $row['threads'], '</div>' . PHP_EOL;
            echo '        <div class=\'col-sm-2 pad center middle hide-content\'>', $row['posts'], '</div>' . PHP_EOL;
            echo '        <div class=\'col-sm-3 pad mobile-view timestamp\'>' . PHP_EOL;
            echo '            <span class=\'smaller\'>by <a href=\'#\'>', $row['user'], '</a></span><br />' . PHP_EOL;
            echo '            <span class=\'smaller\'>', $row['time'], '</span>' . PHP_EOL;
            echo '        </div>' . PHP_EOL;
            echo '    </div>' . PHP_EOL;
        }

        echo '</div>' . PHP_EOL;
        echo '<div class=\'divbreak\'></div>' . PHP_EOL;
    }
?>
            </div>
        </div>
        <div class="footer"></div>
    </body>
</html>
