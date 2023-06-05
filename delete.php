<?php

require('./../autoload.php');

try{
    if(!isset($_GET['id'])){
        switch($_GET['delete-all']){
            case 'logs':
                $logs = new LibraryLogs();
                $logs->deleteAll();
                break;
            case 'requests':
                $requests = new LibraryRequests();
                $requests->deleteAll();
                break;
            case 'students':
                $students = new Students();
                $students->deleteAll();
                break;
                
            default:
                throw new Exception('Invalid delete request');
            }
    }else{
        switch($_GET['delete']){
            case 'logs':
                $logs = new LibraryLogs();
                $logs->delete($_GET['id']);
                break;
            case 'requests':
                $requests = new LibraryRequests();
                $requests->delete($_GET['id']);
                break;
            case 'students':
                $students = new Students();
                $students->delete($_GET['id']);
                break;

            default:
                throw new Exception('Invalid delete request');
            }
    }
}catch(Exception $e){
    echo $e->getMessage();
}