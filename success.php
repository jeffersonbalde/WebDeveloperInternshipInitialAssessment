<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];

        echo "Form submitted successfully!<br>";
        echo "First Name: $firstName<br>";
        echo "Last Name: $lastName<br>";
        echo "DOB: $dob<br>";
        echo "Gender: $gender<br>";
    } else {

        header("Location: index.html");
        exit();
    }