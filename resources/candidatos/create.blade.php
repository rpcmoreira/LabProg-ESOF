@extends('layouts.app')
@section('content')
<form action="{{url('/candidatos')}}" method="post" style="margin-top: 50px">
    @csrf {{-- <- Required for protection or the form is rejected --}}
    First Name: <input type="text" name="firstName" value="{{old('firstName')}}">
    Last Name: <input type="text" name="lastName" value="{{old('lastName')}}">
    <button type="submit" class="btn btn-primary">Create</button>
</form>


@endsection

