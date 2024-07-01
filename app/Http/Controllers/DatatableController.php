<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\College;
use App\Models\CollegeReview;
use App\Models\Course;
use App\Models\FAQ;
use App\Models\Location;
use App\Models\Plan;
use App\Models\Program;
use App\Models\Project;
use App\Models\Review;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatatableController extends Controller
{
    public function getAllUsers()
    {

        $users = User::get();
        return DataTables::of($users)
            ->addColumn('id', function ($user) {
                return $user->id;
            })
            ->addColumn('name', function ($user) {
                if (isset($user->name))
                    return $user->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('email', function ($user) {
                if ($user->email)
                    return $user->email;
                else
                    return "-no email-";
            })

            ->addColumn('roles', function ($user) {
                $roles = "No Role Assigned";
                foreach ($user->roles as $role) {
                    $roles = '<span class="badge bg-info">' . $role->name . '</span>';
                }
                return $roles;
            })
            ->addColumn('status', function ($user) {

                $success = '<a class="btn btn-icon btn-success"
                href="' . route('admin.toggleUser', $user->id) . '">
                <em class="icon ni ni-power"></em>
                </a>';
                $danger = ' <a class="btn btn-icon btn-danger"
                href="' . route('admin.toggleUser', $user->id) . '">
                <em class="icon ni ni-power"></em>
                </a>';
                if ($user->is_active == 1)
                    return $success;
                else
                    return $danger;
            })
            ->addColumn('action', function ($user) {

                $html = '<ul class="nk-tb-actions gx-1">
                <li>
                   <div class="drodown"><a href="#"
                       class="dropdown-toggle btn btn-icon btn-trigger"
                       data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                       <ul class="link-list-opt no-bdr">
                           <li>
                               <a href="' . route('admin.editUser', $user->id) . '">
                                   <em class="icon ni ni-edit"></em>
                                   <span>Edit User</span>
                               </a>
                           </li>
                           <li>
                               <a data-bs-toggle="modal"
                                   data-bs-target="#deleteUser' . $user->id . '">
                                   <em class="icon ni ni-trash"></em>
                                   <span>Delete User</span></span>
                               </a>
                           </li>
                           </ui>
                           </div>
                           </div>
                           </li>
                           </ui>';

                return $html;
            })
            ->rawColumns(['id', 'name', 'email', 'roles', 'status', 'action'])
            ->make(true);
    }


    public function getAllprograms()
    {

        $programs = Program::get();
        return DataTables::of($programs)
            ->addColumn('id', function ($program) {
                return $program->id;
            })
            ->addColumn('name', function ($program) {
                if (isset($program->name))
                    return $program->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('duration', function ($program) {
                if (isset($program->duration))
                    return $program->duration;
                else
                    return 'Rating Not Given';
            })
            ->addColumn('description', function ($program) {
                if (isset($program->description))
                    return $program->description;
                else
                    return 'description Not Given';
            })
            ->addColumn('image', function ($program) {
                if ($program->image) {
                    return '<img src="' . asset(json_decode($program->image, true)[0]) . '" alt="program Image" width="180" height="60">';
                } else {
                    return "-no image-";
                }
            })
            ->addColumn('status', function ($program) {

                $success = '<a class="btn btn-icon btn-success"
                href="' . route('admin.toggleProgram', $program->id) . '">
                <em class="icon ni ni-power"></em>
                </a>';
                $danger = ' <a class="btn btn-icon btn-danger"
                href="' . route('admin.toggleProgram', $program->id) . '">
                <em class="icon ni ni-power"></em>
                </a>';
                if ($program->is_active == 1)
                    return $success;
                else
                    return $danger;
            })
            ->addColumn('action', function ($program) {

                $html = '<ul class="nk-tb-actions gx-1">
                <li>
                   <div class="drodown"><a href="#"
                       class="dropdown-toggle btn btn-icon btn-trigger"
                       data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                       <ul class="link-list-opt no-bdr">
                           <li>
                               <a href="' . route('admin.editPrograms', $program->id) . '">
                                   <em class="icon ni ni-edit"></em>
                                   <span>Edit program</span>
                               </a>
                           </li>
                           <li>
                               <a data-bs-toggle="modal"
                                   data-bs-target="#deleteprogram' . $program->id . '">
                                   <em class="icon ni ni-trash"></em>
                                   <span>Delete program</span></span>
                               </a>
                           </li>
                           </ui>
                           </div>
                           </div>
                           </li>
                           </ui>';

                return $html;
            })
            ->rawColumns(['id', 'name', 'duration', 'description', 'image', 'status', 'action'])
            ->make(true);
    }


    public function getAllprojects()
    {

        $projects = Project::get();
        return DataTables::of($projects)
            ->addColumn('id', function ($project) {
                return $project->id;
            })
            ->addColumn('name', function ($project) {
                if (isset($project->name))
                    return $project->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('seo', function ($project) {
                if (isset($project->seo))
                    return $project->seo;
                else
                    return 'SEO Not Given';
            })
            ->addColumn('description', function ($project) {
                if (isset($project->description))
                    return $project->description;
                else
                    return 'description Not Given';
            })
            ->addColumn('image', function ($project) {
                if ($project->image) {
                    return '<img src="' . asset(json_decode($project->image, true)[0]) . '" alt="project Image" width="180" height="60">';
                } else {
                    return "-no image-";
                }
            })
            ->addColumn('status', function ($project) {

                $success = '<a class="btn btn-icon btn-success"
                href="' . route('admin.toggleProject', $project->id) . '">
                <em class="icon ni ni-power"></em>
                </a>';
                $danger = ' <a class="btn btn-icon btn-danger"
                href="' . route('admin.toggleProject', $project->id) . '">
                <em class="icon ni ni-power"></em>
                </a>';
                if ($project->is_active == 1)
                    return $success;
                else
                    return $danger;
            })
            ->addColumn('action', function ($project) {

                $html = '<ul class="nk-tb-actions gx-1">
                <li>
                   <div class="drodown"><a href="#"
                       class="dropdown-toggle btn btn-icon btn-trigger"
                       data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                       <ul class="link-list-opt no-bdr">
                           <li>
                               <a href="' . route('admin.editProjects', $project->id) . '">
                                   <em class="icon ni ni-edit"></em>
                                   <span>Edit project</span>
                               </a>
                           </li>
                           <li>
                               <a data-bs-toggle="modal"
                                   data-bs-target="#deleteproject' . $project->id . '">
                                   <em class="icon ni ni-trash"></em>
                                   <span>Delete project</span></span>
                               </a>
                           </li>
                           </ui>
                           </div>
                           </div>
                           </li>
                           </ui>';

                return $html;
            })
            ->rawColumns(['id', 'name', 'seo', 'description', 'image', 'slug', 'status', 'action'])
            ->make(true);
    }

    public function getAllReviews()
    {
        $reviews = Review::get();
        return DataTables::of($reviews)
            ->addColumn('id', function ($review) {
                return $review->id;
            })
            ->addColumn('name', function ($review) {
                return $review->name ?? 'Name Not Given';
            })
            ->addColumn('position', function ($review) {
                return $review->position ?? 'Position Not Given';
            })
            ->addColumn('review', function ($review) {
                return $review->review ?? 'Review Not Given';
            })
            ->addColumn('image', function ($review) {
                if ($review->image) {
                    return '<img src="' . asset($review->image) . '" alt="review Image" width="100" height="100">';
                } else {
                    return "-no image-";
                }
            })
            ->addColumn('status', function ($review) {
                $buttonClass = $review->is_active == 1 ? 'btn-success' : 'btn-danger';
                return '<div style="text-align: center;">
                        <a class="btn btn-icon ' . $buttonClass . '" href="' . route('admin.toggleReview', $review->id) . '">
                            <em class="icon ni ni-power"></em>
                        </a>
                    </div>';
            })
            ->addColumn('action', function ($review) {
                return '<ul class="nk-tb-actions gx-1">
                        <li>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown">
                                    <em class="icon ni ni-more-h"></em>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="' . route('admin.editReviews', $review->id) . '">
                                            <em class="icon ni ni-edit"></em>
                                            <span>Edit Review</span>
                                        </a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#deleteReview' . $review->id . '">
                                            <em class="icon ni ni-trash"></em>
                                            <span>Delete Review</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>';
            })
            ->rawColumns(['id', 'name', 'position', 'review', 'status', 'image', 'action'])
            ->make(true);
    }




    public function getAllSubscriptions(Request $request)
    {
        // dd($request->input());
        $subscriptions = Subscription::with('user', 'plan')->get();
        return DataTables::of($subscriptions)
            ->addColumn('id', function ($subs) {
                return $subs->id;
            })
            ->addColumn('plan', function ($subs) {
                if ($subs->plan)
                    return $subs->plan->name;
                else
                    return "-no plan-";
            })
            ->addColumn('username', function ($subs) {
                if (isset($subs->user->name))
                    return $subs->user->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('duration', function ($subs) {
                return $subs->duration;
            })

            ->addColumn('insurance_type', function ($subs) {
                if ($subs->insurance_type)
                    return $subs->insurance_type;
                else
                    return "-no type-";
            })
            ->addColumn('start_date', function ($subs) {
                if ($subs->start_date)
                    return $subs->start_date;
                else
                    return "-no date-";
            })
            ->addColumn('end_date', function ($subs) {
                if ($subs->end_date)
                    return $subs->end_date;
                else
                    return "-no date-";
            })
            ->addColumn('payment_status', function ($subs) {

                return "--";
            })


            ->rawColumns(['id', 'plan', 'username', 'duration', 'insurance_type', 'start_date', 'end_date', 'payment_status'])
            ->make(true);
    }



    public function getReportSubscription(Request $request)
    {

        $userid = (isset($request->userId)) ? $request->userId : 'all';
        if ($userid == 'all') {
            $subscriptions = Subscription::with('user', 'plan')->get();
        } else {
            $subscriptions = Subscription::where('user_id', $userid)->with('user', 'plan')->get();
        }

        return DataTables::of($subscriptions)
            ->addColumn('id', function ($subs) {
                return $subs->id;
            })
            ->addColumn('plan', function ($subs) {
                if ($subs->plan)
                    return $subs->plan->name;
                else
                    return "-no plan-";
            })
            ->addColumn('username', function ($subs) {
                if (isset($subs->user->name))
                    return $subs->user->name;
                else
                    return 'Name Not Given';
            })
            ->addColumn('duration', function ($subs) {
                return $subs->duration;
            })

            ->addColumn('insurance_type', function ($subs) {
                if ($subs->insurance_type)
                    return $subs->insurance_type;
                else
                    return "-no type-";
            })
            ->addColumn('start_date', function ($subs) {
                if ($subs->start_date)
                    return $subs->start_date;
                else
                    return "-no date-";
            })
            ->addColumn('end_date', function ($subs) {
                if ($subs->end_date)
                    return $subs->end_date;
                else
                    return "-no date-";
            })
            ->addColumn('payment_status', function ($subs) {

                return "--";
            })


            ->rawColumns(['id', 'plan', 'username', 'duration', 'insurance_type', 'start_date', 'end_date', 'payment_status'])
            ->make(true);
    }
}
