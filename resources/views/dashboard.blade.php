@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@section('content')
  <p><span style="color: #6E7191">Pages /</span> Dashboard </p>

  <h2 class="mt-5" style="font-size: 35px; font-weight: 400;">Hello Friends! 👋,</h2>
  <p>Stay focused today and don’t forget to do your best!</p>
  <p class="mt-5">Overview</p>
  <div>
    <div class="row gap-5">
      <div class="col-md-4">
        <div class="task-card blue-dark">
          <div>
            <h5 style="font-size: 16px; font-weight: 400;">Task Incompleted</h5>
            <div class="task-number">30</div>
          </div>
          <div class="icon-container">
            <i class="fa-solid fa-list-check text-warning"></i>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="task-card blue-light">
          <div>
            <h5 style="font-size: 16px; font-weight: 400;">Number of Task</h5>
            <div class="task-number">5</div>
          </div>
          <div class="icon-container">
            <i class="fa-solid fa-clipboard-list" style="color: #9DACFF"></i>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="task-card blue-dark">
          <div>
            <h5 style="font-size: 16px; font-weight: 400;">Task Completed</h5>
            <div class="task-number">5</div>
          </div>
          <div class="icon-container">
            <i class="fa-solid fa-check-circle" style="color: #198754"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
