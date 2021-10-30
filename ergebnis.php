<?php
                if(isset($_POST["calc"]))
                {
                    $first_nr=$_POST["first_nr"];
                    $second_nr=$_POST["second_nr"];
                    $selection=$_POST["selection"];
                    $result= 0;
                
               

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
            ?>
                  







   




