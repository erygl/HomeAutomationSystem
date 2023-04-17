<!DOCTYPE html>
<html>

<head>
    <title>Ev Otomasyonu</title>
    <link rel="stylesheet" href="homePage.css">
</head>

<body>
    <?php
    $var = $_GET['username'];
    
    ?>

    <header>
        <h1 style="text-align: center;">Home Automation System</h1>
        <?php
        echo"<h2>$var's home</h2>"
        ?>
        
        
    </header>

    <main>
        <div>
            <div class="divs">
                <h2>Living Room</h2>
                <p>TV</p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Air Conditioner</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Window</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Door</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Ligths:</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="divs">
                <h2>Bedroom</h2>
                <p>Ceiling Fan</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Window:</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Door</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Light</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="divs">
                <h2>Kitchen</h2>
                <p>TV</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Window</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Door</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Light</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Fridge</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="divs">
                <h2>Bathroom</h2>
                <p>Door</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Light</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p>Washing Machine</p>
                 <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </main>


    <!--
        <p>Sicaklik:</p>
                <input type="number" value="23" min="16" max="30">
                <p>Mod:</p>
                <select>
                    <option value="soğutma">Soğutma</option>
                    <option value="isitma">Isitma</option>
                    <option value="otomatik">Otomatik</option>
                </select>
    -->

    <footer>
        <p>All rights reserved © 2023 Home Automation System Company</p>
    </footer>
    <script src="bugra.js"></script>
</body>

</html>