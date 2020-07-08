<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property int $company_id
 * @property string $userable_type
 * @property int $userable_id
 * @property string $coduser
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $last_acessed_at
 * @property string $password
 * @property int $role_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCoduser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastAcessedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUserableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUserableType($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Typemedia
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Typemedia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Typemedia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Typemedia query()
 */
	class Typemedia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClassroomSubject
 *
 * @property int $id
 * @property int $classroom_id
 * @property int $subject_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomSubject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomSubject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomSubject query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomSubject whereClassroomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomSubject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomSubject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomSubject whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomSubject whereUpdatedAt($value)
 */
	class ClassroomSubject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $zipcode
 * @property string|null $address
 * @property string|null $neighborhood
 * @property string|null $city
 * @property string|null $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereNeighborhood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereZipcode($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExerciseQuestion
 *
 * @property int $id
 * @property int $exercise_id
 * @property string $question
 * @property string $order
 * @property string $urlmedia
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestion whereExerciseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestion whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestion whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestion whereUrlmedia($value)
 */
	class ExerciseQuestion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExerciseQuestionAnswer
 *
 * @property int $id
 * @property int $exercise_question_id
 * @property string $answer
 * @property bool $is_correct
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestionAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestionAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestionAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestionAnswer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestionAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestionAnswer whereExerciseQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestionAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestionAnswer whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseQuestionAnswer whereUpdatedAt($value)
 */
	class ExerciseQuestionAnswer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Media
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media query()
 */
	class Media extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Providermedia
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Providermedia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Providermedia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Providermedia query()
 */
	class Providermedia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LogTeachingItem
 *
 * @property int $id
 * @property int $teaching_item_id
 * @property int $eventcontent_id
 * @property int $student_id
 * @property string $time_elapsed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LogTeachingItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LogTeachingItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LogTeachingItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LogTeachingItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LogTeachingItem whereEventcontentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LogTeachingItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LogTeachingItem whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LogTeachingItem whereTeachingItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LogTeachingItem whereTimeElapsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LogTeachingItem whereUpdatedAt($value)
 */
	class LogTeachingItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Content
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property string $contentable_type
 * @property int $contentable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereContentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereContentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Content whereUserId($value)
 */
	class Content extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClassroomTeacher
 *
 * @property int $id
 * @property int $classroom_subject_id
 * @property int $teacher_id
 * @property string $start_date
 * @property string $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomTeacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomTeacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomTeacher query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomTeacher whereClassroomSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomTeacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomTeacher whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomTeacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomTeacher whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomTeacher whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomTeacher whereUpdatedAt($value)
 */
	class ClassroomTeacher extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Course
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereUpdatedAt($value)
 */
	class Course extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Student
 *
 * @property int $id
 * @property int $course_id
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Student whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Student whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Student whereUpdatedAt($value)
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeachingItem
 *
 * @property int $id
 * @property int $teaching_section_id
 * @property int $content_id
 * @property string $url_liveclass
 * @property string|null $url_liveclass_recorded
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingItem whereContentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingItem whereTeachingSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingItem whereUrlLiveclass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingItem whereUrlLiveclassRecorded($value)
 */
	class TeachingItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereUpdatedAt($value)
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Eventcontent
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Eventcontent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Eventcontent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Eventcontent query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Eventcontent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Eventcontent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Eventcontent whereUpdatedAt($value)
 */
	class Eventcontent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teaching
 *
 * @property int $id
 * @property int $classroom_subject_id
 * @property string $date
 * @property string $hour_start
 * @property string $hour_end
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching whereClassroomSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching whereHourEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching whereHourStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teaching whereUpdatedAt($value)
 */
	class Teaching extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Typeexercise
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Typeexercise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Typeexercise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Typeexercise query()
 */
	class Typeexercise extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserProfile
 *
 * @property int $id
 * @property int $user_id
 * @property string $photo
 * @property string $facebook
 * @property string $linkedin
 * @property string $instagram
 * @property string $mobile
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereUserId($value)
 */
	class UserProfile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BonusHistory
 *
 * @property int $id
 * @property int $bonus_id
 * @property int $teaching_item_id
 * @property int $student_id
 * @property int $points
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BonusHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BonusHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BonusHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BonusHistory whereBonusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BonusHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BonusHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BonusHistory wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BonusHistory whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BonusHistory whereTeachingItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BonusHistory whereUpdatedAt($value)
 */
	class BonusHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subject
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $subject_menu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereSubjectMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereUpdatedAt($value)
 */
	class Subject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LoginAccess
 *
 * @property int $id
 * @property int $user_id
 * @property string $coduser
 * @property string $password
 * @property string $type
 * @property bool $authenticated
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess whereAuthenticated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess whereCoduser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginAccess whereUserId($value)
 */
	class LoginAccess extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Exercise
 *
 * @property int $id
 * @property int $type_exercise_id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Exercise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Exercise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Exercise query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Exercise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Exercise whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Exercise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Exercise whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Exercise whereTypeExerciseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Exercise whereUpdatedAt($value)
 */
	class Exercise extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClassroomStudent
 *
 * @property int $id
 * @property int $classroom_subject_id
 * @property int $student_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomStudent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomStudent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomStudent query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomStudent whereClassroomSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomStudent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomStudent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomStudent whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClassroomStudent whereUpdatedAt($value)
 */
	class ClassroomStudent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeachingSection
 *
 * @property int $id
 * @property int $teaching_id
 * @property int $section_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingSection whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingSection whereTeachingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TeachingSection whereUpdatedAt($value)
 */
	class TeachingSection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExerciseAnswer
 *
 * @property int $id
 * @property int $student_id
 * @property int $exercise_question_id
 * @property int $exercise_question_answer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseAnswer whereExerciseQuestionAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseAnswer whereExerciseQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseAnswer whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ExerciseAnswer whereUpdatedAt($value)
 */
	class ExerciseAnswer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Section
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereUpdatedAt($value)
 */
	class Section extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Classroom
 *
 * @property int $id
 * @property int $company_id
 * @property int $course_id
 * @property int $period_id
 * @property string $code
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom wherePeriodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classroom whereUpdatedAt($value)
 */
	class Classroom extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Period
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Period newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Period newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Period query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Period whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Period whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Period whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Period whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Period whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Period whereUpdatedAt($value)
 */
	class Period extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teacher
 *
 * @property int $id
 * @property int $degree_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teacher whereDegreeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Teacher whereUpdatedAt($value)
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Degree
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Degree newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Degree newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Degree query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Degree whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Degree whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Degree whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Degree whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Degree whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Degree whereUpdatedAt($value)
 */
	class Degree extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Bonus
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $points
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bonus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bonus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bonus query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bonus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bonus whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bonus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bonus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bonus wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bonus whereUpdatedAt($value)
 */
	class Bonus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContentTag
 *
 * @property int $id
 * @property int $content_id
 * @property int $tag_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentTag whereContentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentTag whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentTag whereUpdatedAt($value)
 */
	class ContentTag extends \Eloquent {}
}

