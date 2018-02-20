## OBS Stream Intro [![GitHub release](https://img.shields.io/github/release/qubyte/rubidium.svg?style=flat-square)]()

This will help you create a dynamic intro screen for your stream. It will show a random background and play random music. It has rain or snow that can be displayed on the intro. This intro is used on videos on <a href="http://www.TheVintageGamers.com" title="The Vintage Gamers">The Vintage Gamers</a> videos on  <a href="https://gaming.youtube.com/TheVintageGamersCom" title="The Vintage Gamers YouTube">YouTube</a> and <a href="http://www.twitch.tv/TheVintageGamers" title="The Vintage Gamers Twitch">Twitch</a>.  

<p align="center">
<a href="https://www.youtube.com/watch?v=ZvLCwGX6wkU" "Intro Video Example"><img src="https://raw.githubusercontent.com/runicmourning/OBSstreamintro/master/docs/intro.png" style="width: 100%;"></a><br><a href="https://github.com/runicmourning/OBSstreamintro/archive/master.zip" title="OBS Stream Intro">Download</a></p>


## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

To get this running, you need a web server running on the computer you are streaming from. You can get a pre-packaged server below if you don't know how to install and set up [Apache](http://apache.org/ "Apache Web Server") and [PHP](http://php.net/ "PHP is a popular general-purpose scripting language that is especially suited to web development.").

* [XAMPP](https://www.apachefriends.org/index.html "XAMPP") Apache, MariaDB, PHP, Perl
* [EasyPHP](http://www.easyphp.org/ "EasyPHP") PHP, Apache, MySQL


### Installing

The set up is pretty simple. 

#### Step 1 - Install the Server
Install the server software. Refer to the documentation for the package you downloaded. If you're wanting to install Apache and PHP from scratch, there are many tutorials online.

#### Step 2 - Unzip the files to the server
The way I do it is remove all files in the www directory of the server because I won't use any of them. Then unzip the files to the server in a directory called ***title*** or something similar.

#### Step 3 - Test it in a browser
The next step is to open this in a browser to make sure it works. Navigate to localhost by entering [http://127.0.0.1/title](http://127.0.0.1/title "Localhost") in to your browser. It should work but there is no sound. We will get to that later. 

#### Step 4 - Add some background images
Next you'll want to add some background images to the *bg/* directory. You will want to make sure they are 1920x1080 in resolution to ensure they are HD and will fit the way you want them. If you want the weather effects, you will need to add ***-rain***, ***-snow*** or ***-snowrain*** to the end of the file name. This will tell the script that the background is suitable for rain, snow or both weather effects. 

#### Step 5 - Set the length of time the background will be visable. 
In the *index.php* file, you will want to locate the following line:
```
<meta http-equiv="refresh" content="15;url=Blank.html">
```
Now to set the length the background will be visible change the number 15 to the number of seconds you want the background to show. Ideally, this will be the length of the audio clips you choose to use for the music. 

#### Step 6 - Add some music 
Drop your audio files in the bgmusic/ folder. They can be in MP3 or Wav file format.

#### Step 7 - Configure OBS to show the background
In OBS create a new scene for the intro. This will be used exclusively for the intro and nothing else. Now, add a new BrowserSource and enter *http://127.0.0.1/title* in the box. Set the width to 1920 and the height to 1080. You will want toput a checkbox in *shutdown source when not visible* and Refresh browser when scene becomes active.

#### Step 8 - Configure OBS to play the background music
On the intro scene add a new Media source and enter *http://127.0.0.1/title/music.php* in the box. You want to put a checkbox in *Hide source when playback ends*. 

#### Step 9 - Testing
Switch to the scene in OBS and watch it play out. When it goes black, the intro is finished and you can switch to another scene.

## Built With

* [jQuery](http://jquery.com/ "jQuery") - The Write Less, Do More, JavaScript Library
* [PHP](http://php.net/ "PHP is a popular general-purpose scripting language that is especially suited to web development.") - The backend scripting 
* [CSS3 Animate it](https://github.com/kriegar/css3-animate-it "CSS3 Animate it By Jack McCourt") - Visual Effects
* [Weather.css](https://github.com/moqmar/weather.css "Weather.css by Moritz Marquardt") - Weather Effects

## Authors

* **Scott Hough**  - [The Vintage Gamers](https://www.thevintagegamers.com)

## Copyright and license

Code and documentation &copy; 2018 [Scott Hough](https://www.thevintagegamers.com). Code released under the [MIT License](https://github.com/runicmourning/OBSstreamintro/blob/master/LICENSE).

