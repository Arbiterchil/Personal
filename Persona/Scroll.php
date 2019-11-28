<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About Me</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        ERCHIL B. AMAD
      </span>
    </div>
  </div>

  <section class="section section-light">
    <h2>ABOUT ME</h2>
    <p>
      Im Amad, Erchil B. a College Student of UM Tagum College 4th Yr. Standing My Hobbies is watching Anime, And also Doujin My Course in UM Tagum is Information Technology an I.T. for short i know some Languages in Programming like JAVA, WEB DESIGNS and also Making Logo and Vector Images. Im already 20 Yr. Old Still Single and Looking for a Partner for LIFE if she is the ONE for me. My Motto is "BEING EMPTY IS GOOD but BEING FULL is not too GOOD for YUR HEALTH".
    </p>
  </section>

  <div class="pimg2">
    <div class="ptext1">
      <span class="border trans">
        My Likings
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>FAVORITE/HOBBIES</h2>
    <p>
     My Favorite in life is ANIME without ANIME my LIFE is just LIKE a RIVER just only PASSING BY: But have Anime my LIFE is like HAVING a SPICE foy my LIFE and give COLORS. Anyway What is Anime?The word anime is the Japanese term for animation, which means all forms of animated media.Outside Japan, anime refers specifically to animation from Japan or as a Japanese-disseminated animation style often characterized by colorful graphics, vibrant characters and fantastical themes.The culturally abstract approach to the word's meaning may open up the possibility of anime produced in countries other than Japan.For simplicity, many Westerners strictly view anime as a Japanese animation product.Some scholars suggest defining anime as specifically or quintessentially Japanese may be related to a new form of Orientalism.
    </p>
  </section>

  <div class="pimg3">
    <div class="ptext1">
      <span class="border trans">
        ALWAYS THINGS TO DO
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>WATCHING DOUJIN</h2>
    <p>
      I Always Doing in House when i go home from UM first is look for new UPDATE of DOUJIN/DOUJINSHI and also mark them favorite then read it later DOUJIN is an ART of DRAWING that also consists of Anime characters.What is Doujin Anyway if you that DOUJIN is?Dōjinshi (同人誌, often transliterated doujinshi) is the Japanese term for self-published works, usually magazines, manga or novels. Dōjinshi are often the work of amateurs, though some professional artists participate as a way to publish material outside the regular industry. Dōjinshi are part of a wider category of dōjin including art collections, anime and games. Groups of dōjinshi artists refer to themselves as a sākuru (サークル, circle). A number of such groups actually consist of a single artist: they are sometimes called kojin sākuru (個人サークル, personal circles).

Since the 1980s, the main method of distribution has been through regular dōjinshi conventions, the largest of which is called Comiket (short for "Comic Market") held in the summer and winter in Tokyo's Big Sight. At the convention, over 20 acres (81,000 m2) of dōjinshi are bought, sold, and traded by attendees. Dōjinshi creators who base their materials on other creators' works normally publish in small numbers to maintain a low profile so as to protect themselves against litigation. This makes a talented creator's or circle's dōjinshi a coveted commodity as only the fast or the lucky will be able to get them before they sell out.
		
		Now you Know DOUJIN i hope u like it Also. :)

    </p>
  </section>

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
       Thats All
      </span>
    </div>
  </div>


  <section class="section section-dark">
    <h2>Comment About Me: </h2>
 
    
     	
     	<form action="" method="post"   >
     		
     			<label>Name : <br><input type="text" name="name" size="36"><br><br></label>
     			<label>Message :
     				<br><textarea cols="35" rows="5" name="mes"></textarea></label><br>
     			<input type="submit" name="post" value="Post">

     	</form>


 

  </section>


</body>
</html>

<?php

$name = $_POST["name"];
$text = $_POST["mes"];
$post = $_POST["post"];

if ($post) {
  # code...

$write = fopen("com.txt", "a+");
fwrite($write,"<center><u><b> $name</b></u></center<br><br><center>$text</center><br>");
fclose($write);

$read = fopen("com.txt", "r+t");
echo "<center><b>All Comments<center></b>";

while (!feof($read)) {
  # code...
  echo fread($read, 1024);
}
 fclose($read);

}
// else{
//   $write = fopen("com.txt", "a+");
// fwrite($write,"<u><b> $name</b></u><br>$text<br>");
// fclose($write);

// $read = fopen("com.txt", "r+t");
// echo "<center><b>All Comments<center></b>";


// while (!feof($read)) {
//   # code...
//   echo fread($read, 1024);
// }
//  fclose($read);
// }
?>
