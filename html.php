<p> Guessing game...</p>
<form method ="post">
    <p><label for="guess">Input Guess</label>
    <input type = "text" name="guess" size="40" id="guess"/></p>
    <input type="submit"/>

</form>
<pre>
    $_POST:
    <?php
    print_r($_POST);
    ?>
    </pre>
<p>No URL parameters with post</p>
<?php
echo "Two ways the browser can send parameters to the web server:</br>
GET - parameters are placed on the URL which is retrieved</br>
POST - the URL is retrieved and parameters are appended to the </br>
request in the HTTP connection";
?>
<form>
    <p><label for="guess">Input Guess</label>
    <input type = "text" name="guess" size="40" id="guess"/></p>
    <input type="submit"/>

</form>
<pre>
    $_GET:
    <?php
    print_r($_GET);
    ?>
    </pre>
    <?php
echo "Rules of POST/GET choice:</br>
POST is used when data is being created or modified</br>
GET is used when you are reading or searching things</br>
Spiders will follow GET but generally not POST</br>
GETs should be idempotent - the same url should give the same thing every time</br>
GETs have an upper limit of the number of bytes of parameters and values</br>";
?>
<p> Input field Types </p>
<form method ="post" action="html.php">
<p><label for="inp01">Account:</label>
   <input type="text" name="account" id="inp01" size="40" ></p>
   <p><label for="inp02">Password:</label>
   <input type="password" name="pw" id="inp02" size="40" ></p>
   <p><label for="inp03">Nick Name:</label>
   <input type="text" name="nick" id="inp03" size="40" ></p>
   <p>Preferred Time:<br/>
    <input type="radio" name="when" value="am">AM<br>
    <input type="radio" name="when" value="pm" checked>PM</p>
   <p>Classes taken:<br/>
    <input type="checkbox" name="class1" value="si502" checked>
        SI502 - Networked Tech<br>
    <input type="checkbox" name="class2" value="si539">
        SI539 - App Engine<br>
    <input type="checkbox" name="class3">
        SI543 - Java<br>
   </p>
   <p><label for="inp06">Which soda:
    <select name="soda" id="inp06">
    <option value="0">-- Please Select --</option>
    <option value="1">Coke</option>
    <option value="2">Pepsi</option>
    <option value="3">Mountain Dew</option>
    <option value="4">Orange Juice</option>
    <option value="5">Lemonade</option>
    </select>
   </p>
   <p><label for="inp07">Which snack:
    <select name="snack" id="inp07">
    <option value="">-- Please Select --</option>
    <option value="chips">Chips</option>
    <option value="peanuts" selected>Peanuts</option>
    <option value="cookie">Cookie</option>
    </select>
   </p>
   <p><label for="inp08">Tell us about yourself:<br/>
    <textarea rows="10" cols="40" id="inp08" name="about">
I love building web sites in PHP and MySQL.
    </textarea></p>
   <p><label for="inp09">Which are awesome?<br/>
<select multiple="multiple" name="code[]" id="inp09">
  <option value="python">Python</option>
  <option value="css">CSS</option>
  <option value="html">HTML</option>
  <option value="php">PHP</option>
</select>
<p>
   <input type="submit" name="dopost" value="Submit"/>
   <input type="button"
    onclick="location.href='http://www.wa4e.com/'; return false;"
    value="Escape to WA4E">
   </p>
</form>
<pre>
$_POST:
<?php
   print_r($_POST);
?>
</pre>

<p>HTML field types...</p>
<p>
Taken from 
<a href="http://www.w3schools.com/html/html5_form_input_types.asp" target="_blank">
http://www.w3schools.com/html/html5_form_input_types.asp</a></p>

<form method="post" action="html.php">

Select your favorite color: <input type="color" name="favcolor" value="#0000ff"><br/>
Birthday: <input type="date" name="bday" value="2013-09-02"><br/>
E-mail: <input type="email" name="email"><br/>
Quantity (between 1 and 5): <input type="number" name="quantity" min="1" max="5"><br/>
Add your homepage: <input type="url" name="homepage"><br>
Transportation: <input type="flying" name="saucer"><br>


   <input type="submit" name="dopost" value="Submit"/>
   <input type="button" 
    onclick="location.href='http://www.wa4e.com/'; return false;"
    value="Escape">
   </p>
</form>
<pre>
$_POST:
<?php
   print_r($_POST);
?>
</pre>

<?php
   $oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
?>
<p>Guessing game...</p>
<form method="post">
   <p><label for="guess">Input Guess</label>
   <input type="text" name="guess" id="guess" 
      size="40" value="<?= $oldguess ?>" /></p>
   <input type="submit"/>
</form>

<pre>
$_POST:
<?php
   print_r($_POST);
   
?>
</pre>
<p> < ? = ? > is a shorter form of < ? php echo ...? ></p>
<p> Beware of HTML injection</p>
<p>Guessing game...with htmlentities</p>
<?php if (! is_numeric($oldguess)){
    echo("Invalid parameter");
}?>

<form method="post">
   <p><label for="guess">Input Guess</label>
   <input type="text" name="guess" id="guess" 
      size="40" value="<?= htmlentities($oldguess) ?>" /></p>
   <input type="submit"/>
</form>

<p><label for="inpdeets">Tell us about yourself:<br/>
    <textarea rows="10" cols="40" id="inp08" name="about">
<?= "hello" ?>
    </textarea></p>
<pre>
$_POST:
<?php
   print_r($_POST);
   
?>

