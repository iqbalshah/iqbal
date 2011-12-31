<?php
// Page Control Class 0.1 by ming0070913
Class PageControl{
	public $total, $division, $pages, $current, $from, $to;
	
	public function __construct($total, $division, $current=1){
		$this->total = $total;
		$this->division = $division;
		$this->pages = (int) ceil($total/$division);
		if($current<1) $this->current = 1;
		elseif($current>$this->pages) $this->current = $this->pages;
		else $this->current = (int) $current;
		$this->from = ($this->current-1)*$this->division+1;
		$this->to = ($this->current==$this->pages)?$this->total:($this->current*$this->division);
	}
	
	public function getList($settings){
		if($settings['neighbor']>0){
			for($i=$this->current-$settings['neighbor'];$i<=$this->current+$settings['neighbor'];$i++){
				if($i<1 || ($settings['headfoot'] && $i==1) ||
					 $i>$this->pages || ($settings['headfoot'] && $i==$this->pages)) continue;
				if($i==$this->current && $settings['current']!=NULL){
					$r .= strtr($settings['current'], array("#PAGE#"=>$i));
					continue;
				}
				$r .= strtr($settings['link'], array("#PAGE#"=>$i)); 
			}
		}
		
		if($settings['headfoot']){
			$r = strtr($this->current==1?$settings['current']:$settings['link'], array("#PAGE#"=>1)).
				(($this->current-$settings['neighbor']>2)?$settings['skipped']:"").
				$r.
				(($this->current+$settings['neighbor']<$this->pages-1)?$settings['skipped']:"").
				strtr($this->current==$this->pages?$settings['current']:$settings['link'], array("#PAGE#"=>$this->pages));
		}
		if($settings['previous'] && $this->current>1)
			$r = strtr($settings['previous'], array("#PAGE#"=>$this->current-1)).$r;
		if($settings['next'] && $this->current<$this->pages)
			$r .= strtr($settings['next'], array("#PAGE#"=>$this->current+1));
		return $r;
	}
	
	public function getEntryFrom(){
		return $this->from;
	}
	
	public function getEntryTo(){
		return $this->to;
	}
}
?>