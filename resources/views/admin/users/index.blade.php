@extends('layouts.admin')

@section('content')
    <h1>Users</h1>
     <table class="table table-hover">
         <thead>
           <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Email</th>
               <th>Created</th>
               <th>Updated</th>
               <th>Active</th>
               <th>Role</th>
           </tr>
         </thead>
         <tbody>

         @if($users)

             @foreach($users as $user)
           <tr>
             <td>{{$user->id}}</td>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
               <!-- chain with carbon for dates method makes readable for humans -->
               <td>{{$user->created_at->diffForHumans()}}</td>
               <td>{{$user->updated_at->diffForHumans()}}</td>
               <td>{{$user->is_active == 1 ? 'Active': 'Not Active'}}</td>
               @if($user->role)
                   <td>{{$user->role->name}}</td>

               @else
                   <td>No Role Assigned Yet</td>
               @endif
           </tr>
                @endforeach
           @endif
         </tbody>
       </table>

@stop