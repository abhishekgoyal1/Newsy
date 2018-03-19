<?php
    $con= mysqli_connect("localhost","root","", "newsy");
    $query= mysqli_query($con, "SELECT * FROM `news` ORDER BY date DESC LIMIT 20");
    echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">";
    while ($fetch = mysqli_fetch_assoc($query)){
        $newsid= $fetch['NewsID'];
        $title = nl2br($fetch['Title']);
        $desc = nl2br($fetch['summary']);
        $URL = $fetch['URL'];
        $date = nl2br($fetch['date']);
        
        echo "<div class=\"post-preview\">
            <a target=\"_blank\" href=\"$URL\">
              <h2 class=\"post-title\">
                $title
              </h2>
              <h3 class=\"post-subtitle\">
                $desc....
              </h3>
            </a>
            <p class=\"post-meta\">$date
            <button id=\".$newsid.\"  class=\" vote-up \"> UPVOTE </button>
            <button id=\".$newsid.\" class=\" vote-down \"> DOWNVOTE </button></p>
          </div>
          <hr>";
    }

    echo "<div class=\"clearfix\">
            <button class=\"btn btn-primary float-right\" id= \"old\">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>";
?>