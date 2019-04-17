@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Naujų vartotojų sąrašas (laukia patvirtinimo)</div>

                    <div class="card-body">

                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <table class="table">
                            <tr>
                                <th>Vartotojo vardas</th>
                                <th>El.paštas</th>
                                <th>Registracija</th>
                                @if($users == null)
                                <th></th>
                                <th></th>
                                @endif
                            </tr>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td><a href="{{ route('admin.users.approve', $user->id) }}"
                                           class="btn btn-primary btn-sm">Patvirtinti</a>
                                    </td>
                                    <td><form action="{{ route('admin.users.destroy', $user->id) }}" method="DELETE"
                                              style="display: inline"
                                              onsubmit="return confirm('Ar tikrai norite tęsti?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-primary btn-sm btn-danger">Atmesti</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Naujų vartotojų nerasta.</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection