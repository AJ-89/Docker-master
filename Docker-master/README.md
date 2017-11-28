HomeWork2
=========
The service takes in two addresses and gives the user the distance between the two location and the duration to reach the destination. It also allows the user to choose the mode of travel like walk, drive, transit, bicycle. 
This service uses google APIs to achieve the results. 

How to get it working: 
Download the tar file and unzip the file. 

run the docker image:
docker run -d -p 8080:80 hw2_22 /startme.sh

Go to the browser and type the following:
localhost:8080/user.php      

This will open up a form asking for names of two places. Choose a mode of travel and hit submit and this should return the distance between the two places and the duration of the travel. 
Example: Enter Chicago and Cincinnati -> Choose mode as Drive -> Hit Submit
We can also enter specific addresses instead of names of cities. 

Please note that it usually works best when provided with US cities. 



Future Work:
Plan to implement the route in a Map and provide the directions in textual format. 
