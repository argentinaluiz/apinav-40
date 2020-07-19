<?php

namespace Tests\Feature;

use App\Models\Course;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CourseTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIfCreateCourse()
    {
        /*$data=['name'=>'Sistemas'];

        Course::create($data);

        $this->assertDatabaseHas('courses',$data);*/


        //$response = $this->get('/');

        //$response->assertStatus(200);
    }


}
