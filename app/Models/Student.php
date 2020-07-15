<?php

declare(strict_types=1);

namespace App\Models;

use App\User;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class Student extends Model
{
    protected $fillable = ['course_id'];

    public static function createWithUser(array $data): Student
    {
        try {
            $data = \Validator::make($data, [
                'user' => 'required|array',
                'user.name' => 'required',
                'user.email' => 'required',
                'user.password' => 'required',
                'student' => 'required|array',
                'student.course_id' => 'required|exists:courses,id'
            ])->validate();

            return \DB::transaction(function () use ($data) {
                $student = static::create($data['student']);
                $student->user()->create($data['user']);
                return $student;
            });

        } catch (ValidationException $ex) {
            throw new \Exception('The given data was invalid. Details: '.json_encode($ex->errors()));
        }
    }

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}

//unitario
//integracao

//Student ou Teacher ---> User

//Student::create
//User::create()

//$data student => [], user => []

//$data name, email, password

//begin transaction
//Student::create()
//User::create()
//commit
