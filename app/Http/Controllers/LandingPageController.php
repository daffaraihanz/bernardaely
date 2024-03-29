<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Profile;
use App\Models\Showcase;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function getDatas()
    {
        $profiles = Profile::all();
        $quotes = Quote::first();
        $skills = Skill::orderBy('id', 'desc')->get();
        $experiences = Experience::orderBy('id', 'desc')->get();
        $educations = Education::orderBy('id', 'desc')->get();
        $socials = Social::orderBy('id', 'desc')->get();

        $showcases = Showcase::orderBy('id', 'desc')->get();

        return view('/landing-page', ['dataShowcases' => $showcases, 'dataProfiles' => $profiles, 'dataQuotes' => $quotes, 'dataSkills' => $skills, 'dataExperiences' => $experiences, 'dataSocials' => $socials, 'dataEducations' => $educations]);
    }
}
