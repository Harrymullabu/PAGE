<?php

class Website {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function head() {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{$this->title}</title>
        </head>
        <body>
        HTML;
    }

    public function header() {
        echo <<<HTML
        <header>
            <h1>{$this->title}</h1>
            
        </header>
        HTML;
    }

    public function footer() {
        echo <<<HTML
        <footer>
            <p>&copy; <?php echo date("Y"); ?> {$this->title}</p>
        </footer>
        </body>
        </html>
        HTML;
    }

    public function renderProjects() {
        $this->head();
        $this->header();

        echo <<<HTML
        <section>
            <h2>Learning Tools</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Turpis massa tincidunt dui ut ornare..</p>

            <h2>Assignments</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                 massa tincidunt dui ut ornare..</p>
            
            
        </section>
        HTML;

        $this->footer();
    }
}

// Example usage:
$website = new Website("My Website");
$website->renderProjects();

