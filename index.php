<?php
//Завдання 1
$name='Alex';
echo "Hello, my name is $name!\n";
//Завдання 2
$age=23;
echo "I am $age years old!\n";
//Завдання 3
$a = 4;
$b = 16;
$c = $a + $b;
echo "$a + $b = ";
//Завдання 4
$tmp = $a;
$a = $b;
$b = $tmp;
$c = $a + $b;
echo "$a + $b = $c\n";
//Завдання 5
echo "<p><b>Question 1</b></p>\n";
echo "<p>Choose 1 answer:</p>\n";
echo '<form>
    <input type="radio" id="a" name="question_1" value="A" />
    <label for="a">a)</label><br>
    <input type="radio" id="b" name="question_1" value="B" />
    <label for="b">b)</label><br>
    <input type="radio" id="c" name="question_1" value="C" />
    <label for="c">c)</label><br>
    <input type="radio" id="d" name="question_1" value="D" />
    <label for="d">d)</label>
</form>';
echo "\n<p><b>Question 2</b></p>";
echo "\n<p>Choose some answers:</p>\n";
echo '<form>
    <input type="checkbox" id="a" name="question_2" value="A" />
    <label for="a">a)</label><br>
    <input type="checkbox" id="b" name="question_2" value="B" />
    <label for="b">b)</label><br>
    <input type="checkbox" id="c" name="question_2" value="C" />
    <label for="c">c)</label><br>
    <input type="checkbox" id="d" name="question_2" value="D" />
    <label for="d">d)</label>
</form>';
echo "\n<p><b>Question 3</b></p>";
echo "\n<p>Write an answer:</p>\n";
echo '<form>
    <textarea rows="5" cols="40"></textarea>
</form>';
//Завдання 6
$bg_color='blue';
$color='red';
$width=100;
$height=100;
$font_size=20;
$tag="\n<div style=\"background-color: $bg_color; color: $color; width: $width; height: $height; font-size: $font_size\">This<br>is<br>a<br>square</div>";
echo $tag;