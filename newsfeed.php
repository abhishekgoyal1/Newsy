<?php
    $con= mysqli_connect("localhost","root","", "newsy");
    $query= mysqli_query($con, "SELECT * FROM `news` ORDER BY date DESC");
    echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">";
    
    while ($fetch = mysqli_fetch_assoc($query)){
        
        $title = nl2br($fetch['Title']);
        $desc = nl2br($fetch['summary']);
        $URL = nl2br($fetch['URL']);
        $date = nl2br($fetch['time']);
        
        echo "<div class=\"post-preview\">
            <a href=\"$URL\">
              <h2 class=\"post-title\">
                $title
              </h2>
              <h3 class=\"post-subtitle\">
                $desc
              </h3>
            </a>
            <p class=\"post-meta\">$date
            <button> Upvote </button>
            <button> Downvote </button></p>
          </div>
          <hr>";
    }

    echo "<div class=\"clearfix\">
            <a class=\"btn btn-primary float-right\" href=\"#\">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>";
?>