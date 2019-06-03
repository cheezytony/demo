<?php

    return [
        "api" => [
            // ========================================
            // Get Requests
            // ========================================
            "users" => [
                "type" => "get",
                "action" => "users"
            ],

            // Posts
            "posts" => [
                "type" => "get",
                "action" => "posts"
            ],

            // Projects
            "projects" => [
                "type" => "get",
                "action" => "projects"
            ],


            // ========================================
            // Post Requests
            // ========================================
            "login" => [
                "type" => "post",
                "action" => "login"
            ],
            "contact" => [
                "type" => "post",
                "action" => "contact"
            ],
        ]
    ];
