<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .post {
            padding: 20px;
            width: 82%;
            height: fit-content;
            background: #d3ffff;
            /* margin-top: 20px; */
            /* margin-bottom: 27px; */
            margin: 30px auto;
        }

        .first-part {
            display: inline-flex;
            position: relative;
            width: 100%;
        }

        .first-part:after {
            position: absolute;
            content: '';
            border-bottom: 1px solid red;
            width: 100%;
            transform: translateX(-50%);
            bottom: -15px;
            left: 50%;
        }

        .first-part h5 {
            margin-top: 12px;
            margin-left: 10px;
        }

        .first-part h3 {
            margin-top: 8px;
            margin-left: 20px;
        }

        .second-part {
            margin-top: 20px;
        }

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .posts-wrapper {

        }
    </style>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
</head>
<body class="antialiased">
    <div class="col-md-12">
        <h2 style="text-align: center">NEWS</h2>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">
            <h2>Categories</h2>
        </div>
        <div class="col-md-4">
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                </div>
                <div style="display: flex">
                    <input id="searchInput" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    <input id="searchButton" type="submit" class="btn btn-primary">
                </div>

            </div>

            <div class="posts-wrapper">
                @foreach($news as $newsItem)
                    <div class="post">
                        <div class="first-part">
                            <img src="https://unsplash.it/401" width="40px" height="40px">
                            <h3>{{$newsItem->heading}}</h3>
                            <h5>{{$newsItem->anons}}</h5>
                        </div>
                        <div class="second-part">
                            <p class="texts">{{$newsItem->text}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="row" style="padding-top: 20px; padding-bottom: 20px">
                <h2>First Form</h2>
                <form method="POST" action="{{ route('storeNotAsync') }}">
                    {{ csrf_field() }}
                    <div class="col-md-9">
                        <input type="text" name="heading" class="form-control">
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="anons" class="form-control">
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="text" class="form-control">
                    </div>
                    <div class="col-md-9">
                        <ul>
                            @foreach ($categories as $category)
                                <li>{{ $category->name }}</li><input type="hidden" value="{{$category->id}}"><input type="checkbox" id="{{'subfolder1' . $category->id }}" name="{{$category->name}}" value="{{$category->id}}">
                                <ul>
                                    @foreach ($category->childrenCategories as $childCategory)
                                        @include('child_category', ['child_category' => $childCategory])
                                    @endforeach
                                </ul>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-primary btn-block" value="Add News Item">
                    </div>
                </form>
            </div>
            <div class="row">
                <h2>Second Form</h2>
                <form method="POST" action="{{ route('storeAsync') }}">
                    {{ csrf_field() }}
                    <div class="col-md-9">
                        <input type="text" name="heading" class="form-control">
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="anons" class="form-control">
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="text" class="form-control">
                    </div>
                    <div class="col-md-9">
                        <ul>
                            @foreach ($categories as $category)
                                <li>{{ $category->name }}</li><input type="checkbox" id="subfolder1" name="{{$category->name}}" value="{{$category->id}}">
                                <ul>
                                    @foreach ($category->childrenCategories as $childCategory)
                                        @include('child_category', ['child_category' => $childCategory])
                                    @endforeach
                                </ul>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-primary btn-block" value="Add News Item">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $('#searchButton').on('click', function (e) {
            e.preventDefault();
            var searchInput = $('#searchInput').val();
            if (true) {
                $.ajax({
                    url: "{{ route('searchByWord') }}",
                    type: 'POST',
                    data: {_token: '', search: searchInput},
                    success: function (data) {
                        $('.posts-wrapper').html(data);
                    }
                });
            }
        });
    </script>
</body>
</html>
