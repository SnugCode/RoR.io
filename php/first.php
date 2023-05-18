<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="Descritption" content="Php IDK">
        <meta name="Keywords" content="Php, Send">
        <meta name="Author" content="Dinal De Silva">
        <title>Booking Confirmation</title>
    </head>
    
    <body>
        <h1>Quizlet php</h1>

        <?php 
        // First Name
        if (isset($_POST["Fname"]))
        {
            $firstname = $_POST["Fname"];
        } 
        else
        {
            echo "<p>Error: Enter data in the </p>";
        }

        // Last Name
        if (isset($_POST["Lname"]))
        {
            $lastname = $_POST["Lname"];
        } 
        else
        {
            echo "<p>Error: Enter data in the </p>";
        }

        //Student ID
        if (isset($_POST["SID"]))
        {
            $StudentID = $_POST["SID"];
        }
        else
        {
            echo "<p>Error: Enter data in the</p>";
        }
        

        // Q1 
        if (isset($_POST["Q1"]))
        {
            $Question1 = $_POST["Q1"];
        }
        else
        {
            echo "<p>Error: Enter data in the</p>";
        }


        // Q2
        if (isset($_POST["Q2"]))
        {
            $Question2 = $_POST["Q2"];
        }
        else
        {
            echo "<p>Error: Enter data in the</p>";
        }


        // Q3 
        if (isset($_POST["Q3"]))
        {
            $Question3 = $_POST["Q3"];
        }
        else
        {
            echo "<p>Error: Enter data in the</p>";
        }


        // Q4 
        if (isset($_POST["Q4"]))
        {
            $Question4 = $_POST["Q4"];
        }
        else
        {
            echo "<p>Error: Enter data in the</p>";
        }


        // Q5 
        if (isset($_POST["Q5"]))
        {
            $Question5 = $_POST["Q5"];
        }
        else
        {
            echo "<p>Error: Enter data in the</p>";
        }

        echo "<p>The input of $firstname $lastname ($SID) are as follows...</p>";
    
        echo "<p>Question 1: $Question1</p>";
        echo "<p>Question 2: $Question2</p>";
        echo "<p>Question 3: $Question3</p>";
        echo "<p>Question 4: $Question4</p>";
        echo "<p>Question 5: $Question5</p>";
        ?>
    </body>
</html>
