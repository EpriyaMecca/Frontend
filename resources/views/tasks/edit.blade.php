@extends('layouts.app')
@section('content')
  <p><span style="color: #6E7191">Pages / <a href="/task" class="text-decoration-none" style="color: #6E7191">Tasks</a>
    </span>
    / Edit</p>
  <div class="card mt-4 border-0 shadow">
    <div class="card-body">
      <div>
        <h5 class="mb-4">Form Edit Task</h5>
      </div>
      <div>
        <form action="" method="post">

          <div>
            <label for="task_name" class="form-label" style="color:#6261FE">Task Name</label>
            <input type="text" name="task_name" value="" class="form-control  mb-3"
              style="border: 1px solid #6261FE">
          </div>
          <div>
            <label for="date" class="form-label" style="color:#6261FE">Date</label>
            <input type="date" name="date" value="" class="form-control mb-3"
              style="border: 1px solid #6261FE">
          </div>
          <div>
            <label for="description" class="form-label" style="color:#6261FE">Description</label>
            <textarea name="description" id="" class="form-control mb-3" style="border: 1px solid #6261FE"></textarea>
          </div>
          <div>
            <label for="priority" class="form-label" style="color:#6261FE">Priority</label>
            <select name="priority" class="form-select" style="border: 1px solid #6261FE">
              <option value="" selected></option>
              <option value="low">Low</option>
              <option value="medium">Medium</option>
              <option value="high">High</option>
            </select>
          </div>
          <div class="d-flex justify-content-end align-items-center mt-4">
            <a href="/task" class="btn btn-md mx-2" style="background-color: #6261FE; color: #fff ">Back</a>
            <button type="submit" class="btn btn-md" style="color: #6261FE; border: 1px solid #6261FE">Update</button>
          </div>
        </form>
      </div>

    </div>
  </div>
@endsection
