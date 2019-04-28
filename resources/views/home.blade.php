@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
=======
<main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="/img/ku-logo.png" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Notice Board</h6>
        </div>
      </div>
      <div class="my-3 p-3 bg-white rounded box-shadow">
          <b-table
            bordered
            :fields="{{$fields}}"
            :items="{{ json_encode($notices) }}">
            <template slot="created_by.name" slot-scope="data">
              <p class="media-body pb-3 mb-0 small">
                <h3 class="d-block text-gray-dark">@{{data.item.title}}, <span class="badge badge-light">@{{data.item.created_at | moment}}</span></h3>
                @{{data.item.description}} 
              </p>
              <p class="text-muted">
                Posted By: <a href="#" class="font-italic text-reset">@{{data.item.created_by.name}}</a>.
              </p>
            </template>
        </b-table>
      </div>
    </main>
>>>>>>> Code_V2
@endsection
