@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                      <form action={{ asset('api/v1/document') }} method="post" >

                          <input type="text" name="status">
                          <input type="text" name="payload">
                          <button type="submit" >add</button>


                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

