<?php

class Page {
    function create_page($title, $content, $script_js = '') {
        $app_name = 'My Website';
        $head_html = '
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/styles/styles.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="/scripts/todo.js"></script>';

        $body_html = '
        <header>
            <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
                <div class="container">
                    <a class="navbar-brand" href="./index.php">'.$app_name.'</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/pages/index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/pages/todo.php">Todo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/pages/collatz.php">Collatz</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/pages/factorial.php">Factorial</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <main role="main" class="pb-3">
                '.$content.'
            </main>
        </div>
        <footer class="border-top footer text-muted">
            <div class="container">
                &copy; '.date('Y').' - '.$app_name.' - <a href="./privacy.php">Privacy</a>
            </div>
        </footer>';

        $template_html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            '.$head_html.'
            <title>'.$title.'</title>
        </head>
        <body>
            '.$body_html.'
            <script type="text/javascript">'.$script_js.'</script>
        </body>
        </html>';

        return $template_html;
    }
}
