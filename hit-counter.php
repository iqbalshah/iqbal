<?php
class PageCounter {
	var $_FileCounter;		// Text file for storing count
	var $_MinLen;			// Minimum length of counter ie trailing zeros
	var $_ImgSizeH;			// height of the digit image
	var $_ImgSizeW;			// width of the digit image
	var $_IDigitDir;		// Location of digit images
// Create a outset border for digit images that don't use  borders in themselves
	var $_UseBorder		=	false;
	var $_BorderColor;
	var $_UseTriger		=	false;
	var $_TrigerURL;
	function SetFileCounter($x)
	{
		$this->_FileCounter		= $x;
	}
	function SetMinLen($x)
	{
		$this->_MinLen			= $x;
	}
	function SetImgSize($xHeight, $xWidth)
	{
		$this->_ImgSizeH		= $xHeight;
		$this->_ImgSizeW		= $xWidth;
	}
	function SetDigitDir($x)
	{
		$this->_DigitDir		= $x;
	}
	function SetBorder($useBool, $bColour)
	{
		$this->_UseBorder		= $useBool;
		$this->_BorderColor		= $bColour;
	}
	function SetTrigerPage($useBool, $url)
	{
		$this->_UseTriger		= $useBool;
		$this->_TrigerURL		= $url;
	}
	function HitCount()
	{
		if (!file_exists($this->_FileCounter)) {
			$fp_Count = fopen($this->_FileCounter, "w+");
			fwrite($fp_Count,0);
			fclose($fp_Count);
		}
		$i_Count = file_get_contents ($this->_FileCounter, "r");
		if($this->_UseTriger) {
			$ActiveURL = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ."?". $_SERVER['QUERY_STRING'];
			if($ActiveURL == $this->_TrigerURL) {
				$i_Count++;
				$fp = fopen($this->_FileCounter,'w+');
				fwrite($fp,$i_Count);
			}
		} else {
			$i_Count++;
			$fp = fopen($this->_FileCounter,'w+');
			fwrite($fp,$i_Count);
		}
		if (strlen($i_Count) < $this->_MinLen) {
			$i_Countz = $this->AddZeros($i_Count);
		}else {
			$i_Countz = $i_Count;
		}
		for ($x = 0; $x < strlen($i_Countz); $x++) {
			$Cur = substr($i_Countz,$x,1);
			$Ret .=	"<img src=\"". $this->_DigitDir . $Cur .".gif\" height=$this->_ImgSizeH";
			$Ret .= " width=$this->_ImgSizeW>";
		}
		if($this->_UseBorder) { $Ret = $this->CreateBorder($Ret); }
		return $Ret;
	}
	function CreateBorder($imgTags)
	{
		$bTags = "<table><tr>\n<td title=\"Evil Wizard Hit Counters\" style=\"border: 3px outset ". $this->_BorderColor ."; padding:0;\">";
		$bTags .= $imgTags;
		$bTags .= "</td></tr></table>\n";
		return $bTags;
	}
	function AddZeros($i)
	{
		$f = "%0";
		$f .= $this->_MinLen;
		$f .= "d";
		$i = sprintf($f,$i);
		return $i;
	}
}
?>