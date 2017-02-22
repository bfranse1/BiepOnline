@extends('layouts.dashboard')
@section('page_heading','Boeken toevoegen')
@section('section')

    <a class="btn btn-primary btn-lg btn-block" role="button" href="/bookadd"><i class="fa fa-book"></i> Boek Toevoegen</a>



    <table class="table table-condensed table-bordered table-striped table-responsive small">
        <thead>
        <tr>
            <th>Alle toegevoegde boeken</th>
        </tr>
        </thead>
        <tbody>

            @if (count($books) > 0)
                <table class="table table-condensed table-bordered table-striped table-responsive small">
                    <thead>
                    <th class="col-sm-1">Id</th>
                    <th class="col-sm-4">ISBN</th>
                    <th class="col-sm-2">Titel</th>
                    <th class="col-sm-2">Auteur</th>
                    <th class="col-sm-2">Categorie</th>
                    </thead>
                    <tbody>
                    @foreach ($books as $book)
                        <tr class="row-link" style="cursor: pointer;"
                            data-href="{{action('BookController@show', ['id' => $book->id]) }}">
                            <td class="table-text">{{ $book->id }}</td>
                            <td class="table-text">{{ $book->isbn }}</td>
                            <td class="table-text">{{ $book->title }}</td>
                            <td class="table-text">
                                @if (isset($book->author))
                                    {{ $book->author->name }}
                                @endif
                            </td>
                            <td class="table-text">
                                @if (isset($book->category))
                                    {{ $book->category->name }}

                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif

            @section('scripts')
                <script>
                    jQuery(document).ready(function($) {
                        $(".row-link").click(function() {
                            window.document.location = $(this).data("href");
                        });
                        $('#cohort-tabs a:first').tab('show') // Select first tab
                    });
                </script>
            @endsection
        </tbody>
    </table>



@stop