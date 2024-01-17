<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffc0cb; /* Pink background color */
            background-image: url('newspaper-background.jpg'); /* Replace 'newspaper-background.jpg' with your actual image path */
            background-size: cover; /* Cover the entire viewport */
            font-family: 'Comic Sans MS', cursive, sans-serif; /* Cute font */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px; /* Adjust the width of the card as needed */
        }

        .card {
            background-color: #fff; /* White card background color */
            border: 2px solid #ffc0cb; /* Pink border */
            border-radius: 10px; /* Rounded corners */
        }

        .card-header {
            background-color: #ffc0cb; /* Pink card header background color */
            border-bottom: 2px solid #fff; /* White border at the bottom of the header */
        }

        .display-5 {
            color: #fff; /* White text color for the title */
        }

        .form-label {
            color: #ffc0cb; /* Pink text color for form labels */
        }

        .btn-primary {
            background-color: #ffc0cb; /* Pink button background color */
            border: none; /* Remove button border */
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="display-5">Create a Cute Article</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('articles.store') }}" method="POST">
                    @csrf <!-- Include CSRF token for security -->
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="category" class="form-label">Category:</label>
                        <select class="form-select" id="category" name="category" required>
                            <option value="Women for Women">Women for Women</option>
                            <option value="Women in tech">Women in tech</option>
                            <option value="Women in laboratory">Women in laboratory</option>
                            <option value="Women in fashion">Women in fashion</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
    
                    <div class="mb-3">
                        <label for="content" class="form-label">Content:</label>
                        <textarea class="form-control" id="content" name="content" required></textarea>
                    </div>
    
                    <button type="submit" class="btn btn-primary">Create a Cute Article</button>
                </form>
            </div>
        </div>
    </div>

<!-- Add Bootstrap JS and Popper.js scripts (required for some Bootstrap features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>