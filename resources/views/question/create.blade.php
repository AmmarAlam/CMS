@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session('success'))
                <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>    
            @endif

            @if (session('error'))
                <div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>    
            @endif

            <div class="card">
                <div class="card-header">Create Questions</div>
                <div class="card-body">
                    <form method="POST" action="{{url('/question')}}">
                        @csrf
                        {{-- <div class="form-group">
                            <label>Question Type</label>
                            <select id="qt" class="form-control" name="question_type">
                                <option value="mcqs">MCQs</option>
                                <option value="true_false">True False</option>
                            </select>
                        </div> --}}
                        
                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" class="form-control" name="question">
                        </div>
                        
                        <div class="form-group">
                            <label>Options</label>
                            <textarea rows="5" cols="5" class="form-control" name="options"></textarea>
                        </div>

                        {{-- <div id="tf" class="form-group opt" style="display:none">
                          <label>Options</label><br>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="options" class="custom-control-input" value="true">
                            <label for="customRadioInline1" class="custom-control-label">True</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="options" class="custom-control-input" value="false">
                            <label for="customRadioInline2" class="custom-control-label">False</label>
                          </div>
                        </div> --}}

                       <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    
    {{-- <script type="text/javascript">

        function sel_opt() {
            if(document.getElementById('qt').value == "true_false") {
                document.getElementById('tf').style.display = 'block';
                document.getElementById('mcqs').style.display = 'none';
            } else {
                document.getElementById('tf').style.display = 'none';
                document.getElementById('mcqs').style.display = 'block';
            }
        }
    </script> --}}

@endpush