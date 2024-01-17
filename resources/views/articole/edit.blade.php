<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Article</title>
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
            color: #ff69b4;
        }

        form {
            max-width: 600px;
            margin: auto;
        }

        label {
            color: #ff69b4;
        }

        .form-control {
            border: 1px solid #ff69b4;
        }

        .form-select {
            border: 1px solid #ff69b4;
        }

        .btn-primary {
            background-color: #e3b2ca;
            border: none;
            color: #fff;
        }
    </style>
</head>
<body>
<?php
// Place your PHP code here, including the global $mysqli; line if needed
global $mysqli;
?>
<form method="POST" action="{{ route('articol.update', ['id' => $article->id]) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
    </div>

    <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" id="content" name="content" rows="8" required>{{ $article->content }}</textarea>
    </div>

    <div class="form-group">
        <label for="category">Category:</label>
        <select class="form-select" id="category" name="category" required>
            <option value="Women for Women" {{ $article->category == 'Women for Women' ? 'selected' : '' }}>Women for Women</option>
            <option value="Women in tech" {{ $article->category == 'Women in tech' ? 'selected' : '' }}>Women in tech</option>
            <option value="Women in laboratory" {{ $article->category == 'Women in laboratory' ? 'selected' : '' }}>Women in laboratory</option>
            <option value="Women in fashion" {{ $article->category == 'Women in fashion' ? 'selected' : '' }}>Women in fashion</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Article</button>
</form>
</body>
</html>