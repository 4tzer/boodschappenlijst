<?php require 'partials/header.php' ?>

<body>


<table id="table">
               
                
                <form method="POST" action="/name">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name">
                <br>
                <label for="aantal">Aantal:</label>
                <input type="number" id="aantal" name="number">
                <br>
                <label for="prijs">Prijs:</label>
                <input type="number" step="0.01" id="prijs" name="price">
                <br>
                <input type="submit" value="Submit">
                </form>


               
    
</body>
<?php require 'partials/footer.php' ?>

