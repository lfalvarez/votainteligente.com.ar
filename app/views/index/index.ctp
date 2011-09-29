<?php


?>
<nav id="homeNavigation">
	<ul class="homeNav">
    <li class="homeLi homeListMedianaranja">
    	<a href="<?php Configure::load('facebook');echo Router::url(Configure::read('Facebook.APP_URL'));?>">
    		<h2>Media <br />Naranja</h2>
        </a>
    </li>
    <li class="homeLi homeListPerfiles">
    	
        <a href="<?php echo Router::url("/profiles/");?>">
    		<h2> Perfiles</h2>
      	</a>
    </li>
    <li class="homeLi homeListComparar">
    	<a href="<?php echo Router::url(array('controller'=>'compare','action'=>'/'));?>">
    		<h2>Comparar <br /> candidatos </h2>
    	</a>
    </li>
    </ul>

</nav>