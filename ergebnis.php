<?php
                if (isset($_GET["calc"]))
                {
                    $first_nr=$_GET["first_nr"];
                    $second_nr=$_GET["second_nr"];
                    $selection=$_GET["selection"];
                    $result= 0;

                    if ($first_nr == "" && $second_nr == "") {
                        
                        header('location:index.php?w_msg= Bitte Zahlen eintragen.');
                                return;
                    }
                    else 
                    {
                         switch ($selection){
                        
                        case '+':
                            $result = $first_nr + $second_nr;
                        break;
                        case '-':
                            $result = $first_nr - $second_nr;
                        break;
                        case '*':
                            $result = $first_nr * $second_nr;
                        break;
                        case '/':

                            if($second_nr== 0){
                                header('location:index.php?w_msg= Zweite Zahl kann nicht 0 sein.');
                                return;
                             }
                             else
                            $result = $first_nr / $second_nr;
                            
                        }
                        header('location:index.php?r_msg='. $result);

                    }
                
               

                   
                    



                    
                    
                   
            }
            
            ?>
                  







   




