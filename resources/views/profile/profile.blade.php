@extends('layouts.main')

@section('content')
    @parent

    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th rowspan="2" class="item-header">Item</th>
                        <th class="t41" colspan = "3">T. 4</th>
                        <th colspan = "3">T. 5</th>
                        <th colspan = "6">T. 6</th>
                        <th colspan = "6">T. 7</th>
                        <th colspan = "6">T. 8</th>
                    </tr>
                    <tr>

                        <th class="tier t4">L. 1</th>
                        <th class="tier t4">L. 2</th>
                        <th class="tier t4">L. 3</th>
                        <th class="tier t5">L. 1</th>
                        <th class="tier t5">L. 2</th>
                        <th class="tier t5">L. 3</th>
                        <th class="tier t6">L. 1</th>
                        <th class="tier t6">L. 2</th>
                        <th class="tier t6">L. 3</th>
                        <th class="tier t6">L. 4</th>
                        <th class="tier t6">L. 5</th>
                        <th class="tier t6">L. 6</th>
                        <th class="tier t7">L. 1</th>
                        <th class="tier t7">L. 2</th>
                        <th class="tier t7">L. 3</th>
                        <th class="tier t7">L. 4</th>
                        <th class="tier t7">L. 5</th>
                        <th class="tier t7">L. 6</th>
                        <th class="tier t8">L. 1</th>
                        <th class="tier t8">L. 2</th>
                        <th class="tier t8">L. 3</th>
                        <th class="tier t8">L. 4</th>
                        <th class="tier t8">L. 5</th>
                        <th class="tier t8">L. 6</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                                <td class="{{$item->branch}}">{{$item->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection