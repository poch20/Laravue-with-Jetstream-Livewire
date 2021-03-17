<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\UserExtras;
use App\Models\ResumeData;
use App\Models\Certs;

class ResumeController extends Controller
{

  private $image_ext = ['jpg', 'jpeg', 'png', 'gif'];
  private $audio_ext = ['mp3', 'ogg', 'mpga'];
  private $video_ext = ['mp4', 'mpeg'];
  private $document_ext = ['doc', 'docx', 'pdf', 'odt'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      // // $flight = ResumeData::where('user_id', 'FR 900')->first();
      // //
      // // $flight->number = 'FR 456';
      // //
      // // $flight->refresh();
      // //
      // // $flight->number; // "FR 900"
      //return ResumeData::latest()->paginate(10);
      return ResumeData::where('file_type', '=', 'pdf')->paginate(10);
    }
    public function apiRequestPHPCallBySessionId($sessionAuthId){
      return ResumeData::where('user_id', '=', $sessionAuthId)->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      if(isset($request['nameAttr__HInpTPostRes'])){

        $nameAttrInpTHiddenResume = $request['nameAttr__HInpTPostRes'];
        $user_id = $request['nameAttr__HInpTPostResProps'];
        $max_size = (int)ini_get('upload_max_filesize') * 1000;
        $all_ext = implode(',', $this->allExtensions());
        $all_ext;
        $this->validate($request, [
            'nameAttr__InpTFPostRes' => 'required|file|mimes:doc,pdf,docx,zip' . $all_ext . '|max:' . $max_size
        ]);
        $storeInputs = ResumeData::create([
          'id' => null,
          'description' => $request['nameAttr__InpTPostRes'],
          'user_id' => $user_id,
        ]);

        $lastInsertedId = $storeInputs->id;
        $lastInsertedId;
        if($lastInsertedId != null){
          $typeAttrFile = $request['uploadFile'];
          $idOfUserSession = $request['nameAttr__HInpTPostResProps'];
          //------------------------------------------------------Laravel Model Eloquents------------------------------------------------------
          $associate_model_or_table = ResumeData::firstWhere('id', $lastInsertedId);
          $foreign_parent = User::firstWhere('id', $user_id);
          //------------------------------------------------------Laravel Model Eloquents------------------------------------------------------

          //------------------------------------------------------Dynamic Linking------------------------------------------------------
          $attachment = $foreign_parent->userResumes()->attach($associate_model_or_table);
          //------------------------------------------------------Dynamic Linking------------------------------------------------------


          $usersHaveManyResumes = User::findOrFail($idOfUserSession)->userResumes;

          foreach ($usersHaveManyResumes as $forEachListObjects) {}
          $currMtMFsId = $forEachListObjects->id;
          $currDocuFileData = $forEachListObjects->resume_file;

          if($typeAttrFile != $currDocuFileData){
            $uploadedFile = $request->file('nameAttr__InpTFPostRes');

            $filenameExt = $nameAttrInpTHiddenResume.'.'.$uploadedFile->getClientOriginalExtension();

            $fileType = $this->getType($filenameExt);

            $request->nameAttr__InpTFPostRes->move('storage/', $filenameExt);
            //$uploadedFile->move('storage/', $filenameExt);

            ResumeData::where('id', $lastInsertedId)
                      ->where('resume_file', 'resume_sample.pdf')
                      ->update(['resume_file' => $nameAttrInpTHiddenResume]);
          }// end if ($typeAttrFile != $currDocuFileData)
        }// end if $lastInsertedId != null
      } //End if MASTER
    } // End of Store Method

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function readResFiles(){
     return Resumes::where('file_type', '=', 'pdf')->paginate(10);
    }
    private function getType($ext)
    {
        if (in_array($ext, $this->image_ext)) {
            return 'image';
        }

        if (in_array($ext, $this->audio_ext)) {
            return 'audio';
        }

        if (in_array($ext, $this->video_ext)) {
            return 'video';
        }

        if (in_array($ext, $this->document_ext)) {
            return 'document';
        }
    }
    private function allExtensions()
    {
        return array_merge($this->image_ext, $this->audio_ext, $this->video_ext, $this->document_ext);
    }

    /*START Additonal Implementations*/
    public function getResumeAPIResponseData(Request $request, $id=null){

      //Display Table Data


      /*Inverse
      $findOrFailId = Resumes::findOrFail($id)->resumesBelongsToManyDifferentUsers;
      echo $findOrFailId;
      */
      $anArr = array($id);
      $trueArr = explode('","', trim($id, '"'));
      foreach ($trueArr as $key => $value) {
        echo $value, "\n"; //NOTE USED BUT JUST ECHOED OUT!! BUT YOU DON'T UNDERSTAND
        $single_user_id = explode(',' , $id);

        foreach($single_user_id as $forEachId) {
          $findOrFailId = ResumeData::findOrFail($forEachId);
          $foreignKeyOfResTable = $findOrFailId->user_id;
          return User::findOrFail($foreignKeyOfResTable);
        }
      }

    }

    public function postResVueDel(Request $request, $id=null){
      if(isset($request['nameAttr__InpTChildrenColCheckbox'])){
        //gettype($request['checkboxNameAttrVal']);
        $singeOrMultipleIds = $request['nameAttr__InpTChildrenColCheckbox'];
        $anArr = array($singeOrMultipleIds);
        $trueArr = explode('","', trim($singeOrMultipleIds, '"'));


        foreach ($trueArr as $key => $value) {
          echo $value, "\n"; //NOTE USED BUT JUST ECHOED OUT!! BUT YOU DON'T UNDERSTAND
          if($request['nameAttr__SelectOpts'] === 'Delete'){
            $single_user_id = explode(',' , $id);
            foreach($single_user_id as $id) {
                ResumeData::findOrFail($id)->delete();
            }

            return ['message' => 'User Deleted'];
          }
        }
      }
    }


   public function resumeSearchResults(){
     if($search = \Request::get('ret')){
       $usersHasManyResumes = Resumes::where(function($queryStrings) use ($search){
         $queryStrings->where('description','LIKE',"%$search%")
               ->orWhere('resume_file','LIKE',"%$search%");
       })->paginate(6);
     }else{
       $usersHasManyResumes = Resumes::latest()->paginate(6);
     }
     return $usersHasManyResumes;
   }

   public function resumeSearchResultsOfTypeUserUploads(){
     if($search = \Request::get('anyVar')){
       $usersHasManyResumes = ResumeData::where(function($queryStrings) use ($search){
         $queryStrings->where('description','LIKE',"%$search%")
               ->orWhere('resume_file','LIKE',"%$search%");
       })->paginate(6);
     }else{
       $usersHasManyResumes = ResumeData::latest()->paginate(6);
     }
     return $usersHasManyResumes;
   }
   /*END Additonal Implementations*/
}
