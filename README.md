# Student Management API

## Author & Course

IAN GEOFREY SANGALANG
III-BSIT B

## Project Title

Student Management API

## Project Description

Student Management API is a simple RESTful API built using Laravel.
This project allows users to manage student records through CRUD operations (Create, Read, Update, Delete). It supports JSON responses and API testing using Postman.

## Features

* Get All Students
* Get Single Student
* Add Student
* Update Student
* Partial Update Student
* Delete Student
* Delete All Students

## Setup Instructions

### 1. Clone the Repository

git clone https://github.com/[your-username]/api-call.git

### 2. Go to Project Directory

cd api-call

### 3. Install Dependencies

composer install

### 4. Configure Environment

cp .env.example .env

### 5. Generate Application Key

php artisan key:generate

### 6. Run Database Migration

php artisan migrate:fresh

### 7. Start Laravel Server

php artisan serve

### 8. Test API in Postman

Base URL:
http://127.0.0.1:8000/api

## Example Endpoints

GET /students
GET /students/{id}
POST /students
PUT /students/{id}
PATCH /students/{id}
DELETE /students/{id}
DELETE /students

## Screen Recording Demonstration
https://drive.google.com/drive/folders/1G9E8E_6Ai99m5yk-8LuuY38ooaVtO5l0?usp=drive_link
## Note

This project is for educational purposes only.
