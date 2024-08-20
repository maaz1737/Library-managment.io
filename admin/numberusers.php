<?php

function getusercount(){
$conn = mysqli_connect("localhost", "root", "", "lms");
$user_count ="";
$query = "SELECT count(*) as user_count from `users`";
    $res = mysqli_query($conn, $query);
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            
            $user_count = $row['user_count'];
 }
            return($user_count); }
}

function getbookcount(){
    $conn = mysqli_connect("localhost", "root", "", "lms");
    $book_count ="";
    $query = "SELECT count(*) as book_count from `books`";
        $res = mysqli_query($conn, $query);
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                
                $book_count = $row['book_count'];
     }
                return($book_count); }
    }
    
    function getcatergorycount(){
        $conn = mysqli_connect("localhost", "root", "", "lms");
        $category_count ="";
        $query = "SELECT count(*) as category_count from `category`";
            $res = mysqli_query($conn, $query);
            if ($res) {
                while ($row = mysqli_fetch_assoc($res)) {
                    
                    $category_count = $row['category_count'];
         }
                    return($category_count); }
        }

        function getauthorscount(){
            $conn = mysqli_connect("localhost", "root", "", "lms");
            $auth_count ="";
            $query = "SELECT count(*) as auth_count from `authors`";
                $res = mysqli_query($conn, $query);
                if ($res) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        
                        $auth_count = $row['auth_count'];
             }
                        return($auth_count); }
            }

            function getissuecount(){
                $conn = mysqli_connect("localhost", "root", "", "lms");
                $issue_count ="";
                $query = "SELECT count(*) as issue_count from `issue_books`";
                    $res = mysqli_query($conn, $query);
                    if ($res) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            
                            $issue_count = $row['issue_count'];
                 }
                            return($issue_count); }
                }


?>