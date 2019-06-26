@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-4">
            <div class="card">
                <div class="card-header">Main Menu</div>
                <div class="card-body">
                    asdjfjasd
                    adsjl
                </div>
            </div>
        </div> --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Questions</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            {{-- <tr>
                                <th>Question Type</th>
                                <th>Question</th>
                                <th>Options</th>
                            </tr> --}}
                        </thead>
                        <tbody>
                            @foreach ($questions as $index=>$question)
                            <tr>
                                <td><br> Q{{$index+1}}) {{$question->question}} <br>  {{$question->options}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    
@endpush