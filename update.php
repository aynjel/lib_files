<?php

require('./../autoload.php');

try{
    if(isset($_GET['id'])){
        switch($_GET['update']){
            case 'logs':
                $logs = new LibraryLogs();
                $logs->update([
                    'student_id' => Input::get(''),
                    'book_id' => Input::get(''),
                    'date_borrowed' => Input::get(''),
                    'date_returned' => Input::get('')
                ], $_GET['id']);
                break;
            case 'requests':
                $requests = new LibraryRequests();
                $requests->update([
                    'student_id' => Input::get(''),
                    'book_id' => Input::get(''),
                    'date_requested' => Input::get('')
                ], $_GET['id']);
                break;
            case 'students':
                $students = new Students();
                $students->update([
                    'student_id' => Input::get(''),
                    'first_name' => Input::get(''),
                    'last_name' => Input::get(''),
                    'course' => Input::get(''),
                    'year' => Input::get(''),
                    'section' => Input::get('')
                ], $_GET['id']);
                break;
            case 'library':
                $library = new Library();
                $library->update([
                    'book_id' => Input::get(''),
                    'title' => Input::get(''),
                    'author' => Input::get(''),
                    'publisher' => Input::get(''),
                    'year_published' => Input::get(''),
                    'quantity' => Input::get('')
                ], $_GET['id']);
                break;
                
            default:
                throw new Exception('Invalid delete request');
            }
    }
}catch(Exception $e){
    echo $e->getMessage();
}