@extends('layouts.dashboard')
@section('page_heading','Boeken toevoegen')
@section('section')




<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="form-group">
                <div class="col-sm-offset-0 col-sm-8">
                    <button type="button" data-toggle="modal" data-target="#bookOut" class="btn btn-primary btn-lg btn-block" href="/bookadd">Boek Toevoegen<i class="fa fa-book"></i> <i class="fa fa-long-arrow-right"></i></button>
                </div>
            </div>
            <div class="panel-heading">Toegevoegde boeken</div>

            <div class="panel-body">

                <table class="table table-condensed table-bordered table-striped table-responsive small">
                    <tr>
                        <th>Titel</th>
                    </tr>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->book_title }}</td>
                        <td>
                            Bewerk
                            |
                            Verwijder
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


            {{--@if (count($books) > 0)
                <table class="table table-condensed table-bordered table-striped table-responsive small">
                    <thead>
                    <th class="col-sm-4">ISBN</th>
                    <th class="col-sm-2">Titel</th>
                    </thead>
                    <tbody>
                    @foreach ($books as $book)
                        <tr class="row-link" style="cursor: pointer;"
                            data-href="{{action('BookController@show', ['id' => $book->id]) }}">
                            <td class="table-text">{{ $book->book_isbn }}</td>
                            <td class="table-text">{{ $book->book_title }}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif--}}

            {{--@section('scripts')
                <script>
                    jQuery(document).ready(function($) {
                        $(".row-link").click(function() {
                            window.document.location = $(this).data("href");
                        });
                        $('#cohort-tabs a:first').tab('show') // Select first tab
                    });
                </script>
            @endsection--}}




@stop