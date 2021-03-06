 <!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'
'http://www.w3.org/TR/html4/loose.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <script src='/php_forum/jquery/jquery-2.1.1.min.js'></script>
        <script src='/php_forum/bootstrap/js/bootstrap.min.js'></script>
        <script src="/php_forum/disableSelection.js"></script>
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

                $( "#search-btn").disableSelection();

                $( "#close-btn" ).click(function() {
                    $("form.navbar-form").addClass("hidden");
                    $("input.form-control").removeAttr("value");
                });

                $( "form.navbar-form").submit(function (event) {
                    var len = $("input.form-control").val().length;
                    if (len > 0) return
                    else event.preventDefault();
                });
                
                $("div.forum-row").click(function() {
                    var addr = $(this).children("div.forum-id").attr("name");
                   $(location).attr('href','/php_forum/#' + addr); 
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
                    <li class="active"><a href="/php_forum/">Forum<span class="sr-only">(current)</span></a></li>
                    <li><span class="fake-a" id="search-btn">Search</span></li>
                </ul>
                <form class="navbar-form navbar-left
                    <?php if(!isset($_GET['query'])) echo "hidden" ?>" id="navbar-form" role="search" action="index.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" name="query"
                            <?php echo isset($_GET['query']) ? 'value=\''. $_GET['query'] .'\'' : ""; ?> placeholder="Enter Search Query">
                    </div>
                    <button type="submit" id='submit-btn' class="btn btn-custom">Submit</button>
                    <button type="button" id='close-btn' class="btn btn-custom" href="/php_forum/" >Close</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Create Account</a></li>
                    <li><a href="#">Member Log In</a></li>                    
                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-expanded="false">Memebers<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Log in</a></li>
                        </ul>
                    </li>-->
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
        echo '        <span class="custom-text">Forum Members:</span> 5236' . PHP_EOL;
        echo '    </div>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
        echo '<div class="row sidebar-row">' . PHP_EOL;
        echo '    <div class="col-sm-12 navbar-item">' . PHP_EOL;
        echo '        <span class="custom-text">Total Threads:</span> 13,325' . PHP_EOL;
        echo '    </div>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
        echo '<div class="row sidebar-row row-bottom-radius">' . PHP_EOL;
        echo '    <div class="col-sm-12 navbar-item">' . PHP_EOL;
        echo '        <span class="custom-text">Total Posts:</span> 512,325' . PHP_EOL;
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
        echo '        <div class=\'col-sm-6 pad-title\'>Forum name</div>' . PHP_EOL;
        echo '        <div class=\'col-sm-2 pad-title center\'>Threads</div>' . PHP_EOL;
        echo '        <div class=\'col-sm-1 pad-title center\'>Posts</div>' . PHP_EOL;
        echo '        <div class=\'col-sm-3 pad-title right-align\'>Last post</div>'  . PHP_EOL;
        echo '    </div>' . PHP_EOL;

        $db = new SQLite3('./db/db.sqlite');
        $sql = 'SELECT * FROM Forum WHERE cat_id = \'' . $id . '\'';
        $result = $db->query($sql);
        while($row = $result->fetchArray())
        {
            echo '    <div class=\'row forum-row row-bottom-border\'>' . PHP_EOL;
            echo '        <div class=\'forum-id hidden\' name=\'', $row['id'], '\'></div>';
            echo '        <div class=\'col-sm-6 pad mobile-view\'>' . PHP_EOL;
            echo '            <span class=\'forum-name-top\'>' . PHP_EOL;
            echo '                <u><a href=\'#\' id=\'forum-link\'>', $row['name'], '</a></u></span><br />' . PHP_EOL;
            echo '            <span class=\'smaller\'>', $row['desc'], '</span>' . PHP_EOL;
            echo '        </div>' . PHP_EOL;
            echo '        <div class=\'col-sm-2 pad center middle hide-content small \'>', $row['threads'], '</div>' . PHP_EOL;
            echo '        <div class=\'col-sm-1 pad center middle hide-content small\'>', $row['posts'], '</div>' . PHP_EOL;
            echo '        <div class=\'col-sm-3 pad mobile-view timestamp right-align\'>' . PHP_EOL;
            echo '            <span class=\'smaller\'>by <a href=\'#\' id=\'forum-link\'>', $row['user'], '</a></span><br />' . PHP_EOL;
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
