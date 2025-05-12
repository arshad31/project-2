<?php

$name1 = "";
$phone1 = "";

$name2 = "";
$phone2 = "";

while(true){
    echo "====Contact Manager====\n";
    echo "1. Add Contact.\n2. View Contacts.\n3. Exit\n";
    echo "Enter your choice: ";

    $choice = trim(fgets(STDIN));

    if($choice == '1'){
        if($name1 == ""){
            echo "Please enter contact-1 name: ";
            $name1 = trim(fgets(STDIN));
            echo "Please enter contact-1 phone: ";
            $phone1 = trim(fgets(STDIN));
        }
        else if($name2 == ""){
            echo "Please enter contact-2 name: ";
            $name2 = trim(fgets(STDIN));
            echo "Please enter contact-2 phone: ";
            $phone2 = trim(fgets(STDIN));
        }
        else{
            echo "Already added two contacts.\n";
        }

    }
    else if($choice == '2'){
        echo "===Contacts===\n";
        if($name1 != ""){
            echo "Contact-1 Name: $name1 and Phone: $phone1\n";
        }
        if($name2 != ""){
            echo "Contact-2 Name: $name2 and Phone: $phone2\n";
        }
        if($name1 == "" && $name2 == ""){
            echo "No contact found!\n";
        }
        
    }
    else if($choice == '3'){
        echo "Goodbye.";
        break;
    }
    else{
        echo "Invalid choice.";
    }
}