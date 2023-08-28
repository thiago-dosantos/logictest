
# Logic Test

## Goals:

Playing Ping-Pong is one of the favorite activities of the employees of the company you work for. After long, close matches, it's often easy to forget whose turn it is to serve. To prevent this from happening and keep the game fair, you've decided to create a function that determines whose turn it is to serve at each moment. To create the function, you must receive the current score in string format separated by the ":" character as the only parameter. The function should return "player a" or "player b", depending on whose turn it is to serve. We will be playing Ping-Pong in the traditional way, where players change turns to serve every 5 serves. However, when the score reaches "20:20", each player will only serve 2 times before the switch. The game ends when one of the players reaches 21 points with a minimum lead of 2 points. If the score reaches "20:20", the winner will be the first player to achieve a 2-point lead. It is important to remember that player "A" always starts by serving. It is not necessary to validate the entries, as we assume that they will always be in a valid format.
Remarks: There is no need to validate the entries, consider that they will always be in a valid format. It is not necessary to check if one of the players has already won, this case will not be used in the algorithm tests. "Player A" always starts by serving.

Examples:

serve("0:0"); // returns "player a"

serve("3:2"); // returns "player b"

serve("21:20"); // returns "player a"

serve("21:22"); // returns "player b"

## What was accomplished:

The code found in the testelogico.php file presents a function that I created to represent the result of whose turn it is to draw in the proposed ping-pong game. Following the logic applied in the text sent by PDF, the code will analyze the points of each player and the differences of these points, considering that there are different scenarios, I developed the code so that the calculations are carried out to determine who should serve next based on the total number of points and on normal and additional service rounds. Function testing is performed with a test score at the end of the code and the result is displayed.