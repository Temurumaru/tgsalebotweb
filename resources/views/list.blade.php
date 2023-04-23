@extends('layouts.admin')


@section('title', 'Royhat')
@section('header_title', APP_NAME)
@section('sub_title', '')

@section('username', 'Admin Name')
@section('usersubname', 'Admin')

@section('content')
<div class="col-lg-12">


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Klientlar royhati</h5>

      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">N</th>
            <th scope="col">Ism</th>
            <th scope="col">Telefon</th>
            <th scope="col">Tag</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $val)
            
          <tr>
            <th scope="row">{{$val -> id}}</th>
            <td>{{$val -> full_name}}</td>
            <td>{{$val -> phone}}</td>
            <td>{{$val -> tag}}</td>
          </tr>
          @endforeach

        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>


</div>


@endsection