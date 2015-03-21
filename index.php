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
                $("#container #row:last-child").removeClass("forum-row-border");
                $("#container #row:last-child").addClass("forum-row-bottom");
            });
        </script>
    </head>
    <body>
        <div class='header'>

        </div>

        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">PHP Web Forum</a>
            </div>
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Forum<span class="sr-only">(current)</span></a></li>
                <li><a href="#">Seach</a></li>
              </ul>   
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Memebers <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Messages</a></li>
                    <li><a href="#">Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="main-container">
            
            <div class="container" id="sidebar">
                <div class="row navbar-title" id="navbar-title">
                    <div class="col-sm-12"><u>Forum Information</u></div>
                </div>
                <div class="row navbar-row" id="row">
                    <div class="col-sm-12"><u>Forum Members:</u> 5236</div>
                </div>
                <div class="row navbar-row" id="row">
                    <div class="col-sm-12"><u>Total Threads:</u> 13,325</div>
                </div>
                <div class="row navbar-row forum-row-bottom" id="row">
                    <div class="col-sm-12"><u>Total Posts:</u> 512,325</div>
                </div>
                <div class="linebreak">
                    
                </div>
                 <div class="row navbar-title" id="navbar-title">
                    <div class="col-sm-12"><u>Forum Information</u></div>
                </div>
                <div class="row navbar-row" id="row">
                    <div class="col-sm-12"><u>Forum Members:</u> 5236</div>
                </div>
                <div class="row navbar-row" id="row">
                    <div class="col-sm-12"><u>Total Threads:</u> 13,325</div>
                </div>
                <div class="row navbar-row forum-row-bottom" id="row">
                    <div class="col-sm-12"><u>Total Posts:</u> 512,325</div>
                </div>
            </div>
            
            <div class="main-content">     
                <div class='container' id="container">
                    <div class="row forum-title" id="forum-title">
                        <div class="col-sm-12"><u>PHP And SQL Community</u></div>
                    </div>
                    <div class='row forum-header hide-header' id="forum-header">
                        <div class='col-sm-5 pad-title'>Forum name</div>
                        <div class='col-sm-2 pad-title center'>Threads</div>
                        <div class='col-sm-2 pad-title center'>Posts</div>
                        <div class='col-sm-3 pad-title'>Last post</div>
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
        
                <div class="linebreak">
                    
                </div>
        
                <div class='container' id="container">
                    <div class="row forum-title" id="forum-title">
                        <div class="col-sm-12"><u>PHP And SQL Community</u></div>
                    </div>
                    <div class='row forum-header hide-header'>
                        <div class='col-sm-5 pad-title'>Forum name</div>
                        <div class='col-sm-2 pad-title center'>Threads</div>
                        <div class='col-sm-2 pad-title center'>Posts</div>
                        <div class='col-sm-3 pad-title'>Last post</div>
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
        
                <div class="linebreak">
                    
                </div>
        
                <div class='container' id="container">
                    <div class="row forum-title" id="forum-title">
                        <div class="col-sm-12"><u>PHP And SQL Community</u></div>
                    </div>
                    <div class='row forum-header hide-header'>
                        <div class='col-sm-5 pad-title'>Forum name</div>
                        <div class='col-sm-2 pad-title center'>Threads</div>
                        <div class='col-sm-2 pad-title center'>Posts</div>
                        <div class='col-sm-3 pad-title'>Last post</div>
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
            </div>
        </div>
        <div class="footer">

        </div>
    </body>
</html>
