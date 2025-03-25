@extends('layouts.app')
@section('content')
  <style>
    .badge-low {
      background-color: #A3E635;
      color: #fff;
      font-weight: 400;
      padding: 5px 10px;
      border-radius: 4px;
    }

    .badge-medium {
      background-color: #FFC107;
      color: #fff;
      font-weight: 400;
      padding: 5px 10px;
      border-radius: 4px;
    }

    .badge-high {
      background-color: #EF4444;
      color: #fff;
      font-weight: 400;
      padding: 5px 10px;
      border-radius: 4px;
    }

    .badge-success {
      background-color: #22C55E;
      color: #fff;
      font-weight: 400;
      padding: 5px 10px;
      border-radius: 4px;
    }

    .badge-pending {
      background-color: #FFB347;
      color: #fff;
      font-weight: 400;
      padding: 5px 10px;
      border-radius: 4px;
    }

    .action-btn {
      border: none;
      padding: 6px 8px;
      border-radius: 5px;
    }

    .table tbody tr {
      height: 70px;
    }
  </style>

  <p><span style="color: #6E7191">Pages /</span> Tasks </p>
  <div class="d-flex justify-content-end">
    <a href="/task/create" class="btn btn-primary" style="background-color: #6261FE; padding:6px 22px;">+ Add
      Task</a>
  </div>
  <div class="card mt-4 border-0 shadow">
    <div class="card-body">
      <div>
        <h5 class="mb-4">Tasks List</h5>
        <table class="table align-middle">
          <thead>
            <tr>
              <th style="color: #5A607F; font-weight: 500">No</th>
              <th style="color: #5A607F; font-weight: 500">Tasks Name</th>
              <th style="color: #5A607F; font-weight: 500">Date</th>
              <th style="color: #5A607F; font-weight: 500">Description</th>
              <th style="color: #5A607F; font-weight: 500">Priority</th>
              <th style="color: #5A607F; font-weight: 500">Status</th>
              <th style="color: #5A607F; font-weight: 500">Action</th>
            </tr>
          </thead>
          {{-- @if ($tasks->isEmpty())
            <tbody>
              <tr>
                <td colspan="7" class="text-center">No available data tasks</td>
              </tr>
            </tbody>
          @else
          <tbody>
            @foreach ($tasks as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->task_name }}</td>
                <td>{{ \Carbon\Carbon::parse($item->date)->format('F j, Y') }}</td>
                <td>{{ Str::limit($item->description, 13) }}</td>
                <td><span
                    class="badge {{ $item->priority == 'low' ? 'badge-low' : ($item->priority == 'medium' ? 'badge-medium' : 'badge-high') }}">{{ $item->priority }}</span>
                </td>
                <td><span class="badge badge-pending">{{ $item->status }}</span></td>
                <td>
                  <a href="{{ route('tasks.edit', $item->id) }}" class="btn" style="background-color: #FFC107;"><i
                      class="fa-solid fa-pen text-white"></i></a>

                  <button class="btn delete-task" data-id="{{ $item->id }}" style="background-color: #DC3545;">
                    <i class="fa-solid fa-trash text-white"></i>
                  </button>
                  <form id="delete-form-{{ $item->id }}" action="{{ route('tasks.destroy', $item->id) }}"
                    method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                  </form>
                  <a href="{{ route('tasks.done', $item->id) }}" class="btn" style="background-color: #198754"
                    onclick="event.preventDefault(); document.getElementById('done-form-{{ $item->id }}').submit();">
                    <i class="fa-solid fa-check text-white"></i>
                  </a>


                  <form id="done-form-{{ $item->id }}" action="{{ route('tasks.done', $item->id) }}" method="POST"
                    style="display: none;">
                    @csrf
                    @method('PUT')
                  </form>

                </td>
              </tr>
            @endforeach
          </tbody>
          @endif --}}
          <tbody>
            <tr>
              <td>1</td>
              <td>Coding</td>
              <td>5 May,2025</td>
              <td>Description</td>
              <td><span class="badge badge-medium">Medium</span>
              </td>
              <td><span class="badge badge-pending">Pending</span></td>
              <td>
                <a href="/task/edit" class="btn" style="background-color: #FFC107;"><i
                    class="fa-solid fa-pen text-white"></i></a>

                <button class="btn delete-task" style="background-color: #DC3545;">
                  <i class="fa-solid fa-trash text-white"></i>
                </button>

                <a href="" class="btn" style="background-color: #198754">
                  <i class="fa-solid fa-check text-white"></i>
                </a>

                {{-- <button class="btn delete-task" data-id="{{ $item->id }}" style="background-color: #DC3545;">
                    <i class="fa-solid fa-trash text-white"></i>
                  </button>
                  <form id="delete-form-{{ $item->id }}" action="{{ route('tasks.destroy', $item->id) }}"
                    method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                  </form>
                  <a href="{{ route('tasks.done', $item->id) }}" class="btn" style="background-color: #198754"
                    onclick="event.preventDefault(); document.getElementById('done-form-{{ $item->id }}').submit();">
                    <i class="fa-solid fa-check text-white"></i>
                  </a>
                  <form id="done-form-{{ $item->id }}" action="{{ route('tasks.done', $item->id) }}" method="POST"
                    style="display: none;">
                    @csrf
                    @method('PUT')
                  </form> --}}

              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
@endsection
