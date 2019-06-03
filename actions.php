<?php
    function users() {
        $data = file_get_contents("json/users.json");
        response(success(json_decode($data), "users"));
    }
    
    function posts() {
        $data = file_get_contents("json/posts.json");
        response(success(json_decode($data), "posts"));
    }

    function projects() {
        $data = file_get_contents("json/projects.json");
        response(success(json_decode($data), "projects"));
    }
    
    function contact() {
        response(success("Message Sent Successfully", "message"));
    }

    function login() {
        $data = file_get_contents("json/user.json");
        response(success(json_decode($data), "user"));
    }