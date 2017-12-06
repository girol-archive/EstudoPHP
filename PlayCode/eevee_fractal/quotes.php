<?php

$string = "welcome to my personal home page;

# a fake example; just imagine some lenghty code here
if ($page_id == 0) {
  render_home_page();
} elsif ($page_id == 1) {
  render_contacts_page();
} elsif ($page_id == 2) {
  render_about_page();
} elsif ($page_id == 3) {
  render_services_page();
} elsif ($page_id == 4) {
  render_weather_page();
} elsif ($page_id == 5) {
  render_news_page();
}

print "thank you for visiting!";
