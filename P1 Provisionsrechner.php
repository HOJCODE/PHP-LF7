<!DOCTYPE html>
<html>
<head>
    <title>P1 Provisionsrechner (Aufgabe)</title>
</head>
<body>
    <h1>P1 Provisionsrechner (Aufgabe)</h1>
    <label for="umsatzInput">Gieb deinen monatlichen Umsatz ein (in €): </label>
    <input type="number" id="umsatzInput">
    <button onclick="berechneProvision()">Start</button>
    <p id="ergebnis"></p>

    <script>
        function berechneProvision() {
            var umsatz = parseFloat(document.getElementById("umsatzInput").value);
            var provision = 0;

            if (umsatz >= 200000.00) {
                provision = umsatz * 0.02 + 10000.00;
            } else if (umsatz >= 100000.00) {
                provision = umsatz * 0.02;
            } else if (umsatz >= 80000.00) {
                provision = umsatz * 0.015;
            } else if (umsatz >= 50000.00) {
                provision = umsatz * 0.01;
            } else {
                provision = 0.00;
            }

            document.getElementById("ergebnis").innerHTML = "Deine Provision beträgt: " + provision.toFixed(2) + " €";
        }
    </script>
</body>
</html>
