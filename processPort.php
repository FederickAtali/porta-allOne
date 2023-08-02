
 <!---THIS PAGE CARRIES THE MAIN LOGIC OF THE FORM-->   
<?php


if(empty($_POST["Name"])){
    die("firstName is required");
}

if(empty($_POST["email"])){
    die("lastName is required");
}

   //connecting to the databse from this file .
 //by adding the connectD.php scripts.
 $mysqli  =  include 'connectDB.php';

//the next is to insert a new record into a user table.
   //A well prepared statement with the main goal of avoiding 
   //sql injection attack.
   $sql = "INSERT INTO portfolioForm (Name,  email, Message)
         VALUES(?, ?, ?) ";// using place holders for the values.

    //creating a new prepared statement objects.
    //By calling the stmt_init() on the myqli connection object.
    $stmt = $mysqli->stmt_init();

    //preapring the mysqli  statement for
    //execution by calling the prepared() on the above
    //statement object, passing in the sql string as an argument.
    //$stmt->prepare($sql);

    //At this point any synthax error in the 
    //sql will be caught
    //if the prepare() return false
    //there is a problem with the sql.
    //to catch this  we can check for the return value.
    //if it is false, we stop the script and display 
    //the error detail which we can get from the error property
    //of the connection object.
    if (!$stmt->prepare($sql)){
        die("SQL error:" . $mysqli -> error);
    }

    //Everything is fine now and the statement
    //are ready to execute.
    //We can bind values to the placeholder characters.
    //To do this
    //We called the bind method to the $stmt object.
    $stmt->bind_param("sss",//first charater specify the types of the variables.
                              //All the character in this case are strings.
                $_POST["Name"],   //we follow  the string with the actual values.     
                $_POST["email"], 
                $_POST["Message"] );

 
   //To execute the statements
    // we call the execute() on the $stmt object.
    if($stmt->execute()) {;
        //we print out a message for successful completion.
        // or redirecting the user to a sign up sucess page.
        header("Location: sendMail.php");

    
        //exit the scripts immediately ones the header is send.
        exit();
        
    } else{
        //if any error print it out.
        //Incase of any duplicate value
        //we will get an error message.
     if($mysqli->errno === 1062){
        die("Email already taken.Please enter a different email.");
     } else{
        die($mysqli->error ." " . $mysqli->errno);
     }
    }
?>






