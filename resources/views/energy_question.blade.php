@extends('layouts.app')
@section('css')
<style>
    .custome_flex {
        display: flex;
        align-items: center;
    }
    .br-pagetitle {
        justify-content: space-between;
    }
</style>
@endsection
@section('content')

<div class="br-pagetitle">
    <div class="custome_flex">
        <i class="icon ion-quote tx-70 lh-0"></i>
        <div class="mg-l-20">
            <h4>Questions</h4>
            <p class="mg-b-0">You can see the questions of ecoenergy.io here.</p>
        </div>
    </div>
    <div class="new_question">
        <a href="{{ route('energy_new_question') }}" class="btn btn-primary btn-sm mr-4" id="new_question"><i class="fa fa-plus mg-r-10"></i>Add Question</a>
    </div>
</div><!-- d-flex -->

<div class="br-pagebody">

    <div class="br-section-wrapper rounded-bottom-0">
        <div class="col-md-12">
            <div class="bd rounded table-responsive">
                <table class="table table-bordered table-hover mg-b-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>title</th>
                            <th>page</th>
                            <th>created at</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($questions as $item)
                            <tr>
                                <td>{{ (($questions->currentPage() - 1 ) * $questions->perPage() ) + $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->type == 'energy_home' ? 'Home page' : 'About page' }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('energy_question_edit', $item->id) }}">&nbsp;<i class="fa fa-edit" style="color:#50aa5b;">&nbsp;</i></a>
                                    <a href="{{ route('energy_question_delete', $item->id) }}">&nbsp;<i class="fa fa-trash" style="color:red;">&nbsp;</i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No questions</td>
                            </tr>
                        @endforelse
                            
                    </tbody>
                </table>

            </div>
        </div>
        <div class="col-md-12">
            <div class="clearfix mt-2">
                <div class="float-left" style="margin: 0;">
                    <p>Total <strong style="color: red">{{ $questions->total() }}</strong> entries</p>
                </div>
                <div class="float-right" style="margin: 0;">
                    {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>

</div><!-- br-pagebody -->

@endsection
@section('script')
    <script>
        if($('#success_message').val() != ''){
            toast_call('Success', $('#success_message').val(), false)
        }
        if($('#error_message').val() != ''){
            toast_call('Error', $('#error_message').val(), false, 'error', 'red')
        }

    </script>
@endsection
