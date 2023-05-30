<!DOCTYPE html>
<html>
<head>
    <title>Map Navigation</title>
    <style>
        #mapContainer {
            position: relative;
            width: 800px;
            height: 600px;
        }

        #mapImage {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div id="mapContainer">
        <img id="mapImage" src="your_map_image.jpg" alt="Map Image">
    </div>
    <form>
        <label for="start">Starting Point:</label>
        <input type="text" id="start" name="start" required>
        <br>
        <label for="destination">Destination Point:</label>
        <input type="text" id="destination" name="destination" required>
        <br>
        <input type="submit" value="Navigate">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="navigation.js"></script>
</body>
</html>
