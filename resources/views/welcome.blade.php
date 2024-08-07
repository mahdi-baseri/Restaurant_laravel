<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            #phone-link:hover{
                color: {{e(config('voyager.primary_color','#22A7F0'))}};
            }
            #delete-1:hover{
                background-color: red;
                color: white;
            }
            #delete-1{
                border: 1px solid red;
                color: red;
                margin: 0;

            }
            #delete-1 i{
                font-size: medium;
            }
        </style>
    </head>
    <body class="">
    <?php include "jdf/jdf.php"; ?>
    <h1 style="text-shadow: 1px 1px 5px {{e(config('voyager.primary_color','#22A7F0'))}} ; color: black">{{__('voyager::generic.table-res')}}</h1>
{{--        <table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">--}}
    <div class="row" style="padding: 0 10px" @if(app()->getLocale()=='fa') dir="rtl" @endif>
        @foreach($book as $key => $book_item)
{{--                <thead>--}}
{{--                <tr role="row">--}}
{{--                    <th class="dt-not-orderable sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 42.5156px;">--}}
{{--                        <input type="checkbox" class="select_all">--}}
{{--                    </th>--}}
{{--                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 84.4375px;">{{__('voyager::generic.name')}}</th>--}}
{{--                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 84.4375px;">{{__('voyager::generic.phone')}}</th>--}}
{{--                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 84.4375px;">{{__('voyager::generic.date')}}</th>--}}
{{--                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Time: activate to sort column ascending" style="width: 84.4375px;">{{__('voyager::generic.time')}}</th>--}}
{{--                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Count: activate to sort column ascending" style="width: 84.4375px;">{{__('voyager::generic.count')}}</th>--}}
{{--                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Messagte: activate to sort column ascending" style="width: 84.4375px;">{{__('voyager::generic.message')}}</th>--}}

{{--                    <th class="actions text-right dt-not-orderable sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 315.344px;">{{__('voyager::generic.actions')}}</th></tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}

{{--                <tr role="row" class="odd">--}}
{{--                    <td>--}}
{{--                        <input type="checkbox" name="row_id" id="checkbox_1" value="1">--}}
{{--                    </td>--}}
{{--                    <td><div>{{$book_item->name}}</div></td>--}}
{{--                    <td><div>{{$book_item->phone}}</div></td>--}}
{{--                    <td><div>{{$book_item->date}}</div></td>--}}
{{--                    <td><div>{{$book_item->time}}</div></td>--}}
{{--                    <td><div>{{$book_item->people}}</div></td>--}}
{{--                    <td><div>{{$book_item->message}}</div></td>--}}

{{--                    <td class="no-sort no-click bread-actions">--}}
{{--                        <a href="/delete/{{$book_item->id}}" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="1" id="delete-1">--}}
{{--                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{__('voyager::generic.delete')}}</span>--}}
{{--                        </a>--}}
{{--                    </td>--}}
{{--            list($year , $month , $day) = explode('-' , $arr_date[0]);--}}
{{--            list($hour, $minute) = explode(':', $arr_time[0]);--}}
{{--            $timestamp = mktime($hour , $minute, 0 ,$month, $day, $year );--}}
{{--                </tr></tbody>--}}
            <?php
                $date = $book_item->date;
                $time = $book_item->time;
                $timearray = explode(':' , $time);
                $array = explode('/' , $date);
                $year = $array[0];
                $month = $array[1];
                $day = $array[2];
                $hour = $timearray[0];
                $minute = $timearray[1];
//                $timestamp = jmktime(10 , 25 , 12 , 11 , 5 , 1400 );
                $gregorian = jalali_to_gregorian($year, $month , $day , '/');
            ?>
        <div class="col-md-3 col-lg-3" style="padding: 15px;min-height:max-content !important;">
            <div class="card offset-md-3" style="margin: 5px; padding: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.22); border-radius: 10px;">
                <div class="" style="padding: 7px;display: flex; justify-content: space-between; align-items: center;border-bottom: 1px solid rgba(0,0,0,0.17)">
                    <div>
                        <h4 style="margin: 0 0 3px 0; color: black"><strong>{{__('voyager::generic.order')}} #{{$book_item->id}}</strong></h4>
                        @if(app()->getLocale()=='en')
                            <small>{{$gregorian}}</small>
                        @else
                        <small>{{$book_item->date}} , {{$book_item->time}}</small>
                        @endif

                    </div>
{{--                    <div>--}}
{{--                        <img src="storage/avatars/avatar{{$key+1}}.gif" alt="" width="50" height="50"  style="border-radius: 50%; box-shadow: 0 0 10px rgba(0,0,0,0.4)">--}}
{{--                    </div>--}}
                </div>
                <div class="card-body" style="padding: 7px; color: black">
                    <div>
{{--                               <i class="fa fa-user-circle" style="color: #b6b3b3" aria-hidden="true"></i>--}}
                        <div style="display: flex;justify-content: space-between">
                            <h4>{{__('voyager::generic.name')}} : <small>{{$book_item->name}}</small> </h4>
                            <h4 style="margin-right: 10px; margin-left: 10px">{{__('voyager::generic.count')}} : <small>{{$book_item->people}}</small> </h4>
                        </div>

                        @if(isset($book_item->message))
                            <h4>{{__('voyager::generic.message')}} : <small>{{$book_item->message}}</small></h4>
                        @endif
                        <div style="display: flex;justify-content: space-between;align-items: center; margin-top: 7px;">
                            <h4>{{__('voyager::generic.phone')}} : <a href="tel:{{$book_item->phone}}" id="phone-link"><small>{{$book_item->phone}}</small></a></h4>
                            <a href="/delete/{{$book_item->id}}" title="Delete" class="btn btn-sm pull-right delete" data-id="1" id="delete-1">
                                <i class="voyager-x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
{{--    <div class="bg-white col-md-3">--}}
{{--        {{__('voyager::generic.name')}} : {{$book_item->name}}--}}
{{--    </div>--}}

    </body>
</html>
