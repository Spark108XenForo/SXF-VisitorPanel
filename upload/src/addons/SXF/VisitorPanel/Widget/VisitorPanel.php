<?php

namespace SXF\VisitorPanel\Widget;

class VisitorPanel extends \XF\Widget\AbstractWidget
{
	public function render()
	{
		return $this->renderer('sxf_visitor_panel');
	}
	
	public function getOptionsTemplate()
	{
		return null;
	}
}