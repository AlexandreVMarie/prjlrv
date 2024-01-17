<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
            text-align: center;
            background-color: #ffc0cb;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            margin-top: 20px;
            color: #e3b2ca;
            border: 2px solid #e3b2ca;
            border-radius: 10px;
            padding: 10px;
        }

        .nav-tabs {
            margin-bottom: 20px;
        }

        .nav-tabs .nav-item {
            margin-right: 10px;
        }

        .nav-tabs .nav-link {
            color: #ff69b4;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            border: 2px solid #e3b2ca;
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .badge {
            margin-right: 5px;
            background-color: #e3b2ca;
            color: #fff;
            border: 2px solid #e3b2ca;
            border-radius: 5px;
            padding: 5px;
        }

        .edit-btn {
            margin-top: 10px;
            background-color: #e3b2ca;
            border: none;
            color: #fff;
            border: 2px solid #ff69b4;
            border-radius: 5px;
            padding: 5px;
        }

        .btn-primary,
        .btn-warning,
        .btn-danger {
            background-color: #e3b2ca;
            border: none;
            color: #fff;
        }

        .btn-warning {
            margin-right: 0 !important;
        }

        .btn-group {
            margin-right: 10px;
        }

        .nav-link {
            color: #ff69b4 !important; /* Override Bootstrap's default link color */
        }

        .btn-group {
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="my-5">Hello, Please enjoy our dream</h1>
    
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles.index', ['category' => 'all']) }}">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles.index', ['category' => 'Women for Women']) }}">Women for Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('articles.index', ['category' => 'Women in tech']) }}">Women in tech</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles.index', ['category' => 'Women in laboratory']) }}">Women in laboratory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles.index', ['category' => 'Women in fashion']) }}">Women in fashion</a>
                    </li>
                </ul>
    
                <div class="articles-list">
                    @foreach ($articles as $article)
                        <div class="article">
                            <h3>{{ $article->title }}</h3>
                            <p>{{ $article->content }}</p>
                            <!-- Add more details as needed -->
    
                            <!-- Generate Edit link for each article -->
                            <a href="{{ route('articles.edit', ['id' => $article->id]) }}" class="btn btn-warning">Edit this cute article</a>
                        </div>
                    @endforeach
                </div>
    
                <p>
                    <div class="btn-group">
                        <a href="create_Articol" class="btn btn-primary">Add new cute article</a>
                    </div>
                    <a href="../LogOut" class="btn btn-danger ml-3">Bye! See you soon!</a>
                </p>
            </div>
        </div>
    </div>
    
    </body>
    </html>