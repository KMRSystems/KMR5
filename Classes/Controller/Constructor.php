<?php

namespace KmrSystems\KMR5\Controller;


final class Constructor {
  
  
	public function contentCore(string $content, array $conf): string
  		{
      		include $_SERVER['DOCUMENT_ROOT'].'/system/adm/content.php';
      
    		return $content;
  		}
  
  
  	public function head(string $content, array $conf): string
  		{
      		$content = '                    
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i icon-name="alert-triangle" class="bi flex-shrink-0 me-2"></i>
                        <div>Конфігурація не встановлена!</div>
                    </div>
                    ';
      
    		return $content;
  		}
}