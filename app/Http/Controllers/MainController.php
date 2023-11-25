<?php

namespace App\Http\Controllers;

use App\Models\PracticticalWork;
use App\Models\StudentAchivmentFile;
use App\Models\StudentAchivmentImage;
use App\Models\StudentCreationImage;
use App\Models\StudentCreationVideo;
use App\Models\TeacherAchivment;
use App\Models\TeacherMethodicalWork;
use App\Models\TeacherQualification;
use App\Models\Videolesson;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $teacherAchivments = TeacherAchivment::all();
        $teacherQualification = TeacherQualification::all();
        $teacherMethodaical = TeacherMethodicalWork::all();
        return view('index', compact('teacherAchivments', 'teacherQualification', 'teacherMethodaical'));
    }

    public function videolesson()
    {
        $videolesson = Videolesson::all();
        return view('videolesson', compact('videolesson'));
    }

    public function practice()
    {
        $practice = PracticticalWork::all();
        return view('practice', compact('practice'));
    }

    public function studentAchicvments()
    {
        $studentAchivmentImage = StudentAchivmentImage::all();
        $studentAchivmentFile = StudentAchivmentFile::all();
        return view('student-achivment', compact('studentAchivmentImage', 'studentAchivmentFile'));
    }

    public function studentCreation()
    {
        $studentCreationImage = StudentCreationImage::all();
        $studentCreationVideo = StudentCreationVideo::all();
        return view('student-creation', compact('studentCreationImage', 'studentCreationVideo'));
    }
}
