<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <html>

     <title> ABOUT </title>
     <style>
       table, th, td {
       border: 1px solid black;
       border-collapse: collapse;

}
       th, td {
       padding: 25px;
       text-align: left;
}
	  
     </style>  
    
	   <body style="background-color: slategray;"> 
	  
	  <center>
      <h1><em>Welcome to my first Web Page</em></h1> 
      <img src = "http://localhost/exercise6/codeigniter/pics/c.png" alt = "CLG" width = "100"> 
      </center>
	   
	   
    <table style="width:100%">
    <tr>
    <th bgcolor="LightPink" th style="font-size:30px;"><em>Name:</em></th>
    <td bgcolor="LightPink" th style="font-size:30px;"><em>Timoteo Ramos Aricayos IV</em></td>
    </tr>
    
    <tr>
    <th bgcolor="LightPink" th style="font-size:30px;"><em>Nickname:</em></th>
    <td bgcolor="LightPink" th style="font-size:30px;"><em>Keem</em></td>
    </tr>

    <tr>
    <th bgcolor="LightPink" rowspan="3" th style="font-size:30px;"><em>Hobbies and Interests:</em><img src = "http://localhost/exercise6/codeigniter/pics/p.gif" alt = "programming" width = "50"></th>
    <td bgcolor="LightPink" td style="font-size:30px;"><em>Playing Computer Games:</em></td>
    </tr>
    
    <tr>
    <td bgcolor="steelblue" td style="font-size:30px;"><em><li>League of Legends <img src = "http://localhost/exercise6/codeigniter/pics/l.png" alt = "LOL" align = "top" width = "40"></li></em></td>
    </tr>
    
    <tr>
    <td bgcolor="tomato" td style="font-size:30px;"><em><li>Defense of the Ancients <img src = "http://localhost/exercise6/codeigniter/pics/d.png" alt = "DOTA" align = "top" width = "40"></li></em></td>
    </tr>
	
<tr>
<th bgcolor ="LightPink" rowspan = "3" th style="font-size:30px;"><em>Favorite Websites:</em></font></th> 
<td bgcolor="LightPink" td style="font-size:30px;"><em>Facebook:<a href="https://www.facebook.com/" target="facebook"><img src = "http://localhost/exercise6/codeigniter/pics/f.png" alt = "fb"  align="middle" height="100" width="100"><em></a></font></td>

<tr>
<td bgcolor= "LightPink" td style="font-size:30px;"><em>Youtube:<a href="https://www.youtube.com/" target="Youtube"><img src = "http://localhost/exercise6/codeigniter/pics/y.png" alt = "Youtube" align="middle" height="100" width="100"></em></a></font></td>
</tr>

<tr>
<td bgcolor="LightPink" td style="font-size:30px;"><em>9gag:<a href="http://9gag.com/"target="9gag"><img src = "http://localhost/exercise6/codeigniter/pics/9.png" alt = "9gag" align="middle" height="100" width="100"></em></a></font></td>
</tr>		
 
</table>


</body>
</html>
    
</p>
</div>


