<?php
//connect the server to the database
include("db/dbConnection.php");
include("db/dbFunctions.inc.php");
createQus($conn, 'What does HTML stand for','Home tool Markup language','Hyperlinks and Text Markup language','Hyper Text Markup language','none of the above',1);
createQus($conn, 'look at the following selector: $("div"). What does it select?','The first divs element','All div elements','The last div element','none of the above',1);
createQus($conn, 'Where is the correct place to insert a javascript?','the head section','The body section','Both the head and body','none of the above',1);
createQus($conn, 'How do you create a function in javascript?','function myFunction()','function:myFunction()','function=myFunction()','none of the above',1);
createQus($conn, 'Which class provides a responsive fixed width container?','container','container-fixed','container-fluid','none of these',1);
?>