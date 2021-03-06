<?php

namespace icaro\modules\system\models;

/**
* 
*/
interface systemINTERFACE 
{
	public function hostname();
	
	public function kernelRelease();
	public function kernelVersion();

	public function operatingSystem();

	public function hardwarePlataform();
	
	public function cpuName();
	public function motherboardName();
	public function manufacturerName();
	
}