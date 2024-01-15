<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Social;
use App\Models\Profile;
use App\Models\Showcase;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function destroySkill($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect('/experiences');
    }

    public function destroyEdu($id)
    {
        $edu = Education::findOrFail($id);
        $edu->delete();

        return redirect('/experiences');
    }

    public function destroySocial($id)
    {
        $social = Social::findOrFail($id);
        $social->delete();

        return redirect('/socials');
    }

    public function destroyShowcase($id)
    {
        $showcase = Showcase::findOrFail($id);
        $showcase->delete();

        return redirect('/showcases');
    }

    public function destroyExperience($id)
    {
        $experiences = Experience::findOrFail($id);
        $experiences->delete();

        return redirect('/experiences');
    }

    public function storeDataExperience(Request $request)
    {
        $experiences = new Experience();
        $experiences->position = $request->position;
        $experiences->companies = $request->companies;
        $experiences->start = $request->start;
        $experiences->end = $request->end;
        $experiences->save();

        return redirect('/experiences');
    }

    public function storeDataSkill(Request $request)
    {
        $skills = new Skill();
        $skills->names = $request->names;
        $skills->levels = $request->levels;
        $skills->save();

        return redirect('/experiences');
    }

    public function storeDataEdu(Request $request)
    {
        $edu = new Education();
        $edu->schools = $request->schools;
        $edu->majors = $request->majors;
        $edu->start = $request->start;
        $edu->end = $request->end;
        $edu->save();

        return redirect('/experiences');
    }

    public function storeDataSocial(Request $request)
    {
        $social = new Social();
        $social->names = $request->names;
        $social->url = $request->url;
        $social->save();

        return redirect('/socials');
    }

    public function storeDataShowcase(Request $request)
    {
        $showcases = new Showcase();

        if ($request->file('images')) {
            $images_function = $request->file('images')->store('image', 'public');
            $showcases->images = $images_function;
        }

        if ($request->file('powers')) {
            $powers_function = $request->file('powers')->store('image', 'public');
            $showcases->powers = $powers_function;
        }

        $showcases->names = $request->names;
        $showcases->roles = $request->roles;
        $showcases->save();

        return redirect('/showcases');
    }

    public function updateImage(Request $request)
    {

        $request->file('image')->store('image');
        $profile = Profile::where('id', 1)->first();
        $profile->image = $request->image;
        $profile->update();

        return redirect('/profile');
    }

    public function getDataSocial()
    {
        $socials = Social::orderBy('id', 'desc')->get();
        return view('/social', ['dataSocials' => $socials]);
    }

    public function getDatasExperiences()
    {
        $experiences = Experience::orderBy('id', 'desc')->get();
        $skills = Skill::orderBy('id', 'desc')->get();
        $edus = Education::orderBy('id', 'desc')->get();
        return view('/experiences', ['dataExperiences' => $experiences, 'dataSkills' => $skills, 'dataEdus' => $edus]);
    }

    public function updateDataProfile(Request $request)
    {
        $profiles = Profile::where('id', 1)->first();

        if ($request->file('image')) {
            $image_function = $request->file('image')->store('image', 'public');
            $profiles->image = $image_function;
        }

        if ($request->file('logo')) {
            $logo_function = $request->file('logo')->store('image', 'public');
            $profiles->logo = $logo_function;
        }

        if ($request->file('cv')) {
            $cv_function = $request->file('cv')->store('image', 'public');
            $profiles->cv = $cv_function;
        }


        $profiles->headline = $request->headline;
        $profiles->name = $request->name;
        $profiles->email = $request->email;
        $profiles->region = $request->region;
        $profiles->update();

        return redirect('/admin');
    }

    public function updateDataShowcase(Request $request, $id)
    {
        $showcase = Showcase::findOrFail($id);

        if ($request->file('images')) {
            $images_function = $request->file('images')->store('image', 'public');
            $showcase->images = $images_function;
        }

        if ($request->file('powers')) {
            $powers_function = $request->file('powers')->store('image', 'public');
            $showcase->powers = $powers_function;
        }

        $showcase->names = $request->names;
        $showcase->roles = $request->roles;
        $showcase->update();

        return redirect('/showcases');
    }

    public function updateDataSkill(Request $request, $id)
    {
        $skills = Skill::findOrFail($id);
        $skills->names = $request->names;
        $skills->levels = $request->levels;
        $skills->update();

        return redirect('/experiences');
    }

    public function updateCrownDisabled($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->crowns = 1;
        $skill->update();

        return redirect('/experiences');
    }

    public function updateCrownActive($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->crowns = 0;
        $skill->update();

        return redirect('/experiences');
    }

    public function updateDataEducation(Request $request, $id)
    {
        $edu = Education::findOrFail($id);
        $edu->schools = $request->schools;
        $edu->majors = $request->majors;
        $edu->start = $request->start;
        $edu->end = $request->end;
        $edu->update();

        return redirect('/experiences');
    }

    public function updateDataSocial(Request $request, $id)
    {
        $social = Social::findOrFail($id);
        $social->names = $request->names;
        $social->url = $request->url;
        $social->update();

        return redirect('/socials');
    }

    public function updateCopyright(Request $request)
    {
        $copyright = Profile::where('id', 1)->first();
        $copyright->copyright = $request->copyright;
        $copyright->update();

        return redirect('/admin');
    }

    public function updateDataExperience(Request $request, $id)
    {
        $experiences = Experience::findOrFail($id);
        $experiences->position = $request->position;
        $experiences->companies = $request->companies;
        $experiences->start = $request->start;
        $experiences->end = $request->end;
        $experiences->update();

        return redirect('/experiences');
    }

    public function getDatasProfile()
    {
        $profiles = Profile::first();
        // return view('/landing-page', ['dataProfiles' => $profiles, 'dataQuotes' => $quotes, 'dataSkills' => $skills, 'dataExperiences' => $experiences, 'dataSocials' => $socials, 'dataEducations' => $educations, 'dataCopyright' => $copyright]);
        return view('/profile', ['dataProfiles' => $profiles]);
    }

    public function getDatasShowcase()
    {
        $showcases = Showcase::orderBy('id', 'desc')->get();
        return view('/showcases', ['dataShowcases' => $showcases]);
    }

    public function getDatas()
    {
        // return view('/landing-page', ['dataProfiles' => $profiles, 'dataQuotes' => $quotes, 'dataSkills' => $skills, 'dataExperiences' => $experiences, 'dataSocials' => $socials, 'dataEducations' => $educations, 'dataCopyright' => $copyright]);
        $copyright = Profile::first();
        return view('/admin', ['dataCopyright' => $copyright]);
    }
}
