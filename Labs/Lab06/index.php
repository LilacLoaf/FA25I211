<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Right Rectangular Pyramid Application</title>
    <style>
        input {
            height: 20px;
            font-size: 10pt;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .details {
            width: 300px;
            height: 22px;
            border: 1px solid #ccc;
            float: right;
            line-height: 22px;
            padding-left: 2px;
            display: inline-block;
            margin-right: 50px;
        }

        div span {
            display: inline-block;
            width: 100px;
        }

    </style>
</head>
<body>
<h2 style="text-align: center">The Right Rectangular Pyramid Application</h2>
<div style="width:500px; border: 1px solid #aaa; padding: 10px; margin: 10px auto; min-height: 300px">
    <div style="height: 160px; padding-bottom: 30px; border-bottom: 1px dotted #aaa">
        <div style="width: 60%; float: left;">
            <h4>Enter width, length, and height:</h4>
            <span>Width (w):</span> <input id="width" type="number" min="0.1" step="0.1" placeholder="Enter base width"><br>
            <span>Length (l):</span> <input id="length" type="number" min="0.1" step="0.1" placeholder="Enter base height"><br>
            <span>Height (h):</span> <input id="height" type="number" min="0.1" step="0.1" placeholder="Enter pyramid height">
        </div>
        <div style="width: 40%; float: left; text-align: center; height: 200px; display: flex; flex-direction: row; align-items: center">
            <img src="pyramid.png" alt="" style="width: 150px"/>
        </div>
    </div>
    <div style="margin-top: 30px ">
        <div class="details" id="base"></div><p>Base Area:</p>
        <div class="details" id="volume"></div><p>Volume:</p>
        <div class="details" id="lateral"></div><p>Lateral Surface:</p>
        <div class="details" id="surface"></div><p>Surface Area:</p>
    </div>
</div>
<script src="main.js" type="text/javascript"></script>
</body>
</html>
