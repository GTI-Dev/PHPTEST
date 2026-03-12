<?php
echo '
<!DOCTYPE html>
<html>
<head>
<title>Ethiopian Flag</title>
<style>
.flag {
    width: 300px;
    height: 180px;
    border: 1px solid #000;
}
.stripe {
    width: 100%;
    height: 60px;
}
.green { background-color: #078930; }
.yellow { background-color: #FCDD09; }
.red { background-color: #DA121A; }

.emblem {
    position: absolute;
    width: 70px;
    height: 70px;
    background: #0F47AF;
    border-radius: 50%;
    top: 55px;
    left: 115px;
}
</style>
</head>

<body>

<div style="position:relative;">
    <div class="flag">
        <div class="stripe green"></div>
        <div class="stripe yellow"></div>
        <div class="stripe red"></div>
    </div>
    <div class="emblem"></div>
</div>

</body>
</html>
';
?>
