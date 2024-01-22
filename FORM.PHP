<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"="width=devicewidth, initial-=1.0">
    <title>Contact Us Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7NlFkXHMJpGfN+Mz3L4UfBjQ0ZqZXKqc0O9V2nQ3V59WkZvNQ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-52VvNv5bFhA2eYcQW1H08Xr34pQeJMFsHw+NHfK+CzMkRKXvFwZnZ0rBpGKcYGnFpFYcOlLb/cEhqk0WrBm+hfIkxdUVRNiQhYcJYHNkDJL0yFWlxL/HcGKvkLjCnE/ZRFvTgpDG0p+sRpNlXEuJwvNr" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/5v7a/mwnbGKg0aRuBqg==&quot;" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }
        .contact-section {
            padding: 80px 0;
        }
        .contact-section h1 {
            font-weight: 700;
            color: #333;
            margin-bottom: 30px;
        }
        .contact-section .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .contact-section .card-body {
            padding: 40px;
        }
        .contact-section .btn-primary {
            background-color: #5e50a1;
            border-color: #5e50a1;
        }
        .contact-section .btn-primary:hover {
            background-color: #4e437b;
            border-color: #4e437b;
        }
    </style>
</head>
<body>
    <div class="container contact-section">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Contact Us</h1>
                <div class="card">
                    <div class="card-body">
                    <form action="" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label" name="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"name="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label" name="phone">Phone Number</label>
                             <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label" name="address">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label" name="message">Message</label>



                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                            <center><button type="submit" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>






