@extends('layouts.app')
@section('content')
  <p><span style="color: #6E7191">Pages / <a href="{{ route('tasks.index') }}" class="text-decoration-none"
        style="color: #6E7191">Tasks</a> </span>
    / Create</p>
  <div class="card mt-4 border-0 shadow">
    <div class="card-body">
      <div>
        <h5 class="mb-4">Form New Task</h5>
      </div>
      <div>
        <form action="{{ route('tasks.store') }}" method="post">
          @method('POST')
          @csrf
          <div>
            <label for="task_name" class="form-label" style="color:#6261FE">Task Name</label>
            <input type="text" name="task_name" class="form-control  mb-3" style="border: 1px solid #6261FE" required>
            @error('task_name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div>
            <label for="date" class="form-label" style="color:#6261FE">Date</label>
            <input type="date" name="date" class="form-control mb-3" min="<?= date('Y-m-d') ?>"
              style="border: 1px solid #6261FE" required>
            @error('date')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div>
            <label for="description" class="form-label" style="color:#6261FE">Description</label>
            <textarea name="description" id="" class="form-control mb-3" style="border: 1px solid #6261FE"></textarea>
            @error('description')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div>
            <label for="priority" class="form-label" style="color:#6261FE">Priority</label>
            <select name="priority" class="form-select" style="border: 1px solid #6261FE" required>
              <option value="" selected disabled hidden>Select Priority</option>
              <option value="low">Low</option>
              <option value="medium">Medium</option>
              <option value="high">High</option>
            </select>
            @error('priority')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="d-flex justify-content-end align-items-center mt-4">
            <a href="{{ route('tasks.index') }}" class="btn btn-md mx-2"
              style="background-color: #6261FE; color: #fff ">Back</a>
            <button type="submit" class="btn btn-md" style="color: #6261FE; border: 1px solid #6261FE">Save</button>
          </div>
        </form>
      </div>

    </div>
  </div>
@endsection
