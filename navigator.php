<?php
/*
#############################################################################
#  Filename: navigator.php
#  Create date: 29.06.2004 11:45:21 AM
#  Project: WSW - Netsector.net
#  Description: Result set page navigator
#
#  Copyright © 2004 Aleksandar Markovic <miki@netsector.net>
#  Copyright © 2003 - 2004 Netsector
#############################################################################
*/


class navigator {

    var $ico_start = "img/arrow_left.gif";
    var $ico_prev =  "img/left_a.gif";
    var $ico_next =  "img/right_a.gif";
    var $ico_end =   "img/arrow_r.gif";

    var $table_width = "100%";

    var $html_data;
	
    var $sql_limit;

    /* Constructor */
    function navigator($tot_num_rows, $rec_per_page) {
        if (!($tot_num_rows<=$rec_per_page)) {
    	    list($width, $height, $type, $this->attr_start) = @getimagesize($this->ico_start);
    	    list($width, $height, $type, $this->attr_prev)  = @getimagesize($this->ico_prev);
    	    list($width, $height, $type, $this->attr_next)  = @getimagesize($this->ico_next);
    	    list($width, $height, $type, $this->attr_end)   = @getimagesize($this->ico_end);

            $this->tot_num_rows = $tot_num_rows;
            $this->rec_per_page = $rec_per_page;
            $this->sql_limit = " LIMIT ". (int)$_GET['offset'] . "," . (int)$this->rec_per_page;
            $this->html_data = $this->attach_navigator();
            $this->parse_navigator();
        }
    }

    /* Return navigator HTML */
    function attach_navigator () {
        return '
        <table cellspacing="0" cellpadding="0" width="'.$this->table_width.'" border="0">
            <tr>
              <td width="3%">&nbsp;</td>
              <td align="left" width="30%"> <a href="###nav_start###"><img src="'.$this->ico_start.'" border="0" '.$this->attr_start.'></a>
                <a href="###nav_prev###"><img src="'.$this->ico_prev.'" border="0" '.$this->attr_prev.'></a>
              </td>
              <td align="middle" width="34%">###nav_pos###</td>
              <td align="right" width="30%"> <a href="###nav_next###"><img src="'.$this->ico_next.'" border="0" '.$this->attr_next.'></a>
                <a href="###nav_end###"><img src="'.$this->ico_end.'" border="0" '.$this->attr_end.'></a>
              </td>
              <td width="3%">&nbsp;</td>
            </tr>
        </table>
        ';
    }

    /* Print direct jump link for page */
    function page_jump ($current_page, $tot_pages) {
        $buff = '';
        for ($i=1;$i<=$tot_pages;$i++) {
            $jump_url = $this->URI."&offset=".(int)(($i-1)*$this->rec_per_page);
            if ($i==$current_page) {
                $buff.= '<b>['.$i.']</b>';
            } else {
                $buff.= '<a href="'.$jump_url.'"> '.$i.' </a>';
            }
        }
        return $buff;
    }

    /* Process template for navigator */
    function parse_navigator() {

        $this->get_uri();
        $tot_pages=ceil($this->tot_num_rows/$this->rec_per_page);//roun first up values

        if ($_GET['offset'] == "0" or $_GET['offset'] == "") {
            $current_page = 1;
        } else {
            $current_page = (int)(($_GET['offset'] / $this->rec_per_page) + 1);
        }
        $this->html_data = str_replace ("###nav_pos###",   $this->page_jump($current_page,$tot_pages),    $this->html_data );
        $this->html_data = str_replace ("###nav_start###", $this->URI."&offset=0",    $this->html_data );
        $this->html_data = str_replace ("###nav_end###",   $this->URI."&offset=". (int)(($tot_pages-1) * $this->rec_per_page),    $this->html_data );

        $nav_next_offset = (int)$_GET['offset'] + $this->rec_per_page;
        if ($nav_next_offset >= $this->tot_num_rows) $nav_next_offset = 0;
        $this->html_data = str_replace ("###nav_next###", $this->URI."&offset=".(int)$nav_next_offset,    $this->html_data );

        $nav_prev_offset = (int)$_GET['offset'] - $this->rec_per_page;
        if ($nav_prev_offset < 0) $nav_prev_offset = 0;
        $this->html_data = str_replace ("###nav_prev###", $this->URI."&offset=".(int)$nav_prev_offset,    $this->html_data );
    }

    /* Make URI */
    function get_uri() {
	$_MYGET  = $_GET;
	if ( !empty ($_MYGET) ) {
	        if ( !empty ($_MYGET['offset']) or $_MYGET['offset']=="0")  unset ($_MYGET['offset']);
	        foreach ($_MYGET as $arg=>$v) {
	            $ARGS .= "&$arg=$v";
	        }
        } else {
            $ARGS = null;
        }

        $script = str_replace ($_SERVER["SERVER_NAME"], $_SERVER["HTTP_HOST"], $_SERVER["SCRIPT_URI"]);

        $this->URI = $script . '?'. $ARGS;
    }

}