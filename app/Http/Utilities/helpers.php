<?php

function setActive($path, $active='active')
{
	return Request::is($path) ? $active : '';
}

function setActiveMenu($path)
{
	return Request::is($path) ? '<span class="triangle"></span>' : '';
}