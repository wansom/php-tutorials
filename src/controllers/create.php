<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            echo"name cannot be empty";
        }elseif(empty($_POST['father_name'])){
            echo "fathers name cannot be empty";
        }
        else{
        echo htmlspecialchars( $_POST['name']);
        echo htmlspecialchars( $_POST['father_name']);
        echo htmlspecialchars($_POST['address']);
        echo htmlspecialchars($_POST['gender']);
        echo htmlspecialchars($_POST['city']);
        }

       
        
    }
