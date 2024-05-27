<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TracerStudy extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'fullName',
        'gender',
        'birthDate',
        'address',
        'phone',
        'email',
        'graduationYear',
        'major',
        'furtherStudy',
        'institution',
        'program',
        'educationLevel',
        'educationStatus',
        'employmentStatus',
        'companyName',
        'industry',
        'jobTitle',
        'startDate',
        'companyAddress',
        'salary',
        'jobMatch',
        'previousJob',
        'skillsFromSMK',
        'additionalSkills',
        'skillsToImprove',
        'trainings',
        'certifications',
        'curriculumSatisfaction',
        'facilitiesSatisfaction',
        'suggestions',
        'careerPlans',
        'challenges',
        'advice',
    ];
}
  