Toy car exercise
Assessment Criteria
The object of this test is to see how the candidate performs with backend and  frontend code. We’ll be looking at:
Clean code design and sound software engineering practices.
Structured repo so can be used as working repo in future.
Production ready code with tests.
Description (The toy car Test)
The application is a simulation of a toy car moving on a square tabletop, of dimensions 5 units x 5 units. There are no other obstructions on the table surface.

The car is free to roam around the surface of the table, but must be prevented from falling to destruction. Any movement that would result in the car falling from the table must be prevented, however further valid movement commands must still be allowed.
Create backend application that can read in commands in the following format:
PLACE X,Y,F
MOVE
LEFT
RIGHT
PLACE will put the toy car on the table in position X,Y and facing NORTH, SOUTH, EAST or WEST. The origin (0,0) can be considered to be the SOUTH WEST most corner.
The first valid command to the car is a PLACE command, after that, any sequence of commands may be issued, in any order, including another PLACE command.
The application should discard all commands in the sequence until a valid PLACE command has been executed.
MOVE will move the car one unit forward in the direction it is currently facing.
LEFT and RIGHT will rotate the car 90 degrees in the specified direction without changing the position of the car.
A car that is not on the table can choose the ignore the MOVE, LEFT and RIGHT commands.
The frontend should be connected to backend by API or socket connection, as the developer chooses.
Each command response should be reflected in UI step by step.
Please provide the complete application (backend + frontend).
Constraints
The car must not fall off the table during movement. This also includes the initial placement of the car. Any move that would cause the car to fall must be ignored.

Additional points
For the senior candidates we also expect:

Responsive UI that can be used on mobile
Clean API between the frontend and backend (request/responses should contain only the necessary data)
Implement automated testing (unit tests, functional tests)
Keep track of all the commands for a particular car and re run those commands.
Full CI/CD process & tools
---------------------------------------------------------------------------------------
Drone Exercise 
Setup instruction & technologies

Front-end	Backend
Environment: Node.JS, express.
Language: jQuery and Java-script.
IDE: Visual Studio Code.	Environment: xampp, Apache.
Language: PHP
IDE: Visual Studio Code

Setup notes: Required modules should be installed.	Setups notes: Install as usual.

Test cases
ID	Description	Execute	Expected result
1	This test case is to ensure that all of the function of the backend is well executed without any issues.	1) After deployed the backend, open a web browser and run the file named “unitTest.php”.
In this example:
http://localhost:8080/TheAPI/Backend/unitTest.php	calling PLACE(0,0,0)
result:{"x":0,"y":0,"f":0}
calling RIGHT(0,0,0) 
result:{"x":0,"y":0,"f":90}
calling MOVE(0,0,90)
result:{"x":10,"y":0,"f":90}
calling LEFT(10,0,90)
result:{"x":10,"y":0,"f":180} 
calling MOVE(10,0,180)
result:{"x":10,"y":10,"f":180}
2)	This test case is to ensure that all of the function of the frontend is well executing without any issues.	1) After deployed the backend and the frontend, open a web browser and go to the address of the frontend.
In this example: 
http://localhost:3000/
2) Click on the button titled “RUN AUTOMATION FUNCTIONAL TEST”, every progress of this automation functional test should be logged and displayed on the right corner of the screen. 	All of the actions should be logged and marked with “Done”.
3)	This test case is to make sure; if a user given wrong input and then they click on the button titled “PLACE”, nothing will be given in the result.	1) After deployed the backend and the frontend, open a web browser and go to the address of the frontend.
In this example: 
http://localhost:3000/
2) Fulfill the input with incorrect data, then press the button “PLACE”
In this example:
•	Setup 1: (460, 0, 0)
•	Setup 2: (0, 460, 0)
•	Setup 3: (0, 0, 120)
•	Setup 4: (460, 460, 120)
•	Setup 5: (ABC, 0, 0)
•	Setup 6: (0, ABC, 0)
•	Setup 7: (0, 0, ABC)	All of the setups:
The drone is should not move, and the backend may return; (0, 0, 0).
4)	This test case is to make sure; the drone is rotate in 90 degrees if a user press on the button titled “RIGHT”.	1) After deployed the backend and the frontend, open a web browser and go to the address of the frontend.
In this example: 
http://localhost:3000/
2) Press on the “RIGHT” button.	The drone should now rotate in 90 degrees (to the right).
5)	This test case is to make sure; the drone is rotate in -90 degrees if a user press on the button titled “LEFT”.	1) After deployed the backend and the frontend, open a web browser and go to the address of the frontend.
In this example: 
http://localhost:3000/
2) Press on the “LEFT” button.	The drone should now rotate in -90 degrees (to the left).
6)	This test case is to make sure every action of a user is logged.	1) After deployed the backend and the frontend, open a web browser and go to the address of the frontend.
In this example: 
http://localhost:3000/
2) Click on any button.	Every action of a user is logged and displayed on the right corner of the frontend.
7)	This test case is to make sure every logged action can be re-run	1) After deployed the backend and the frontend, open a web browser and go to the address of the frontend.
In this example: 
http://localhost:3000/
2) Click on any button, as many as possible.
3) Click on the “Run” button, placed near to the logged action on the right corner of the frontend.	Every logged action can be re-run, and the drone position displayed on the frontend should be affected.


