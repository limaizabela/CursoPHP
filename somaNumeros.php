
<?php

$i=1; $soma=0; $n=10;
	for ($i=1;$i<=$n;$i++) {
        if($i % 3 != 0){
            $soma=$soma+$i;
        }
		
	}
	echo "Soma dos números de 1 a ", $n, " exceto os divisíveis por 3: ",$soma;
?>	

