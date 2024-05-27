<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tracer_studies', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('gender');
            $table->date('birthDate');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->integer('graduationYear');
            $table->string('major');
            $table->string('furtherStudy');
            $table->string('institution');
            $table->string('program');
            $table->string('educationLevel');
            $table->string('educationStatus');
            $table->string('employmentStatus');
            $table->string('companyName');
            $table->string('industry');
            $table->string('jobTitle');
            $table->date('startDate');
            $table->string('companyAddress');
            $table->integer('salary');
            $table->string('jobMatch');
            $table->text('previousJob');
            $table->text('skillsFromSMK');
            $table->text('additionalSkills');
            $table->text('skillsToImprove');
            $table->text('trainings');
            $table->text('certifications');
            $table->text('curriculumSatisfaction');
            $table->text('facilitiesSatisfaction');
            $table->text('suggestions');
            $table->text('careerPlans');
            $table->text('challenges');
            $table->text('advice');
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void 
    {
        Schema::dropIfExists('tracer_studies');
    }
};
