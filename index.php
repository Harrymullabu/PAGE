<?php
class Website {
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
            <title>{$this->title}</title>
           
        </head>
        <body>
        HTML;
    }

    private function header() {
        echo <<<HTML
        <header>
            <h1>Welcome to my Website</h1>
            
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutPage.php">About</a></li>
                    <li><a href="project.php">Projects</a></li>
                    <link rel="stylesheet" type="text/css" href="mystyle.css"> 
                    
            </nav>
        </header>
        HTML;
    }
    

    private function footer() {
        echo <<<HTML
        <footer>
            <p>&copy; <?php echo date("Y"); ?> {$this->title}</p>
        </footer>
        </body>
        
        HTML;
    }

    public function homePage() {
        $this->head();
        $this->header();

        echo <<<HTML
        <section>
        <img src="\src\media\Harry.jpg" alt="Harry" class="Harry">
        </html>
            <h2>Home</h2>
            <p>I'm Harrison Segero, a passionate computer science enthusiast. 
                One fun fact about me is I love Heinz Ketchap</p>
            <p>One fun fact about me is that i am ambidextral! I got into computer science because
            technology has always fascinated me. The power to create and innovate using 
            code is incredible</p>
            <p>
            I got into computer science because more job oportunities . The endless possibilities of creating and solving problems
            It's a field that combines logic, creativity, and innovation.</p>
        </section>
        HTML;

        $this->footer();
    }

    public function aboutPage() {
        $this->head();
        $this->header();

        echo <<<HTML
        <section>
            <h2>About</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Turpis massa tincidunt dui ut ornare..</p>
        </section>
        HTML;

        $this->footer();
    }

    public function projectsPage() {
        $this->head();
        $this->header();

        
        $this->footer();
    }
}

// Eg:
$website = new Website("My Website");
$website->homePage(); 


