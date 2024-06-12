<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="application.css">
</head>
<body>
    <h1>user Application details</h1>
    <div class="wafula">
        <form method="POST" action="/application">

        <div>
        <span>Username</span>
        <input type="text" placeholder="username" name="username" required>
        <br>
        <span>Date of birth</span>
        <input type="datetime" placeholder="01/01/2000" name="datetime" required>
        <br>
        <span>Email Address</span>
        <input type="Email" placeholder="dickjuma292@gmail.com" name="email" required>
        <br>

    <span>Continent</span>
    <select name="continent" required>
        <option>North america
            <p><option>Africa

            <p><option>Asia
                <p><option>Europe
                    <p><option>soputh america
                        <p><option>Antartica
                            <p></p><option>ociena

    </select>
    <br>
    <br>
    <span>level of education</span>
    <select name="education" required>
        <option>PHD
            <option>MASTERS
                <option>DEGREE
                    <option>DIPLOMA
                        <option>CERTIFICATE
    </select>
    <br>
    <br>
    <br>
    <section>
    <span>Country</span>
    <select name="country" required>
        <option>Afghanistan
        <option>	Albania
        <option>Algeria
        <option>Angola
        <option>Argentina
        <option>Australia
        <option>Azerbaijan
        <option>Bahamas
        <option>Bangladesh
        <option>Belgium
        <option>Benin
        <option>Bolivia
        <option>Brazil
        <option>America
        <option>India
        <option>DRC
        <option>Cong
        <option>Chad
        <option>China
        <option>Russia
        <option>Ukraine
        <option>England
        <option>Tunisia
        <option>Mprocco
        <option>Magadascar
        <option>Mauritious
        <option>Lesotho
        <option>Zambia
        <option>Zimbabwe
        <option>south africa
        <option>Egypt
        <option>Soouth sudan
        <option>Sudan
        <option>Rwanda
        <option>Tanzania
        <option>Uganda
        <option>Kenya
        <option>ghana

    </select>

</section>
<br>
<section>
<span>Gender</span>
<select name="try">
    <option>Male</option>
    <Option>Female</Option>
    <option>OtherS</option>
</select>
<br>
    <span>years of expierence</span>
    <input type="number" name="contract" id="contract" min="1" max="10" step="1" value="1" required>
</section>
<P class="file">LOAD YOU CV HERE
<input type="file" name="file" required>
</P>
        </div>
        <input type="submit" class="btn">
    </form>
    </div>
</body>
</html>
