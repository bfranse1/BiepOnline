@extends('layouts.dashboard')
@section('page_heading','Boeken toevoegen')
@section('section')


    <form class="form-horizontal" action="store" method="post">
        <div class="form-group">
            <label class="col-sm-2 control-label">ISBN</label>
            <div class="col-sm-8">
                <input type="number" name="isbn" class="form-control" data-form-field="" placeholder="Vul hier het ISBN in">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Titel</label>
            <div class="col-sm-8">
                <input class="form-control" name="title" data-form-field="" placeholder="Vul hier de titel in">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Beschrijving</label>
            <div class="col-sm-8" rows="5" id="comment">
                <input class="form-control"  name="dis" placeholder="Vul hier de beschrijving in">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Schrijver</label>
            <div class="col-sm-8">
                <input class="form-control" name="author" placeholder="Vul hier de schijver in">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Categorie</label>
            <div class="col-sm-8">
            <select class="form-control" id="sel1" name="colorcat">
                <option>Rood</option>
                <option>Groen</option>
                <option>Geel</option>
                <option>Blauw</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="button" data-toggle="modal" data-target="#bookOut" class="btn btn-primary btn-lg btn-block">Boek Toevoegen<i class="fa fa-book"></i> <i class="fa fa-long-arrow-right"></i></button>
            </div>
        </div>
    </form>

@stop
