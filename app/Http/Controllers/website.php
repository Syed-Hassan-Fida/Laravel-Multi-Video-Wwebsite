<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Client;
use App\Models\Creative_Partners;
use App\Models\SendLoveLetter;
use App\Models\archive;
use App\Models\HomeVideo;
use App\Models\HomeVideoInfo;
use App\models\SingleVideo;
use App\Models\SingleVideoInfo;
use App\Models\ArchiveVideoInfo;
use App\Mail\ContactMail;
use Mail;

class website extends Controller
{
    public function brebowIndex(){
        $data["archives"] = [];
        $data["single"] = [];
        $data["archives"] = HomeVideo::orderBy('id','desc')->limit('7')->get();
        $data["single"] = SingleVideo::orderBy('id','desc')->limit('1')->first();
        // return $data["single"];
        return view("website.Amelie_Haeck", $data);
    }

    public function contact(){
        $data['contact'] = [];
        // $data['clients'] = [];
        // $data['partners'] = [];
        // $data['letters'] = [];
        $data['expertise'] = [];
        
        $data['contact'] = Contact::first();
        if($data['contact']){
            $data['expertise'] = json_decode($data['contact']->expertise);
        }
        // return $data['expertise'][0];
        // $data['clients'] = Client::all();
        // $data['partners'] = Creative_Partners::all();
        // $data['letters'] = SendLoveLetter::all();
        
        return view('website.Contact', $data);
    }

    public function archive(){
        $data['archives'] = [];
        $data['archives'] = archive::get();
        // return $data['archives'] ;
        return view('website.Archives', $data);
    }

    public function contacts(Request $request){
        
        $array = [];
        foreach($request->expertise as $item){
            array_push($array, $item);
        }
        $exp = json_encode($array);
        if($request->about_video){
            $destinationPath1 = 'about_videos';
            $myimage1 = time().'.'.$request->about_video->extension();
            $request->about_video->move(public_path($destinationPath1), $myimage1);
        }else{
            $myimage1 = null;
        }
        
        Contact::insert([
            'title' => $request->title,
            'description' => $request->desc,
            'about_video' =>  $myimage1,
            'expertise' => $exp
        ]);
        return redirect()->back();
    }

    public function clients(Request $request){
        Client::insert([
            'title' => $request->client,
        ]);
        return redirect()->back();
    }

    public function partners(Request $request){
        Creative_Partners::insert([
            'title' => $request->title,
            'description' => $request->desc,
        ]);
        return redirect()->back();
    }

    public function letters(Request $request){
        SendLoveLetter::insert([
            'address' => $request->address,
            'email' => $request->email,
            'contact' => $request->contact,
            'socialmedia' => $request->link
        ]);
        return redirect()->back();

    }

    public function archives(Request $request){
        // return $request;
        $destinationPath1 = 'gifs';
        $myimage1 = time().'.'.$request->gif->extension();
        $request->gif->move(public_path($destinationPath1), $myimage1);
        
        $destinationPath2 = 'videos';
        $myimage2 = time().'.'.$request->video->extension();
        $request->video->move(public_path($destinationPath2), $myimage2);

        $arr1 = $request->col1;
        $arr2 = $request->col2;

        $size = sizeof($request->col1);
        $id = archive::insert([
            'year' => $request->year,
            'client' => $request->client,
            'project' => $request->project,
            'industry' => $request->industry,
            'gif' => $myimage1,
            'video' => $myimage2,
            'title' => $request->title,
        ]);

        if($request->col1[0] != null){
            for($i=0; $i<$size; $i++){
                ArchiveVideoInfo::insert([
                    'arch_id' => $id,
                    'col1' => $arr1[$i] ,
                    'col2' => $arr2[$i],
                ]);
            }
        }

        return redirect()->back();
    }

    public function videos(Request $request){
        $data["homeVideoInfo"] = [];
        $data['archiveBio'] = [];
        $data['archiveInfo'] = [];
        $data['archiveBio'] = archive::find($request->id);
        $data['archiveInfo'] = ArchiveVideoInfo::where("arch_id", $request->id)->get();
        // return $data['archiveBio'] ;
        return view('website.video', $data);
    }

    public function allData(Request $request){
        $data['contacts'] = [];
        $data['homeVideos'] = [];
        $data['letters'] = [];
        $data['archives'] = [];
        $data['expertise'] = [];
        $data['homeSingleVideos'] = [];
        
        $data['contacts'] = Contact::first();
        if($data['contacts']){
            $data['expertise'] = json_decode($data['contacts']->expertise);
        }
        $data['homeVideos'] = HomeVideo::all();
        $data['homeSingleVideos'] = SingleVideo::all();
        $data['letters'] = SendLoveLetter::all();
        $data['archives'] = archive::all();
        return view('alldata', $data);
    }


    public function deleteContact(Request $request){
        Contact::where('id', $request->id)->delete();
        return redirect()->back();
    }

    public function deletePertners(Request $request){
        Creative_Partners::where('id', $request->id)->delete();
        return redirect()->back();
    }

    public function deleteLetters(Request $request){
        SendLoveLetter::where('id', $request->id)->delete();
        return redirect()->back();
    }

