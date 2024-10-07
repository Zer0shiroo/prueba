<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            grid-template-areas:
                "header header header header header header"
                "aside . main main right right ";
                gap:10px

        }



        header {
            text-align: center;
            grid-area: header;
            background-color: black;
            color: white;
        }

        main {
            grid-area: main;
        }

        aside {
            grid-area: aside;
        }
        .contenido{
            background-color: lightgray;
            padding: 5px;
            margin-bottom: 25px;
            border-radius: 15px;
            border: 1px solid black;
        }
        .like {
            border: none;
            background: none;
            color: blue;
            cursor: pointer;
        }

        .like:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <h1 id="titulo">Mi blog</h1>
    </header>


    <aside>
        <p id=izq>Inicio</p>
        <p id=izq>Sobre mi</p>
        <p id=izq>Contacto</p>
    </aside>

    <main> <?php
    class post
    {
        private string $titulo;
        private string $contenido;
        private $tags;

        public function __construct($titulo, $contenido, $tags)
        {
            $this->titulo = $titulo;
            $this->contenido = $contenido;
            $this->tags = $tags;
        }

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function getContenido()
        {
            return $this->contenido;
        }

        public function getTags()
        {
            return $this->tags;
        }

        public function get_all_content()
        {
            return  "<h3>".$this->titulo . "</h3><br> " . $this->contenido . "<br> ";
        }
    }

    $post = [
        new post("Titulo", "contenido 1", ["#viajes", "vacaciones"]),
        new post("Titulo1 ", "contenido 2", ["saltos", "mortales"])
    ];

    foreach ($post as $i) {
        echo "<div class= 'contenido'>";
        echo $i->get_all_content();
        echo "<p>Tags= " . implode(", ", $i->getTags()) . "</p>";
        echo "<p>Likes: 5 <button class='like'>Me gusta</button></p>";
        echo "</div>";
    }
    ?>
    </main>
</body>

</html>