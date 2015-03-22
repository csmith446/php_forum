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
        <link rel='stylesheet' href='/php_forum/navbar.css'>
        
        <script>
            $(document).ready(function() {
                $("#container #row:last-child").removeClass("forum-row-border");
                $("#container #row:last-child").addClass("row-bottom-radius");
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
                    <li class="active">
                        <a href="#">Forum<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="#">Seach</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Memebers <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#">Messages</a>
                            </li>
                            <li>
                                <a href="#">Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main-container">
            
            <div class="sidebar-container container hide-content">
                <div class="row sidebar-title">
                    <div class="col-sm-12"><u>Forum Information</u></div>
                </div>
                <div class="row sidebar-row">
                    <div class="col-sm-12 navbar-item">
                        <span class="orange-text"><u>Forum Members:</u></span> 5236</div>
                </div>
                <div class="row sidebar-row">
                    <div class="col-sm-12 navbar-item">
                        <span class="orange-text"><u>Total Threads:</u></span> 13,325</div>
                </div>
                <div class="row sidebar-row row-bottom-radius">
                    <div class="col-sm-12 navbar-item">
                        <span class="orange-text"><u>Total Posts:</u></span> 512,325</div>
                </div>
                <div class="linebreak">
                    
                </div>
                 <div class="row sidebar-title">
                    <div class="col-sm-12"><u>Forum Information</u></div>
                </div>
                <div class="row sidebar-row">
                    <div class="col-sm-12 navbar-item">
                        <span class="orange-text"><u>Forum Members:</u></span> 5236</div>
                </div>
                <div class="row sidebar-row">
                    <div class="col-sm-12 navbar-item">
                        <span class="orange-text"><u>Total Threads:</u></span> 13,325</div>
                </div>
                <div class="row sidebar-row row-bottom-radius">
                    <div class="col-sm-12 navbar-item">
                        <span class="orange-text"><u>Total Posts:</u></span> 512,325</div>
                </div>
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
                        echo '<div class=\'container forum-container\'><div class=\'row forum-title\' id=\'forum-title\'>';
                        echo '<div class=\'col-sm-12\'><u>', $name, '</u></div></div>';
                        echo '<div class=\'row forum-header hide-content\'><div class=\'col-sm-5 pad-title\'>Forum name</div>';
                        echo '<div class=\'col-sm-2 pad-title center\'>Threads</div><div class=\'col-sm-2 pad-title center\'>Posts</div>';
                        echo '<div class=\'col-sm-3 pad-title\'>Last post</div></div>';

                        $db = new SQLite3('./db/db.sqlite');
                        $sql = 'SELECT * FROM Forum WHERE cat_id = \'' . $id . '\'';
                        $result = $db->query($sql);
                        while($row = $result->fetchArray())
                        {
                            echo '<div class=\'row forum-row forum-row-border\' id=\'row\'><div class=\'col-sm-5 pad mobile-view\'>';
                            echo '<span class=\'forum-name-top\'><u><a href=\'#\'>', $row['name'], '</a></u></span><br />';
                            echo '<span class=\'smaller\'>', $row['desc'], '</span></div>';
                            echo '<div class=\'col-sm-2 pad center middle hide-content\'>', $row['threads'], '</div>';
                            echo '<div class=\'col-sm-2 pad center middle hide-content\'>', $row['posts'], '</div>';
                            echo '<div class=\'col-sm-3 pad mobile-view timestamp\'>';
                            echo '<span class=\'smaller\'>by <a href=\'#\'>', $row['user'], '</a></span><br />';
                            echo '<span class=\'smaller\'>', $row['time'], '</span></div></div>';
                        }
                    
                        echo '</div><div class=\'divbreak\'></div>';
                    }
                ?>
            </div>
        </div>
        <div class="footer"></div>
    </body>
</html>
