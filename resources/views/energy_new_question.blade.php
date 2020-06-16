@extends('layouts.app')
@section('css')
    <style>
        #error_message {
            color: red;
        }
    </style>
@endsection
@section('content')

<div class="br-pagetitle">
    <i class="icon ion-document tx-70 lh-0"></i>
    <div>
    <h4>Add Question</h4>
    <p class="mg-b-0">You can add new question here.</p>
    </div>
</div><!-- d-flex -->

<div class="br-pagebody">

    <div class="br-section-wrapper rounded-bottom-0">
        <div class="row">
            <div class="col-md-12">
                <p id="error_message"></p>
                <form action="{{ route('energy_question_add') }}" method="post" id="add_question">
                    @csrf
                    <div class="form-group has-success mg-b-0">
                        <input class="form-control is-valid" name="title" id="title" placeholder="title" type="text">
                        <textarea rows="8" class="form-control is-valid mg-t-20" name="content" id="content" placeholder="content"></textarea>
                    </div>
                    <label class="rdiobox rdiobox-success mg-t-15">
                        <input type="radio" name="type" value="energy_home" id="home_page"><span>Home page</span>
                    </label>
                    <label class="rdiobox rdiobox-success mg-t-15">
                        <input type="radio" name="type" value="energy_home" id="about_page"><span>About page</span>
                    </label>
                    <br>
                    <button class="btn btn-primary" id="save_question">S&nbsp;&nbsp;A&nbsp;&nbsp;V&nbsp;&nbsp;E</button>
                </form>
            </div>
        </div>
    </div>

</div><!-- br-pagebody -->

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#save_question').click(function(event){
                event.preventDefault()
                let title = $('#title').val()
                let content = $('#content').val()
                if (title == '') {
                    $('p#error_message').html('Please enter the title for new question');
                    $('#title').focus()
                    return;
                }
                if (content == '') {
                    $('p#error_message').html('Please enter the content for new question');
                    $('#content').focus()
                    return;
                }
                if (!$('#home_page').prop('checked') && !$('#about_page').prop('checked')) {
                    $('p#error_message').html('Please select page type');
                    return;
                }
                $('#add_question').submit()
            })
        })
    </script>
@endsection