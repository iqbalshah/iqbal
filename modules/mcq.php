<?php
/*!
 * **************************************************************
 ****************  ProQuiz V2 ******************************
 ***************************************************************/
 /* documentation at: http://proquiz.softon.org/documentation/
 /* Designed & Maintained by
 /*                                    - Softon Technologies
 /* Developer
 /*                                    - Manzovi
 /* For Support Contact @
 /*                                    - proquiz@softon.org
 /* Release Date : 02 Feb 2011
 /* Licensed under GPL license:
 /* http://www.gnu.org/licenses/gpl.html
 */
?><?php 

function getMCQ($value,$key){

        //$qstn_opt = explode("|",$value['options']);		
		$qstn_opt = array($value['ranswer'],$value['wanswer1'],$value['wanswer2'],$value['wanswer3']);
		//shuffle($qstn_opt);
        $tot_opt = 4;//count($qstn_opt);

		$medium = $_SESSION['csc_data']['medium'];
		if($medium=="U" ) 
			{
			//$question_number = "???? ???? ";
			$alignement = "right"; 	
			}
		else 
			{
			//$question_number = "Q.No. ";
			$alignement = 'left'; 
			}



?>
<div id="qstn<?php echo $key; ?>" class="pq_container">
<div class="pq_qno">Q.<?php echo $key; ?></div>
<div class="pq_cat"><?php echo $_SESSION['csc_data']['Data']['subject_name']; ?></div>
<div class="pq_question_hld">
                               
       <div class="pq_qtn" style="text-align:<?=$alignement?>"><?php echo $value['question']; ?></div>
	   
	   <div class="pq_opt_hld">
        
		<div class="pq_opt_col1"> 
        <?php for($i=0;$i<$tot_opt;$i=$i+2){ ?>
            <div id="<?php echo ($key).'_'.$i; ?>" class="pq_opt">
                <input  type="radio" name="<?php echo $value['qid']; ?>" value="<?php echo $qstn_opt[$i]; ?>" />
                <?php echo $qstn_opt[$i]; ?>
            </div><!-- end .pq_opt -->
        <?php } ?>
        </div><!-- end .pq_opt_col1 -->
        
		<div class="pq_opt_col2"> 
        <?php for($i=1;$i<$tot_opt;$i=$i+2){ ?>
            <div id="<?php echo ($key).'_'.$i; ?>" class="pq_opt">
                <input  type="radio" name="<?php echo $value['qid']; ?>" value="<?php echo $qstn_opt[$i]; ?>" />
                <?php echo $qstn_opt[$i]; ?>
            </div><!-- end .pq_opt -->
        <?php } ?>
        </div><!-- end .pq_opt_col2 -->
           
       </div><!-- end .pq_opt_hld -->
       
    </div><!-- end .pq_question_hld -->
</div><!-- end .pq_container -->
<div style="clear: both;"></div>
<?php
}
?>