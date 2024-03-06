<?php

class ProjectsPage {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    private function head() {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Projects - {$this->title}</title>
        </head>
        <body>
        HTML;
    }

    private function header() {
        echo <<<HTML
        <header>
            <h1>My Projects</h1>
            
        </header>
        HTML;
    }

    private function footer() {
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
            <h2>Project 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. Turpis massa tincidunt dui ut ornare. 
                Bibendum at varius vel pharetra vel.</p>

            <h2>Project 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                ed do eiusmod tempor incididunt ut labore et dolore magna
                 aliqua. Turpis massa tincidunt dui ut ornare. 
                Bibendum at varius vel pharetra vel..</p>
            
                <h2>Project3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus.
                  A scelerisque purus semper eget duis at tellus.
                 Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi.</p>
                 <h2>Project4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus.
                  A scelerisque purus semper eget duis at tellus.
                 Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi.</p>
        </section>
        HTML;

        $this->footer();
    }
}

// Example usage:
$projectsPage = new ProjectsPage("Your Website");
$projectsPage->renderProjects();

?>
