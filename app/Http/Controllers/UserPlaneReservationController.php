<?php


namespace App\Http\Controllers;

use App\UserPlaneReservation;
use App\PlaneShedule;
use Illuminate\Http\Request;
use Carbon\Carbon;
class UserPlaneReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $today = Carbon::today();
    return view('user_plane_reservation.index', ['today'=>$today]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserPlaneReservation  $userPlaneReservation
     * @return \Illuminate\Http\Response
     */
    public function show(UserPlaneReservation $userPlaneReservation)
    {
        //
    }

    public function search(Request $request){
         $searchResult = PlaneShedule::where('takeoff_airport', $request->input('takeoff_airport'))                       ->where('landing_airport', $request->input('landing_airport'))->get();
         
         if ($searchResult){
            return view('user_plane_reservation.show',['searchResult' => $searchResult]);
        }
        
        /* if(Auth::user()->id == $project->user_id){
         $user = User::where('email', $request->input('email'))->first(); //single record
         //check if user is already added to the project
         $projectUser = ProjectUser::where('user_id',$user->id)
                                    ->where('project_id',$project->id)
                                    ->first();
                                    
            if($projectUser){
                //if user already exists, exit 
                return redirect()->route('projects.show', ['project'=> $project->id])
                ->with('success' ,  $request->input('email').' is already a member of this project');
               
            }
            if($user && $project){
                $project->users()->attach($user->id); 
                        return redirect()->route('projects.show', ['project'=> $project->id])
                        ->with('success' ,  $request->input('email').' was added to the project successfully');
                       
                    }
                    
         }
         return redirect()->route('projects.show', ['project'=> $project->id])
         ->with('errors' ,  'Error adding user to project'); */
        
         
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserPlaneReservation  $userPlaneReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPlaneReservation $userPlaneReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserPlaneReservation  $userPlaneReservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPlaneReservation $userPlaneReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserPlaneReservation  $userPlaneReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPlaneReservation $userPlaneReservation)
    {
        //
    }
}
