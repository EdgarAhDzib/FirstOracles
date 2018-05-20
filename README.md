# FirstOracles

My first freelance coding was for a witch shop in Salem, MA. While most of my work concerned upkeep for the website's news and catalog, I also built a (now defunct) phone psychic website.

Powered by Click4Advisor (C4A), the website used cURL requests to retrieve XML data from the C4A server. Parsed into JSON, the reader entries were sorted by availability, available readers displayed first.

The "Three Stone" oracle presented an image map with click actions on gemstone bowls. Clicking a bowl opened a popup window describing the specific gemstone's mystical details. A JavaScript counter listed the three most recently selected stones (even if duplicated).

(As this was my first work in JavaScript, I was unaware of certain methods that could have improved coding elegance and streamlined its efficacy. A JQuery function could have replaced the series of if / elseif statements to list readers by their respective availability, for example. I would have also stored the readers' bio contents into a separate JSON file.)
