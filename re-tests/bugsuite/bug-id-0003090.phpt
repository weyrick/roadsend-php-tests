--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003090.php (converted from Roadsend suite)
--FILE--
we want this to not cause CFA flapping!  (too much optimization)

<?php


function Write()
{
    $i=0;
    while(0)
	{
            if(1)
		{
		
                    if(2)
			{
                            if(3) 
                                { 
                                    $i++;
                                }

			}
                    else
			{ 

                            $i=1;
			}

                    $j=$i;


		}
            else {
                $i++;
            }
	}
}

?>

--EXPECTF--
we want this to not cause CFA flapping!  (too much optimization)

