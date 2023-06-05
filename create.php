<?php

require('./../autoload.php');

try{
    switch($_GET['create']){
        case 'logs':
            $logs = new LibraryLogs();
            $logs->insert([
                'student_id' => Input::get(''),
                'book_id' => Input::get(''),
                'date_borrowed' => Input::get(''),
                'date_returned' => Input::get('')
            ]);
            break;
        case 'requests':
            $requests = new LibraryRequests();
            $requests->insert([
                'student_id' => Input::get(''),
                'book_id' => Input::get(''),
                'date_requested' => Input::get('')
            ]);
            break;
        case 'students':
            $students = new Students();
            $students->insert([
                'student_id' => Input::get(''),
                'first_name' => Input::get(''),
                'last_name' => Input::get(''),
                'course' => Input::get(''),
                'year' => Input::get(''),
                'section' => Input::get('')
            ]);
            break;
        case 'library':
            $library = new Library();
            $library->insert([
                'book_id' => Input::get(''),
                'title' => Input::get(''),
                'author' => Input::get(''),
                'publisher' => Input::get(''),
                'year_published' => Input::get(''),
                'quantity' => Input::get('')
            ]);
            break;
            
        default:
            throw new Exception('Invalid delete request');
        }
}catch(Exception $e){
    echo $e->getMessage();
}