For running:-
First create a database named newsy in your local server (tested with apache).
populate it with tables using the mysql queries stored in database.txt file.
Then run the news scraper using:-
python3 scraper_new.py https://www.theguardian.com

Or if you want, for any other website.

Then run the login.php file and create your own user account/login with existing account.

Then you'll get the whole website displayed, if nothing is shown then reload the page.

github link: https://github.com/abhishekgoyal1/Newsy

File Description:-
scraper_new.py -> the python scraper
parse_new.php -> php file which takes as input the scraped news articles and stores it into database
login.php -> the main login account page
registration.php -> new user account creation handling.
index.php -> the Main home page for the website.

