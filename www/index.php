<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('env.php');

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?= SITE_NAME; ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/style.css">


    <meta name="theme-color" content="#712cf9">
</head>

<body class="bg-body-tertiary">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h2>Signup form</h2>
                <p class="lead">Cras eu metus semper, luctus purus nec, placerat elit. Nulla justo metus, pellentesque rhoncus luctus in, semper non augue. Duis non libero id turpis aliquam efficitur. Duis efficitur sollicitudin ornare. Sed at sapien orci. Nam ultrices dignissim tincidunt. Sed mi libero, accumsan sed tincidunt cursus, ultrices ac felis. </p>
            </div>

            <div class="row g-5">


                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" placeholder="Username" required>
                                <div class="invalid-feedback">
                                    Your username is required.
                                    Your username is invalid, it should only contain letters, numbers and an underscore.
                                    Your username is invalid, it can't start/end with an underscore.
                                    Your username is already in use.
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label" for="avatar">Profile picture (optional)</label>
                            <div class="input-group has-validation">
                                <input type="file" class="form-control" id="avatar" />
                                <div class="invalid-feedback">
                                    Avatar needs to be an image of type jpeg/jpg of png.
                                    Avatar needs to have a width and height bigger than 100px.
                                    Avatar needs to be less than 2MB.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>Belgium</option>
                                    <option>Denmark</option>
                                    <option>France</option>
                                    <option>Germany</option>
                                    <option>Netherlands</option>
                                    <option>Portugal</option>
                                    <option>Spain</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="terms">
                            <label class="form-check-label" for="same-address">I agree with the terms and conditions.</label>
                        </div>


                        <button class="w-100 btn btn-primary btn-lg" type="submit">Sign up</button>
                </form>
            </div>
    </div>
    </main>

    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">&copy; 2017–2024 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="checkout.js"></script>
</body>

</html>