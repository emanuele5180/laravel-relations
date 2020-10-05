@extends('layouts.main-layout');
@section('content');

  <h1>

    {{ $emp -> firstname }}
    {{ $emp -> lastname }}
  </h1>

  <br><br>

  <ul>
    <li>

      date of birth: {{ $emp -> date_of_birth }}

    </li>
    <li>

      private code: {{ $emp -> private_code }}

    </li>
    <li>
      Location: {{ $emp -> location -> name }}
      (
        ({{ $emp -> location -> city }} -
        {{ $emp -> location -> state }})


      )
    </li>


  </ul>

  {{-- <ul>
    @foreach ($emps as $emp)
      <li>

      </li>

    @endforeach
  </ul> --}}


@endsection