    public function deleteArchives(Request $request){
        archive::where('id', $request->id)->delete();
        return redirect()->back();
    }

    public function homeVideoSave(Request $request){
        // return sizeof($request->col1);
        // basename() 
        if($request->gif){
            $destinationPath1 = 'gifs';
            $myimage1 = time().'.'.$request->gif->extension();
            $request->gif->move(public_path($destinationPath1), $myimage1);
        }else{
            $myimage1 = null;
        }
        
        if($request->video){
            $destinationPath2 = 'videos';
            $myimage2 = time().'.'.$request->video->extension();
            $request->video->move(public_path($destinationPath2), $myimage2);
        }else{
            $myimage2 = null;
        }

        $arr1 = $request->col1;
        $arr2 = $request->col2;

        $size = sizeof($request->col1);
        
        $id = HomeVideo::insertGetId([
            'title' => $request->title,
            'gif' => $myimage1,
            'video' => $myimage2
        ]);

        if($request->col1[0] != null){
            for($i=0; $i<$size; $i++){
                HomeVideoInfo::insert([
                    'home_id' => $id,
                    'col1' => $arr1[$i] ,
                    'col2' => $arr2[$i],
                ]);
            }
        }


        return redirect()->back();
    }


    public function homeVideoDisplay(Request $request){
        $data['archiveBio'] = [];
        $data['homeVideoInfo'] = [];
        $data['archiveInfo'] = [];
        $data['archiveBio'] = HomeVideo::find($request->id);
        $data['homeVideoInfo'] = HomeVideoInfo::where("home_id", $request->id)->get();
        // return sizeof($data['homeVideoInfo']);
        return view('website.video', $data);
    }


    public function updateA(Request $request){
        $data['archives'] = [];
        $data['archives'] = archive::find($request->id);
        // return $data['archives']->year;
        return view("website.updateArchive", $data);
    }

    public function updateArchives(Request $request){
        archive::where("id", $request->arch_id)->update([
            'year' => $request->year,
            'client' => $request->client,
            'project' => $request->project,
            'industry' => $request->industry,
            'title' => $request->title,
        ]);
        
        return redirect()->back();
    }

    public function updateAvideo(Request $request){
        if($request->gif){
            $destinationPath1 = 'gifs';
            $myimage1 = time().'.'.$request->gif->extension();
            $request->gif->move(public_path($destinationPath1), $myimage1);
        }else{
            $myimage1 = null;
        }
        archive::where("id", $request->arch_id)->update([
            'gif' => $myimage1,
        ]);
        return redirect()->back();
    }

    public function updateAgif(Request $request){
        if($request->video){
            $destinationPath2 = 'videos';
            $myimage2 = time().'.'.$request->video->extension();
            $request->video->move(public_path($destinationPath2), $myimage2);
        }else{
            $myimage2 = null;
        }
        archive::where("id", $request->arch_id)->update([
            'video' => $myimage2,
        ]);
        return redirect()->back();
    }

    public function sendEmail(Request $request){
        $details = array(
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'message' => $request->message ,
        );
        // Mail::to('hassansfida@gmail.com')->send(new ContactMail($details));
        \Mail::send('mail', ['details' => $details ], function($message) use ($details){
            $message->from($details['email']);
            $message->to('bruno@brebow.com', 'Admin')->subject('Message');
        });
        return redirect()->back()->with('message','Mail Send Successfully');
    }

    public function homeSingleVideoSave(Request $request){
        // return $request->gif;
        // basename() 
        if($request->gif){
            $destinationPath1 = 'gifs';
            $myimage1 = time().'.'.$request->gif->extension();
            $request->gif->move(public_path($destinationPath1), $myimage1);
        }else{
            $myimage1 = null;
        }
        
        if($request->video){
            $destinationPath2 = 'videos';
            $myimage2 = time().'.'.$request->video->extension();
            $request->video->move(public_path($destinationPath2), $myimage2);
        }else{
            $myimage2 = null;
        }

        $arr1 = $request->col1;
        $arr2 = $request->col2;

        $size = sizeof($request->col1);
        
        $id = SingleVideo::insertGetId([
            'title' => $request->title,
            'gif' => $myimage1,
            'video' => $myimage2
        ]);

        if($request->col1[0] != null){
            for($i=0; $i<$size; $i++){
                SingleVideoInfo::insert([
                    'home_id' => $id,
                    'col1' => $arr1[$i] ,
                    'col2' => $arr2[$i],
                ]);
            }
        }


        return redirect()->back();
    }


    public function homeSingleVideoDisplay(Request $request){
        $data['archiveBio'] = [];
        $data['homeVideoInfo'] = [];
        $data['archiveBio'] = SingleVideo::find($request->id);
        $data['homeVideoInfo'] = SingleVideoInfo::where("home_id", $request->id)->get();
        // return sizeof($data['homeVideoInfo']);
        return view('website.single-video', $data);
    }


    public function homeSingleVideoDelete(Request $request){
        SingleVideo::where('id', $request->id)->delete();
        SingleVideoInfo::where("home_id", $request->id)->delete();
        return redirect()->back();
    }
}