<?php

namespace App\Models;


class Job
{
    public static function getAllJobs()
    {
        return [
            ["title" => "Laravel Developer",
            "description" => "We are looking for a skilled Laravel developer to join our team.",
            "location" => "Remote",
            "salary" => "$70,000 - $90,000",
            "type" => "Full-time",
            "company" => "Tech Solutions Inc.",]
            , 
            ["title" => "Frontend Developer",
            "description" => "Seeking a creative frontend developer with experience in React.",
            "location" => "New York, NY",
            "salary" => "$80,000 - $100,000",
            "type" => "Full-time",
            "company" => "Web Innovations LLC",]
            ,
        ];
    }
}
