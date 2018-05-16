<?php
 require_once 'LIGA3/LIGA.php';
 //BD('localhost', 'root', '', 'base');
 $liga = LIGA('base.usuarios');
 $cols = array('0', '1', '3', 'Acciones'=>'<button class="borrar" data="@[0]"><img src="https://cdn4.iconfinder.com/data/icons/
       gnome-desktop-icons-png/PNG/32/Gnome-Process-Stop-32.png"></button>');
 
 echo '<label>Filtro: <input id="filtro" name="filtro" /></label>';
 
 $props = array('td[0]'=>array('class'=>'busca'));
 
 HTML::tabla($liga, 'Usuarios registrados', $cols, $props);
?>
